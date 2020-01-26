<?php

namespace Onepoint\Frontend;

use Illuminate\Support\ServiceProvider;

class FrontendServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadViewsFrom(__DIR__ . '/resources/views', 'frontend');
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
        $this->loadMigrationsFrom(__DIR__.'/database/migrations');
        // $this->loadTranslationsFrom(__DIR__.'/resources/lang', 'frontend');
        $this->mergeConfigFrom(
            __DIR__.'/config/frontend.php', 'frontend'
        );
    }
}
