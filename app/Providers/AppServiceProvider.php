<?php

namespace App\Providers;

use App\repository\Core\Show;
use App\repository\View\Composer;
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
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        resolve(Composer::class)->show();
        $this->app->singleton(Show::class,function (){
            return new Show('test');
        });
    }
}
