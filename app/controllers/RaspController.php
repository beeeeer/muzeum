<?php

use Symfony\Component\Process\Process;
use Symfony\Component\Process\Exception\ProcessFailedException;

class RaspController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/
	private $process;

	public function __construct() {
		$this->process = new Process('gpio mode 1 out');
	}

	public function showProcess() 
	{
		//shell_exec('gpio mode '.$id.' out');
		$this->process->run();
		$output = $this->process->getOutput();
		return View::make('test')->with('output',$output);
	}

}
