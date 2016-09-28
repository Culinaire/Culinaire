<?php

namespace Bistro\Recipes\Providers;

use Illuminate\Support\ServiceProvider;

class RecipeServiceProvider extends ServiceProvider
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
    $this->loadViewsFrom(__DIR__.'/../Views', 'bistro/recipes');
  }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
      $this->app->make('Bistro\Recipes\Controllers\RecipesController');
    }
  }