<?php

namespace App\Bistro\Concepts\Models;

use App\Bistro\Bistro\Models\Elegant;

class Concept extends Elegant
{
  // Relationships
  public function invoices()
  {
    return $this->hasMany('App\Bistro\Invoices\Models\Invoice');
  }
}
