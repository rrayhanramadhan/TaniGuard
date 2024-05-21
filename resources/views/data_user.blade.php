@extends('layout.main')

@section('conten')
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Data Petani</h1>
          </div><!-- /.col -->
          
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    
    <!-- /.content-header -->

    <!-- Main content -->
        <!-- /.row -->
        <div class="row">
          <div class="col-12">
            <div class="card">
                {{-- <div class="card-header"> --}}
                {{-- <a href=" {{route('create_artikel')}} " class="btn btn-primary">Tambah Data</a> --}}
                {{-- <a href=" " class="btn btn-primary">Tambah Data</a> --}}
              {{-- <h3 class="card-title">Responsive Hover Table</h3> --}}

              {{-- <div class="card-tools"> --}}
                {{-- filter --}}
                {{-- <form action="  " method="GET">  --}}
                  {{-- <form action=" {{ route(' dasboard ') }} " method="GET"> --}}
                    {{-- <div class="input-group input-group-sm" style="width: 150px;">
                      <input type="text" name="search" class="form-control float-right" placeholder="Search"> --}}
                      {{-- <input type="text" name="search" class="form-control float-right" placeholder="Search" value=" {{ $request->get('search') }} "> --}}
                      
                      {{-- <div class="input-group-append"> --}}
                        {{-- <button type="submit" class="btn btn-default">
                          <i class="fas fa-search"></i>
                        </button>
                      </div>
                    </div> --}}
                  {{-- </form> --}}
                {{-- </form> --}}
              {{-- </div> --}}
                {{-- </div> --}}
            <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                @if (auth()->user()->hasRole('admin'))
                <table class="table table-hover text-nowrap" border="1">
                  <thead>
                    <tr>
                      <th>Nomor</th>
                      <th>Username</th>
                      <th>Nama</th>
                      <th>Tanggal Registrasi</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($data as $d)
                        <tr>
                          <td>{{$loop->iteration}}</td>
                          <td> {{$d->username}} </td>
                          <td> {{$d->name}} </td>
                          <td>{{$d->created_at}}</td>
                        </tr>
                    @endforeach
                  </tbody>
                </table>
                @endif
                
              </div>
            <!-- /.card-body -->
            </div>
          <!-- /.card -->
          </div>
        </div>
          <!-- /.row -->
    <!-- /.content -->
  </div>
@endsection