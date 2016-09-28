@if(isset($meta) and ! empty($meta))
<ul class="meta">
  <li>Last Updated: {{ $updated_at }}</li>
  <li>Chit Name: {{ $meta['chit_name'] }}</li>
  <li>Cook Time: {{ $meta['cook_time'] }} minutes</li>
  <li>PLU: {{ $meta['plu'] }}</li>
  <li>Menu Price: {{ $meta['menu_price'] }}</li>
  <li>Service Piece: {{ $meta['service_piece'] }}</li>
  <li>Togo Spec: {{ $meta['togo_spec'] }}</li>
  <li>Menu Type: {{ $meta['menu_type'] }}</li>
  <li>Station: {{ $meta['station'] }}</li>
</ul>
@endif
