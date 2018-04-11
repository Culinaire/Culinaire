<?php

namespace App\Bistro\Invoices\Controllers;

use App\Bistro\Invoices\Models\Invoice;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class InvoiceController extends Controller
{
  /**
  * Display a listing of the resource.
  *
  * @return \Illuminate\Http\Response
  */
  public function index()
  {
    $invoices = Invoice::all();
    return view('invoices.browse')->with('invoices', $invoices);
  }

  /**
  * Show the form for creating a new resource.
  *
  * @return \Illuminate\Http\Response
  */
  public function create()
  {
    return view('invoices.create');
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

    $inv = new Invoice();
    $inv->validate($input);
    if($inv) {
      $inv->invoice_number = $request->input('invoice_number');
      $inv->invoice_date = $request->input('invoice_date');
      $inv->merchant_id = $request->input('merchant_id');
      $inv->invoice_total = $request->input('invoice_total');
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
    $invoice = Invoice::find($id);
    //dd($invoice->items());
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
    $invoice = Invoice::find($id);
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

    $inv = Invoice::find($id);

    $inv->validate($input);

    if($inv) {
      $inv->invoice_number = $request->input('invoice_number');
      $inv->invoice_date = $request->input('invoice_date');
      $inv->merchant_id = $request->input('merchant_id');
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
    $inv = Invoice::find($id);
    $inv->delete();
  }
}
