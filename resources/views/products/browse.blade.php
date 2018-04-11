@extends('layouts.app')

@section('content')

  <div class="panel panel-default">
    <div class="panel-heading">
      <div class="container-fluid">
        <div class="row">
          <div class="col-xs-2 pull-right">
            <a class="btn btn-primary btn-block" href="{{ route('products.create') }}"><span class="glyphicon glyphicon-plus"></span> Product</a>
          </div>
          <div class="col-xs-10">
            <h3 class="panel-title">Products</h3>
          </div>
        </div>
      </div>
    </div>

    @include('products.table')
    
  </div>

@endsection
