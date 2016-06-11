<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Routing\Route;
use Illuminate\Routing\Router;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * The root namespace to assume when generating URLs to actions.
     *
     * @var string
     */
    protected $rootUrlNamespace = 'App\Http\Controllers';

    /**
     * The controllers to scan for route annotations.
     *
     * @var array
     */
    protected $scan = [
        'App\Http\Controllers\HomeController',
        'App\Http\Controllers\Auth\AuthController',
        'App\Http\Controllers\Auth\PasswordController',
        'App\Http\Controllers\AdminController',
        'App\Http\Controllers\Admin\DashboardController',
    ];

    /**
     * Called before routes are registered.
     *
     * Register any model bindings or pattern based filters.
     *
     * @param Router $router
     *
     * @return void
     */
    public function before(Router $router)
    {
        //
    }

    /**
     * Define the routes for the application.
     *
     * @return void
     */
    public function map(Router $router)
    {
        require app_path('Http/site_routes.php');
        require app_path('Http/admin_routes.php');
    }
}
