<?php

use Illuminate\Console\Command;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Input\InputArgument;

class 创建源 extends Command {

	/**
	 * The console command name.
	 *
	 * @var string
	 */
	protected $name = 'resource:make';

	/**
	 * The console command description.
	 *
	 * @var string
	 */
	protected $description = 'Create a new resourceful controller under path/to/models/resources';

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
		$this->call('controller:make', array(
			'name' => $this->argument('name'),
			'--path' => 'app/models/resources'
		));
	}

	/**
	 * Get the console command arguments.
	 *
	 * @return array
	 */
	protected function getArguments()
	{
		return array(
			array('name', InputArgument::REQUIRED, 'The name of the controller class'),
		);
	}

}
