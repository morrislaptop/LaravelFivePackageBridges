<?php

use Morrislaptop\LaravelFivePackageBridges\Application;

class SentryServiceProviderTest extends Orchestra\Testbench\TestCase {

	protected function getPackageProviders($application)
	{
		return [
			'Morrislaptop\LaravelFivePackageBridges\ConfigServiceProvider',
			'Morrislaptop\LaravelFivePackageBridges\Bridges\SentryServiceProvider'
		];
	}

	/**
	 * Bootstraps Laravel application. Tests service providers work
	 * on a basic level.
	 *
	 * @return void
	 */
	public function testBootstrap()
	{
		// If we get here then all is well anyway :)
	}

}
