@extends('layouts.app')

@section('content')
  {!! Form::model($product, ['route' => ['products.update', $product->id], 'class'=>'form form-horizontal', 'method' => 'put']) !!}

  {{-- PLU --}}
  <div class="form-group">
    {!! Form::label('plu', title_case('plu'), ['class'=>'col-sm-2 control-label']) !!}
    <div class="col-sm-6">
      {!! Form::text('plu', $product->plu, ['class'=> 'form-control']) !!}
    </div>
  </div>

  {{-- Name --}}
  <div class="form-group">
    {!! Form::label('name', title_case('name'), ['class'=>'col-sm-2 control-label']) !!}
    <div class="col-sm-6">
      {!! Form::text('name', $product->name, ['class'=> 'form-control']) !!}
    </div>
  </div>

  {{-- Description --}}
  <div class="form-group">
    {!! Form::label('description', title_case('description'), ['class'=>'col-sm-2 control-label']) !!}
    <div class="col-sm-6">
      {!! Form::text('description', $product->description, ['class'=> 'form-control']) !!}
    </div>
  </div>

  {{-- Brand --}}
  <div class="form-group">
    {!! Form::label('brand', title_case('brand'), ['class'=>'col-sm-2 control-label']) !!}
    <div class="col-sm-6">
      {!! Form::text('brand', $product->brand, ['class'=> 'form-control']) !!}
    </div>
  </div>

  {{-- Merchant --}}
  <div class="form-group">
    {!! Form::label('merchant_id', title_case('merchant'), ['class'=>'col-sm-2 control-label']) !!}
    <div class="col-sm-6">
      {!! Form::select('merchant_id', App\Bistro\Merchants\Models\Merchant::pluck('name', 'id'), $product->merchant_id,['class'=> 'form-control']) !!}
    </div>
  </div>

  {{-- Purchase Qty --}}
  <div class="form-group">
    {!! Form::label('purchase_qty', title_case('purchase qty'), ['class'=>'col-sm-2 control-label']) !!}
    <div class="col-sm-6">
      {!! Form::text('purchase_qty', $product->purchase_qty, ['class'=> 'form-control']) !!}
    </div>
  </div>

  {{-- Purchase UOM --}}
  <div class="form-group">
    {!! Form::label('purchase_uom', title_case('purchase uom'), ['class'=>'col-sm-2 control-label']) !!}
    <div class="col-sm-6">
      {!! Form::text('purchase_uom', $product->purchase_uom, ['class'=> 'form-control']) !!}
    </div>
  </div>

  {{-- Pack Qty --}}
  <div class="form-group">
    {!! Form::label('pack_qty', title_case('pack qty'), ['class'=>'col-sm-2 control-label']) !!}
    <div class="col-sm-6">
      {!! Form::text('pack_qty', $product->pack_qty, ['class'=> 'form-control']) !!}
    </div>
  </div>

  {{-- Pack Size --}}
  <div class="form-group">
    {!! Form::label('pack_size', title_case('pack size'), ['class'=>'col-sm-2 control-label']) !!}
    <div class="col-sm-6">
      {!! Form::text('pack_size', $product->pack_size, ['class'=> 'form-control']) !!}
    </div>
  </div>

  {{-- Pack UOM --}}
  <div class="form-group">
    {!! Form::label('pack_uom', title_case('pack uom'), ['class'=>'col-sm-2 control-label']) !!}
    <div class="col-sm-6">
      {!! Form::text('pack_uom', $product->pack_uom, ['class'=> 'form-control']) !!}
    </div>
  </div>

    {{-- Submit --}}
    <div class="form-group">
      <div class="col-sm-offset-2 col-sm-10">
        {!! Form::submit('Update Product', ['class'=>'btn btn-success']) !!}
      </div>
    </div>

  {!! Form::close() !!}
@endsection
