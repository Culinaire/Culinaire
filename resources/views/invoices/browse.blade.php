@extends('layouts.app')

@section('content')
  <table id="browse-invoices" class="table">

    <thead>
      <th>Invoice Number</th>
      <th>Merchant</th>
      <th>Date</th>
      <th>Total</th>
    </thead>

    <tbody>
      @foreach ($invoices as $invoice)
        <tr>
          <td>{{ $invoice->invoice_number }}</td>
          <td>{{ $invoice->merchant }}</td>
          <td>{{ $invoice->invoice_date->toDateString() }}</td>
          <td>{{ $invoice->invoice_total }}</td>
        </tr>
      @endforeach
    </tbody>

  </table>



@endsection
