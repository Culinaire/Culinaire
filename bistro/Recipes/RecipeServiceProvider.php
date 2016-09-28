<?php

namespace Bistro\Recipes;

use Bistro\Recipes\RecipeFactory;

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
      $this->loadMigrationsFrom(__DIR__.'/Migrations');
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