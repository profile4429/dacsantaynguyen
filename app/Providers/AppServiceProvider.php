<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\User_Admin;
use App\Models\category;
use App\Models\product;
use App\Models\order;




class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
        $User_Admin= User_Admin::all();
        view()->share('User_Admin', $User_Admin);

        $category= category::all();
        view()->share('category', $category);

        $product= product::all();
        view()->share('product', $product);

        // $order= order::all();
        // view()->share('order', $order);
    }
}
