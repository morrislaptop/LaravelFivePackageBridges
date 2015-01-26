<?php namespace Morrislaptop\LaravelFivePackageBridges\Bridges;

use Morrislaptop\LaravelFivePackageBridges\LaravelFivePackageBridgeTrait;
use Cartalyst\Sentry\SentryServiceProvider as BaseSentryServiceProvider;

class SentryServiceProvider extends BaseSentryServiceProvider {
	use LaravelFivePackageBridgeTrait;
}
