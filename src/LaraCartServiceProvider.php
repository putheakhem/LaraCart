<?php

namespace Puthea\LaraCart;

use Illuminate\Support\ServiceProvider;

class LaraCartServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register any package services.
     *
     * @return void
     */
    public function register()
    {
        require __DIR__ . '/routes/web.php';
    }
}
