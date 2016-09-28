<div class="page-header">
  <h1>
    {{ $product->description }}
    <div class="hidden-print pull-right">
      <a class="btn btn-primary" href="{{ route('products.edit', ['id'=> $product->id]) }}"><span class="fa fa-pencil"></span> Edit</a>
    </div>
  </h1>
</div>