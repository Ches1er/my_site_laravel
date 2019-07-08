<?php

namespace App\Providers\Custom;

use App\Contracts\ServiceApiAuth;
use App\Services\DBApiAuthService;
use Illuminate\Support\ServiceProvider;

class ServiceApiAuthProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(ServiceApiAuth::class,
            DBApiAuthService::class);
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
