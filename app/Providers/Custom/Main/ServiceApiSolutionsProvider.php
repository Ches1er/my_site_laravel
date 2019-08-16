<?php

namespace App\Providers\Custom\Main;

use App\Contracts\ServiceApiSolutions;
use App\Services\Main\DBApiSolutionsService;
use Illuminate\Support\ServiceProvider;

class ServiceApiSolutionsProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(ServiceApiSolutions::class, DBApiSolutionsService::class);
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
