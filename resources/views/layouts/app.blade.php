<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Restrohub') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('public/js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('public/css/app.css') }}" rel="stylesheet">
    <link href="{{asset('public/lib/font-awesome/css/font-awesome.css')}}" rel="stylesheet" />

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
      .py-4 {
        margin-top: 60px;
      }
      .table td {
            white-space: normal;
            line-height: normal;
        }
        .menu-box {
            /*margin-top: 40px;*/
            text-align: center;
        }
        .body-box {
            height: 120px;
        }
        .card-header {
            text-align: center;
            font-weight: 600;
        }
    </style>

    @yield('style')

</head>
<body>
    <div id="app">
        
        {{-- @include('layouts.nav') --}}
        @include('partials.navbar')

        <main class="py-4">
            @yield('content')
        </main>
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
