<?php

namespace App\Providers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Pagination\Paginator;
use Blade;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);

        Blade::if('isAdmin', function () {
            return Auth::check() && Auth::user()->role()->first()->role_name == "Admin";
        });

        Paginator::useBootstrap();
    }
}
