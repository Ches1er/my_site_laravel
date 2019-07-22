<?php

namespace App\Providers;

use App\Providers\Custom\CategoryServiceProvider;
use App\Providers\Custom\Mail\MailAuthServiceProvider;
use App\Providers\Custom\Main\ServiceApiEventsProvider;
use App\Providers\Custom\Main\ServiceApiNewsProvider;
use App\Providers\Custom\ServiceApiAuthProvider;
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
        //$this->app->register(CategoryServiceProvider::class);
        $this->app->register(ServiceApiAuthProvider::class);
        $this->app->register(ServiceApiNewsProvider::class);
        $this->app->register(ServiceApiEventsProvider::class);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
