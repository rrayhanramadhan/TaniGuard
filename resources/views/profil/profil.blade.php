@extends('layout.main')

@section('conten')
<div class="content-wrapper">
<!-- Content Header (Page header) -->
<section class="content-header">
<div class="container-fluid">
    <div class="row mb-2">
    <div class="col-sm-6">
        <h1>Profil</h1>
    </div>
    <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
        {{-- <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item active">User Profile</li> --}}
        </ol>
    </div>
    </div>
</div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">
<div class="container-fluid">
    <div class="row ">
        <!-- Profile Image -->
        <div class="card card-primary  col-md-12">
            <div class="text-center">
                <img class="profile-user-img img-fluid img-circle"
                    src="{{asset('storage/gambar-profil/' . Auth::user()->image)}}"
                    alt="profile {{$akun->username}}">
            </div> 
            <div class="profil text-center">
            <a href="{{route('profil.edit', ["id" => $akun->id]) }}" class="btn-edit-profil text-center" style="color:aliceblue; display: inline-block; ">Edit</a>
            </div>
                
                {{-- <a href=" {{route('profil.edit', ["id" => $akun->id]) }} " class="btn btn-primary btn-block"><b>Edit</b></a> --}}
            <div class="card-body box-profile">
                <ul class="list-group list-group-unbordered mb-3">
                    {{-- @foreach ($data as $pr) --}}
                    <li class="list-group-item">
                        <b>Nama</b>  <a class="float-right" >{{$akun->name}}</a>
                        {{-- <b>Nama</b>  <a class="float-right">{{$pr->name}}</a> --}}
                    </li>
                    <li class="list-group-item">
                        <b>Username</b> <a class="float-right" >{{$akun->username}}</a>
                        {{-- <b>Username</b> <a class="float-right">{{$pr->username}}</a> --}}
                    </li>
                    <li class="list-group-item">
                        <b>Email</b> <a class="float-right" >{{$akun->email}}</a>
                        {{-- <b>Email</b> <a class="float-right">{{$pr->email}}</a> --}}
                    </li>
                    <li class="list-group-item">
                        <b>Password</b> <a class="float-right" > </a>
                    </li>
                    {{-- @endforeach --}}
                </ul>
            </div>
            <!-- /.card-body -->
        </div><!-- /.card -->
    </div>
    <!-- /.row -->
</div><!-- /.container-fluid -->
</section>
<!-- /.content -->
</div>

@endsection

@section('scripts')
    <script>
        // Saat dokumen selesai dimuat
        document.addEventListener('DOMContentLoaded', function() {
            // Tampilkan SweetAlert jika session 'success' ada
            @if(Session::has('success'))
                Swal.fire({
                    position: "top-end",
                    icon: "success",
                    title: "{{ Session::get('success') }}",
                    showConfirmButton: false,
                    timer: 1500
                });
            @endif
        });
    </script>
@endsection