<?php

namespace App\Http\Middleware;

use Menu;
use Closure;

class GenerateMenus
{
  /**
  * Handle an incoming request.
  *
  * @param  \Illuminate\Http\Request  $request
  * @param  \Closure  $next
  * @return mixed
  */
  public function handle($request, Closure $next)
  {
    Menu::make('primarynav', function ($menu) {
      //$menu->add('Home');
      $menu->add('Invoices', 'invoices');
      $menu->add('Merchants', 'merchants');
      $menu->add('Products', 'products');
    });

    Menu::make('sidebarnav', function ($menu) {});
    return $next($request);
  }
}
