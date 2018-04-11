@extends('layouts.master')

@push('head')
  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">
@endpush

@section('body')

  <div class="col-md-8 col-md-offset-2 main">
    @include('inc.flash.status')
    
    @yield('content')
  </div>

@endsection
