@extends('layout.main')

@section('conten')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header " style= "">
            <div class="" style="">
                <h1 class="m-0 ">Artikel Pertanian</h1>
            </div>
        </div>

        <!-- /.content-header -->

        <!-- Main content -->
        <!-- /.row -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    @if (auth()->user()->hasRole('admin'))
                        <div class="card-header">
                            <a href=" {{ route('admin.create') }} " class=" btn btn-primary">Tambah</a>
                            {{-- dibawah ini SEARCH BAR --}}
                            {{-- <div class="card-tools">
                  filter
                  <form action="  " method="GET"> 
                    <form action=" {{ route(' dasboard ') }} " method="GET">
                      <div class="input-group input-group-sm" style="width: 150px;">
                        <input type="text" name="search" class="form-control float-right" placeholder="Search"> 
                        <input type="text" name="search" class="form-control float-right" placeholder="Search" value=" {{ $request->get('search') }} ">
                        
                        <div class="input-group-append">
                          <button type="submit" class="btn btn-default">
                            <i class="fas fa-search"></i>
                          </button>
                        </div>
                      </div>
                    </form>
                  </form>
                </div> --}}
                            {{-- diATAS ini SEARCH BAR --}}
                        </div>
                    @endif

                    <!-- /.card-header -->
                    <div class="card-body table-responsive p-0">
                        <table class="table table-hover text-nowrap">
                            <thead>
                                <tr>
                                    @if (auth()->user()->hasRole('admin') || auth()->user()->hasRole('pengguna'))
                                        {{-- <th>ID</th>
                        <th>Gambar</th>
                        <th>Judul</th> --}}
                                    @endif

                                    @if (auth()->user()->hasRole('admin'))
                                        {{-- <th>aksi</th> --}}
                                    @endif

                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($ardata as $ar)
                                    <tr style="text-align: left">
                                        @if (auth()->user()->hasRole('admin') || auth()->user()->hasRole('pengguna'))
                                            <td>{{ $loop->iteration }}</td>
                                            <td> <img src= "{{ asset('storage/gambar-artikel/' . $ar->gambar) }}"
                                                    alt="" width="100"> </td>
                                            <td style=" vertical-align: middle; word-wrap: break-word;"><a
                                                    style="color: black; font-size:20px"
                                                    href="{{ route('view_artikel', ['id' => $ar->id]) }}">
                                                    {{ $ar->judul }} </a></td>
                                        @endif

                                        @if (auth()->user()->hasRole('admin'))
                                            <td style="text-align:justify; vertical-align: middle">
                                                <a style=" text-align:justify; vertical-align: middle"
                                                    href=" {{ route('admin.edit', ['id' => $ar->id]) }} "class="  btn btn-primary"><i
                                                        class="fas fa-pen"></i>Edit</a>
                                                {{-- <a href="  "class="btn btn-primary"><i class="fas fa-pen"></i>Edit</a>  --}}
                                            </td>
                                        @endif
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
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
