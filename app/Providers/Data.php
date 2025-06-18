<?php

namespace App\Providers;

use App\Models\AllCategory;
use App\Models\Product;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class Data extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        $categories = AllCategory::all();
        $products = Product::all();
        $cart = session()->get('cart');
        // dd($cart);

        // share first set of data - categories data
        view()->composer('*', function ($view) use ($categories) {
            $view->with('categories', $categories);
        });

        // share second set of data - products data
        view()->composer('*', function ($view) use ($products) {
            $view->with('products', $products);
        });

        // share second set of data - cart data
        View::composer('*', function ($view) {
            $view->with('cart', Session::get('cart', []));
        });
    }
}
