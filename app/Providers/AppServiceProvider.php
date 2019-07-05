<?php

namespace App\Providers;

use App\Repositories\Eloquent\CustomerEloquentRepository;
use App\Repositories\Interfaces\CustomerRepositoryInterface;
use App\Service\CustomerServiceInterface;
use App\Service\Impl\CustomerServiceImpl;
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
            CustomerRepositoryInterface::class,
            CustomerEloquentRepository::class
        );
          $this->app->singleton(
            CustomerServiceInterface::class,
            CustomerServiceImpl::class
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
