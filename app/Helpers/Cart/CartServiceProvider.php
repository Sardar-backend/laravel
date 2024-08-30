<?php

namespace App\Helpers\Cart;

use Illuminate\Support\ServiceProvider;

class CartServiceProvider extends ServiceProvider
{
    public function register(){
        $this->app->singleton('Cart', function($app){
            return new CartService();
        });
    }

    // public function boot()
    // {
    //     // If you want to use the facade as 'Helpers' you can register it here
    //     \Illuminate\Support\Facades\Facade::class_alias('Cart', 'Cart');
    // }
}
