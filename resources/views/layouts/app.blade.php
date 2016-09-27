@extends('master')

@section('body')
  <div class="container-fluid">
    <div class="row">
    @include('partials.sidebar')
    @yield('content')
    </div>
  </div> 
@endsection
