@extends('layouts.app')

@section('content')
  {!! Form::model($merchant, ['route' => ['merchants.update', $merchant->id], 'class'=>'form form-horizontal', 'method' => 'put']) !!}

    {{-- Name --}}
    <div class="form-group">
      {!! Form::label('name', 'Name', ['class'=>'col-sm-2 control-label']) !!}
      <div class="col-sm-6">
        {!! Form::text('name', $merchant->name, ['class'=> 'form-control']) !!}
      </div>
    </div>

    {{-- Phone --}}
    <div class="form-group">
      {!! Form::label('phone', title_case('phone'), ['class'=>'col-sm-2 control-label']) !!}
      <div class="col-sm-6">
        {!! Form::tel('phone', $merchant->phone, ['class'=> 'form-control']) !!}
      </div>
    </div>

    {{-- Fax --}}
    <div class="form-group">
      {!! Form::label('fax', title_case('fax'), ['class'=>'col-sm-2 control-label']) !!}
      <div class="col-sm-6">
        {!! Form::tel('fax', $merchant->fax, ['class'=> 'form-control']) !!}
      </div>
    </div>

    {{-- Address --}}
    <div class="form-group">
      {!! Form::label('address', title_case('address'), ['class'=>'col-sm-2 control-label']) !!}
      <div class="col-sm-6">
        {!! Form::text('address', $merchant->address, ['class'=> 'form-control']) !!}
      </div>
    </div>

    {{-- City --}}
    <div class="form-group">
      {!! Form::label('city', title_case('city'), ['class'=>'col-sm-2 control-label']) !!}
      <div class="col-sm-6">
        {!! Form::text('city', $merchant->city, ['class'=> 'form-control']) !!}
      </div>
    </div>

    {{-- State --}}
    <div class="form-group">
      {!! Form::label('state', title_case('state'), ['class'=>'col-sm-2 control-label']) !!}
      <div class="col-sm-6">
        {!! Form::text('state', $merchant->state, ['class'=> 'form-control']) !!}
      </div>
    </div>

    {{-- Zip Code --}}
    <div class="form-group">
      {!! Form::label('zip', title_case('zip'), ['class'=>'col-sm-2 control-label']) !!}
      <div class="col-sm-6">
        {!! Form::text('zip', $merchant->zip, ['class'=> 'form-control']) !!}
      </div>
    </div>

    {{-- Site URL --}}
    <div class="form-group">
      {!! Form::label('site_url', title_case('site url'), ['class'=>'col-sm-2 control-label']) !!}
      <div class="col-sm-6">
        {!! Form::url('site_url', $merchant->site_url, ['class'=> 'form-control']) !!}
      </div>
    </div>

    {{-- Portal URL --}}
    <div class="form-group">
      {!! Form::label('portal_url', title_case('portal url'), ['class'=>'col-sm-2 control-label']) !!}
      <div class="col-sm-6">
        {!! Form::url('portal_url', $merchant->portal_url, ['class'=> 'form-control']) !!}
      </div>
    </div>

    {{-- Submit --}}
    <div class="form-group">
      <div class="col-sm-offset-2 col-sm-10">
        {!! Form::submit('Update Merchant', ['class'=>'btn btn-success']) !!}
      </div>
    </div>

  {!! Form::close() !!}
@endsection
