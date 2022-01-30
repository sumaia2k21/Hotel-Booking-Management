<?php

namespace App\Providers;

use App\Models\Catagory;
use App\Models\Hotel;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\View;
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
        if(Schema::hasTable('hotels')){
            $hotels = Hotel::first();
            View::share('hotels',$hotels);
        }
      

    }
}
