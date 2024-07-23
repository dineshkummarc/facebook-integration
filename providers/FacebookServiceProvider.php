<?php

namespace providers;

use FacebookAds\Api;
use Illuminate\Support\ServiceProvider;

class FacebookServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->mergeConfigFrom(__DIR__ . '/../../config/facebook.php', 'facebook');

        $this->app->singleton('facebook-api', function ($app) {
            $config = $app['config']['facebook'];
            Api::init($config['app_id'], $config['app_secret'], $config['access_token']);
            return Api::instance();
        });
    }

    public function boot(): void
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__ . '/../../config/facebook.php' => config_path('facebook.php'),
            ], 'config');
        }
    }
}