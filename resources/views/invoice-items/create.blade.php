@extends('layouts.app')

@section('content')
  {!! Form::open(['route' => 'invoice-items.store', 'class'=>'form form-horizontal']) !!}

    {{-- Invoice Number --}}
    <div class="form-group">
      {!! Form::label('invoice_number', 'Invoice Number', ['class'=>'col-sm-2 control-label']) !!}
      <div class="col-sm-6">
        {!! Form::text('invoice_number', null, ['class'=> 'form-control']) !!}
      </div>
    </div>

    {{-- PLU --}}
    <div class="form-group">
      {!! Form::label('plu', title_case('plu'), ['class'=>'col-sm-2 control-label']) !!}
      <div class="col-sm-6">
        {!! Form::text('plu', old('plu'), ['class'=> 'form-control']) !!}
      </div>
    </div>

    {{-- Description --}}
    <div class="form-group">
      {!! Form::label('description', title_case('description'), ['class'=>'col-sm-2 control-label']) !!}
      <div class="col-sm-6">
        {!! Form::text('description', old('description'), ['class'=> 'form-control']) !!}
      </div>
    </div>

    {{-- Purchase Price --}}
    <div class="form-group">
      {!! Form::label('purchase_price', title_case('purchase price'), ['class'=>'col-sm-2 control-label']) !!}
      <div class="col-sm-6">
        {!! Form::text('purchase_price', old('purchase_price'), ['class'=> 'form-control']) !!}
      </div>
    </div>

    {{-- Purchase Qty --}}
    <div class="form-group">
      {!! Form::label('purchase_qty', title_case('purchase qty'), ['class'=>'col-sm-2 control-label']) !!}
      <div class="col-sm-6">
        {!! Form::text('purchase_qty', old('purchase_qty'), ['class'=> 'form-control']) !!}
      </div>
    </div>

    {{-- Purchase UOM --}}
    <div class="form-group">
      {!! Form::label('purchase_uom', title_case('purchase uom'), ['class'=>'col-sm-2 control-label']) !!}
      <div class="col-sm-6">
        {!! Form::text('purchase_uom', old('purchase_uom'), ['class'=> 'form-control']) !!}
      </div>
    </div>

    {{-- Ordered Qty --}}
    <div class="form-group">
      {!! Form::label('ordered_qty', title_case('ordered qty'), ['class'=>'col-sm-2 control-label']) !!}
      <div class="col-sm-6">
        {!! Form::text('ordered_qty', old('ordered_qty'), ['class'=> 'form-control']) !!}
      </div>
    </div>

    {{-- Shipped Qty --}}
    <div class="form-group">
      {!! Form::label('shipped_qty', title_case('shipped qty'), ['class'=>'col-sm-2 control-label']) !!}
      <div class="col-sm-6">
        {!! Form::text('shipped_qty', old('shipped_qty'), ['class'=> 'form-control']) !!}
      </div>
    </div>

    {{-- Sequence --}}
    <div class="form-group">
      {!! Form::label('sequence', title_case('sequence'), ['class'=>'col-sm-2 control-label']) !!}
      <div class="col-sm-6">
        {!! Form::text('sequence', old('sequence'), ['class'=> 'form-control']) !!}
      </div>
    </div>

    {{-- Submit --}}
    <div class="form-group">
      <div class="col-sm-offset-2 col-sm-10">
        {!! Form::submit('Add Invoice Item', ['class'=>'btn btn-success']) !!}
      </div>
    </div>

  {!! Form::close() !!}
@endsection
