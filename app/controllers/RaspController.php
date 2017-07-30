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
	
	
//sudo chmod 4755 /usr/sbin/i2cdetect /usr/sbin/i2cset /usr/sbin/i2cget /usr/sbin/i2cdump
//sudo chmod 4755 mpg123
	

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
	    if ($this->switchStatus[$command] == 'status1'){
            $this->killProcess('pidof mpg123 | xargs kill -9');
        }


		$this->audioprocess = new Process('mpg123 media/'.$command);
//        return $this->switchStatus[$command]; //development
		try {
			$this->audioprocess->mustRun();
//			return $this->audioprocess->isRunning(); // development
			 return $this->playerOutput = $this->audioprocess->getOutput();
		} catch(ProcessFailedException $e) {
			return $this->output = $e->getMessage();
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
}
 