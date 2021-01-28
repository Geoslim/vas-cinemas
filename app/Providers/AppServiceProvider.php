<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
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
        $cinemas = Cinema::all();
        view()->share('cinemas', $cinemas);
    }
}
