@extends('dashboard.layouts.app')

@section('content')
    <div class="content-wrapper">

        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Tambah Pengajuan Cuti</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ url('dashboard') }}">Home</a></li>
                            <li class="breadcrumb-item active">Pengajuan Cuti</li>
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
                                <a href="{{ route('pengajuanCuti.index') }}" class="btn btn-success btn-sm">Kembali</a>
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
                                <form action="{{ route('pengajuanCuti.store') }}" method="post">
                                    @csrf
                                    <div class="form-group row">
                                        <label for="tanggal_awal" class="col-md-4">Tanggal Awal</label>
                                        <input type="date" name="tanggal_awal" value="{{ old('tanggal_awal') }}" id="tanggal_awal" class="form-control col-md-8">
                                    </div>
                                    <div class="form-group row">
                                        <label for="tanggal_akhir" class="col-md-4">Tanggal Akhir</label>
                                        <input type="date" name="tanggal_akhir" value="{{ old('tanggal_akhir') }}" id="tanggal_akhir" class="form-control col-md-8">
                                    </div>
                                    <div class="form-group row">
                                        <label for="jumlah" class="col-md-4">Jumlah</label>
                                        <input type="number" name="jumlah" value="{{ old('jumlah') }}" id="jumlah" class="form-control col-md-8">
                                    </div>
                                    <div class="form-group row">
                                        <label for="ket" class="col-md-4">Keterangan</label>
                                        <input type="text" name="ket" value="{{ old('ket') }}" id="ket" class="form-control col-md-8">
                                    </div>
                                    @if (auth()->user()->hasRole('admin'))
                                    <div class="form-group row">
                                        <label for="status" class="col-md-4">Status</label>
                                        <input type="text" name="status" value="{{ old('status') }}" id="status" class="form-control col-md-8">
                                    </div>
                                    @endif
                                    @if (auth()->user()->hasRole('pegawai'))
                                    <div class="form-group row">
                                        <input type="text" name="status" value="default" id="status" class="form-control col-md-8" readonly hidden>
                                    </div>
                                    @endif
                                    {{-- <div class="form-group row">
                                        <label for="nip" class="col-md-4">NIP</label>
                                        <select class="form-control select-dropdown col-md-8" name="nip">
                                            @foreach ($pegawai as $pegawai)
                                            <option value="" hidden>NIP</option>
                                            <option value="{{ $pegawai->id }}" required>{{ $pegawai->nip }}</option>
                                            @endforeach
                                          </select>
                                    </div> --}}
                                    
                                   
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
