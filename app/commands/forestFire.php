<?php

use Illuminate\Console\Command;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Process\Process;
use Symfony\Component\Process\Exception\ProcessFailedException;
use Illuminate\Http\Request as Request;
use Illuminate\Http\Response as Response;
use GuzzleHttp\Client as Client;

class forestFire extends Command
{

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
    private $fire_flag;
    private $running = false;

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
        if($this->running == true) return;

        $process = new Process('gpio -g read 16');
        $process->mustRun();
        $this->fire_flag = $process->getOutput();
        if($this->fire_flag ==1) $this->running =false;
        if ($this->fire_flag == 0) {
            $this->running == true;
            $process = new Process('curl http://192.168.0.76/index.php/fireprocess');
            $process->mustRun();
            if($process->getOutput()){

            }
        }

    }

    public function airPlane()
    {
        $process = new Process('gpio -g read 21');
        $process->mustRun();
        return $process->getOutput();
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
