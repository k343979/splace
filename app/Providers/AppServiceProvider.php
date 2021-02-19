<?php

namespace App\Providers;

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
        // DBの文字数の設定
        // Herokuでvarchar型の文字数はデフォルトの255では大きいため、191に設定
        Schema::defaultStringLength(191);
    }
}
