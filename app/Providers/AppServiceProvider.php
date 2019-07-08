<?php

namespace App\Providers;

use App\Providers\Custom\CategoryServiceProvider;
use App\Providers\Custom\Mail\MailAuthServiceProvider;
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
