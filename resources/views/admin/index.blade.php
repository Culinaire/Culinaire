@extends('layouts.app')

@section('sidebar')
  <li><a href="#">Recipes</a></li>
@endsection

@section('content')

  @hasSection('sidebar')
  <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
  @else
  <div class="col-sm-12 main">
  @endif
  
  <h1 class="page-header">Dashboard</h1>
@endsection
