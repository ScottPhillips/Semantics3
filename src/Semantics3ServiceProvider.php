<?php

namespace Subbe\Semantics3;

use Illuminate\Support\ServiceProvider;
use Subbe\Semantics3\Facades;

class Semantics3ServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        include __DIR__ . '/routes.php';

        //Publishes package config file to applications config folder
        $this->publishes([__DIR__.'/config/semantics3config.php' => config_path('semantics3config.php')]);
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('semantics3', function($app) {
            return new Semantics3;
        });
    }
}