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
         View::composer('layouts.base','App\Providers\ViewComposers\SizeComposer');   //form
        // View::composer('layouts.base', 'App\Providers\ViewComposers\CookieComposer');//order count
         View::composer('layouts.base', 'App\Providers\ViewComposers\LangComposer');
          View::composer('layouts.base', 'App\Providers\ViewComposers\BreadCrumbsComposer');
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
