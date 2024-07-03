@extends('dashboard.layouts.app')
@section('content')
<div class="content-wrapper" style="min-height: 1113.69px;">

    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Data Pegawai</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Pegawai</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
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
                            <!-- form input -->
                            <form action="{{ route('pegawai.store') }}" method="post">
                                @csrf
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Nip</label>
                                    <input type="text" name="nip" class="form-control" id="exampleFormControlInput1" placeholder="Nomor Induk Pekerja" required value="{{ old('nip') }}">
                                </div>
                               
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Gender</label>
                                    <div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="gender" id="laki-laki" value="L">
                                            <label class="form-check-label" for="laki-laki">Laki-Laki</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="gender" id="perempuan" value="P">
                                            <label class="form-check-label" for="perempuan">Perempuan</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Tempat Lahir</label>
                                    <input type="text" name="tmp_lahir" class="form-control" id="exampleFormControlInput1" placeholder="Tempat Lahir" required value="{{ old('tmp_lahir') }}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Tanggal Lahir</label>
                                    <input type="date" name="tgl_lahir" class="form-control" id="exampleFormControlInput1" placeholder="alamat Member" required value="{{ old('tgl_lahir') }}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">No Telepon</label>
                                    <input type="text" name="telpon" class="form-control" id="exampleFormControlInput1" placeholder="No Telepon Aktif" required value="{{ old('telpon') }}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Alamat</label>
                                    <input type="text" name="alamat" class="form-control" id="exampleFormControlInput1" placeholder="alamat Member" required value="{{ old('alamat') }}">
                                </div>
                                <div class="form-group">
                                    <label for="nip" class="">Divisi</label>
                                    <select class="form-control select-dropdown" name="divisi_id">
                                        <option value="" hidden>--- Pilih Divisi ---</option>
                                        @foreach ($divisi as $divisi)
                                        <option value="{{ $divisi->id }}" required>{{ $divisi->nama }}</option>
                                        @endforeach
                                      </select>
                                </div>
                                <button type="submit" class="btn btn-primary">Tambah</button>
                                <a type="button" href="{{ url('/pegawai') }}" class="btn btn-info">Kembali</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

</div>

@push('script')
    <!-- DataTables  & Plugins -->
    <script src="{{ asset('assets/plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('assets/plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="{{ asset('assets/plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <!-- Page specific script -->
    <script>
        $(function() {
            $("#example1").DataTable({
                "responsive": true,
                "lengthChange": false,
                "autoWidth": false,
                "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
        });
    </script>
@endpush
@push('style')
    <!-- DataTables -->
    <link rel="stylesheet" href="{{ asset('assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
@endpush
