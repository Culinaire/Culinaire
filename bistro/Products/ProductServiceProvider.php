<?php

namespace Bistro\Products;

use Illuminate\Support\ServiceProvider;

class ProductServiceProvider extends ServiceProvider
{
  /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
      $this->loadMigrationsFrom(__DIR__.'/Migrations');
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->alias('product', 'Bistro\Products\ProductFactory');
        $this->app->make('Bistro\Products\Controllers\ProductsController');
    }
}