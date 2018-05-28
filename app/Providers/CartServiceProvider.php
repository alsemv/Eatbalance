<?php

namespace App\Providers;

use App\Order\Cart\Cart;
use App\Reposotories\Menu\MenuRepository;
use App\Services\CartService;
use Illuminate\Support\ServiceProvider;

class CartServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(CartService::class, function (){
            return new CartService(new Cart(), new MenuRepository());
        });
    }
}
