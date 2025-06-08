<?php

namespace App\Providers;

use App\Models\Category;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

class ViewServiceProvider extends ServiceProvider
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
        // View::composer('master', function ($view) {
        //     $view->with('categories',Category::all());
        // });
    //     View::composer('layout',function ($view){

    //         $view->with('Test',['Test A','Test B']);
    //     });
    }
}
