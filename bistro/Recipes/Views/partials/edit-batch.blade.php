{!! Form::model($recipe, ['route'=> ['app.recipes.batch.update',$recipe->id], 'class'=>'form form-horizontal', 'method'=>'put']) !!}

<div class="form-group">
  {!! Form::label('name', 'Name: ', ['class'=>'col-md-3 control-label']) !!}
  <div class="col-md-9">
    {!! Form::text('name', $recipe->name, ['class'=>'form-control']) !!}
  </div>
</div>

<div class="form-group">
  {!! Form::label('slug', 'Slug: ', ['class'=>'col-md-3 control-label']) !!}
  <div class="col-md-9">
    {!! Form::text('slug', $recipe->slug, ['class'=>'form-control']) !!}
  </div>
</div>

<div class="form-group">
  {{ Form::label('yield', 'Yield: ', ['class'=>'col-md-3 control-label']) }}
  <div class="col-md-2">
    {!! Form::text('yield[qty]', $recipe->meta['yield']['qty'], ['class'=>'form-control']) !!}
  </div>
  <div class="col-md-3">
    {!! Form::select('yield[uom]', $recipe->uoms(), $recipe->meta['yield']['uom'], ['class'=>'form-control']) !!}
  </div>
</div>

<div class="form-group">
  {!! Form::label('file', 'File: ', ['class'=>'col-md-3 control-label']) !!}
  <div class="col-md-9">
    {!! Form::text('file', $recipe->file, ['class'=>'form-control']) !!}
  </div>
</div>

<div class="form-group">
  <div class="col-md-9 col-md-offset-3">
    {!! Form::submit('Save', ['class'=>'btn btn-primary']) !!}
  </div>
</div>


{!! Form::close() !!}
