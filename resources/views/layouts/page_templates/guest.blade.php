@include('layouts.navbars.navs.guest')
<div class="wrapper wrapper-full-page">
  <div class="page-header login-page header-filter" filter-color="white" style="background-image: url('{{ asset('material') }}/img/Bg_Shape.svg'); background-size: cover; background-position: left center;align-items: end;" data-color="green">
  <!--   you can change the color of the filter page using: data-color="blue | purple | green | orange | red | rose " -->
    @yield('content')
    @include('layouts.footers.guest')
  </div>
</div>
