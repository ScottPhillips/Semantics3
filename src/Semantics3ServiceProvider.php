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

        require_once __DIR__ . '/routes.php';
        require_once dirname(__FILE__)."/lib/Semantics3.php";
        require_once dirname(__FILE__)."/lib/oauth-php/library/OAuthStore.php";
        require_once dirname(__FILE__)."/lib/oauth-php/library/OAuthRequest.php";
        require_once dirname(__FILE__)."/lib/oauth-php/library/OAuthRequester.php";
        require_once dirname(__FILE__)."/lib/oauth-php/library/OAuthRequestSigner.php";
        require_once dirname(__FILE__)."/lib/oauth-php/library/OAuthRequestVerifier.php";


    }
}
