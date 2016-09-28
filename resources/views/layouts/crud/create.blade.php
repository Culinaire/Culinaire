@extends('layouts.app-sidebar')

@section('content')
  
  <div class="page-header">
    <h1>Add {{ title_case($modelName) }}</h1>
  </div>
  
  @include( "bistro/".str_plural($modelName).'::create')

@endsection
