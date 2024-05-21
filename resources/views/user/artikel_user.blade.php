@extends('layout.user_main')

@section('content-user')
  <div class="content-wrapper">
    <div class="wrapper">
      <!-- navbar -->
      <nav class="navbar navbar-expand-lg navbar-dark bg-transparent position-fixed w-100">
          <div class="container">
              <a class="navbar-brand" href="#">
                  <img src="asset/img/logo small perpetakan.png" alt="" width="30"
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
      </nav>

      <!-- Hero Section -->
      <section id="hero">
          <div class="container h-100">
              <div class="row h-100">
                  <div class="col-md-6 hero-tagline my-auto">
                      <h1>Membantu Temukan Rumah Impian Anda.</h1>
                      <p><span class="fw-bold">Rumah Impian</span> hadir untuk temukan rumah terbaik untukmu, untuk di
                          jual ataupun di sewa dengan sumber terpercaya</p>

                      <button class="button-lg-primary">Temukan Rumah</button>
                      <a href="#">
                          <img src="asset/img/button arrow.png" alt="">
                      </a>
                  </div>
              </div>

              <img src="asset/img/hero banner.png" alt="" class="position-absolute end-0 bottom-0 img-hero">
              <img src="asset/img/aksen.png" alt="" class="aksen-img h-100 position-absolute top-0 start-0">
          </div>

      </section>

      <!-- Layanan section -->
      <section id="layanan">
          <div class="container">
              <div class="row">
                  <div class="col-12 text-center">
                      <h2>Layanan Kami</h2>
                      <span class="sub-title">Rumah impian hadir menjadi solusi bagi kamu</span>
                  </div>
              </div>

              <div class="row mt-5 ">
                  <div class="col-md-4 text-center">
                      <div class="card-layanan">
                          <div class="circle-icon position-relative mx-auto">
                              <img src="asset/img/properti icon baru.png" alt="" class="position-absolute top-50 start-50 translate-middle">
                          </div>
                          <h3 class="mt-4">Properti Baru</h3>
                          <p class="mt-3">
                              Rumah impian kini jadi kenyataan, Beli rumah bary dengan fasilitas terbaik dengan lingkungan yang nyaman.
                          </p>
                      </div>
                  </div>

                  <div class="col-md-4 text-center">
                      <div class="card-layanan">
                          <div class="circle-icon position-relative mx-auto">
                              <img src="asset/img/properti icon sewa.png" alt="" class="position-absolute top-50 start-50 translate-middle">
                          </div>
                          <h3 class="mt-4">Sewa Rumah</h3>
                          <p class="mt-3">
                              Sewa rumah yang indah untuk keluarga anda, pilihan terbaik untuk tempat tinggal keluarga mu.
                          </p>
                      </div>
                  </div>

                  <div class="col-md-4 text-center">
                      <div class="card-layanan">
                          <div class="circle-icon position-relative mx-auto">
                              <img src="asset/img/properti icon jual.png" alt="" class="position-absolute top-50 start-50 translate-middle">
                          </div>
                          <h3 class="mt-4">Beli Rumah</h3>
                          <p class="mt-3">
                              Beli Rumah sempurna dengan harga terbaik kualitas terjamin dari sumber terpercaya.
                          </p>
                      </div>
                  </div>
              
              </div>
          </div>
      </section>

      <!--  Seacrh Section -->
      <section id="search" class="d-flex align-items-center">
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
                              <img src="asset/img/lokasi icon.png" alt="">
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
                              <img src="asset/img/lokasi icon.png" alt="">
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
                              <img src="asset/img/lokasi icon.png" alt="">
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
      </section>
    </div>
    
  </div>
@endsection