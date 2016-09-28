@extends('layouts.app-sidebar')

@section('content')
  <h1 class="page-header">{{ title_case(str_plural($modelName)) }}</h1>
  @include( str_plural($modelName).'.create', [ str_plural($modelName) => $data ])
@endsection
