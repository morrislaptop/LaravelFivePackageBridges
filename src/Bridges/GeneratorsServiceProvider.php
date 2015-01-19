<?php namespace Morrislaptop\LaravelFivePackageBridges\Bridges;

use Way\Generators\GeneratorsServiceProvider as BaseGeneratorsServiceProvider;

class GeneratorsServiceProvider extends BaseGeneratorsServiceProvider
{

	var $namespace = 'generators';
	var $vendor = 'way';

	use LaravelFivePackageTrait;

}
