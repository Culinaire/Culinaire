<?php

namespace Bistro\Products\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
  protected $table = "products";

  public function getUnitPriceAttribute()
  {
    $value = $this->purchase_price / $this->pack_size;
    return $value;
  }

  public function vendor()
  {
    return $this->belongsTo('Bistro\Vendors\Models\Vendor');
  }
}