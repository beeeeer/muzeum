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
            $audio = new Process('mpg123 media/pozarlasu.mp3');
            $audio->start();
            while ($audio->isRunning()) {
                sleep(9);
                $process = new Process('/usr/sbin/i2cset -y 1 0x20 0x01 0x9f');
                $process->mustRun();
                sleep(9);
                $process = new Process('/usr/sbin/i2cset -y 1 0x20 0x01 0x8f');
                $process->mustRun();
                sleep(9);
                $process = new Process('/usr/sbin/i2cset -y 1 0x20 0x01 0x87');
                $process->mustRun();
                sleep(7);
                $this->flag = 0;
                exit;
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
