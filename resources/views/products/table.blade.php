<table id="browse-products" class="table table-striped">
  <thead>
    <th class="text-center">ID</th>
    <th class="text-center">PLU</th>
    <th class="text-left">Name/Description</th>
    <th class="text-center">Brand</th>
    <th class="text-center">Actions</th>
  </thead>
  <tbody>
    @foreach ($products as $product)
      <tr>
        <td class="text-center">{{ $product->id }}</td>
        <td class="text-center">{{ $product->plu }}</td>
        <td class="text-left">{{ $product->name }} / {{ $product->description }}</td>
        <td class="text-center">{{ $product->brand }}</td>
        <td class="text-center">

          <a class="btn btn-primary" href="{{ route('products.show', $product->id) }}">
            <span class="glyphicon glyphicon-eye-open"></span>
          </a>

          <a class="btn btn-warning" href="{{ route('products.edit', $product->id) }}">
            <span class="glyphicon glyphicon-pencil"></span>
          </a>

          <a class="btn btn-danger" href="{{ route('products.destroy', $product->id) }}">
            <span class="glyphicon glyphicon-trash"></span>
          </a>

        </td>
      </tr>
    @endforeach
  </tbody>
</table>
