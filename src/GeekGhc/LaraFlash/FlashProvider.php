<?php

namespace GeekGhc\LaraFlash;

use Illuminate\Support\ServiceProvider;

class FlashProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadViewsFrom(__DIR__.'/../../views','laraflash');

        $this->publishes([
            __DIR__.'/../../views'=>base_path('resources/views/vendor/laraFlash'),
        ]);
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            'GeekGhc\LaraFlash\SessionStore',
            'GeekGhc\LaraFlash\LaravelSessionStore'
        );

        $this->app->singleton('laraflash',function(){
            return $this->app->make('GeekGhc\LaraFlash\FlashNotifier');
        });
    }
}
