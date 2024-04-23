<!--
=========================================================
* Soft UI Dashboard - v1.0.3
=========================================================

* Product Page: https://www.creative-tim.com/product/soft-ui-dashboard
* Copyright 2021 Creative Tim (https://www.creative-tim.com)
* Licensed under MIT (https://www.creative-tim.com/license)

* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<!DOCTYPE html>


<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- @if (env('IS_DEMO'))

  @endif -->

  <link rel="apple-touch-icon" sizes="76x76" href="{{URL::to('/')}}/img/apple-icon.png">
  <link rel="icon" type="image/png" href="{{URL::to('/')}}/img/favicon.png">
  <title>
    Drift
  </title>
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <!-- Nucleo Icons -->
  <link href="{{URL::to('/')}}/assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="{{URL::to('/')}}/assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <link href="{{URL::to('/')}}/assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- CSS Files -->
  <link id="pagestyle" href="{{URL::to('/')}}/assets/css/soft-ui-dashboard.css?v=1.0.3" rel="stylesheet" />

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Include SweetAlert -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <input type="hidden" value="{{url('/')}}" id="url" name="url">
</head>

<body class="g-sidenav-show  bg-gray-100 {{ (\Request::is('rtl') ? 'rtl' : (Request::is('virtual-reality') ? 'virtual-reality' : '')) }} ">
  @auth
    @yield('auth')
  @endauth
  @guest
    @yield('guest')
  @endguest

  @if(session()->has('success'))
    <div x-data="{ show: true}"
        x-init="setTimeout(() => show = false, 4000)"
        x-show="show"
        class="position-fixed bg-success rounded right-3 text-sm py-2 px-4">
      <p class="m-0">{{ session('success')}}</p>
    </div>
  @endif
    <!--   Core JS Files   -->
  <script src="{{URL::to('/')}}/assets/js/core/popper.min.js"></script>
  <script src="{{URL::to('/')}}/assets/js/core/bootstrap.min.js"></script>
  <script src="{{URL::to('/')}}/assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="{{URL::to('/')}}/assets/js/plugins/smooth-scrollbar.min.js"></script>
  <script src="{{URL::to('/')}}/assets/js/plugins/fullcalendar.min.js"></script>
  <script src="{{URL::to('/')}}/assets/js/plugins/chartjs.min.js"></script>
  <!-- <script src="{{URL::to('/')}}/assets/js/js/user.js"></script> -->
<script src="{{URL::to('/')}}/assets/js/js/user.js"></script>
<script src="{{URL::to('/')}}/assets/js/js/company.js"></script>
<script src="{{URL::to('/')}}/assets/js/js/customer.js"></script>
<script src="{{URL::to('/')}}/assets/js/js/color.js"></script>
<script src="{{URL::to('/')}}/assets/js/js/product.js"></script>
  @stack('rtl')
  @stack('dashboard')
  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>

  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="{{URL::to('/')}}/assets/js/soft-ui-dashboard.min.js?v=1.0.3"></script>
</body>

</html>
