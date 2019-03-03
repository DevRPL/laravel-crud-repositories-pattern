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
        view()->composer('depertement.*', function ($view) {
            $view->with('page', 'Depertements');
        });
        view()->composer(
            ['employee.create', 'employee.edit'],
            'App\Http\ViewComposers\DepertementComposer'
        );
    }

    /**
     * Register the service provider.
     */
    public function register()
    {
    }
}
