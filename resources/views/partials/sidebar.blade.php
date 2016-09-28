<div class="col-sm-3 col-md-2 sidebar">
  <ul class="nav nav-sidebar">
    <li><a href="{{ route('recipes.index')}}">Recipes</a></li>
    <li><a href="{{ route('products.index')}}">Products</a></li>
    <li><a href="{{ route('vendors.index')}}">Vendors</a></li>
    @yield('sidebar')
  </ul>
</div>