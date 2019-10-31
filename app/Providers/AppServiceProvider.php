<?php

namespace App\Providers;

use App\Repositories\CityRepositoryInterface;
use App\Repositories\CustomerRepositoryInterface;
use App\Repositories\Eloquent\CityEloquentRepository;
use App\Repositories\Eloquent\CustomerEloquentRepository;
use App\Services\CityServiceInterface;
use App\Services\CustomerServiceInterface;
use App\Services\imple\CityService;
use App\Services\imple\CustomerService;
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
        $this->app->singleton(
            CustomerServiceInterface::class,
            CustomerService::class
        );

        $this->app->singleton(
            CustomerRepositoryInterface::class,
            CustomerEloquentRepository::class
        );

        $this->app->singleton(
            CityServiceInterface::class,
            CityService::class
        );

        $this->app->singleton(
            CityRepositoryInterface::class,
            CityEloquentRepository::class
        );
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
