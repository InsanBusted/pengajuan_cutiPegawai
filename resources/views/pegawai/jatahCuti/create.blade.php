@extends('dashboard.layouts.app')

@section('content')
    <div class="content-wrapper">

        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Tambah Jatah Cuti</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ url('dashboard') }}">Home</a></li>
                            <li class="breadcrumb-item active">Jatah Cuti</li>
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
                                <a href="{{ route('jatahCuti.index') }}" class="btn btn-success btn-sm">Kembali</a>
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
                                <form action="{{ route('jatahCuti.store') }}" method="post">
                                    @csrf
                                   
                                    <div class="form-group row">
                                        <label for="tahun" class="col-md-4">Tahun</label>
                                        <input type="number" name="tahun" value="{{ old('tahun') }}" id="tahun" class="form-control col-md-8">
                                    </div>
                                    <div class="form-group row">
                                        <label for="jumlah" class="col-md-4">Jumlah</label>
                                        <input type="number" name="jumlah" value="{{ old('jumlah') }}" id="jumlah" class="form-control col-md-8">
                                    </div>
                                    <div class="form-group row">
                                        <label for="nip" class="col-md-4">NIP</label>
                                        <select class="form-control select-dropdown col-md-8" name="nip">
                                            @foreach ($pegawai as $pegawai)
                                            <option value="" hidden>NIP</option>
                                            <option value="{{ $pegawai->id }}" required>{{ $pegawai->nip }}</option>
                                            @endforeach
                                          </select>
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
