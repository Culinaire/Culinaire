@extends('layouts.app')

@section('content')
  {!! Form::open(['route' => 'invoices.store', 'class'=>'form form-horizontal']) !!}

    {{-- Invoice Number --}}
    <div class="form-group">
      {!! Form::label('invoice_number', 'Invoice Number', ['class'=>'col-sm-2 control-label']) !!}
      <div class="col-sm-6">
        {!! Form::text('invoice_number', null, ['class'=> 'form-control']) !!}
      </div>
    </div>

    {{-- Merchant --}}
    <div class="form-group">
      {!! Form::label('merchant', 'Merchant', ['class'=>'col-sm-2 control-label']) !!}
      <div class="col-sm-6">
        {!! Form::select('merchant', App\Bistro\Merchants\Models\Merchant::pluck('name', 'id'), old('merchant'),['class'=> 'form-control']) !!}
      </div>
    </div>


    {{-- Invoice Date --}}
    <div class="form-group">
      {!! Form::label('invoice_date', 'Invoice Date', ['class'=>'col-sm-2 control-label']) !!}
      <div class="col-sm-6">
        {!! Form::date('invoice_date', \Carbon\Carbon::now(), ['class'=> 'form-control']) !!}
      </div>
    </div>

    {{-- Invoice Total --}}
    <div class="form-group">
      {!! Form::label('invoice_total', 'Invoice Total', ['class'=>'col-sm-2 control-label']) !!}
      <div class="col-sm-6">
        {!! Form::text('invoice_total', null, ['class'=> 'form-control']) !!}
      </div>
    </div>

    {{-- Submit --}}
    <div class="form-group">
      <div class="col-sm-offset-2 col-sm-10">
        {!! Form::submit('Add Invoice', ['class'=>'btn btn-success']) !!}
      </div>
    </div>

  {!! Form::close() !!}
@endsection
