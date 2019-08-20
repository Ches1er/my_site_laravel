<?php

namespace App\Providers\Custom\Main;

use App\Contracts\ServiceApiSale;
use App\Services\Main\DBApiSaleService;
use Illuminate\Support\ServiceProvider;

class ServiceApiSaleProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(ServiceApiSale::class, DBApiSaleService::class);
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
