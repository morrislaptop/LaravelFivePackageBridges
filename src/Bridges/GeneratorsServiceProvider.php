<?php namespace Morrislaptop\LaravelFivePackageBridges\Bridges;

use Morrislaptop\LaravelFivePackageBridges\LaravelFivePackageBridgeTrait;
use Way\Generators\GeneratorsServiceProvider as BaseGeneratorsServiceProvider;

class GeneratorsServiceProvider extends BaseGeneratorsServiceProvider {
	use LaravelFivePackageBridgeTrait;

	/**
	 * Override trait to add the config. prefix
	 *
	 * @param $namespace
	 * @param $config
	 */
	protected function setConfigs($namespace, $config)
	{
		foreach ($config as $key => $value) {
			$this->app['config']->set($namespace . '::config.' . $key, $value);
		}
	}

}
