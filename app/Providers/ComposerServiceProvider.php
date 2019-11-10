<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class ComposerServiceProvider extends ServiceProvider
{
    /**
     * Register bindings in the container.
     */
    public function boot()
    {
        view()->composer('employee.*', function ($view) {
            $view->with('page', 'Employees');
        });
        view()->composer('department.*', function ($view) {
            $view->with('page', 'Department');
        });
        view()->composer(
            ['employee.create', 'employee.edit'],
            'App\Http\ViewComposers\DepartmentComposer'
        );
    }

    /**
     * Register the service provider.
     */
    public function register()
    {
    }
}
