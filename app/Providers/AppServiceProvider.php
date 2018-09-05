<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use View;
use App\Models\Category;

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
            'cates'=>Category::all()
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
