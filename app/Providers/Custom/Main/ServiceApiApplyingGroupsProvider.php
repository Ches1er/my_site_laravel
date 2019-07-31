<?php

namespace App\Providers\Custom\Main;

use App\Contracts\ServiceApplyingGroup;
use App\Services\Main\DBApiApplyingGroupsService;
use Illuminate\Support\ServiceProvider;

class ServiceApiApplyingGroupsProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(ServiceApplyingGroup::class,
            DBApiApplyingGroupsService::class);
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
