<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Star Admin Premium Bootstrap Admin Dashboard Template</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{asset('public/assets/vendors/iconfonts/mdi/css/materialdesignicons.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/assets/vendors/iconfonts/ionicons/css/ionicons.css')}}">
    <link rel="stylesheet" href="{{asset('public/assets/vendors/iconfonts/typicons/src/font/typicons.css')}}">
    <link rel="stylesheet" href="{{asset('public/assets/vendors/iconfonts/flag-icon-css/css/flag-icon.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/assets/vendors/css/vendor.bundle.base.css')}}">
    <link rel="stylesheet" href="{{asset('public/assets/vendors/css/vendor.bundle.addons.css')}}">
    <!-- endinject -->
    <!-- plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="{{asset('public/assets/css/shared/style.css')}}">
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="{{asset('public/assets/css/demo_1/style.css')}}">
    <!-- End Layout styles -->
    <link rel="shortcut icon" href="{{asset('public/assets/images/favicon.png')}}" />

    <style type="text/css">
      .sidebar {
        background: linear-gradient(to top, #091046, #142673);
      }
      .navbar.default-layout .navbar-brand-wrapper {
        background: #142673;
      }
    </style>

    @yield('style')

  </head>
  <body>
    <div class="container-scroller">

      <!-- navbar start -->
      @include('partials.navbar')
      <!-- navbar end -->

      <div class="container-fluid page-body-wrapper">
        <!-- sidebar start -->
        @include('partials.sidebar')
        <!-- sidebar end -->

        <!-- main-panel start -->
        <div class="main-panel">
          
          @yield('content')
          {{-- <restro-group :restros = "{{ json_encode($restros) }}"></restro-group> --}}
          
          <!-- footer start -->
          @include('partials.footer')
          <!-- footer end -->

        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="{{asset('public/assets/vendors/js/vendor.bundle.base.js')}}"></script>
    <script src="{{asset('public/assets/vendors/js/vendor.bundle.addons.js')}}"></script>
    <!-- endinject -->
    <!-- Plugin js for this page-->
    <!-- End plugin js for this page-->
    <!-- inject:js -->
    <script src="{{asset('public/assets/js/shared/off-canvas.js')}}"></script>
    <script src="{{asset('public/assets/js/shared/misc.js')}}"></script>
    <!-- endinject -->
    <!-- Custom js for this page-->
    <script src="{{asset('public/assets/js/demo_1/dashboard.js')}}"></script>
    <!-- End custom js for this page-->

    @yield('javascript')

  </body>
</html>