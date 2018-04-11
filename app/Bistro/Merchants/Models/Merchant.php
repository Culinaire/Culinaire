<?php

namespace App\Bistro\Merchants\Models;

use App\Bistro\Bistro\Models\Elegant;

class Merchant extends Elegant
{
  // Relationships
  public function invoices()
  {
    return $this->hasMany('App\Bistro\Invoices\Models\Invoice');
  }
}
