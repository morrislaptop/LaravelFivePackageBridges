<?php namespace Morrislaptop\LaravelFivePackageBridges\Bridges;

use Clockwork\Support\Laravel\ClockworkServiceProvider as BaseImageServiceProvider;
use Morrislaptop\LaravelFivePackageBridges\LaravelFivePackageBridgeTrait;

class ClockworkServiceProvider extends BaseImageServiceProvider {
	use LaravelFivePackageBridgeTrait;
}
