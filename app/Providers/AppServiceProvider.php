<?php

namespace App\Providers;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\ServiceProvider;
use  Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\View;
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
        
        Schema::defaultStringLength(191);


        Session::get('lang', 'de_DE');

        view()->composer('*', function ($view) {
            $qty=0;
            if(Session::has('cart')){
                $cart=session('cart');//get the cart
                for ($i=key($cart['name']); $i <= key(array_slice($cart['name'], -1, 1, true)); $i++) { 
                    if(isset($cart['qty'][$i])){//check if in this index there is a value
                        $qty+= $cart['qty'][$i];
                    } 
                }
            }else{
                $qty='0';
            }
            View::share('totalqty', $qty);
        }); 
       
        
    }
}
