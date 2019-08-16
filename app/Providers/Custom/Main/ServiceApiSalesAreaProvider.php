<?php

namespace App\Providers\Custom\Main;

use App\Contracts\ServiceApiSalesArea;
use App\Services\Main\DBApiSalesAreaService;
use Illuminate\Support\ServiceProvider;

class ServiceApiSalesAreaProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(ServiceApiSalesArea::class,  DBApiSalesAreaService::class);
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
