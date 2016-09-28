@extends('master')

@section('body')
  <div class="container-fluid">
    
    <div class="row">
      @include('partials.sidebar')
      
      <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
        
        @yield('content')
      </div>
    </div>

  </div> 
@endsection
