<?php namespace Morrislaptop\LaravelFivePackageBridges\Bridges;

use Laracasts\Flash\FlashServiceProvider as BaseFlashServiceProvider;

class FlashServiceProvider extends BaseFlashServiceProvider {

	var $namespace = 'flash';
	var $vendor = 'laracasts';

	use LaravelFivePackageTrait;

}
