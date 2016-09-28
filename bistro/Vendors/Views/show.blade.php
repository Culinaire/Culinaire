<div class="page-header">
  <h1>
    {{ $vendor->name }}
    <div class="hidden-print pull-right">
      <a class="btn btn-primary" href="{{ route('vendors.edit', ['id'=> $vendor->id]) }}"><span class="fa fa-pencil"></span> Edit</a>
    </div>
  </h1>
</div>

@include('bistro/vendors::products', ['products' => $vendor->products ])

<pre>
  <?php print_r($vendor->products); ?>
</pre>