<?php namespace Morrislaptop\LaravelFivePackageBridges\Bridges;

use Maatwebsite\Excel\ExcelServiceProvider as BaseExcelServiceProvider;
use Morrislaptop\LaravelFivePackageBridges\LaravelFivePackageBridgeTrait;

class ExcelServiceProvider extends BaseExcelServiceProvider {
	use LaravelFivePackageBridgeTrait;
}
