<table class="table">
  
  <thead>
    <th>Name</th>
    <th>Phone Number</th>
    <th>Rep</th>
    <th>Portal</th>
  </thead>
  
  <tbody>
    @foreach($vendors as $vendor)
      <tr>
        <td><a href="{{ route('vendors.show', ['id'=> $vendor->id]) }}">{{ $vendor->name }}</a></td>
        <td>{{ $vendor->phone_number }}</td>
        <td>{{ $vendor->rep_first_name }} {{ $vendor->rep_last_name }}</td>
        <td><a href="{{ $vendor->portal_url }}">Portal</a></td>
      </tr>
    @endforeach
  </tbody>

</table>
