<?php

namespace App\Bistro\Invoices\Models;

use App\Bistro\Bistro\Models\Elegant;

class Invoice extends Elegant
{
  protected $dates = [
    'invoice_date',
    'created_at',
    'updated_at'
  ];

  // Relationships
  public function items()
  {
    return $this->hasMany('App\Bistro\Invoices\Models\InvoiceItem', 'invoice_number', 'invoice_number');
  }

  public function merchant()
  {
    return $this->belongsTo('App\Bistro\Merchants\Models\Merchant');
  }
}
