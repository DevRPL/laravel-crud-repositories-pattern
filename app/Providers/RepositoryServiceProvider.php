<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
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
        $this->app->bind(\App\Repositories\DepartmentRepository::class, \App\Repositories\DepartmentRepositoryEloquent::class);
        $this->app->bind(\App\Repositories\EmployeeRepository::class, \App\Repositories\EmployeeRepositoryEloquent::class);
        //:end-bindings:
    }
}
