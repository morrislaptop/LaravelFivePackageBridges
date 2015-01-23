<?php namespace Morrislaptop\LaravelFivePackageBridges\Bridges;

use Clockwork\Support\Laravel\ClockworkServiceProvider as BaseClockworkServiceProvider;
use Morrislaptop\LaravelFivePackageBridges\LaravelFivePackageBridgeTrait;

class ClockworkServiceProvider extends BaseClockworkServiceProvider {
	use LaravelFivePackageBridgeTrait;
}
