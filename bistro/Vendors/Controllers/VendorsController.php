<?php

namespace Bistro\Vendors\Controllers;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;

use Bistro\Vendors\Models\Vendor;

class VendorsController extends Controller
{
  protected $modelName = 'vendor';
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    $data = Vendor::all();
    return view('layouts.crud.index', ['modelName'=> $this->modelName, 'data'=> $data]);
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
    return view('layouts.crud.create', ['modelName'=> $this->modelName]);
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request)
  {
    //
  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function show($id)
  {
    $data = Vendor::find($id);
    return view('layouts.crud.show', ['modelName'=> $this->modelName, 'data'=> $data]);
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function edit($id)
  {
    $data = Vendor::find($id);
    return view('layouts.crud.edit', ['modelName'=> $this->modelName, 'data'=> $data]);
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
    //
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function destroy($id)
  {
    //
  } 

}