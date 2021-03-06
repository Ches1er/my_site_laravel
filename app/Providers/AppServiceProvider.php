<?php

namespace App\Providers;

use App\Contracts\ServiceApiContacts;
use App\Contracts\ServiceApiSale;
use App\Providers\Custom\CategoryServiceProvider;
use App\Providers\Custom\Mail\MailAuthServiceProvider;
use App\Providers\Custom\Main\ServiceApiApplyingGroupsProvider;
use App\Providers\Custom\Main\ServiceApiBrandsProvider;
use App\Providers\Custom\Main\ServiceApiClientsProvider;
use App\Providers\Custom\Main\ServiceApiContactsProvider;
use App\Providers\Custom\Main\ServiceApiEventsProvider;
use App\Providers\Custom\Main\ServiceApiImagesProvider;
use App\Providers\Custom\Main\ServiceApiNewsProvider;
use App\Providers\Custom\Main\ServiceApiObjectsProvider;
use App\Providers\Custom\Main\ServiceApiProductProvider;
use App\Providers\Custom\Main\ServiceApiSaleProvider;
use App\Providers\Custom\Main\ServiceApiSalesAreaProvider;
use App\Providers\Custom\Main\ServiceApiSolutionsProvider;
use App\Providers\Custom\ServiceApiAuthProvider;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //$this->app->register(CategoryServiceProvider::class);
        $this->app->register(ServiceApiAuthProvider::class);
        $this->app->register(ServiceApiNewsProvider::class);
        $this->app->register(ServiceApiEventsProvider::class);
        $this->app->register(ServiceApiApplyingGroupsProvider::class);
        $this->app->register(ServiceApiBrandsProvider::class);
        $this->app->register(ServiceApiProductProvider::class);
        $this->app->register(ServiceApiClientsProvider::class);
        $this->app->register(ServiceApiObjectsProvider::class);
        $this->app->register(ServiceApiSalesAreaProvider::class);
        $this->app->register(ServiceApiImagesProvider::class);
        $this->app->register(ServiceApiContactsProvider::class);
        $this->app->register(ServiceApiSolutionsProvider::class);
        $this->app->register(ServiceApiSaleProvider::class);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
