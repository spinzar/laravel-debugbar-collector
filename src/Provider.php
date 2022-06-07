<?php

namespace Spinzar\LaravelDebugbarCollector;

use Spinzar\LaravelDebugbarCollector\SpinzarCollector;
use Spinzar\LaravelDebugbarCollector\ServerCollector;
use Barryvdh\Debugbar\LaravelDebugbar;
use Illuminate\Support\ServiceProvider as BaseServiceProvider;

class Provider extends BaseServiceProvider
{
    /**
     * Register the application services.
     */
    public function register()
    {
        $this->app->extend(LaravelDebugbar::class, function ($debugbar) {
            $debugbar->addCollector(new SpinzarCollector());
            $debugbar->addCollector(new ServerCollector());

            return $debugbar;
        });
    }

    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        //
    }
}
