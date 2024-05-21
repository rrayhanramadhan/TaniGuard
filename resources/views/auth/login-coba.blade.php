<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>TaniGuard</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{asset('landing/assets/img/favicon.png') }}" rel="icon">
  <link href="{{asset('landing/assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('landing/assets/vendor/aos/aos.css') }}" rel="stylesheet">
  <link href="{{asset('landing/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{asset('landing/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{asset('landing/assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{asset('landing/assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
  <link href="{{asset('landing/assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{asset('landing/assets/css/style.css') }}" rel="stylesheet">


</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
      <nav id="navbar" class="navbar">
        <i class="mobile-nav-toggle"></i>
      </nav>
      <!-- .navbar -->
    </div>
  </header>
  <!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="col-lg-6 d-flex flex-column justify-content-center">
          <div data-aos="fade-up" data-aos-delay="600">
            <img src="{{asset('assign/assets/img/brand_logo.png') }}" class="img-fluid" alt="">
            {{-- <div class="text-center text-lg-start">
              <a href=" {{route('login')}} " class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center">
                <span>Get Started</span>
                <i class="bi bi-arrow-right"></i>
              </a>
            </div> --}}
          </div>
        </div>
        <div class=" col-sm-5 col-md-8 col-lg-6 col-xl-4 offset-xl-1">
          <div class="card-body">
            {{-- <div class="card-header text-center">
              <h1><b>Selamat Datang!</b></h1>
            </div> --}}
            <form action="{{route('login-proses')}}" method="post" class="form-container" data-aos="flip-left" data-aos-delay="200">
              @csrf
              <div class="card-header text-center my-4">
                <h1>Login</h1>
                {{-- <p class="text-center fw-bold mx-3 mb-0"></p> --}}
              </div>
              <!-- Email input -->
              <div data-mdb-input-init class="form-outline mb-4">
                <label class="form-label" for="form3Example3">Username</label>
                <input type="text" id="form3Example3" class="form-control form-control-lg" name="username" value="{{old('username')}}" placeholder="Masukkan Username Anda" />
              </div>
    
              <!-- Password input -->
              <div data-mdb-input-init class="form-outline mb-3">
                  <label class="form-label" for="form3Example4">Password</label>
                <input type="password" id="form3Example4" class="form-control form-control-lg" name="password" value="{{old('password')}}"
                  placeholder="Masukkan Username Anda" />
              </div>
              <div class="text-center text-lg-start mt-4 pt-2">
                <button type="button" data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-lg"
                  style="padding-left: 2.5rem; padding-right: 2.5rem;">Login</button>
                  @if ($errors->any())
                  <div class="alert alert-danger">
                    <ul>
                      @foreach ($errors->all() as $alert)
                      <li> {{$alert}} </li>
                      @endforeach
                    </ul>
                  </div>     
                  @endif
                <p class="small fw-bold mt-2 pt-1 mb-0">Don't have an account? <a href=  " {{ route('register') }} "
                    class="link-danger">Register</a></p>
              </div>
              
            </form>
          </div>
        </div>
      </div>
    </div>

  </section>
  <!-- End Hero -->

  {{-- <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a> --}}

  <!-- Vendor JS Files -->
  <script src="{{asset('landing/assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
  <script src="{{asset('landing/assets/vendor/aos/aos.js') }}"></script>
  <script src="{{asset('landing/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{asset('landing/assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{asset('landing/assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
  <script src="{{asset('landing/assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
  <script src="{{asset('landing/assets/vendor/php-email-form/validate.js') }}"></script>

  <!-- Template Main JS File -->
  <script src="{{asset('landing/assets/js/main.js') }}"></script>

</body>

</html>