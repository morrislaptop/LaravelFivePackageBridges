<?php namespace Morrislaptop\LaravelFivePackageBridges;

use Illuminate\Config\Repository as IlluminateRepository;
use Symfony\Component\Finder\Finder;

/**
 * Class Repository
 *
 * Provide functions to backport methods removed from
 *
 * - https://github.com/laravel/framework/commit/64c15a35d9578748671639748b83b21d16dbd6c2#diff-2
 *
 * @package Morrislaptop\LaravelFivePackageBridges
 */
class Repository extends IlluminateRepository
{
	/**
	 * @param $package
	 * @param $hint
	 * @param null $namespace
	 */
	public function package($package, $hint, $namespace = null) {
		$namespace = $this->getPackageNamespace($package, $namespace);

		try {
			$this->loadConfigurationFiles($hint, $namespace);
			$this->loadConfigurationFiles(base_path() . '/config/packages/' . $package, $namespace);
		}
		catch (\InvalidArgumentException $e) {
			// config directory doesn't exist, ignore..
		}
	}

	/**
	 * Load the configuration items from all of the files.
	 *
	 * @param $path
	 * @param $namespace
	 */
	protected function loadConfigurationFiles($path, $namespace)
	{
		foreach ($this->getConfigurationFiles($path) as $key => $file)
		{
			$configs = require $file;
			$this->setConfigsInNamespace($configs, $key, $namespace);
		}
	}

	/**
	 * Get all of the configuration files for the application.
	 *
	 * @param $path
	 * @return array
	 */
	protected function getConfigurationFiles($path)
	{
		$files = [];

		foreach (Finder::create()->files()->name('*.php')->in($path) as $file)
		{
			$files[basename($file->getRealPath(), '.php')] = $file->getRealPath();
		}

		return $files;
	}

	/**
	 * @param $configs
	 * @param $file
	 * @param $namespace
	 */
	private function setConfigsInNamespace($configs, $file, $namespace)
	{
		foreach ($configs as $key => $value) {
			$this->set($namespace . '::' . $key, $value);
			$this->set($namespace . '::' . $file . '.' . $key, $value);
		}
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
}
