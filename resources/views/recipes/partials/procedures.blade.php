@if(isset($procedures) and ! empty($procedures))
<h2>Procedures</h2>
<ol class="procedures">
  @foreach($procedures as $step)
  <li>{{ $step }}</li>
  @endforeach
</ol>
@endif
