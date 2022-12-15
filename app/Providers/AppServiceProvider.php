<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;
use App\Models\Category;

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
        Paginator::useBootstrap(); // bs3
        // Paginator::useBootstrapFive(); // b5
        // Paginator::useBootstrapFour(); // b4
        // truyền dữ liệu cho tất cả các view
        view()->composer('*',function($view) {
            $cats = Category::isActive()->get();
            $view->with(compact('cats'));
        });
    }
}
