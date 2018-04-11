@extends('layouts.app')

@section('content')
  <table id="browse-merchants" class="table">

    <thead>
      <th>ID</th>
      <th>Name</th>
      <th>Rep</th>
      <th>Portal</th>
    </thead>

    <tbody>
      @foreach ($merchants as $merchant)
        <tr>
          <td>{{ $merchant->id }}</td>
          <td>{{ $merchant->name }}</td>
          <td>{{ $merchant->rep or "&nbsp;" }}</td>
          <td>
            @unless ($merchant->portal_url == "")
              <a href="{{ $merchant->portal_url }}">Portal</a>
            @endunless</td>
        </tr>
      @endforeach
    </tbody>

  </table>



@endsection
