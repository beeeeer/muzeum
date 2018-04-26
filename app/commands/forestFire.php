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

    private $fire_flag = 1;

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
	    if($this->fire_flag == 0) {
	        return;
        }
	    $process = new Process('gpio -g read 16');
	    $process->mustRun();
        $this->flag = $process->getOutput();
	    if (($this->fire_flag == 0))
        {
            $process = new Process('curl http://192.168.0.76/index.php/fireprocess');
            $process->mustRun();
            if ($process->getOutput() == 'done'){
                return;
            }
        }
	}

    public function airPlane()
    {
        $process = new Process('gpio -g read 21');
        $process->mustRun();

	}

    public function water()
    {
        $process = new Process('gpio -g read 20');
        $process->mustRun();
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
