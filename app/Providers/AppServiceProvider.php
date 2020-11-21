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
