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
            \App\Services\Contracts\DepartmentServiceContract::class,
            \App\Services\DepartmentService::class
        );

        $this->app->bind(
            \App\Services\Contracts\EmployeeServiceContract::class,
            \App\Services\EmployeeService::class
        );
    }
}
