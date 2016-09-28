<table class="table">
  
  <thead>
    <th>Name</th>
    <th>Category</th>
    <th>Type</th>
    <th>Last Updated</th>
  </thead>
  
  <tbody>
    @foreach($recipes as $recipe)
      <tr>
        <td><a href="{{ route('recipes.show', ['id'=> $recipe->id]) }}">{{ $recipe->name }}</a></td>
        <td>{{ $recipe->category }}</td>
        <td>{{ $recipe->type }}</td>
        <td>{{ $recipe->updated_at }}</td>
      </tr>
    @endforeach
  </tbody>

</table>
