<?php

namespace App\Providers\Custom\Main;

use App\Contracts\ServiceApiImages;
use App\Services\Main\DBApiImagesService;
use Illuminate\Support\ServiceProvider;

class ServiceApiImagesProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(ServiceApiImages::class, DBApiImagesService::class);
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
