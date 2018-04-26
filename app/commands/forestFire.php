<?php

use Illuminate\Console\Command;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Process\Process;
use Symfony\Component\Process\Exception\ProcessFailedException;
use Illuminate\Http\Request as Request;
use Illuminate\Http\Response as Response;
use GuzzleHttp\Client as Client;

class forestFire extends Command {

    private $flag;

	/**
	 * The console command name.
	 *
	 * @var string
	 */
	protected $name = 'forest:fire';

	/**
	 * The console command description.
	 *
	 * @var string
	 */
	protected $description = 'Starts forest fire';

	/**
	 * Create a new command instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		parent::__construct();
	}

	/**
	 * Execute the console command.
	 *
	 * @return mixed
	 */
	public function fire()
	{
	    if($this->flag == 1) {
	        return;
        }

	    $process = new Process('gpio -g read 12');
	    $process->mustRun();
        $this->flag = $process->getOutput();
	    if (($this->flag == 1))
        {
            $process = new Process('curl http://192.168.0.76/index.php/fireprocess');
            $process->mustRun();
            if ($process->getOutput() == 'done'){
                return;
            }
        }

	}

	/**
	 * Get the console command arguments.
	 *
	 * @return array
	 */
	protected function getArguments()
	{
		return array();
	}

	/**
	 * Get the console command options.
	 *
	 * @return array
	 */
	protected function getOptions()
	{
		return array(
			array('example', null, InputOption::VALUE_OPTIONAL, 'An example option.', null),
		);
	}








}
