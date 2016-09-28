@extends('layouts.app-sidebar')

@section('content')
  @include( "bistro/".str_plural($modelName).'::show', [ $modelName => $data ])
@endsection
