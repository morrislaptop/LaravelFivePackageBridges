<?php namespace Morrislaptop\LaravelFivePackageBridges\Bridges;

use Dingo\Api\Routing\ControllerDispatcher;
use Morrislaptop\LaravelFivePackageBridges\LaravelFivePackageBridgeTrait;
use Dingo\Api\Provider\RoutingServiceProvider as BaseRoutingServiceProvider;
use Morrislaptop\LaravelFivePackageBridges\Router;

class RoutingServiceProvider extends BaseRoutingServiceProvider {
	use LaravelFivePackageBridgeTrait;

	/**
	 * Replace the bound router.
	 *
	 * @return void
	 */
	protected function replaceBoundRouter()
	{
		$routes = $this->app['router']->getRoutes();

		$this->app->bindShared('router', function ($app) use ($routes) {
			$router = new Router($app['events'], $app['api.config'], $app);

			if ($app['env'] == 'testing') {
				$router->disableFilters();
			}

			$router->setControllerDispatcher(new ControllerDispatcher($router, $app));
			$router->setConditionalRequest($app['config']->get('api::conditional_request'));
			$router->setStrict($app['config']->get('api::strict'));
			$router->addExistingRoutes($routes);

			return $router;
		});
	}
}
