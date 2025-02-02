<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
 @stack('title')

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('public/backend') }}/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="{{ asset('public/backend') }}/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{ asset('public/backend') }}/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="{{ asset('public/backend') }}/plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('public/backend') }}/dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{ asset('public/backend') }}/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{ asset('public/backend') }}/plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="{{ asset('public/backend') }}/plugins/summernote/summernote-bs4.min.css">
  {{-- toastr.alert  --}}
  <link rel="stylesheet" href="{{ asset('public/backend') }}/plugins/toastr/toastr.min.css">
  <style>
    .active{
      background: #20BF6B !important;
      color: #fff !important;
    }
    .card-outline{border-color: #20BF6B !important;}
    .btn-primary,.btn-success{
      background: #20BF6B !important; 
      color: #fff !important; 
      border-color: #20BF6B !important;
    }
  </style>
  @stack('css')
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="{{ asset('public/backend') }}/dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
  </div>

@auth
  @include('layouts.admin-partial.topbar')
  @include('layouts.admin-partial.sidebar')
@endauth
  
  @yield('admin-content')
  
@auth
  @include('layouts.admin-partial.footer')
@endauth



 
  

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="{{ asset('public/backend') }}/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{ asset('public/backend') }}/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="{{ asset('public/backend') }}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="{{ asset('public/backend') }}/plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="{{ asset('public/backend') }}/plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="{{ asset('public/backend') }}/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="{{ asset('public/backend') }}/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="{{ asset('public/backend') }}/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="{{ asset('public/backend') }}/plugins/moment/moment.min.js"></script>
<script src="{{ asset('public/backend') }}/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{ asset('public/backend') }}/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="{{ asset('public/backend') }}/plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="{{ asset('public/backend') }}/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="{{ asset('public/backend') }}/dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
{{-- <script src="{{ asset('public/backend') }}/dist/js/demo.js"></script> --}}
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{ asset('public/backend') }}/dist/js/pages/dashboard.js"></script>
<script src="{{ asset('public/backend') }}/plugins/toastr/toastr.min.js"></script>
{{-- -----toaster alert message showing----- --}}
<script>
  @if (Session::has('message'))
      var type = "{{ Session::get('alert-type', 'info') }}"
      switch (type) {
          case 'info':

              toastr.options.timeOut = 10000;
              toastr.info("{{ Session::get('message') }}");
              var audio = new Audio('audio.mp3');
              audio.play();
              break;
          case 'success':

              toastr.options.timeOut = 10000;
              toastr.success("{{ Session::get('message') }}");
              var audio = new Audio('audio.mp3');
              audio.play();

              break;
          case 'warning':

              toastr.options.timeOut = 10000;
              toastr.warning("{{ Session::get('message') }}");
              var audio = new Audio('audio.mp3');
              audio.play();

              break;
          case 'error':

              toastr.options.timeOut = 10000;
              toastr.error("{{ Session::get('message') }}");
              var audio = new Audio('audio.mp3');
              audio.play();

              break;
      }
  @endif
</script>
@stack('scripts')
</body>
</html>
