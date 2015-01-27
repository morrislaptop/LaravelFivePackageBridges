<?php namespace Morrislaptop\LaravelFivePackageBridges\Bridges;

use Morrislaptop\LaravelFivePackageBridges\LaravelFivePackageBridgeTrait;
use Dingo\Api\Provider\ApiServiceProvider as BaseApiServiceProvider;

class ApiServiceProvider extends BaseApiServiceProvider {
	use LaravelFivePackageBridgeTrait;

	protected function registerProviders()
	{
		$this->app->register('Morrislaptop\LaravelFivePackageBridges\Bridges\ConfigServiceProvider');
		$this->app->register('Dingo\Api\Provider\RoutingServiceProvider');
		$this->app->register('Dingo\Api\Provider\FilterServiceProvider');
		$this->app->register('Dingo\Api\Provider\EventServiceProvider');
	}
}
