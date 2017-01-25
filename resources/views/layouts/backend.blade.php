@include('admin_template/head')
  <div class="container body">
    <div class="main_container">
      @include('admin_template/sidebar')
      <!-- top navigation -->
      @include('admin_template/top')
      <!-- /top navigation -->
      <!-- page content -->
          @yield('content')
      <!-- /page content -->
      <!-- footer content -->
      @include('admin_template/footer')