@extends('layouts.app')

@section('content')
  {!! Form::model($concept, ['route' => ['concepts.update', $concept->id], 'class'=>'form form-horizontal', 'method' => 'put']) !!}

    {{-- Name --}}
    <div class="form-group">
      {!! Form::label('name', 'Name', ['class'=>'col-sm-2 control-label']) !!}
      <div class="col-sm-6">
        {!! Form::text('name', $concept->name, ['class'=> 'form-control']) !!}
      </div>
    </div>

    {{-- Phone --}}
    <div class="form-group">
      {!! Form::label('phone', title_case('phone'), ['class'=>'col-sm-2 control-label']) !!}
      <div class="col-sm-6">
        {!! Form::tel('phone', $concept->phone, ['class'=> 'form-control']) !!}
      </div>
    </div>

    {{-- Address --}}
    <div class="form-group">
      {!! Form::label('address', title_case('address'), ['class'=>'col-sm-2 control-label']) !!}
      <div class="col-sm-6">
        {!! Form::text('address', $concept->address, ['class'=> 'form-control']) !!}
      </div>
    </div>

    {{-- City --}}
    <div class="form-group">
      {!! Form::label('city', title_case('city'), ['class'=>'col-sm-2 control-label']) !!}
      <div class="col-sm-6">
        {!! Form::text('city', $concept->city, ['class'=> 'form-control']) !!}
      </div>
    </div>

    {{-- State --}}
    <div class="form-group">
      {!! Form::label('state', title_case('state'), ['class'=>'col-sm-2 control-label']) !!}
      <div class="col-sm-6">
        {!! Form::text('state', $concept->state, ['class'=> 'form-control']) !!}
      </div>
    </div>

    {{-- Zip Code --}}
    <div class="form-group">
      {!! Form::label('zip', title_case('zip'), ['class'=>'col-sm-2 control-label']) !!}
      <div class="col-sm-6">
        {!! Form::text('zip', $concept->zip, ['class'=> 'form-control']) !!}
      </div>
    </div>

    {{-- Site URL --}}
    <div class="form-group">
      {!! Form::label('site', title_case('site'), ['class'=>'col-sm-2 control-label']) !!}
      <div class="col-sm-6">
        {!! Form::url('site', $concept->site, ['class'=> 'form-control']) !!}
      </div>
    </div>

    {{-- Menu --}}
    <div class="form-group">
      {!! Form::label('menu', title_case('menu'), ['class'=>'col-sm-2 control-label']) !!}
      <div class="col-sm-6">
        {!! Form::url('menu', $concept->menu, ['class'=> 'form-control']) !!}
      </div>
    </div>

    {{-- Cuisine --}}
    <div class="form-group">
      {!! Form::label('cuisine', title_case('cuisine'), ['class'=>'col-sm-2 control-label']) !!}
      <div class="col-sm-6">
        {!! Form::text('cuisine', $concept->cuisine, ['class'=> 'form-control']) !!}
      </div>
    </div>

    {{-- Submit --}}
    <div class="form-group">
      <div class="col-sm-offset-2 col-sm-10">
        {!! Form::submit('Update Concept', ['class'=>'btn btn-success']) !!}
      </div>
    </div>

  {!! Form::close() !!}
@endsection
