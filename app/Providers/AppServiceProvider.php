<?php

namespace App\Providers;

use App\Observers\ShopObserver;
use App\Observers\WholesaleObserver;
use App\Observers\ProductObserver;
use App\Product;
use App\Shop;
use App\Wholesale;
use Illuminate\Support\ServiceProvider;
use TCG\Voyager\Facades\Voyager;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        Voyager::useModel('Category', \App\Category::class);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Shop::observe(ShopObserver::class);
        Wholesale::observe(WholesaleObserver::class);
        Product::observe(ProductObserver::class);
        Voyager::addAction(\App\Actions\PrintAction::class);
    }
}
