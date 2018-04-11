@extends('layouts.master')

@push('head')
  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">
@endpush

@section('body')

  <div class="col-sm-3 col-md-2 sidebar">
    {!! $sidebarnav->asUl(['class' => 'nav nav-sidebar']) !!}
  </div>

  <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
    @include('inc.flash.status')

    @yield('content')
  </div>

@endsection
