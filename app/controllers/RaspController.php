<?php

use Symfony\Component\Process\Process;
use Symfony\Component\Process\ProcessBuilder;
use Symfony\Component\Process\Exception\ProcessFailedException;
use Illuminate\Http\Request as Request;
use Illuminate\Http\Response as Response;


class RaspController extends BaseController 
{
	private $process;
	private $output;
	private $command;
	private $i2cdetect = 'i2cdetect';

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
		$this->command = $comProcess;
		return $this->executeProcess();
	}

	public function executeProcess()
	{
		$builder = new ProcessBuilder();
		$process = ProcessBuilder::create(array('ls','-l','-d'))->getProcess();
		$this->process = $process;
		try {
    		$process->mustRun();
			return $this->output = $this->process->getOutput();
		} catch (ProcessFailedException $e) {
    		return $this->output = $e->getMessage();
    	}
	}

	//@Final get output and send to raspberry
	public function getRelayData()
	{
		
		return View::make('pages.points')->with(array('output' => $this->output,'command'=>$this->command));
		
	} 
}
//TODO:
//1: Check lib path
//2: Make procees with process builder 
//3: 
// Form getData -> processbuilder()
//         V
//	check i2c path
//		   V
//  