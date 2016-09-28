<?php

namespace Bistro\Vendors\Providers;

use Illuminate\Support\ServiceProvider;

class VendorServiceProvider extends ServiceProvider
{
  /**
   * Bootstrap any application services.
   *
   * @return void
   */
  public function boot()
  {
    //  Routes
    if (! $this->app->routesAreCached()) {
        require __DIR__.'/../routes.php';
    }

    //  Migrations
    $this->loadMigrationsFrom(__DIR__.'/../Migrations');

    //  Views
    $this->loadViewsFrom(__DIR__.'/../Views', 'bistro/vendors');
  }

  /**
   * Register any application services.
   *
   * @return void
   */
  public function register()
  {
    //$this->app->alias();
    $this->app->make('Bistro\Vendors\Controllers\VendorsController');
  }
}