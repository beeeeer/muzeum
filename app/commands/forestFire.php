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
    private $path ='/var/www/html/flag/flag';
    private $fire_flag;
    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
        if(!$this->shouldRun()) exit;
        $file = new Process('touch '.$this->path);
        $file->mustRun()->getOutput();
    }

    public function rm()
    {
        $rm = new Process('rm '.$this->path);
        $rm->run();
    }

    public function shouldRun()
    {
        if(file_exists($this->path) == 1){
            return false;
        } else {
            return true;
        }
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */

    public function fire()
    {
	    $iterator = 0;
        while (true){
            $process = new Process('gpio -g read 16');
            $process->mustRun();
            $this->fire_flag = $process->getOutput();
            if ($this->fire_flag == 0) {
                $curl = new Process('curl http://192.168.0.76/index.php/fireprocess');
                $curl->start();
                while ($curl->isRunning()){

                }
                if($curl->getOutput() == 'done'){
		    $this->rm();
		}
            }
            $iterator++;
            sleep(1);
            if($iterator > 57){
		if($this->fire_flag == 1){
                    $this->rm();
                }
                return;
            }
        }
    }

    public function airPlane()
    {
        $process = new Process('gpio -g read 21');
        $process->mustRun();
        if($process->getOutput() == 1){
            $process = new Process('curl http://192.168.0.76/index.php/airplane');
            $process->mustRun();
            return $process->getOutput();
        }
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
