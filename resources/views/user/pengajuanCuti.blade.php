@extends('user.layouts.app')

@section('title', 'Form Pengajuan Cuti')

@section('content')
<section class="content">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="mt-10 card-header">Form Pengajuan Cuti</div>
                    <div class="card-body">
                        @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                        @endif
                        @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif
                        <form action="{{ route('pengajuanCuti.store') }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="tanggal_awal">Tanggal Awal</label>
                                <input type="date" name="tanggal_awal" class="form-control" id="tanggal_awal" placeholder="Tanggal Awal" required value="{{ old('tanggal_awal') }}">
                            </div>
                            <div class="form-group">
                                <label for="tanggal_akhir">Tanggal Akhir</label>
                                <input type="date" name="tanggal_akhir" class="form-control" id="tanggal_akhir" placeholder="Tanggal Akhir" required value="{{ old('tanggal_akhir') }}">
                            </div>
                            <div class="form-group">
                                <label for="jumlah">Jumlah Hari</label>
                                <input type="number" name="jumlah" class="form-control" id="jumlah" placeholder="Jumlah Hari" required value="{{ old('jumlah') }}">
                            </div>
                            <div class="form-group">
                                <label for="ket">Keterangan</label>
                                <textarea name="ket" class="form-control" id="ket" placeholder="Keterangan">{{ old('ket') }}</textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Ajukan</button>
                            <a href="{{ url('/') }}" class="btn btn-secondary">Kembali</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
