@extends('layout.main')

@section('conten')
    <section class="content-wrapper">

        <div class="content-header">

        </div>
        <div class="container" style="text-align: center;">
            {{-- <img src="{{asset('assign/assets/img/brand_logo.png')}}" style="width: 150px; margin-top:50px;"> --}}
            <h2 class="header-RT" style="text-align:center; margin-top:80px; color:black; font-size:20px; ">Monitoring Nilai
                Respon Sensor Secara Real-Time</h2>
        </div>
        <div class="container">
            <div class="card" style="text-align: center; margin-right:100px; margin-left:100px ">
                <div class="card-header" style="background-color: #475D21; color:white">
                    <h4>Respon Sensor</h4>
                </div>
                <div class="card-body">
                    <div style="font-size: 70px">
                        <span id="respon">0</span> {{-- nilai sensor --}}

                    </div>
                </div>
            </div>
        </div>

    </section>
@endsection
