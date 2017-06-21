<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class InvoiceServiceProvider extends ServiceProvider
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
        $this->app->bind('App\Http\Services\InvoiceService', 'App\Http\Services\Impl\InvoiceServiceImpl');
    }
}
