<?php namespace Morrislaptop\LaravelFivePackageBridges;

use Illuminate\Foundation\Application as IlluminateApplication;

class Application extends IlluminateApplication {

    /**
     * The array of shutdown callbacks.
     *
     * @var array
     */
    protected $shutdownCallbacks = array();

    /**
     * Register a "before" application filter.
     *
     * @param  \Closure|string  $callback
     * @return void
     */
    public function before($callback)
    {
        return $this['router']->before($callback);
    }

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

    /**
     * Register a "shutdown" callback.
     *
     * @param  callable  $callback
     * @return void
     */
    public function shutdown(callable $callback = null)
    {
        if (is_null($callback))
        {
            $this->fireAppCallbacks($this->shutdownCallbacks);
        }
        else
        {
            $this->shutdownCallbacks[] = $callback;
        }
    }

}
