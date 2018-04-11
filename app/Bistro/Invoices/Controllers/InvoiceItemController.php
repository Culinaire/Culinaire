<?php

namespace App\Bistro\Invoices\Controllers;

use App\Bistro\Invoices\Models\InvoiceItem;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class InvoiceItemController extends Controller
{
  /**
  * Display a listing of the resource.
  *
  * @return \Illuminate\Http\Response
  */
  public function index()
  {
    $items = InvoiceItem::all();
    return view('invoice-items.browse')->with('items', $items);
  }

  /**
  * Show the form for creating a new resource.
  *
  * @return \Illuminate\Http\Response
  */
  public function create()
  {
    return view('invoice-items.create');
  }

  /**
  * Store a newly created resource in storage.
  *
  * @param  \Illuminate\Http\Request  $request
  * @return \Illuminate\Http\Response
  */
  public function store(Request $request)
  {
    $input = $request->all();

    $inv = new InvoiceItem();
    $inv->validate($input);
    if($inv) {
      $inv->invoice_number = $request->input('invoice_number');
      $inv->plu = $request->input('plu');
      $inv->description = $request->input('description');
      $inv->purchase_price = $request->input('purchase_price');
      $inv->purchase_qty = $request->input('purchase_qty');
      $inv->purchase_uom = $request->input('purchase_uom');
      $inv->ordered_qty = $request->input('ordered_qty');
      $inv->shipped_qty = $request->input('shipped_qty');
      $inv->sequence = $request->input('sequence');
      $inv->save();
    }

    return redirect()->route('invoices.index')->with('status', 'Invoice added successfully!');
  }

  /**
  * Display the specified resource.
  *
  * @param  int  $id
  * @return \Illuminate\Http\Response
  */
  public function show($id)
  {
    $invoice = InvoiceItem::find($id);
    return view('invoices.show')->with('invoice', $invoice);
  }

  /**
  * Show the form for editing the specified resource.
  *
  * @param  int  $id
  * @return \Illuminate\Http\Response
  */
  public function edit($id)
  {
    $invoice = InvoiceItem::find($id);
    return view('invoices.edit')->with('invoice', $invoice);
  }

  /**
  * Update the specified resource in storage.
  *
  * @param  \Illuminate\Http\Request  $request
  * @param  int  $id
  * @return \Illuminate\Http\Response
  */
  public function update(Request $request, $id)
  {
    $input = $request->all();

    $inv = InvoiceItem::find($id);

    $inv->validate($input);

    if($inv) {
      $inv->invoice_number = $request->input('invoice_number');
      $inv->invoice_date = $request->input('invoice_date');
      $inv->merchant = $request->input('merchant');
      $inv->invoice_total = $request->input('invoice_total');
      $inv->save();
    }

    return redirect()->route('invoices.index')->with('status', 'Invoice updated successfully!');
  }

  /**
  * Remove the specified resource from storage.
  *
  * @param  int  $id
  * @return \Illuminate\Http\Response
  */
  public function destroy($id)
  {
    $inv = InvoiceItem::find($id);
    $inv->delete();
  }
}
