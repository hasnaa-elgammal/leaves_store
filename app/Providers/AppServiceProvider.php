<?php

namespace App\Providers;

use App\Http\Controllers\CartItemController;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use App\Http\Controllers\WishListItemController;

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
        //wishlist & cart items
        View::composer(['customer.*', 'layout.app'], function ($view) {
            $wishlist_controller = app()->make(WishListItemController::class);
            $wishlist_items = $wishlist_controller->userWishListItems();
            $view->with('wishlist_items', $wishlist_items);

            $cart_controller = app()->make(CartItemController::class);
            $cart_items = $cart_controller->userCartItems();
            $view->with('cart_items', $cart_items);
        });
    }
}
