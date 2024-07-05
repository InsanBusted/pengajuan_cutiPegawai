@extends('dashboard.layouts.app')

@section('content')
<div class="content-wrapper">

        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Edit Pengajuan Cuti</h1>
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
                                <form action="{{ route('pengajuanCuti.update', $pengajuanCuti->id) }}" method="post">
                                    @csrf
                                    @method('put')
                                    <h1>Edit Data Jabatan</h1>
                                    <div class="form-group">
                                        <label for="exampleFormControlInput1">tanggal awal</label>
                                        <input type="date" name="tanggal_awal" class="form-control" id="exampleFormControlInput1" placeholder="tanggal_awal" required value="{{ old('tanggal_awal', $pengajuanCuti->tanggal_awal) }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleFormControlInput1">tanggal akhir</label>
                                        <input type="date" name="tanggal_akhir" class="form-control" id="exampleFormControlInput1" placeholder="tanggal_akhir" required value="{{ old('tanggal_akhir', $pengajuanCuti->tanggal_akhir) }}">
                                    </div>
                                    
                                    <div class="form-group">
                                        <label for="exampleFormControlInput1"> jumlah</label>
                                        <input type="text" name="jumlah" class="form-control" id="exampleFormControlInput1" placeholder="jumlah" required value="{{ old('jumlah', $pengajuanCuti->jumlah) }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleFormControlInput1">Keterangan</label>
                                        <input type="text" name="ket" class="form-control" id="exampleFormControlInput1" placeholder="ket" required value="{{ old('ket', $pengajuanCuti->ket) }}">
                                    </div>
                                    @if (Auth::user()->hasRole('admin'))
                                    <div class="form-group">
                                        <label for="exampleFormControlInput1">Status</label>
                                        <input type="text" name="status" class="form-control" id="exampleFormControlInput1" placeholder="status" required value="{{ old('status', $pengajuanCuti->status) }}">
                                    </div>
                                    @endif
                                    @if (Auth::user()->hasRole('pegawai'))
                                    <div class="form-group" hidden>
                                        <label for="exampleFormControlInput1">Status</label>
                                        <input type="text" name="status" class="form-control" id="exampleFormControlInput1" placeholder="status" required value="{{ old('status', $pengajuanCuti->status) }}" >
                                    </div>
                                    @endif
                                    <div class="form-group" hidden>
                                        <label for="nip" >NIP</label>
                                        <select class="form-control select-dropdown" name="nip">
                                            @foreach ($pegawai as $pegawai)
                                            <option value="" hidden>NIP</option>
                                            <option value="{{ $pegawai->id }}" {{ $pegawai->id == $pengajuanCuti->nip ? 'selected' : '' }} required>{{ $pegawai->nip }}</option>
                                            @endforeach
                                          </select>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Update</button>
                                    <a type="button" href="{{ url('/pegawai/PengajuanCuti') }}" class="btn btn-info">Kembali</a>
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