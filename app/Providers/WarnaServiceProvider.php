<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class WarnaServiceProvider extends ServiceProvider
{
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
        //
         $this->app->bind('App\Http\Services\WarnaService', 'App\Http\Services\Impl\WarnaServiceImpl');
    }
}
