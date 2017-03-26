<?php

use Symfony\Component\Process\Process;
use Symfony\Component\Process\Exception\ProcessFailedException;

class RaspController extends BaseController 
{
	private $process;
	private $output;

	private function executeProcess($processCommand)
	{
		$this->process = new Process($processCommand);
		$this->process->mustRun();
		return $this->output = $this->process->getOutput();
	}
	
	public function getRelayData() 
	{
		
		return View::make('pages.about')->with(array('output' =>$this->output)); 
	}

}
