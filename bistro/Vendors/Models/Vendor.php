<?php

namespace Bistro\Vendors\Models;

use Illuminate\Database\Eloquent\Model;

class Vendor extends Model
{
  protected $table = "vendors";

  public function products()
  {
    return $this->hasMany('Bistro\Products\Models\Product', 'vendor_id');
  }
}