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
        <div class="row">
            <div class="col-12">
                <div class="card">
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
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $d->username }}</td>
                                            <td>{{ $d->name }}</td>
                                            <td>{{ \Carbon\Carbon::parse($d->created_at)->format('d-m-Y') }}</td>
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
        <!-- /.content -->
    </div>
@endsection
