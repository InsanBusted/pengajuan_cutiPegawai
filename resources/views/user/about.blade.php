@extends('user.layouts.app')

@section('title', 'About Us')

@section('content')
<section class="about_section layout_padding">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="about_detail-box">
                    <h3>
                        Tentang Pengajuan Cuti Pegawai
                    </h3>
                    <p>
                        Sistem Pengajuan Cuti Pegawai ini dirancang untuk memudahkan pegawai dalam mengajukan cuti secara online. 
                        Dengan sistem ini, proses pengajuan cuti menjadi lebih cepat, transparan, dan efisien.
                    </p>
                    <p>
                        Fitur-fitur utama dalam sistem ini meliputi pengajuan cuti, verifikasi oleh atasan, dan pemantauan status pengajuan cuti. 
                        Pegawai dapat mengajukan berbagai jenis cuti seperti cuti tahunan, cuti sakit, dan cuti lainnya melalui platform ini.
                    </p>
                    <p>
                        Kami berkomitmen untuk memberikan layanan terbaik bagi para pegawai agar proses administrasi cuti menjadi lebih mudah dan tidak memerlukan banyak waktu. 
                        Kami terus melakukan pengembangan dan perbaikan sistem agar selalu memenuhi kebutuhan pengguna.
                    </p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="about_img-box">
                    <img src="{{ asset('images/about-img.jpg') }}" alt="Tentang Kami">
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
