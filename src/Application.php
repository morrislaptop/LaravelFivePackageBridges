<?php namespace Morrislaptop\LaravelFivePackageBridges;

use Illuminate\Foundation\Application as IlluminateApplication;

class Application extends IlluminateApplication {

    /**
     * Register an "after" application filter.
     *
     * @param  \Closure|string  $callback
     * @return void
     */
    public function after($callback)
    {
        return $this['router']->after($callback);
    }

}