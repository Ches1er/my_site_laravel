<?php

namespace App\Providers\Custom\Main;

use App\Contracts\ServiceApiContacts;
use App\Services\Main\DBApiContactsServices;
use Illuminate\Support\ServiceProvider;

class ServiceApiContactsProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(ServiceApiContacts::class, DBApiContactsServices::class);
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
