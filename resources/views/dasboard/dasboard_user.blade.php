@extends('layout.user_main')

@section('content-user')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header " style= "border: 1px solid #000; text-center">
      <div class="text-center" style="border: 1px solid #000;  ">
        <h1 class="m-0 ">User Dasboard</h1>
      </div>
    </div>
    <section class="content">
        <div class="container-fluid">
            <div class="row text-center" style= "border: 1px solid #000; ">
                <div class="col-lg-3 col-6">
                    <a href="{{ route('user.artikel') }}">
                        <div class="small-box bg-info">
                            <div class="inner">
                                <img class="animation__shake" src="{{asset('assign/assets/img/brand_logo.png')}}" alt="TaniGuard" height="70" width="100">
              
                              <p>Artikel Pertanian</p>
                            </div>
                            <div class="icon">
                              <i class="ion ion-newspaper-outline"></i>
                            </div>
                            <a href="{{ route('user.artikel') }}" class="small-box-footer">Lihat lebih banyak <i class="fas fa-arrow-circle-right"></i></a>
                          </div>
                    </a>
                  <!-- small box -->
                  
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <a href="{{ route('user.pencatatan') }}">
                        <div class="small-box bg-success">
                            <div class="inner">
                                <img class="animation__shake" src="{{asset('assign/assets/img/brand_logo.png')}}" alt="TaniGuard" height="70" width="100">
                                <p>Pencatatan Hama</p>
                            </div>
                            <div class="icon">
                              <i class="ion ion-newspaper-outline"></i>
                            </div>
                            <a href="{{ route('user.pencatatan') }}" class="small-box-footer">Lihat lebih banyak <i class="fas fa-arrow-circle-right"></i></a>
                          </div>
                    </a>
                  
                </div>
            </div>
        </div>
    </section>
</div>
@endsection