<table id="browse-concepts" class="table">

  <thead>
    <th class="text-center">ID</th>
    <th class="text-left">Name</th>
  </thead>

  <tbody>
    @foreach ($concepts as $concept)
      <tr>
        <td class="text-center">{{ $concept->id }}</td>
        <td class="text-left">{{ $concept->name }}</td>
        <td class="text-center">

          <a class="btn btn-primary" href="{{ route('concepts.show', $concept->id) }}">
            <span class="glyphicon glyphicon-eye-open"></span>
          </a>

          <a class="btn btn-warning" href="{{ route('concepts.edit', $concept->id) }}">
            <span class="glyphicon glyphicon-pencil"></span>
          </a>

          <a class="btn btn-danger" href="{{ route('concepts.destroy', $concept->id) }}">
            <span class="glyphicon glyphicon-trash"></span>
          </a>

        </td>
      </tr>
    @endforeach
  </tbody>

</table>
