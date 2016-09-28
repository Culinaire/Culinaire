<?php

namespace Bistro\Products\Providers;

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
    //  Migrations
    $this->loadMigrationsFrom(__DIR__.'/../Migrations');

    //  Views
    $this->loadViewsFrom(__DIR__.'/../Views', 'bistro/products');
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