<?php

use Symfony\Component\Process\Process;
use Symfony\Component\Process\Exception\ProcessFailedException;

class RaspController extends BaseController {

	private $process;
	private $command;

	public function getData() {

		$mode = Input::get('mode');
		$gpio = Input::get('gpio');
		$this->command = 'gpio mode '.$gpio.' '.$mode;
		$this->process = new Process($this->command);
		return $this->showProcess();
	}

	public function showProcess() 
	{
		$this->process->run();
		$output = $this->process->getOutput();
		return View::make('start');
	}

	public function relayData() 
	{
		$process = new Process('gpio readall');
		$process->run();
		$output = $this->process->getOutput();
		return View::make('switchit')->with(array('output' => , $output));
	}

}
