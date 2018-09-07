<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Http\Request;
use View;
use App\Models\Category;
use App\Models\Banner;
use App\Models\Product;
use App\Carts\Cart;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
            View::share([
            'cates'=>Category::all(),
            'categorys'=>Category::where('parent',0)->orderBy('name','ASC')->get(),
            'products'=>Product::paginate(9)
        ]);
        
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
