<?php namespace Morrislaptop\LaravelFivePackageBridges;

use Illuminate\Support\ServiceProvider;

class ConfigServiceProvider extends ServiceProvider {

	/**
	 * Indicates if loading of the provider is deferred.
	 *
	 * @var bool
	 */
	protected $defer = false;

	/**
	 * Boot the service provider.
	 *
	 * @return void
	 */
	public function boot()
	{
		$this->replaceBoundConfig();
	}

	/**
	 * Replace the bound config repo.
	 *
	 * @return void
	 */
	protected function replaceBoundConfig()
	{
		$configs = $this->app['config']->all();

		$this->app->bindShared('config', function () use ($configs) {
			$config = new Repository($configs);
			return $config;
		});
	}

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		//
	}

	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides()
	{
		return array();
	}
}
