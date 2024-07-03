@extends('dashboard.layouts.app')

@section('content')
<div class="content-wrapper">

        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Edit Pegawai</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ url('dashboard') }}">Home</a></li>
                            <li class="breadcrumb-item active">Pegawai</li>
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
                                <a href="{{ route('pegawai') }}" class="btn btn-success btn-sm">Kembali</a>
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
                                <form action="{{ route('pegawai.update', $pegawai->id) }}" method="post">
                                    @csrf
                                    @method('put')
                                    <h1>Edit Data Pegawai</h1>
                                    <div class="form-group">
                                        <label for="exampleFormControlInput1">NIP</label>
                                        <input type="text" name="nip" class="form-control" id="exampleFormControlInput1" placeholder="Nomor Induk Pekerja" required value="{{ old('nip', $pegawai->nip) }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleFormControlInput1">Gender</label>
                                        <div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="gender" id="laki-laki" value="L" {{ old('gender', $pegawai->gender ) == 'L' ? 'checked' : '' }}>
                                                <label class="form-check-label" for="laki-laki">Laki-Lakii</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="gender" id="perempuan" value="P" {{ old('gender', $pegawai->gender ) == 'P' ? 'checked' : '' }}>
                                                <label class="form-check-label" for="perempuan">Perempuan</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleFormControlInput1">Tempat Lahir</label>
                                        <input type="text" name="tmp_lahir" class="form-control" id="exampleFormControlInput1" placeholder="Tempat Lahir" required value="{{ old('tmp_lahir', $pegawai->tmp_lahir) }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleFormControlInput1">Tanggal Lahir</label>
                                        <input type="date" name="tgl_lahir" class="form-control" id="exampleFormControlInput1" placeholder="Tanggal Lahir" required value="{{ old('tgl_lahir', $pegawai->tgl_lahir) }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleFormControlInput1">No Telpon</label>
                                        <input type="text" name="telpon" class="form-control" id="exampleFormControlInput1" placeholder="No HP Aktif" required value="{{ old('telpon', $pegawai->telpon) }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleFormControlInput1">alamat</label>
                                        <input type="text" name="alamat" class="form-control" id="exampleFormControlInput1" placeholder="alamat" required value="{{ old('alamat', $pegawai->alamat) }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="nip" >Divisi</label>
                                        <select class="form-control select-dropdown" name="divisi_id">
                                            @foreach ($divisi as $divisi1)
                                            <option value="" hidden>Divisi</option>
                                            <option value="{{ $divisi1->id }}" {{ $divisi1->id == $pegawai->divisi_id ? 'selected' : '' }} required>{{ $divisi1->nama }}</option>
                                            @endforeach 
                                          </select>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Update</button>
                                    <a type="button" href="{{ url('/pegawai') }}" class="btn btn-info">Kembali</a>
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