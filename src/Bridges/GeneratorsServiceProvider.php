<?php namespace Morrislaptop\LaravelFivePackageBridges\Bridges;

use Morrislaptop\LaravelFivePackageBridges\LaravelFivePackageBridgeTrait;
use Way\Generators\GeneratorsServiceProvider as BaseGeneratorsServiceProvider;

class GeneratorsServiceProvider extends BaseGeneratorsServiceProvider
{

	var $vendor = 'way';
	var $namespace = 'generators';

	use LaravelFivePackageBridgeTrait;

}
