<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
//part2
use Illuminate\Support\Facades\Blade;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //part2
        Blade::component('components.card', 'card');
        Blade::component('components.alert', 'alert');
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
