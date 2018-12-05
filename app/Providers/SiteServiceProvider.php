<?php

namespace App\Providers;
use View;
use Illuminate\Support\ServiceProvider;
use App\Providers\ViewComposers\SizeComposer;

class SiteServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        View::composer('layouts.base','App\Providers\ViewComposers\SizeComposer');
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
