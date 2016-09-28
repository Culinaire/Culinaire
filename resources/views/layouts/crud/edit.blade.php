@extends('layouts.app-sidebar')

@section('content')
  @include( "bistro/".str_plural($modelName).'::edit', [ $modelName => $data ])
@endsection
