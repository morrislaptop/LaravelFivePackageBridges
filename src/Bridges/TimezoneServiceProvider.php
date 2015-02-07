<?php namespace Morrislaptop\LaravelFivePackageBridges\Bridges;

use Camroncade\Timezone\TimezoneServiceProvider as BaseTimezoneServiceProvider;
use Morrislaptop\LaravelFivePackageBridges\LaravelFivePackageBridgeTrait;

class TimezoneServiceProvider extends BaseTimezoneServiceProvider {
	use LaravelFivePackageBridgeTrait;
}
