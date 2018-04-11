<table class="table table-striped">
  <thead>
    <th class="text-center">Plu</th>
    <th class="text-left">Item</th>
    <th class="text-center">Price</th>
    <th class="text-center">Qty Ordered</th>
    <th class="text-center">Qty Shipped</th>
    <th class="text-center">Extension</th>
  </thead>
  <tbody>
    @foreach ($invoice->items as $item)
      <tr>
        <td class="text-center">{{ $item->plu }}</td>
        <td class="text-left">{{ $item->product->name or $item->product->description }}</td>
        <td class="text-center">{{ $item->purchase_price }}</td>
        <td class="text-center">{{ $item->ordered_qty }}</td>
        <td class="text-center">{{ $item->shipped_qty }}</td>
        <td class="text-center">
          @php
          $price = (float) $item->purchase_price;
          $qty = (int) $item->shipped_qty;
            echo $price * $qty;
          @endphp
         </td>
      </tr>
    @endforeach
  </tbody>
</table>
