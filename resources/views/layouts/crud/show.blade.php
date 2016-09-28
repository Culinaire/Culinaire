@extends('layouts.app-sidebar')

@section('content')
  @include( str_plural($modelName).'.show', [ $modelName => $data ])
@endsection
