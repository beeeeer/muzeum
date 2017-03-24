<?php

use Symfony\Component\Process\Process;
use Symfony\Component\Process\Exception\ProcessFailedException;

class RaspController extends BaseController {

	private $process;

	public function __construct() {
		$this->process = new Process('gpio mode 1 out');
	}

	public function showProcess() 
	{
		//shell_exec('gpio mode '.$id.' out');
		$this->process->run();
		$output = $this->process->getOutput();
		return View::make('switchit')->with('output',$output);
	}

}
