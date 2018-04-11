<table id="browse-merchants" class="table">

  <thead>
    <th class="text-center">ID</th>
    <th class="text-left">Name</th>
    <th class="text-center">Rep</th>
    <th class="text-center">Portal</th>
    <th class="text-center">Actions</th>
  </thead>

  <tbody>
    @foreach ($merchants as $merchant)
      <tr>
        <td class="text-center">{{ $merchant->id }}</td>
        <td class="text-left">{{ $merchant->name }}</td>
        <td class="text-center">{{ $merchant->rep or "&nbsp;" }}</td>
        <td class="text-center">
          @unless ($merchant->portal_url == "")
            <a href="{{ $merchant->portal_url }}">Portal</a>
          @endunless
        </td>
        <td class="text-center">

          <a class="btn btn-primary" href="{{ route('merchants.show', $merchant->id) }}">
            <span class="glyphicon glyphicon-eye-open"></span>
          </a>

          <a class="btn btn-warning" href="{{ route('merchants.edit', $merchant->id) }}">
            <span class="glyphicon glyphicon-pencil"></span>
          </a>

          <a class="btn btn-danger" href="{{ route('merchants.destroy', $merchant->id) }}">
            <span class="glyphicon glyphicon-trash"></span>
          </a>

        </td>
      </tr>
    @endforeach
  </tbody>

</table>
