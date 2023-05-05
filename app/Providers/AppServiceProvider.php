<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\User_Admin;
use App\Models\category;
use App\Models\product;
use App\Models\order;
use App\Models\intro;
use App\Models\contact;

use App\Models\policy;








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
        $User_Admin = User_Admin::all();
        view()->share('User_Admin', $User_Admin);

        $category = category::all();
        view()->share('category', $category);

        $product = product::all();
        view()->share('product', $product);

        $intro = intro::all();
        view()->share('intro', $intro);

        $contact = contact::all();
        view()->share('contact', $contact);


        $policy = policy::all();
        view()->share('policy', $policy);


        // $order= order::all();
        // view()->share('order', $order);
    }
}
