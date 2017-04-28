<?php

use Symfony\Component\Process\Process;
use Symfony\Component\Process\Exception\ProcessFailedException;
use Illuminate\Http\Request as Request;
use Illuminate\Http\Response as Response;


class RaspController extends BaseController 
{
	private $process;
	private $output;
	private $command;

	public function getAjaxRequest()
    {
        $request = new Request();

        return $this->executeProcess($request->get('data')); //Should be executeProcess
    }


	private function executeProcess($processCommand)
	{
		$this->command = 'sudo i2cdetect -y 1 '.$processCommand;
		$this->process = new Process($this->command);
		$this->process->mustRun();
		return $this->output = $this->process->getOutput();
	}
	
	public function getRelayData() 
    {
		$this->executeProcess($this->process);
		return View::make('pages.points')->with(array('output' => $this->output,'command'=>$this->command));
	}

	public function executeProcessMock($request)
	{

        $this->output = $request;
//        echo '$this->output';
        return View::make('pages.points')->with(array('output' => $this->output));
	}

}
