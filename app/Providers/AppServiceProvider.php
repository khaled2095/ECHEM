<?php

namespace App\Providers;

use App\ExpenseManagement;
use App\Observers\ExpenseManagementObserver;
use App\Observers\ShopObserver;
use App\Observers\WholesaleObserver;
use App\Observers\ProductObserver;
use App\Product;
use App\Shop;
use App\Wholesale;
use Illuminate\Support\ServiceProvider;
use TCG\Voyager\Facades\Voyager;
use Illuminate\Support\Facades\Schema;

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
        ExpenseManagement::observe(ExpenseManagementObserver::class);
        Schema::defaultStringLength(191);
        Voyager::addAction(\App\Actions\PrintAction::class);
        Voyager::addAction(\App\Actions\PrintColl::class);
    }
}
