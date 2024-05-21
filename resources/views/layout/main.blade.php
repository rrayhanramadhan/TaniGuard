<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Main | TaniGuard</title>



  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('lte/plugins/fontawesome-free/css/all.min.css') }}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="{{asset('lte/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{asset('lte/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
  <!-- JQVMap -->
  <link rel="stylesheet" href="{{asset('lte/plugins/jqvmap/jqvmap.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('lte/dist/css/adminlte.min.css') }}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{asset('lte/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{asset('lte/plugins/daterangepicker/daterangepicker.css') }}">
  <!-- summernote -->
  <link rel="stylesheet" href="{{asset('lte/plugins/summernote/summernote-bs4.min.css') }}">
  
  <!-- CSS STYLE -->
  <link rel="stylesheet" href="{{asset('rumtana/css/style.css') }}">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader/ transisi ke atas reload -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="{{asset('images/brand_logo.png')}}" alt="TaniGuard" height="50" width="100">
  </div>

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- SIDEBAR PROFIL BAWAH INI -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{asset('storage/gambar-profil/' . Auth::user()->image)}}" class="img-circle elevation-2" alt="{{$akun->username}} Image" >
          
        </div>
        <div class="info">
          <a class="d-block capitalize-first" style="font-weight: bold" >{{$akun->username}}</a>
        </div>
      </div>
      {{-- SIDEBAR PROFIL ATAS INI --}}

      <!-- Sidebar MENU FITUR TANIGUARD -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
               {{-- front-dasboard --}}
          {{-- <li class="nav-item menu-open"> --}}
            @if (auth()->user()->hasRole('admin') || auth()->user()->hasRole('pengguna'))
            <li class="nav-item ">
              <a href=" {{ route('admin.dasboard') }} " class="nav-link">
                 
                <i class="nav-icon fas fa-home"></i>
                <p>
                  Dashboard
                  <i class="right "></i>
                </p>
              </a>
            </li>
            @endif
            @if (auth()->user()->hasRole('admin') || auth()->user()->hasRole('pengguna'))
            <li class="nav-item ">
              <a href=" {{route('profil')}} " class="nav-link">
                 
                <i class="nav-icon fas fa-user-circle"></i>
                <p>
                  Profil
                  <i class="right "></i>
                </p>
              </a>
            </li>
            @endif
          {{-- back-dasboard --}}

          {{-- front-wigdet --}}
          @if (auth()->user()->hasRole('admin'))
          <li class="nav-item">
            <a href=" {{ route('akun') }} " class="nav-link">
              <i class="nav-icon fas fa-database"></i>
              <p>
                Data Petani
                {{-- <span class="right badge badge-danger">New</span> --}}
              </p>
            </a>
          </li>
          @endif
          
          {{-- back-wigdet --}}

          {{-- front-layout --}}
          @if (auth()->user()->hasRole('admin') || auth()->user()->hasRole('pengguna'))
          <li class="nav-item">
            <a href=" {{ route('admin.artikel') }} " class="nav-link">
              <i class="nav-icon fas fa-newspaper"></i>
              <p>
                Artikel Pertanian
                {{-- <i class="fas fa-angle-left right"></i> --}}
                {{-- <span class="badge badge-info right">6</span> --}}
              </p>
            </a>
          </li>
          @endif
          
          {{-- back-layout --}}
          @if (auth()->user()->hasRole('pengguna'))
          <li class="nav-item">
            <a href=" {{ route('monitoring-RT') }} " class="nav-link">
              <i class="nav-icon fas fa-chart-bar"></i>
              <p>
                Pencatatan Hama
                {{-- <span class="right badge badge-danger">New</span> --}}
              </p>
            </a>
          </li>
          @endif
          

          {{-- front-element --}}
          @if (auth()->user()->hasRole('admin') || auth()->user()->hasRole('pengguna'))
          <li class="nav-item">
            <a href=" {{ route('logout') }} " class="nav-link">
            {{-- <a href=" {{ route('logout') }} " class="nav-link"> --}}
              <i class="nav-icon fas fa-sign-out-alt"></i>
              <p>
                Logout
                {{-- <i class="fas fa-angle-left right"></i> --}}
              </p>
            </a>
          </li>
          @endif
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  @yield('conten')
  <!-- /.content-wrapper -->

  {{-- DIBAWAH INI ADALAH FOOTER  --}}
  {{-- <footer class="main-footer">
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.2.0
    </div>
  </footer> --}}
   {{-- DIATAS INI ADALAH FOOTER  --}}

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="{{asset('lte/plugins/jquery/jquery.min.js') }}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{asset('lte/plugins/jquery-ui/jquery-ui.min.js') }}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="{{asset('lte/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- ChartJS -->
<script src="{{asset('lte/plugins/chart.js/Chart.min.js') }}"></script>
<!-- Sparkline -->
<script src="{{asset('lte/plugins/sparklines/sparkline.js') }}"></script>
<!-- JQVMap -->
<script src="{{asset('lte/plugins/jqvmap/jquery.vmap.min.js') }}"></script>
<script src="{{asset('lte/plugins/jqvmap/maps/jquery.vmap.usa.js') }}"></script>
<!-- jQuery Knob Chart -->
<script src="{{asset('lte/plugins/jquery-knob/jquery.knob.min.js') }}"></script>
<!-- daterangepicker -->
<script src="{{asset('lte/plugins/moment/moment.min.js') }}"></script>
<script src="{{asset('lte/plugins/daterangepicker/daterangepicker.js') }}"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{asset('lte/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}"></script>
<!-- Summernote -->
<script src="{{asset('lte/plugins/summernote/summernote-bs4.min.js') }}"></script>
<!-- overlayScrollbars -->
<script src="{{asset('lte/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{asset('lte/dist/js/adminlte.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{asset('lte/dist/js/demo.js')}}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{asset('lte/dist/js/pages/dashboard.js')}}"></script>
<!-- Sweartalert -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
{{-- file realtime sensor --}}
<script type="text/javascript" src="{{ asset('jquery/jquery.min.js') }}"></script>

{{-- ajax realtime --}}
<script type="text/javascript">
  $(document).ready( function() {
    setInterval( function() {
      $("#respon").load("{{ url('bacarespon') }}") // ini perubahan //bacarespon adalah view
    },500) //1000ms = 1s
  });
</script>



@if ($message = Session::get('success'))
<Script>
  Swal.fire('{{$message}}');
</Script>
@endif
@if ($message = Session::get('update'))
<Script>
  Swal.fire('{{$message}}');
</Script>
@endif
@if ($message = Session::get(''))
<Script>
  Swal.fire('{{$message}}');
</Script>
@endif
</body>
</html>
