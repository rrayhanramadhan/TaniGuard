@extends('layout.main')

@section('conten')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    {{-- <div class="content-header " style= "border: 1px solid #000; text-center">
      <div class="text-center" style="border: 1px solid #000;  ">
        <h1 class="m-0 ">Dashboard</h1>
      </div>
    </div> --}}
    <!-- Hero Section -->
    @if ((auth()->user()->hasRole('pengguna')))
    <section id="hero">
      <div class="container h-100">
          <div class="row h-100">
              <div class="col-md-6 offset-md-6 hero-tagline my-auto">
                  <h1><span style="color: #D6C3AB">Selamat datang</span> di TaniGuard!</h1>
              </div>
          </div>
      </div>
    </section>
    @endif
    <!-- Layanan section -->
    <section id="layanan">
      <div class="container">
        @if ((auth()->user()->hasRole('admin')))
        <div class="row">
          <div class="col-12 text-center" style="margin-bottom: 0px;">
              <h2 style="font-weight: bold; color:black">Selamat datang di</h2>
              <h2 style="font-weight: bold; color:black"><span style="color: #394A1A">TaniGuard!</span></h2>
          </div>
        </div>
        @endif
          <div class="row" style="justify-content: center; margin-top: 40px;">
            @if ((auth()->user()->hasRole('admin')))
            <div class="col-md-4 text-center">
              <div class="card-layanan" >
                <div class="card-layanan3"></div>
                  <div class=" position-relative mx-auto">
                    <a href="{{ route('admin.artikel') }}">
                      <img src="{{asset('landing/assets/img/artikel.png') }}" alt="" class=" kartu-gambar translate-middle" width="100" height="125" style="margin-bottom: 30px;">
                    </a>
                  </div>
                  <div class="kartu-deskripsi-dash" >
                    <h3 class="" >Artikel Pertanian</h3>
                  <p class="" style="">
                      Lihat tampilan artikel mengenai pertanian yang telah tersedia
                  </p>
                </div>
              </div>
            </div>
            @endif

            @if ((auth()->user()->hasRole('admin')))
            <div class="col-md-4 text-center">
              <div class="card-layanan" >
                  <div class=" position-relative mx-auto">
                    <a href=" {{ route('akun') }} ">
                      <img src="{{asset('landing/assets/img/data petani.png') }}" alt="" class=" kartu-gambar translate-middle" width="100" height="125" style="margin-bottom: 30px;">
                    </a>
                  </div>
                  <div class="kartu-deskripsi-dash" >
                    <h3 class="" >Data Petani</h3>
                  <p class="" style="">
                    Lihat tampilan data akun petani yang telah tercatat dalam sistem
                  </p>
                  </div>
              </div>
            </div>
            @endif
            @if ((auth()->user()->hasRole('pengguna')))
            <div class="col-md-4 text-center">
              <div class="card-layanan" >
                  <h3 class="" style="margin-top: 70px; margin-bottom:40px">Pencatatan Hama Secara Real Time</h3>
                  <a href="{{ route('monitoring-RT') }}" class="btn-kartu" style="color:aliceblue;">Lihat Sekarang</a>
              </div>
            </div>
            @endif

            @if ((auth()->user()->hasRole('pengguna')))
            <div class="col-md-4 text-center">
              <div class="card-layanan" >
                  <h3 class="" style="margin-top: 70px; margin-bottom:40px">Pencatatan Hama Secara History</h3>
                  <a href="{{ route('riwayat') }}" class="btn-kartu" style="color:aliceblue;">Lihat Sekarang</a>
              </div>
            </div>
            @endif
          </div>
      </div>
  </section>


    {{-- <section class="content">
        <div class="container-fluid">
            <div class="row text-center" style= "border: 1px solid #000; ">
              @if (auth()->user()->hasRole('admin'))
              <div class="col-lg-3 col-6">
                <a href="{{ route('admin.artikel') }}">
                    <div class="small-box bg-info">
                        <div class="inner">
                            <img class="animation__shake" src="{{asset('assign/assets/img/brand_logo.png')}}" alt="TaniGuard" height="70" width="100">
          
                          <p>Artikel Pertanian</p>
                        </div>
                        <div class="icon">
                          <i class="ion ion-newspaper-outline"></i>
                        </div>
                        <a href="{{ route('admin.artikel') }}" class="small-box-footer">Lihat sekarang <i class=""></i></a>
                    </div>
                </a>
              </div>
              @endif
              
              @if (auth()->user()->hasRole('admin'))
              <div class="col-lg-3 col-6">
                <a href="{{ route('akun') }}">
                    <div class="small-box bg-success">
                        <div class="inner">
                            <img class="animation__shake" src="{{asset('assign/assets/img/brand_logo.png')}}" alt="TaniGuard" height="70" width="100">
                            <p>Data Petani</p>
                        </div>
                        <div class="icon">
                          <i class="ion ion-newspaper-outline"></i>
                        </div>
                        <a href="{{ route('akun') }}" class="small-box-footer">Lihat sekarang <i class=""></i></a>
                    </div>
                </a>
              </div>
              @endif

              @if (auth()->user()->hasRole('pengguna'))
              <div class="col-lg-3 col-6">
                <a href="{{ route('user.pencatatan') }}">
                    <div class="small-box bg-success">
                        <div class="inner">
                            <img class="animation__shake" src="{{asset('assign/assets/img/brand_logo.png')}}" alt="TaniGuard" height="70" width="100">
                            <p>Pencatatan Hama Secara Real-Time</p>
                        </div>
                        <div class="icon">
                          <i class="ion ion-newspaper-outline"></i>
                        </div>
                        <a href="{{ route('user.pencatatan') }}" class="small-box-footer">Lihat sekarang <i class=""></i></a>
                    </div>
                </a>
              </div>
              @endif

              @if (auth()->user()->hasRole('pengguna'))
              <div class="col-lg-3 col-6">
                <a href="{{ route('user.pencatatan') }}">
                    <div class="small-box bg-success">
                        <div class="inner">
                            <img class="animation__shake" src="{{asset('assign/assets/img/brand_logo.png')}}" alt="TaniGuard" height="70" width="100">
                            <p>Pencatatan Hama Secara History</p>
                        </div>
                        <div class="icon">
                          <i class="ion ion-newspaper-outline"></i>
                        </div>
                        <a href="{{ route('user.pencatatan') }}" class="small-box-footer">Lihat sekarang <i class=""></i></a>
                    </div>
                </a>
              </div>
              @endif
            </div>
        </div>
    </section> --}}
</div>
@endsection