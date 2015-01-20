<?php namespace Morrislaptop\LaravelFivePackageBridges\Bridges;

use Intervention\Image\ImageServiceProvider as BaseImageServiceProvider;
use Morrislaptop\LaravelFivePackageBridges\LaravelFivePackageBridgeTrait;

class ImageServiceProvider extends BaseImageServiceProvider {
	use LaravelFivePackageBridgeTrait;
}
