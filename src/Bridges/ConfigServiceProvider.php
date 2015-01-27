<?php namespace Morrislaptop\LaravelFivePackageBridges\Bridges;

use Morrislaptop\LaravelFivePackageBridges\LaravelFivePackageBridgeTrait;
use Dingo\Api\Provider\ConfigServiceProvider as BaseConfigServiceProvider;

class ConfigServiceProvider extends BaseConfigServiceProvider {
	use LaravelFivePackageBridgeTrait;
}
