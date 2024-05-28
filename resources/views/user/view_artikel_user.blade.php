<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  {{-- <title>Main | TaniGuard</title>
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
  <link rel="stylesheet" href="{{asset('lte/plugins/summernote/summernote-bs4.min.css') }}"> --}}

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<!-- font google -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&family=Lexend+Deca&family=Poppins:wght@400;500;700&display=swap">

<!-- Style -->
<link rel="stylesheet" href="{{asset('rumtana/css/style.css') }}">

<!-- logo title bar -->
<link rel="icon" href="{{asset('rumtana/asset/img/logo small perpetakan.png') }}" type="image/x-icon">

<title>Hello, world!</title>
</head>
<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
        <!-- navbar -->
        {{-- <nav class="navbar navbar-expand-lg navbar-dark bg-transparent position-fixed w-100">
            <div class="container">
                <a class="navbar-brand" href="#">
                    <img src="{{asset('rumtana/asset/img/logo small perpetakan.png') }}" alt="" width="30"
                        class="d-inline-block align-text-top mx-2">
                    Rumah Impian</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav mx-auto">
                        <li class="nav-item mx-2">
                            <a class="nav-link active" aria-current="page" href="#">BERANDA</a>
                        </li>
                        <li class="nav-item mx-2">
                            <a class="nav-link" href="#">LAYANAN</a>
                        </li>
                        <li class="nav-item mx-2">
                            <a class="nav-link" href="#">FITUR</a>
                        </li>
                        <li class="nav-item mx-2">
                            <a class="nav-link" href="#">KONTAK</a>
                        </li>
                    </ul>

                    <div>
                        <button class="button-primary">Daftar</button>
                        <button class="button-secondary">Masuk</button>
                    </div>
                </div>
            </div>
        </nav> --}}

        <!-- Hero Section -->
        <section id="hero">
            <div class="container h-100">
                <div class="row h-100">
                    <div class="col-md-5 offset-md-6 hero-tagline my-auto">
                        <h1><span style="color: #D6C3AB">Selamat datang</span> di TaniGuard!</h1>
                    </div>
                </div>
            </div>

        </section>

        <!-- Layanan section -->
        <section id="layanan">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <h2 style="font-weight: bold; color:black">Selamat <span style="color: #394A1A">datang di</span></h2>
                        <h2 style="font-weight: bold; color:black">TaniGuard!</h2>
                    </div>
                </div>

                <div class="row" style="justify-content: center; margin-top: 70px;">
                    <div class="col-md-4 text-center">
                        <div class="card-layanan" >
                            {{-- <a href="">
                                <div class="card-layanan2"></div>
                            </a> --}}
                            <div class=" position-relative mx-auto">
                                <a href="">
                                    <img src="{{asset('landing/assets/img/artikel.png') }}" alt="" class="position-absolute top-50 start-50 translate-middle" width="75" height="100" style="margin-top: 50px">

                                </a>
                            </div>
                            <h3 class="" style="margin-top: 130px">Artikel Pertanian</h3>
                            <p class="mt-3">
                                Lihat tampilan artikel mengenai pertanian yang telah tersedia
                            </p>
                        </div>
                    </div>
                    
                    <div class="col-md-4 text-center">
                        <div class="card-layanan" >
                            <div class=" position-relative mx-auto">
                                <img src="{{asset('landing/assets/img/data petani.png') }}" alt="" class="position-absolute top-50 start-50 translate-middle" width="75" height="100" style="margin-top: 50px">
                            </div>
                            <h3 class="" style="margin-top: 130px">Data Petani</h3>
                            <p class="mt-3">
                                Lihat tampilan data akun petani yang telah tercatat dalam sistem
                            </p>
                        </div>
                    </div>


                    <div class="col-md-4 text-center">
                        <div class="card-layanan" >
                            <h3 class="" style="margin-top: 70px; margin-bottom:40px">Pencatatan Hama Secara Real Time</h3>
                            <a href="" class="btn-kartu" style="color:aliceblue;">Lihat Sekarang</a>
                        </div>
                    </div>
                    <div class="col-md-4 text-center">
                        <div class="card-layanan" >
                            <h3 class="" style="margin-top: 70px; margin-bottom:40px">Pencatatan Hama Secara History</h3>
                            <a href="" class="btn-kartu" style="color:aliceblue;">Lihat Sekarang</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--  Seacrh Section -->
        {{-- <section id="search" class="d-flex align-items-center">
            <div class="container">
                <div class="row">
                <div class="col-12 text text-center">
                    <h2 >
                        Temukan Kebutuhan mu
                    </h2>
                    <p>
                        sekarang Anda dapat menghemat semua hal stres, waktu, dan biaya tersembunyi, dengan ratusan rumah untuk anda
                    </p>
                </div>
                </div>
                <div class="col-10 mx-auto mt-5">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#tanah" type="button" role="tab" aria-controls="home" aria-selected="true">Tanah</button>
                        </li>
        
                        <li class="nav-item" role="presentation">
                        <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#bangunan" type="button" role="tab" aria-controls="profile" aria-selected="false">Bangunan</button>
                        </li>
        
                        <li class="nav-item" role="presentation">
                        <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#forum" type="button" role="tab" aria-controls="contact" aria-selected="false">Forum</button>
                        </li>
        
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="tanah" role="tabpanel" aria-labelledby="home-tab">
        
                            <!-- Dropdown Lokasi-->
                            <div class="input-group input-cari mb-3">
                                <button class="button-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <img src="{{asset('rumtana/asset/img/lokasi icon.png') }}" alt="">
                                    Lokasi Tanah</button>
                                <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">sddcsdcn</a></li>
                                <li><a class="dropdown-item" href="#">Twwscdwc</a></li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="#">Separated link</a></li>
                                </ul>
                                <input type="text" class="form-control" aria-label="Text input with dropdown button" placeholder="cari berdasarkan tipe bangunan atau tanah">
                                <button class="button-primary" type="button" id="button-addon2">Cari</button>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="bangunan" role="tabpanel" aria-labelledby="profile-tab">
                            <div class="input-group input-cari mb-3">
                                <button class="button-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <img src="{{asset('rumtana/asset/img/lokasi icon.png') }}" alt="">
                                    Lokasi Bangunan</button>
                                <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">sddcsdcn</a></li>
                                <li><a class="dropdown-item" href="#">Twwscdwc</a></li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="#">Separated link</a></li>
                                </ul>
                                <input type="text" class="form-control" aria-label="Text input with dropdown button" placeholder="cari berdasarkan tipe bangunan atau tanah">
                                <button class="button-primary" type="button" id="button-addon2">Cari</button>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="forum" role="tabpanel" aria-labelledby="contact-tab">
                            <div class="input-group input-cari mb-3">
                                <button class="button-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <img src="{{asset('rumtana/asset/img/lokasi icon.png') }}" alt="">
                                    Lokasi forum</button>
                                <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">sddcsdcn</a></li>
                                <li><a class="dropdown-item" href="#">Twwscdwc</a></li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="#">Separated link</a></li>
                                </ul>
                                <input type="text" class="form-control" aria-label="Text input with dropdown button" placeholder="cari forum">
                                <button class="button-primary" type="button" id="button-addon2">Cari</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> --}}
        
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
</body>
</html>
