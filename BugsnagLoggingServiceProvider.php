<?php

namespace Statamic\Addons\BugsnagLogging;

use Statamic\Extend\ServiceProvider;

class BugsnagLoggingServiceProvider extends ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    public $defer = false;

    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
	    app()->singleton(
		    'Illuminate\Contracts\Debug\ExceptionHandler',
		    'Statamic\Addons\BugsnagLogging\BugsnagLogger'
	    );
    }
}
