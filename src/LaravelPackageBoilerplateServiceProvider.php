<?php

namespace Xanpena\LaravelPackageBoilerplate;

use Illuminate\Support\ServiceProvider;
use Xanpena\LaravelPackageBoilerplate\Commands\ExampleCommand;

class LaravelPackageBoilerplateServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        /*
         * Optional methods to load your package assets
         */
        // $this->loadTranslationsFrom(__DIR__.'/../resources/lang', 'Laravelpackageboilerplate');
        // $this->loadViewsFrom(__DIR__.'/../resources/views', 'Laravelpackageboilerplate');
        // $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
        // $this->loadRoutesFrom(__DIR__.'/routes.php');

        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/../config/config.php' => config_path('Laravelpackageboilerplate.php'),
            ], 'config');

            // Publishing the views.
            /*$this->publishes([
                __DIR__.'/../resources/views' => resource_path('views/vendor/Laravelpackageboilerplate'),
            ], 'views');*/

            // Publishing assets.
            /*$this->publishes([
                __DIR__.'/../resources/assets' => public_path('vendor/Laravelpackageboilerplate'),
            ], 'assets');*/

            // Publishing the translation files.
            /*$this->publishes([
                __DIR__.'/../resources/lang' => resource_path('lang/vendor/Laravelpackageboilerplate'),
            ], 'lang');*/

            // Registering package commands.
            $this->commands([ExampleCommand::class]);
        }
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        // Automatically apply the package configuration
        $this->mergeConfigFrom(__DIR__.'/../config/config.php', 'Laravelpackageboilerplate');

        // Register the main class to use with the facade
        $this->app->singleton('Laravelpackageboilerplate', function () {
            return new LaravelPackageBoilerplate;
        });
    }
}
