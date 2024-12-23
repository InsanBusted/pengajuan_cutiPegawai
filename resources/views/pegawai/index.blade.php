@extends('dashboard.layouts.app')

@section('content') 
    <div class="content-wrapper">

        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Pegawai</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ url('pegawai') }}">Home</a></li>
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
                            <div class="card-header">
                                <h3 class="card-title">Data Table</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <a href="{{ route('pegawai.create') }}" class="btn btn-primary btn-sm">Tambah</a>
                                @if (session('success'))
                                <div class="alert alert-success">
                                    {{ session('success') }}
                                </div>
                                @endif
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>NO</th>
                                            <th>NIP</th>
                                            <th>Gender</th>
                                            <th>Tempat Lahir</th>
                                            <th>Tanggal Lahir</th>
                                            <th>No Telpon</th>
                                            <th>Alamat</th>
                                            <th>Divisi</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if (auth()->user()->hasRole('pegawai'))
                                            @if ($pegawai2)
                                                <tr>
                                                    <td>1</td>
                                                    <td>{{ $pegawai2->nip }}</td>
                                                    <td>{{ $pegawai2->gender == 'L' ? 'Laki-Laki' : 'Perempuan' }}</td>
                                                    <td>{{ $pegawai2->tmp_lahir }}</td>
                                                    <td>{{ $pegawai2->tgl_lahir }}</td>
                                                    <td>{{ $pegawai2->telpon }}</td>
                                                    <td>{{ $pegawai2->alamat }}</td>
                                                    <td>{{ $pegawai2->divisi->nama }}</td>
                                                    <td class="d-flex"><a type="button" href="{{ route('pegawai.edit', $pegawai2->id) }}" class="btn btn-primary mr-4">Edit</a>
                                                        <form action="{{ route('pegawai.delete', $pegawai2->id) }}" method="post" onsubmit="return confirm('yakin ingin dihapus?')">
                                                        @csrf
                                                        @method('delete')
                                                        <button type="submit" class="btn btn-danger">Delete</button>
                                                        </form>
                                                    </td>
                                                </tr>
                                            @endif
                                        @elseif (auth()->user()->hasRole('admin'))
                                            @foreach ($pegawai as $pegawai1)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $pegawai1->nip }}</td>
                                                <td>{{ $pegawai1->gender == 'L' ? 'Laki-Laki' : 'Perempuan' }}</td>
                                                <td>{{ $pegawai1->tmp_lahir }}</td>
                                                <td>{{ $pegawai1->tgl_lahir }}</td>
                                                <td>{{ $pegawai1->telpon }}</td>
                                                <td>{{ $pegawai1->alamat }}</td>
                                                <td>{{ $pegawai1->divisi->nama }}</td>
                                                <td class="d-flex"><a type="button" href="{{ route('pegawai.edit', $pegawai1->id) }}" class="btn btn-primary mr-4">Edit</a>
                                                    <form action="{{ route('pegawai.delete', $pegawai1->id) }}" method="post" onsubmit="return confirm('yakin ingin dihapus?')">
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
                                            <th>Nama</th>
                                            <th>Gender</th>
                                            <th>Tempat Lahir</th>
                                            <th>Tanggal Lahir</th>
                                            <th>No Telpon</th>
                                            <th>Alamat</th>
                                            <th>Divisi</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </tfoot>
                                </table>
                                {{ $pegawai->onEachSide(3)->links() }}
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
