<?php namespace Morrislaptop\LaravelFivePackageBridges;

use ReflectionClass;

/**
 * Class LaravelFivePackageBridgeTrait
 *
 * Provide functions to backport methods removed from
 *
 * - https://github.com/laravel/framework/commit/3a0afc20f25ad3bed640ff1a14957f972d123cf7#commitcomment-8863884
 *
 * @package Morrislaptop\LaravelFivePackageBridges
 */
trait LaravelFivePackageBridgeTrait {

	public function package($package, $namespace = null, $path = null)
	{
		$namespace = $this->getPackageNamespace($package, $namespace);
		$path = $path ?: $this->guessPackagePath();

		$this->loadConfigsFrom($namespace, $path . '/config', $package);
		$this->loadViewsFrom($path . '/views', $namespace);
		$this->loadTranslationsFrom($path . '/lang', $namespace);

	}

	/**
	 * Guess the package path for the provider.
	 *
	 * @return string
	 */
	protected function guessPackagePath() {
		$path = (new ReflectionClass(get_parent_class()))->getFileName();

		return realpath(dirname($path).'/../../');
	}

	/**
	 * Determine the namespace for a package.
	 *
	 * @param  string  $package
	 * @param  string  $namespace
	 * @return string
	 */
	protected function getPackageNamespace($package, $namespace)
	{
		if (is_null($namespace))
		{
			list($vendor, $namespace) = explode('/', $package);
		}

		return $namespace;
	}

	/**
	 * Load configuration file and set into config repo
	 *
	 * @param $namespace
	 * @param $path
	 * @param $package
	 */
	protected function loadConfigsFrom($namespace, $path, $package) {
		$this->app['config']->package($package, $path, $namespace);
	}

}
