<?php

namespace App\Bistro\Concepts\Controllers;

use App\Bistro\Concepts\Models\Concept;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ConceptController extends Controller
{
  /**
  * Display a listing of the resource.
  *
  * @return \Illuminate\Http\Response
  */
  public function index()
  {
    $concepts = Concept::all();
    return view('concepts.browse')->with('concepts', $concepts);
  }

  /**
  * Show the form for creating a new resource.
  *
  * @return \Illuminate\Http\Response
  */
  public function create()
  {
    return view('concepts.create');
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

    $con = new Concept();

    $con->validate($input);

    if($con) {
      $con->name = $request->input('name');
      $con->phone = $request->input('phone');
      $con->address = $request->input('address');
      $con->city = $request->input('city');
      $con->state = $request->input('state');
      $con->zip = $request->input('zip');
      $con->site = $request->input('site');
      $con->menu = $request->input('menu');
      $con->cuisine = $request->input('cuisine');
      $con->save();
    }

    return redirect()->route('concepts.index')->with('status', 'Concept added successfully!');
  }

  /**
  * Display the specified resource.
  *
  * @param  int  $id
  * @return \Illuminate\Http\Response
  */
  public function show($id)
  {
    $concept = Concept::find($id);
    return view('concepts.show')->with('concept', $concept);
  }

  /**
  * Show the form for editing the specified resource.
  *
  * @param  int  $id
  * @return \Illuminate\Http\Response
  */
  public function edit($id)
  {
    $concept = Concept::find($id);
    return view('concepts.edit')->with('concept', $concept);
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

    $con = Concept::find($id);

    $con->validate($input);

    if($con) {
      $con->name = $request->input('name');
      $con->phone = $request->input('phone');
      $con->address = $request->input('address');
      $con->city = $request->input('city');
      $con->state = $request->input('state');
      $con->zip = $request->input('zip');
      $con->site = $request->input('site');
      $con->menu = $request->input('menu');
      $con->cuisine = $request->input('cuisine');
      $con->save();
    }

    return redirect()->route('concepts.index')->with('status', 'Concept updated successfully!');
  }

  /**
  * Remove the specified resource from storage.
  *
  * @param  int  $id
  * @return \Illuminate\Http\Response
  */
  public function destroy($id)
  {
    $concept = Concept::find($id);
    $concept->delete();
  }
}
