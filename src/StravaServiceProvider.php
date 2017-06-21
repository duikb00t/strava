<?php

namespace Duikb00t\Strava;


use Strava\API\Factory;
use Illuminate\Support\ServiceProvider;

class StravaServiceProvider extends ServiceProvider
{

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {   
        $this->loadRoutesFrom(__DIR__.'/routes/routes.php');
        $this->loadViewsFrom(__DIR__.'/resources/views', 'strava');
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register() {
        
    }
}
