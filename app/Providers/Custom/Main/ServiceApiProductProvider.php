<?php

namespace App\Providers\Custom\Main;

use App\Contracts\ServiceApiProducts;
use App\Services\Main\DBApiProductsService;
use Illuminate\Support\ServiceProvider;

class ServiceApiProductProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(ServiceApiProducts::class,
            DBApiProductsService::class);
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
