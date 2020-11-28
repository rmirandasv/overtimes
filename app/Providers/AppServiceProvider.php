<?php

namespace App\Providers;

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
        // role repo
        $this->app->bind(
            'App\Repositories\RoleRepository',
            'App\Repositories\RoleRepositoryImpl'
        );

        // user repo
        $this->app->bind(
            'App\Repositories\UserRepository',
            'App\Repositories\UserRepositoryImpl'
        );

        $this->app->bind(
            'App\Repositories\CostConfigRepository',
            'App\Repositories\CostConfigRepositoryImpl'
        );

        $this->app->bind(
            'App\Repositories\GlobalConfigRepository',
            'App\Repositories\GlobalConfigRepositoryImpl'
        );

        $this->app->bind(
            'App\Repositories\OvertimeRepository',
            'App\Repositories\OvertimeRepositoryImpl'
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
