<?php namespace Morrislaptop\LaravelFivePackageBridges\Bridges;

use Morrislaptop\LaravelFivePackageBridges\LaravelFivePackageBridgeTrait;
use Way\Generators\GeneratorsServiceProvider as BaseGeneratorsServiceProvider;

class GeneratorsServiceProvider extends BaseGeneratorsServiceProvider
{

	var $vendor = 'way';
	var $namespace = 'generators';

	use LaravelFivePackageBridgeTrait;

	protected function setConfig() {
		$path = $this->guessPackagePath() . '/config/config.php';
		$config = require $path;

		foreach ($config as $key => $value) {
			$this->app['config']->set($this->namespace . '::config.' . $key, $value);
		}

	}

}
