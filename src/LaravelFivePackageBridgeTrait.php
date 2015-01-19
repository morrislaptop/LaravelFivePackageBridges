<?php namespace Morrislaptop\LaravelFivePackageBridges;

use ReflectionClass;

trait LaravelFivePackageBridgeTrait {

	public function boot()
	{
		$this->loadViewsFrom($this->namespace, $this->guessPackagePath() . '/views');
		$this->loadTranslationsFrom($this->namespace, $this->guessPackagePath() . '/lang');
		$this->setConfig();
		$this->app['config']->package($this->vendor . '/' . $this->namespace, $this->guessPackagePath() . '/config', $this->namespace);
	}

	protected function guessPackagePath() {
		$path = (new ReflectionClass(get_parent_class()))->getFileName();

		return realpath(dirname($path).'/../../');
	}

	protected function setConfig() {
		$config = require $this->guessPackagePath() . '/config/config.php';
		$this->app['config']->set($this->namespace, $config);
	}

}
