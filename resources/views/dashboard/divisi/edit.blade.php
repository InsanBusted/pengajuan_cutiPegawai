@extends('dashboard.layouts.app')

@section('content')
<div class="content-wrapper">

        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Edit Divisi</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ url('dashboard') }}">Home</a></li>
                            <li class="breadcrumb-item active">Divisi</li>
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
                                <form action="{{ route('divisi.update', $divisi->id) }}" method="post">
                                    @csrf
                                    @method('put')
                                    <h1>Edit Data Jabatan</h1>
                                    <div class="form-group">
                                        <label for="exampleFormControlInput1">Kode</label>
                                        <input type="text" name="kode" class="form-control" id="exampleFormControlInput1" placeholder="kode" required value="{{ old('kode', $divisi->kode) }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleFormControlInput1">Nama Divisi</label>
                                        <input type="text" name="nama" class="form-control" id="exampleFormControlInput1" placeholder="Nama" required value="{{ old('nama', $divisi->nama) }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleFormControlInput1">Nama Manager</label>
                                        <input type="text" name="manager" class="form-control" id="exampleFormControlInput1" placeholder="manager" required value="{{ old('manager', $divisi->manager) }}">
                                    </div>
                                    <button type="submit" class="btn btn-primary">Update</button>
                                    <a type="button" href="{{ url('/dashboard/divisi') }}" class="btn btn-info">Kembali</a>
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