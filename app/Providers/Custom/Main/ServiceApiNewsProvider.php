<?php

namespace App\Providers\Custom\Main;

use App\Contracts\ServiceApiNews;
use App\Services\Main\DBApiNewsService;
use Illuminate\Support\ServiceProvider;

class ServiceApiNewsProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(ServiceApiNews::class,
            DBApiNewsService::class);
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
