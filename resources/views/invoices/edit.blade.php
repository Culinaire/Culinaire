@extends('layouts.app')

@section('content')
  {!! Form::model($invoice, ['route' => ['invoices.update', $invoice->id], 'class'=>'form form-horizontal', 'method' => 'put']) !!}

    {{-- Invoice Number --}}
    <div class="form-group">
      {!! Form::label('invoice_number', 'Invoice Number', ['class'=>'col-sm-2 control-label']) !!}
      <div class="col-sm-6">
        {!! Form::text('invoice_number', $invoice->invoice_number, ['class'=> 'form-control']) !!}
      </div>
    </div>

    {{-- Merchant --}}
    <div class="form-group">
      {!! Form::label('merchant_id', 'Merchant', ['class'=>'col-sm-2 control-label']) !!}
      <div class="col-sm-6">
        {!! Form::select('merchant_id', App\Bistro\Merchants\Models\Merchant::pluck('name', 'id'), $invoice->merchant,['class'=> 'form-control']) !!}
      </div>
    </div>


    {{-- Invoice Date --}}
    <div class="form-group">
      {!! Form::label('invoice_date', 'Invoice Date', ['class'=>'col-sm-2 control-label']) !!}
      <div class="col-sm-6">
        {!! Form::date('invoice_date', $invoice->invoice_date, ['class'=> 'form-control']) !!}
      </div>
    </div>

    {{-- Invoice Total --}}
    <div class="form-group">
      {!! Form::label('invoice_total', 'Invoice Total', ['class'=>'col-sm-2 control-label']) !!}
      <div class="col-sm-6">
        {!! Form::text('invoice_total', $invoice->invoice_total, ['class'=> 'form-control']) !!}
      </div>
    </div>

    {{-- Submit --}}
    <div class="form-group">
      <div class="col-sm-offset-2 col-sm-10">
        {!! Form::submit('Update Invoice', ['class'=>'btn btn-success']) !!}
      </div>
    </div>

  {!! Form::close() !!}
@endsection
