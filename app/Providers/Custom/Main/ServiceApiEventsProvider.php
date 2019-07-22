<?php

namespace App\Providers\Custom\Main;

use App\Contracts\ServiceApiEvent;
use App\Services\Main\DBApiEventsService;
use Illuminate\Support\ServiceProvider;

class ServiceApiEventsProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(ServiceApiEvent::class,
            DBApiEventsService::class);
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
