<?php

namespace Bistro\Products\Controllers;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;

use Bistro\Products\Models\Product;

class ProductsController extends Controller
{
  protected $modelName = 'product';
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    $data = Product::all();
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
      $data = Product::find($id);
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
      $data = Product::find($id);
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