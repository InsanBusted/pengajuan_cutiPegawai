@extends('dashboard.layouts.app')

@section('content')
<div class="content-wrapper">

        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Edit Jatah Cuti</h1>
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
                                <form action="{{ route('jatahCuti.update', $jatahCuti->id) }}" method="post">
                                    @csrf
                                    @method('put')
                                    <h1>Edit Data Jatah Cuti</h1>
                                    <div class="form-group">
                                        <label for="exampleFormControlInput1">jumlah</label>
                                        <input type="text" name="jumlah" class="form-control" id="exampleFormControlInput1" placeholder="jumlah" required value="{{ old('jumlah', $jatahCuti->jumlah) }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleFormControlInput1">tahun</label>
                                        <input type="text" name="tahun" class="form-control" id="exampleFormControlInput1" placeholder="tahun" required value="{{ old('tahun', $jatahCuti->tahun) }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="nip" >NIP</label>
                                        <select class="form-control select-dropdown" name="nip">
                                            @foreach ($pegawai as $pegawai)
                                            <option value="" hidden>NIP</option>
                                            <option value="{{ $pegawai->id }}" {{ $pegawai->id == $jatahCuti->nip ? 'selected' : '' }} required>{{ $pegawai->nip }}</option>
                                            @endforeach
                                          </select>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Update</button>
                                    <a type="button" href="{{ route('jatahCuti.index') }}" class="btn btn-info">Kembali</a>
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