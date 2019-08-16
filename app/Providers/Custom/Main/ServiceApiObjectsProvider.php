<?php

namespace App\Providers\Custom\Main;

use App\Contracts\ServiceApiObjects;
use App\Services\Main\DBApiObjectsService;
use Illuminate\Support\ServiceProvider;

class ServiceApiObjectsProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(ServiceApiObjects::class, DBApiObjectsService::class);
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
