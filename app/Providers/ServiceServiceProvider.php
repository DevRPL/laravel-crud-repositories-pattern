<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class ServiceServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     */
    public function boot()
    {
    }

    /**
     * Register services.
     */
    public function register()
    {
        $this->app->bind(
            \App\Services\Contracts\DepertementServiceContract::class,
            \App\Services\DepertementService::class
        );

        $this->app->bind(
            \App\Services\Contracts\EmployeeServiceContract::class,
            \App\Services\EmployeeService::class
        );
    }
}
