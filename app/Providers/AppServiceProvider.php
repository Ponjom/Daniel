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
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('*', function ($view) {
            $cart = collect(session('cart'));
            $cartSum = 0;
            foreach ($cart as $item) {
                $cartSum += $item['product']->price * $item['count'];
            }
            $view->with([
                'cart' => $cart,
                'cartSum' => $cartSum,
            ]);
        });
    }
}
