@extends('master')

@section('body')

  @include('partials.jumbotron')
  <div class="container">
    <div class="row">
      @yield('content')
    </div>
  </div>
  
@endsection
