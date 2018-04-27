<?php

use Illuminate\Console\Command;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Process\Process;
use Symfony\Component\Process\Exception\ProcessFailedException;
use Illuminate\Http\Request as Request;
use Illuminate\Http\Response as Response;
use GuzzleHttp\Client as Client;

class airPlane extends Command
{


    private $airplane_flag;
    /**
     * The console command name.
     *
     * @var string
     */
    protected $name = 'forest:airplane';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description.';

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
        $process = new Process('gpio -g read 21');
        $process->mustRun();
        $this->airplane_flag = $process->getOutput();
        if ($this->airplane_flag == 0) return;
        if ($this->airplane_flag == 1) {
            $process = new Process('curl http://192.168.0.76/index.php/airplane');
            $water = new Process('/usr/sbin/i2cset -y 1 0x21 0x01 0xfe');
            $process->run();
            $water->run();
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
