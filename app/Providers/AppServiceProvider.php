<?php

namespace App\Providers;

use Illuminate\Cache\NullStore;
use Cache;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);
        Schema::enableForeignKeyConstraints();

        Cache::extend('none', function ($app) {
            return Cache::repository(new NullStore);
        });
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
