<?php namespace Morrislaptop\LaravelFivePackageBridges\Bridges;

use Maatwebsite\Excel\ExcelServiceProvider as BaseImageServiceProvider;
use Morrislaptop\LaravelFivePackageBridges\LaravelFivePackageBridgeTrait;

class ExcelServiceProvider extends BaseImageServiceProvider {
	use LaravelFivePackageBridgeTrait;
}
