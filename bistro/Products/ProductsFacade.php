<?php

namespace Bistro\Products;

class ProductsFacade extends Facade
{
  protected static function getFacadeAccessor() { return 'product'; }
}