<?php namespace Morrislaptop\LaravelFivePackageBridges;

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\File;
use ReflectionClass;

trait LaravelFivePackageBridgeTrait {

	public function boot()
	{
		$this->loadViewsFrom($this->namespace, $this->guessPackagePath() . '/views');
		$this->loadTranslationsFrom($this->namespace, $this->guessPackagePath() . '/lang');
		$this->setConfig();
	}

	protected function guessPackagePath() {
		$path = (new ReflectionClass(get_parent_class()))->getFileName();

		return realpath(dirname($path).'/../../');
	}

	protected function setConfig() {
		$path = $this->guessPackagePath() . '/config/config.php';
		$files = App::make('files');

		if ( $files->exists($path) ) {
			$config = require $path;
			$this->app['config']->set($this->namespace, $config);
		}
	}

}
