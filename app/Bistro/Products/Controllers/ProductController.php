<?php

namespace App\Bistro\Products\Controllers;

use App\Bistro\Products\Models\Product;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
  /**
  * Display a listing of the resource.
  *
  * @return \Illuminate\Http\Response
  */
  public function index()
  {
    $products = Product::all();
    return view('products.browse')->with('products', $products);
  }

  /**
  * Show the form for creating a new resource.
  *
  * @return \Illuminate\Http\Response
  */
  public function create()
  {
    return view('products.create');
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

    $pro = new Product();

    $pro->validate($input);

    if($pro) {
      $pro->plu = $request->input('plu');
      $pro->name = $request->input('name');
      $pro->description = $request->input('description');
      $pro->brand = $request->input('brand');
      $pro->merchant_id = $request->input('merchant_id');
      $pro->purchase_qty = $request->input('purchase_qty');
      $pro->purchase_uom = $request->input('purchase_uom');
      $pro->pack_qty = $request->input('pack_qty');
      $pro->pack_size = $request->input('pack_size');
      $pro->pack_uom = $request->input('pack_uom');
      $pro->save();
    }

    return redirect()->route('products.index')->with('status', 'Product added successfully!');
  }

  /**
  * Display the specified resource.
  *
  * @param  int  $id
  * @return \Illuminate\Http\Response
  */
  public function show($id)
  {
    $product = Product::find($id);
    return view('products.show')->with('product', $product);
  }

  /**
  * Show the form for editing the specified resource.
  *
  * @param  int  $id
  * @return \Illuminate\Http\Response
  */
  public function edit($id)
  {
    $product = Product::find($id);
    return view('products.edit')->with('product', $product);
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

    $pro = Product::find($id);

    $pro->validate($input);

    if($pro) {
      $pro->plu = $request->input('plu');
      $pro->name = $request->input('name');
      $pro->description = $request->input('description');
      $pro->brand = $request->input('brand');
      $pro->merchant_id = $request->input('merchant_id');
      $pro->purchase_qty = $request->input('purchase_qty');
      $pro->purchase_uom = $request->input('purchase_uom');
      $pro->pack_qty = $request->input('pack_qty');
      $pro->pack_size = $request->input('pack_size');
      $pro->pack_uom = $request->input('pack_uom');
      $pro->save();
    }

    return redirect()->route('products.index')->with('status', 'Product updated successfully!');
  }

  /**
  * Remove the specified resource from storage.
  *
  * @param  int  $id
  * @return \Illuminate\Http\Response
  */
  public function destroy($id)
  {
    $inv = Product::find($id);
    $inv->delete();
  }
}
