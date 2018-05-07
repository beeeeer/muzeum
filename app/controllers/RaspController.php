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
    private $path = '/var/www/html/flag/';
    private $setMixer = 'amixer cset numid=3 1';
    private $branch;
    private $allExpanders = array('0x21 0x00 ', '0x21 0x01 ', '0x20 0x00 ', '0x20 0x01 ', '0x22 0x00 ', '0x22 0x01 ', '0x24 0x00 ', '0x24 0x01 ');
    private $iterator;
//git, composer, php, apache, i2c
//sudo chmod 4755 /usr/sbin/i2cdetect /usr/sbin/i2cset /usr/sbin/i2cget /usr/sbin/i2cdump /usr/bin/mpg123
//vcgencmd display_power 0
//vcgencmd display_power 1

    public function __construct()
    {

    }

    public function getAjaxRequest()
    {
        $req = new Request();
        $input = $req->ajax();
        return $this->prepareData($req->__toString($input));

    }

    public function prepareData($data)
    {
        $process = substr($data, 0, strpos($data, "&"));
        $tempAudioFile = strstr($data, '&');
        $tempAudioFile = str_replace('=', '', strstr($tempAudioFile, '='));
        $this->audioFile = substr($tempAudioFile, 0, strpos($data, "&"));
        $this->audioFile = substr($this->audioFile, 0, strpos($this->audioFile, "&"));
        $this->switchStatus[$this->audioFile] = strstr($data, 'status');
        return $this->getCommand($process);
    }

    public function getCommand($command)
    {
        $comProcess = json_encode($command);
        $comProcess = strstr($comProcess, '=');
        $delete = array('=', '+', '"');
        $comProcess = str_replace($delete, ' ', $comProcess);
        $toHex = substr($comProcess, -10);
        $comProcess = substr($comProcess, 0, -10);
        $hexaddress = '0x' . (dechex(bindec($toHex)));
        $this->command = '/usr/sbin/i2cset -y 1 ' . $comProcess . ' ' . $hexaddress;
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
        if ($this->switchStatus[$command] == 'status1') {
            $this->killProcess('pkill mpg123');
            return 'process killed because has status1';
        } else {
            $this->audioprocess = new Process('mpg123 media/' . $command);
            if ($command == 'pozarlasu.mp3') {
                $process = new Process('/usr/sbin/i2cset -y 1 0x20 0x01 0x9f');
                $process->mustRun();
                $process = new Process('/usr/sbin/i2cset -y 1 0x20 0x01 0xff');
                $process->mustRun();
            } else {
                $this->audioprocess = new Process('mpg123 media/' . $command);
                try {
                    $this->audioprocess->mustRun();
                    return $this->playerOutput = $this->audioprocess->getOutput();
                } catch (ProcessFailedException $e) {
                    return $this->output = $e->getMessage();
                }
            }
        }
    }

    public function killProcess($killprocess)
    {
        $process = new Process($killprocess);
        $process->run();
        return $process->getOutput();
    }

    public function getRelayData()
    {
        return View::make('pages.points')->with(array('output' => $this->output, 'command' => $this->command));
    }

    public function switchallOn()
    {
        $this->allExp('/usr/sbin/i2cset -y 1 0x20 0x00 0x7f')->run();
        $this->allExp('/usr/sbin/i2cset -y 1 0x20 0x01 0x7f')->run();
        $this->allExp('curl 192.168.0.77/index.php/swon')->run();
    }

    public function allExp($method)
    {
        return new Process($method);
    }

    public function switchallOff()
    {
        $this->allExp('pkill mpg123')->run();
        $this->allExp('/usr/sbin/i2cset -y 1 0x20 0x01 0xff')->run();
        $this->allExp('/usr/sbin/i2cset -y 1 0x20 0x00 0xff')->run();
        $this->allExp('curl 192.168.0.77/index.php/swoff')->run();
    }

    public function _getDataFromExternal()
    {
        $request = new Request();
        $response = new Response();
        $this->prepExternalData($request->getContent());
        return $response->setContent($request->getContent());
    }

    public function prepExternalData($data)
    {
        $array = explode("data", $data);
        $new_arr = [];
        foreach ($array as $string) {
            if ($string !== '') {
                $string = strstr($string, '=');
                $delete = array('=', '+', '"', '&');
                $string = str_replace($delete, ' ', $string);
                array_push($new_arr, $string);

            }
        }
        $toHex = substr($new_arr[0], -10);
        $new_arr[0] = substr($new_arr[0], 0, -10);
        $hexaddress = '0x' . (dechex(bindec($toHex)));
        $command = '/usr/sbin/i2cset -y 1 ' . $new_arr[0] . ' ' . $hexaddress;
        $process = new Process($command);
        $process->mustRun();
        return $process->getOutput();
    }

    //EXTERNAL:

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

    public function pulpitOn()
    {
        $process = new Process('/opt/vc/bin/vcgencmd display_power 1');
        $result = $process->mustRun()->getOutput();
        return json_encode($result);
    }

    public function pulpitOff()
    {
        $process = new Process('/opt/vc/bin/vcgencmd display_power 0');
        $result = $process->mustRun()->getOutput();
        return json_encode($result);
    }

    public function fireProcess()
    {
        if ($this->flagExist('pozar')) return;
        $audio = new Process('mpg123 media/pozarlasu.mp3');
        $audio->start();

        $this->touch('pozar');
        while ($audio->isRunning()) {
            sleep(21);
            $python = new Process('curl http://192.168.0.77/index.php/checkwater');
            $python->mustRun();
            if ($python->getOutput() == 1) {
                if ($this->flagExist('samolot')) return;
                $process = new Process('mpg123 media/samolot.mp3');
                $process->start();
                $this->touch('samolot');
                while ($process->isRunning()) {
                    sleep(20);
                    $this->kill($audio->getPid());
                    sleep(10);
                    exit;
                }
            }
        }
    }

    public function flagExist($fileFlag)
    {
        return file_exists($this->path . $fileFlag);
    }

    public function touch($fileFlag)
    {
        $file = new Process('touch ' . $this->path . $fileFlag);
        $file->mustRun()->getOutput();
    }

    public function kill($pid)
    {
        $kill = new Process('kill -9 ' . $pid);
        $kill->mustRun();
        return $kill->getOutput();
    }

    public function resetFire()
    {
        $this->rm('pozar');
        $this->rm('samolot');
    }

    public function rm($fileFlag)
    {
        $rm = new Process('rm ' . $this->path . $fileFlag);
        $rm->run();
    }

}
 
