<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;
use App\Models\Category;
use App\Helper\Cart;

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
            $catsGlobal = Category::isActive()->get();
            $cart = new Cart();
            $view->with(compact('catsGlobal','cart'));
        });
    }
}
