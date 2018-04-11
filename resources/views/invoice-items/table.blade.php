<table id="browse-invoices" class="table">

  <thead>
    <th class="text-center">Invoice Number</th>
    <th class="text-center">PLU</th>
    <th class="text-left">Description</th>
    <th class="text-center">Purchase Price</th>
    <th class="text-center">Qty Ordered</th>
    <th class="text-center">Qty Shipped</th>
    <th class="text-center">Actions</th>
  </thead>

  <tbody>
    @foreach ($items as $item)
      <tr>
        <td class="text-center">{{ $item->invoice_number }}</td>
        <td class="text-center">{{ $item->plu }}</td>
        <td class="text-left">{{ $item->description }}</td>
        <td class="text-center">{{ $item->purchase_price }}</td>
        <td class="text-center">{{ $item->ordered_qty }}</td>
        <td class="text-center">{{ $item->shipped_qty }}</td>
        <td class="text-center">

          <a class="btn btn-primary" href="{{ route('invoice-items.show', $item->id) }}">
            <span class="glyphicon glyphicon-eye-open"></span>
          </a>

          <a class="btn btn-warning" href="{{ route('invoice-items.edit', $item->id) }}">
            <span class="glyphicon glyphicon-pencil"></span>
          </a>

          <a class="btn btn-danger" href="{{ route('invoice-items.destroy', $item->id) }}">
            <span class="glyphicon glyphicon-trash"></span>
          </a>

        </td>
      </tr>
    @endforeach
  </tbody>

</table>
