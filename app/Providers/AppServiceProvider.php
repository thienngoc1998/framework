<?php

namespace App\Providers;

use App\Category;
use Illuminate\Support\Facades\Session;
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
        view()->composer(['frontend.includes.header','frontend.product','backend.product.edit'],function ($view) {
            $view->withCategory(Category::all());
        });
    }
}
