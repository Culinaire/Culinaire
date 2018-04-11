<?php

namespace App\Bistro\Invoices\Models;

use App\Bistro\Bistro\Models\Elegant;

class InvoiceItem extends Elegant
{
  protected $casts = [
    'purchase_price' => 'double',
    'shipped_qty' => 'int',
  ];

  // Relationships
  public function invoice()
  {
    return $this->belongsTo('App\Bistro\Invoices\Models\Invoice', 'invoice_number', 'invoice_number');
  }

  public function product()
  {
    return $this->hasOne('App\Bistro\Products\Models\Product', 'plu', 'plu');
  }
}
