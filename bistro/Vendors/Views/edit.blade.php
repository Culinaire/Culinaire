<div class="page-header">
  <h1>Edit: {{ $vendor->name }}</h1>
</div>


{!! Form::model($vendor, ['route' => ['vendors.update', $vendor->id], 'class'=> 'form-horizontal']) !!}

<div class="form-group">
  {!! Form::label('name', 'Name: ', ['class'=>'col-md-3 control-label']) !!}
  <div class="col-md-9">
    {!! Form::text('name', $vendor->name, ['class'=>'form-control']) !!}
  </div>
</div>

<div class="form-group">
  <div class="col-md-9 col-md-offset-3">
    {!! Form::submit('Save', ['class'=>'btn btn-primary']) !!}
  </div>
</div>

{!! Form::close() !!}