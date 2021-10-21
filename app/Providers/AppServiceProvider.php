<?php

namespace App\Providers;

use App\Contract\ProductInterface;
use App\Contract\ProductInterfaceContract;
use App\Repositories\ProductRepository;
use App\Repositories\ProductRepositoryV2;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    public $singletons = [
//        ProductInterface::class => ProductRepositoryV2::class,
        ProductInterface::class => ProductInterfaceContract::class,
    ];
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
//        $this->app->bind(ProductInterface::class, ProductInterfaceContract::class);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(190);
    }
}
