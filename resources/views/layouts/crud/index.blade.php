@extends('layouts.app-sidebar')

@section('content')
  
  <div class="page-header">
    <h1>
      {{ title_case(str_plural($modelName)) }}
      <div class="hidden-print pull-right">
        <a class="btn btn-primary" href="{{ route( str_plural($modelName).'.create') }}"><span class="fa fa-plus"></span> {{ title_case($modelName) }}</a>
      </div>
    </h1>
  </div>

  @include( "bistro/".str_plural($modelName).'::index', [ str_plural($modelName) => $data ])

@endsection
