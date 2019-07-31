<?php

namespace App\Providers\Custom\Main;

use App\Contracts\ServiceApiClients;
use App\Services\Main\DBApiClientsService;
use Illuminate\Support\ServiceProvider;

class ServiceApiClientsProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(ServiceApiClients::class,
            DBApiClientsService::class);
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
