<table id="browse-invoices" class="table">

  <thead>
    <th class="text-center">Invoice Number</th>
    <th class="text-left">Merchant</th>
    <th class="text-center">Date</th>
    <th class="text-center">Total</th>
    <th class="text-center">Actions</th>
  </thead>

  <tbody>
    @foreach ($invoices as $invoice)
      <tr>
        <td class="text-center">{{ $invoice->invoice_number }}</td>
        <td class="text-left">{{ $invoice->merchant }}</td>
        <td class="text-center">{{ $invoice->invoice_date->toDateString() }}</td>
        <td class="text-right">{{ $invoice->invoice_total }}</td>
        <td class="text-center">

          <a class="btn btn-primary" href="{{ route('invoices.show', $invoice->id) }}">
            <span class="glyphicon glyphicon-eye-open"></span>
          </a>

          <a class="btn btn-warning" href="{{ route('invoices.edit', $invoice->id) }}">
            <span class="glyphicon glyphicon-pencil"></span>
          </a>

          <a class="btn btn-danger" href="{{ route('invoices.destroy', $invoice->id) }}">
            <span class="glyphicon glyphicon-trash"></span>
          </a>

        </td>
      </tr>
    @endforeach
  </tbody>

</table>
