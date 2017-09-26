<?php

use Symfony\Component\Process\Process;
use Symfony\Component\Process\Exception\ProcessFailedException;
use Illuminate\Http\Request as Request;
use Illuminate\Http\Response as Response;


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
	private $allExpanders = array('0x20 0x00 ','0x20 0x01 ','0x22 0x00 ','0x22 0x01 ','0x24 0x00 ','0x24 0x01 ');
	private $iterator;
//git, composer, php, apache, i2c
//sudo chmod 4755 /usr/sbin/i2cdetect /usr/sbin/i2cset /usr/sbin/i2cget /usr/sbin/i2cdump /usr/bin/mpg123

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
    		$this->process->mustRun();
			return $this->output = $this->process->getOutput();
		} catch (ProcessFailedException $e) {
    		return $this->output = $e->getMessage();
    	}
	}

	public function playAudio($command) 
	{
        $this->killProcess('pidof mpg123 | xargs kill -9');
	    if ($this->switchStatus[$command] == 'status1'){
            $this->killProcess('pidof mpg123 | xargs kill -9');
            return 'process killed because has status1';
        } else {
            $this->audioprocess = new Process('mpg123 media/'.$command);
	        try {
			    $this->audioprocess->mustRun();
			    return $this->playerOutput = $this->audioprocess->getOutput();
		    } catch(ProcessFailedException $e) {
			    return $this->output = $e->getMessage();
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
		$process->mustRun();
		return $process->getOutput();
	}

//All pins actions
    public function switchallOn()
    {
        foreach($this->allExpanders as $singleExpander)
        {
            $this->allExp('/usr/sbin/i2cset -y 1 '.$singleExpander.'0x00')->mustRun()->getOutput();
        }
    }

    public function switchallOff()
    {
        foreach($this->allExpanders as $singleExpander)
        {
            $this->allExp('/usr/sbin/i2cset -y 1 '.$singleExpander.'0xFF')->mustRun()->getOutput();
        }

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


    //getter
    public function externalSource(){
        $response = new Response();
        $request = new Request();
        try{
            $data =   Input::all();
            $comProcess = $request->__toString($data);
            return $this->prepareData($comProcess);
//            $comProcess = str_replace(['data=','GET'],' ',$comProcess);
//            $firstComm = substr($comProcess,0,-9);
//            $toHex = substr($comProcess,-8);
//            $hexaddress = '0x'.(dechex(bindec($toHex)));
//            $string = '/usr/sbin/i2cset -y 1 '.$firstComm.' '.$hexaddress;
//            $string = trim(preg_replace('/\s\s+/', ' ', $string));
//            return $this->executeFromExternal($string);
        } catch (Exception $error){
            return $response->setContent($error->getMessage());
        }

    }

//    public function executeFromExternal($command)
//    {
//        $response = new Response();
//        $process = new Process($command);
//        $process->mustRun();
//        return $response->setContent(json_encode($process->getOutput()));
//    }


    //sender
    public function postDataByCurl()
    {
        $request = new Request();
        $response = new Response();
        $data =   Input::all();

        $comProcess = $request->__toString($data);
//        $this->prepareData($comProcess);
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL,"http://192.168.0.10/index.php/set");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS,
            $comProcess);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $server_output = curl_exec ($ch);
        curl_close ($ch);
        return $response->setContent($this->command. ' = ' .$this->audioFile. ' = '.$this->audioprocess);
    }

}
 