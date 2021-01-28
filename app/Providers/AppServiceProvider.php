<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use Modules\Cinema\Entities\Cinema;

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
        // View::composer('*', 'App\Http\View\Composers\CinemasComposer');
        View::composer('*', function ($view){
            $view->with('cinemas', Cinema::all());
        });
    }
}
