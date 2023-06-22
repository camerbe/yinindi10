<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
// use App\Repositories\BaseRepository;
// use App\Repositories\UserRepository;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register()
    {
        //

        setlocale(LC_TIME,config('app.locale'));
        \Carbon\Carbon::setLocale(config('app.locale'));
    }

    /**
     * Bootstrap any application services.
     */
    public function boot()
    {        //
        $this->RegisterUserRepo();
    }
    public function RegisterUserRepo(){
        return $this->app->bind('App\Repositories\BaseRepository','App\Repositories\UserRepository');
    }
}
