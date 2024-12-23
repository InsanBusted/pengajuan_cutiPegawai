@extends('dashboard.layouts.app')

@section('content')
    <div class="content-wrapper">

        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Tambah Divsi</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ url('admin') }}">Home</a></li>
                            <li class="breadcrumb-item active">Divsi</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header d-flex justify-content-between">
                                <a href="{{ route('divisi.index') }}" class="btn btn-success btn-sm">Kembali</a>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                @if (session('success'))
                                <div class="alert alert-success">
                                    {{ session('success') }}
                                </div>
                                @endif
                                @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error )
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                                @endif
                                <form action="{{ route('divisi.store') }}" method="post">
                                    @csrf
                                    <div class="form-group row">
                                        <label for="kode" class="col-md-4">kode</label>
                                        <input type="text" name="kode" value="{{ old('kode') }}" id="kode" class="form-control col-md-8">
                                    </div>
                                    <div class="form-group row">
                                        <label for="nama" class="col-md-4">Nama Divisi</label>
                                        <input type="text" name="nama" value="{{ old('nama') }}" id="nama" class="form-control col-md-8">
                                    </div>
                                    <div class="form-group row">
                                        <label for="manager" class="col-md-4">Nama Manager</label>
                                        <input type="text" name="manager" value="{{ old('manager') }}" id="manager" class="form-control col-md-8">
                                    </div>
                                    <div class="d-flex justify-content-center">
                                        <input type="submit" value="Tambah" class="btn btn-primary">
                                    </div>
                                </form>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
@endsection
