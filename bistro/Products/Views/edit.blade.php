<div class="page-header">
  <h1>Edit: {{ $product->description }}</h1>
</div>

{!! Form::model($product, ['route' => ['products.update', $product->id], 'class'=> 'form-horizontal']) !!}

<div class="form-group">
  {!! Form::label('description', 'Description: ', ['class'=>'col-md-3 control-label']) !!}
  <div class="col-md-9">
    {!! Form::text('description', $product->description, ['class'=>'form-control']) !!}
  </div>
</div>

<div class="form-group">
  <div class="col-md-9 col-md-offset-3">
    {!! Form::submit('Save', ['class'=>'btn btn-primary']) !!}
  </div>
</div>

{!! Form::close() !!}