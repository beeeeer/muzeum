<?php

use Symfony\Component\Process\Process;
use Symfony\Component\Process\Exception\ProcessFailedException;
use Illuminate\Http\Request as Request;
use Illuminate\Http\Response as Response;
use GuzzleHttp\Client as Client;



class RaspController extends BaseController 
{
	private $process;
	private $audioprocess;
	private $audioFile;
	private $output;
	private $playerOutput;
	private $command;
	private $switchStatus = array();
	private $setMixer= 'amixer cset numid=3 1';
	private $branch;
	private $allExpanders = array('0x21 0x00 ','0x21 0x01 ','0x20 0x00 ','0x20 0x01 ','0x22 0x00 ','0x22 0x01 ','0x24 0x00 ','0x24 0x01 ');
	private $iterator;
//git, composer, php, apache, i2c
//sudo chmod 4755 /usr/sbin/i2cdetect /usr/sbin/i2cset /usr/sbin/i2cget /usr/sbin/i2cdump /usr/bin/mpg123
//vcgencmd display_power 0
//vcgencmd display_power 1


    public function getAjaxRequest()
	{
		$req = new Request();
		$input = $req->ajax();
		return $this->prepareData($req->__toString($input));

	}

	public function prepareData($data)
	{
		$process = substr($data, 0, strpos($data, "&"));	
		$tempAudioFile = strstr($data,'&');
		$tempAudioFile = str_replace('=','',strstr($tempAudioFile, '='));
		$this->audioFile = substr($tempAudioFile, 0, strpos($data, "&"));
		$this->audioFile = substr($this->audioFile, 0, strpos($this->audioFile, "&"));
		$this->switchStatus[$this->audioFile] = strstr($data, 'status');
		return $this->getCommand($process);
	}

	public function getCommand($command)
	{
		$comProcess = json_encode($command);
		$comProcess = strstr($comProcess,'=');
		$delete = array('=','+','"');
		$comProcess = str_replace($delete,' ',$comProcess);
		$toHex = substr($comProcess,-10);
		$comProcess = substr($comProcess,0,-10);
		$hexaddress = '0x'.(dechex(bindec($toHex)));
		$this->command = '/usr/sbin/i2cset -y 1 '.$comProcess.' '.$hexaddress;
		$this->executeProcess();
		return $this->playAudio($this->audioFile);
	}

	public function executeProcess()
	{
		$this->process = new Process($this->command);
		try {
var_dump($this->command);
    		$this->process->mustRun();
			return $this->output = $this->process->getOutput();
		} catch (ProcessFailedException $e) {
		$response = new Response();
    		return $this->output = $e->getMessage();
    		}
	}

	public function playAudio($command) 
	{
        $this->killProcess('pkill mpg123');
	    if ($this->switchStatus[$command] == 'status1'){
            $this->killProcess('pkill mpg123');
            return 'process killed because has status1';
        } else {
		$this->audioprocess = new Process('mpg123 media/'.$command);
		if($command == 'pozarlasu.mp3'){
		$this->audioprocess->start();
			while ($this->audioprocess->isRunning()) {
				sleep(9);
				$process = new Process('/usr/sbin/i2cset -y 1 0x20 0x01 0x9f');
				$process->mustRun();
				sleep(9);
				$process = new Process('/usr/sbin/i2cset -y 1 0x20 0x01 0x8f');
                                $process->mustRun();
				sleep(9);
				$process = new Process('/usr/sbin/i2cset -y 1 0x20 0x01 0x87');
                                $process->mustRun();
				sleep(7);
				return json_encode('done');
				exit;
			}
		}else {
            $this->audioprocess = new Process('mpg123 media/'.$command);
	      try {
			if($this->audioprocess == 'mpg123 media/pozarlasu.mp3'){
			}
			    $this->audioprocess->mustRun();
//					var_dump( $this->audioprocess);
			    return $this->playerOutput = $this->audioprocess->getOutput();
		    } catch(ProcessFailedException $e) {
			    return $this->output = $e->getMessage();
		    }
	        }
		}
	}

	public function getRelayData()
	{
		return View::make('pages.points')->with(array('output' => $this->output,'command'=>$this->command));
	} 

	public function killProcess($killprocess)
	{
		$process = new Process($killprocess);
		$process->run();
		return $process->getOutput();
	}

//All pins actions
    public function switchallOn()
    {
	$this->allExp('/usr/sbin/i2cset -y 1 0x20 0x00 0x7f')->run();
	$this->allExp('/usr/sbin/i2cset -y 1 0x20 0x01 0x7f')->run();
	$this->allExp('curl 192.168.0.77/index.php/swon')->run();
    }

    public function switchallOff()
    {
	$this->allExp('/usr/sbin/i2cset -y 1 0x20 0x01 0xff')->run();
	$this->allExp('/usr/sbin/i2cset -y 1 0x20 0x00 0xff')->run();
	$this->allExp('curl 192.168.0.77/index.php/swoff')->run();
    }

    public function allExp($method)
    {
        return new Process($method);
    }

//    Updater - its only pull from origin.

	public function puller()
    {
        $this->process = new Process('git stash && git fetch origin && git branch -r');
        $this->process->mustRun();
        $pro = $this->process->getOutput();
        $pro = str_replace(' ', '', $pro);
        return View::make('pages.puller')->with(array('branches'=>explode('origin/',$pro)));
    }

    /**
     * @return mixed
     */
    public function fetchData()
    {
        $request = new Request();
        $input = $request->ajax();
        $response =  $request->__toString($input);
        $response = json_encode($response);
        $response = substr($response, 0, strpos($response, "%"));
        $response = substr($response, strpos($response, "="));
        $response = str_replace('=', '',$response);
        return $this->_runPull($response);
    }

    public function _runPull($response)
    {
        $gitpull = new Process('git checkout -b '.$response.' && git pull origin '.$response);
        $gitpull->mustRun();
        $output = $gitpull->getOutput();
        return $output;
    }
    //External Source 

    public function _getDataFromExternal()
    {
        $request = new Request();
        $response = new Response();
        $this->prepExternalData($request->getContent());
        return $response->setContent($request->getContent());
    }

    public function _sendDataToExternal()
    {
        $data = Input::all();
        $client = new Client();
        $res = $client->request('GET', 'http://192.168.0.77/index.php/recive', [
            'form_params' => $data
        ]);
        $result = $res->getBody();
        return $result->getContents();

    }
    //EXTERNAL:
    public function prepExternalData($data)
    {
        $array = explode("data", $data);
        $new_arr= [];
        foreach($array as $string){
            if($string !== ''){
                $string = strstr($string,'=');
                $delete = array('=','+','"','&');
                $string = str_replace($delete,' ',$string);
                array_push($new_arr,$string);

            }
        }
        $toHex = substr($new_arr[0],-10);
        $new_arr[0] = substr($new_arr[0],0,-10);
        $hexaddress = '0x'.(dechex(bindec($toHex)));
        $command ='/usr/sbin/i2cset -y 1 '. $new_arr[0].' '.$hexaddress;
        $process = new Process($command);
        $process->mustRun();
        return $process->getOutput();
    }
    public function fireProcess()
    {
        $audio = new Process('mpg123 media/pozarlasu.mp3');
        $audio->start();
        while ($audio->isRunning()) {
            sleep(7);
            $process = new Process('/usr/sbin/i2cset -y 1 0x20 0x01 0x9f');
            $process->mustRun();
            sleep(7);
            $process = new Process('/usr/sbin/i2cset -y 1 0x20 0x01 0x8f');
            $process->mustRun();
            sleep(7);
            $process = new Process('/usr/sbin/i2cset -y 1 0x20 0x01 0x87');
            $process->mustRun();
            sleep(7);
            exit;
        }
        return json_encode('done');
    }

    public function airplaneProcess()
    {
        $process = new Process('mpg123 media/samolot.mp3');
        $process->start();
        while ($process->isRunning()) {
            sleep(2);
            $water = new Process('curl http://192.168.0.77/index.php/waterProcess');
            sleep(20);
            $offRelay = new Process('/usr/sbin/i2cset -y 1 0x20 0x01 0xef');
            $offRelay->run();
        }

        return $process->getOutput();
    }

}
 
