<?php

namespace App\Bistro\Merchants\Controllers;

use App\Bistro\Merchants\Models\Merchant;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MerchantController extends Controller
{
  /**
  * Display a listing of the resource.
  *
  * @return \Illuminate\Http\Response
  */
  public function index()
  {
    $merchants = Merchant::all();
    return view('merchants.browse')->with('merchants', $merchants);
  }

  /**
  * Show the form for creating a new resource.
  *
  * @return \Illuminate\Http\Response
  */
  public function create()
  {
    return view('merchants.create');
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

    $mer = new Merchant();

    $mer->validate($input);

    if($mer) {
      $mer->name = $request->input('name');
      $mer->phone = $request->input('phone');
      $mer->fax = $request->input('fax');
      $mer->address = $request->input('address');
      $mer->city = $request->input('city');
      $mer->state = $request->input('state');
      $mer->zip = $request->input('zip');
      $mer->site_url = $request->input('site_url');
      $mer->portal_url = $request->input('portal_url');
      $mer->save();
    }

    return redirect()->route('merchants.index')->with('status', 'Merchant added successfully!');
  }

  /**
  * Display the specified resource.
  *
  * @param  int  $id
  * @return \Illuminate\Http\Response
  */
  public function show($id)
  {
    $merchant = Merchant::find($id);
    return view('merchants.show')->with('merchant', $merchant);
  }

  /**
  * Show the form for editing the specified resource.
  *
  * @param  int  $id
  * @return \Illuminate\Http\Response
  */
  public function edit($id)
  {
    $merchant = Merchant::find($id);
    return view('merchants.edit')->with('merchant', $merchant);
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

    $mer = Merchant::find($id);

    $mer->validate($input);

    if($mer) {
      $mer->name = $request->input('name');
      $mer->phone = $request->input('phone');
      $mer->fax = $request->input('fax');
      $mer->address = $request->input('address');
      $mer->city = $request->input('city');
      $mer->state = $request->input('state');
      $mer->zip = $request->input('zip');
      $mer->site_url = $request->input('site_url');
      $mer->portal_url = $request->input('portal_url');
      $mer->save();
    }

    return redirect()->route('merchants.index')->with('status', 'Merchant updated successfully!');
  }

  /**
  * Remove the specified resource from storage.
  *
  * @param  int  $id
  * @return \Illuminate\Http\Response
  */
  public function destroy($id)
  {
    $inv = Merchant::find($id);
    $inv->delete();
  }
}
