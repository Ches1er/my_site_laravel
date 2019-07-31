<?php

namespace App\Providers\Custom\Main;

use App\Contracts\ServiceApiBrands;
use App\Services\Main\DBApiBrandsService;
use Illuminate\Support\ServiceProvider;

class ServiceApiBrandsProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(ServiceApiBrands::class,
            DBApiBrandsService::class);
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
