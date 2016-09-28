@if (isset($quality) and ! empty($quality))
<h2>Quality</h2>
<ul class="quality">
  @foreach($quality as $q)
  <li>{{ $q }}</li>
  @endforeach
</ul>
@endif
