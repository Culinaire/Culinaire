
@if(isset($ingredients) and ! empty($ingredients))
<h2>Ingredients</h2>
<table id="ingredients" class="table table-condensed">
  <thead>
    <tr>
      <th class="ing-l">Qty</th>
      <th class="ing-m">Unit</th>
      <th class="ing-r">Ingredient</th>
    </tr>
  </thead>
  <tbody>
    @foreach($ingredients as $ing)
      <tr>
        <td class="ing-l">{{ $ing['qty'] }}</td>
        <td class="ing-m">{{ $ing['uom'] }}</td>
        <td class="ing-r">{{ $ing['item'] }}</td>
      </tr>
    @endforeach
  </tbody>
</table>
@endif
