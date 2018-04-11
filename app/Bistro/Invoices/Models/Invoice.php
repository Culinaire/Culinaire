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
}
