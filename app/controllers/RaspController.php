<?php

use Symfony\Component\Process\Process;
use Symfony\Component\Process\Exception\ProcessFailedException;
use Illuminate\Http\Request as Request;
use Illuminate\Http\Response as Response;


class RaspController extends BaseController 
{
	private $process;
	private $audioprocess;
	private $output;
	private $playerOutput;
	private $command;
	
//sudo chmod 4755 /usr/sbin/i2cdetect /usr/sbin/i2cset /usr/sbin/i2cget /usr/sbin/i2cdump
	public function playAudio($command) 
	{	
		$this->audioprocess = new Process('mpg123 '.$command);

		try {
			$this->audioprocess->mustRun();
			return $this->playerOutput = $this->audioprocess->getOutput();
		} catch(ProcessFailedException $e) {
			return $this->output = $e->getMessage();
		}
	}

	public function getAjaxRequest()
	{
		$req = new Request();
		$input = $req->ajax();

		return $this->getCommand($req->__toString($input));	
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
		return $this->playAudio($comProcess.$hexaddress);
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

	public function getRelayData()
	{
		return View::make('pages.points')->with(array('output' => $this->output,'command'=>$this->command));
		
	} 
}
 