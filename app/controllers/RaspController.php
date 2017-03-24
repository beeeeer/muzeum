<?php

use Symfony\Component\Process\Process;
use Symfony\Component\Process\Exception\ProcessFailedException;

class RaspController extends BaseController {

	private $process;

	public function getData() {

		$mode = Input::get('mode');
		$gpio = Input::get('gpio');


		$process = 'gpio mode'.$gpio.' '.$mode;
		$this->process = new Process($process);
		return $this->showProcess();
	}

	public function showProcess() 
	{
		//shell_exec('gpio mode '.$id.' out');
		$this->process->run();
		$output = $this->process->getOutput();
		return View::make('switchit')->with('output',$output);
	}

}
