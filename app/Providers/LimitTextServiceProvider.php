<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class LimitTextServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        app()->bind('limitWords', function ($app) {
            return new \App\Helpers\CustomHelper;
        });
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
