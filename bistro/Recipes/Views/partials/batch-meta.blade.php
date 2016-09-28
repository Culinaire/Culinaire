@if(isset($meta) and ! empty($meta))
<ul class="meta">
  
  <li>Yield: {{ $meta['yield']['qty'] }} {{ $meta['yield']['uom'] }}</li>
  <li>Category: {{ $meta['category'] }}</li>
  <li>Prep Time:
      {{ $meta['prep_time']['active'] }} minutes (active)&ensp;&mdash;&ensp;
      {{ $meta['prep_time']['inactive'] }} minutes (inactive)&ensp;&mdash;&ensp;
      @if(isset($meta['prep_time']['active']) and isset($meta['prep_time']['inactive']) and ! empty($meta['prep_time']['active']) and ! empty($meta['prep_time']['inactive']))
        {{ $meta['prep_time']['active']+$meta['prep_time']['inactive'] }} minutes (total)
      @endif
  </li>
</ul>
@endif
