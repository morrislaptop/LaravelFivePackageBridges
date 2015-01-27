<?php namespace Morrislaptop\LaravelFivePackageBridges;

use Dingo\Api\Routing\ControllerDispatcher;
use Dingo\Api\Routing\Router as DingoRouter;

/**
 * Class Router
 *
 * Provide functions to backport methods removed from
 *
 * - https://github.com/laravel/framework/commit/d7e0f13da9ccb8e8a7e1c0b77d62275632e2d17f#diff-6
 *
 * @package Morrislaptop\LaravelFivePackageBridges
 */
class Router extends DingoRouter
{

	/**
	 * The controller dispatcher instance.
	 *
	 * @var \Illuminate\Routing\ControllerDispatcher
	 */
	protected $controllerDispatcher;

	/**
	 * Indicates if the router is running filters.
	 *
	 * @var bool
	 */
	protected $filtering = true;

	/**
	 * Disable route filtering on the router.
	 *
	 * @return void
	 */
	public function disableFilters()
	{
		$this->filtering = false;
	}

	/**
	 * Set the controller dispatcher instance.
	 *
	 * @param ControllerDispatcher|\Illuminate\Routing\ControllerDispatcher $dispatcher
	 */
	public function setControllerDispatcher(ControllerDispatcher $dispatcher)
	{
		$this->controllerDispatcher = $dispatcher;
	}

}