@extends('dashboard.layouts.app')

@section('content') 
    <div class="content-wrapper">

        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Pengajuan Cuti</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ url('pegawai') }}">Home</a></li>
                            <li class="breadcrumb-item active">Pengajuan Cui</li>
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
                            <div class="card-header">
                                <h3 class="card-title">Data Pengajuan</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <a href="{{ route('pengajuanCuti.create') }}" class="btn btn-primary btn-sm">Tambah</a>
                                @if (session('success'))
                                <div class="alert alert-success">
                                    {{ session('success') }}
                                </div>
                                @endif
                                @if ($kosongPegawai)
                                                <div class="alert alert-danger mt-3" role="alert">
                                                    Tambahkan Data Pegawai Terlebih Dahulu
                                                </div>
                                            @endif
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>NO</th>
                                            <th>Tanggal Awal</th>
                                            <th>Tanggal Akhir</th>
                                            <th>Jumlah</th>
                                            <th>Keterangan</th>
                                            <th>Status</th>
                                            <th>NIP</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if (auth()->user()->hasRole('pegawai'))
                                            @if ($pengajuanCuti1->count() > 0)
                                                @foreach ($pengajuanCuti1 as $pengajuan)
                                                <tr>
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td>{{ $pengajuan->tanggal_awal }}</td>
                                                    <td>{{ $pengajuan->tanggal_akhir }}</td>
                                                    <td>{{ $pengajuan->jumlah }}</td>
                                                    <td>{{ $pengajuan->ket }}</td>
                                                    <td>{{ $pengajuan->status }}</td>
                                                    <td>{{ $pengajuan->pegawai->nip }}</td>
                                                    <td class="d-flex"><a type="button" href="{{ route('pengajuanCuti.edit', $pengajuan->id) }}" class="btn btn-primary mr-4">Edit</a>
                                                        <form action="{{ route('pengajuanCuti.delete', $pengajuan->id) }}" method="post" onsubmit="return confirm('yakin ingin dihapus?')">
                                                        @csrf
                                                        @method('delete')
                                                        <button type="submit" class="btn btn-danger">Delete</button>
                                                        </form>
                                                    </td>
                                                </tr>
                                               @endforeach
                                            @endif
                                        @elseif (auth()->user()->hasRole('admin'))
                                            @foreach ($pengajuanCuti as $pengajuan)
                                                <tr>
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td>{{ $pengajuan->tanggal_awal }}</td>
                                                    <td>{{ $pengajuan->tanggal_akhir }}</td>
                                                    <td>{{ $pengajuan->jumlah }}</td>
                                                    <td>{{ $pengajuan->ket }}</td>
                                                    <td>{{ $pengajuan->status }}</td>
                                                    <td>{{ $pengajuan->pegawai->nip }}</td>
                                                    <td class="d-flex"><a type="button" href="{{ route('pengajuanCuti.edit', $pengajuan->id) }}" class="btn btn-primary mr-4">Edit</a>
                                                        <form action="{{ route('pengajuanCuti.delete', $pengajuan->id) }}" method="post" onsubmit="return confirm('yakin ingin dihapus?')">
                                                        @csrf
                                                        @method('delete')
                                                        <button type="submit" class="btn btn-danger">Delete</button>
                                                        </form>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        @endif
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>NO</th>
                                            <th>Tanggal Awal</th>
                                            <th>Tanggal Akhir</th>
                                            <th>Jumlah</th>
                                            <th>Keterangan</th>
                                            <th>Status</th>
                                            <th>NIP</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </tfoot>
                                </table>
                                @if (auth()->user()->hasRole('admin'))
                                {{ $pengajuanCuti->onEachSide(3)->links() }}
                                @endif
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
