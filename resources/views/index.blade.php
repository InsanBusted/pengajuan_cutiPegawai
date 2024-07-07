@extends('user.layouts.app')

@section('content')

    <section class="about_section layout_padding long_section">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="img-box">
                        <img src="{{ asset('images/about-img.jpg') }}" alt="">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="detail-box">
                        <div class="heading_container">
                            <h2>
                                About Us
                            </h2>
                        </div>
                        <p>
                            Kami berkomitmen untuk memberikan layanan terbaik kepada pengguna kami dengan memastikan
                            bahwa setiap proses terkait cuti pegawai dapat dilakukan dengan transparan dan efektif.
                            Bergabunglah dengan kami untuk mengalami pengalaman pengajuan cuti yang lebih baik dan
                            efisien.
                        </p>
                        <a href="">
                            Read More
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- end about section -->

    <!-- client section -->

    <section class="client_section layout_padding-bottom">
        <div class="container">
            <div class="heading_container">
                <h2>
                    Testimonial
                </h2>
            </div>
            <div id="carouselExample2Controls" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row">
                            <div class="col-md-11 col-lg-10 mx-auto">
                                <div class="box">
                                    <div class="img-box">
                                        <img src="{{ asset('images/person_3.jpg') }}" alt="" />
                                    </div>
                                    <div class="detail-box">
                                        <div class="name">
                                            <i class="fa fa-quote-left" aria-hidden="true"></i>
                                            <h6>
                                                Akbar Fauzan
                                            </h6>
                                        </div>
                                        <p>
                                            "Mengajukan cuti belum pernah semudah ini
                                            Sistem web ini cepat, responsif, dan sangat mudah digunakan.
                                            Saya menghargai transparansi yang diberikan,
                                            memungkinkan saya melihat status permintaan cuti saya secara real-time."
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row">
                            <div class="col-md-11 col-lg-10 mx-auto">
                                <div class="box">
                                    <div class="img-box">
                                        <img src="{{ asset('images/person-1.jpg') }}" alt="" />
                                    </div>
                                    <div class="detail-box">
                                        <div class="name">
                                            <i class="fa fa-quote-left" aria-hidden="true"></i>
                                            <h6>
                                                Sinta Putri
                                            </h6>
                                        </div>
                                        <p>
                                            "Mengelola permintaan cuti dulu merupakan tugas yang merepotkan,
                                            tetapi sistem ini membuatnya sangat mudah
                                            Dashboardnya memberikan gambaran jelas tentang semua permintaan yang
                                            tertunda dan disetujui,
                                            dan notifikasi otomatis memastikan tidak ada yang terlewat.
                                            Alat yang wajib dimiliki untuk setiap departemen HR."
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row">
                            <div class="col-md-11 col-lg-10 mx-auto">
                                <div class="box">
                                    <div class="img-box">
                                        <img src="{{ asset('images/person_2.jpg') }}" alt="" />
                                    </div>
                                    <div class="detail-box">
                                        <div class="name">
                                            <i class="fa fa-quote-left" aria-hidden="true"></i>
                                            <h6>
                                                Ilyas Bahtiar
                                            </h6>
                                        </div>
                                        <p>
                                            "Sistem pengajuan cuti pegawai ini sangat mudah digunakan dan efisien
                                            Antarmukanya bersih dan langkah-langkah untuk mengajukan cuti sangat mudah
                                            dipahami,
                                            Ini merupakan peningkatan besar dari proses manual sebelumnya."
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel_btn-container">
                    <a class="carousel-control-prev" href="#carouselExample2Controls" role="button"
                        data-slide="prev">
                        <i class="fa fa-long-arrow-left" aria-hidden="true"></i>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExample2Controls" role="button"
                        data-slide="next">
                        <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- end client section -->

    <!-- contact section -->
    <section class="contact_section  long_section">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="form_container">
                        <div class="heading_container">
                            <h2>
                                Contact Us
                            </h2>
                        </div>
                        <form action="">
                            <div>
                                <input type="text" placeholder="Your Name" />
                            </div>
                            <div>
                                <input type="text" placeholder="Phone Number" />
                            </div>
                            <div>
                                <input type="email" placeholder="Email" />
                            </div>
                            <div>
                                <input type="text" class="message-box" placeholder="Message" />
                            </div>
                            <div class="btn_box">
                                <button>
                                    SEND
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="map_container">
                        <div class="map">
                            <div id="googleMap"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end contact section -->

    <!-- info section -->
    <section class="info_section long_section">

        <div class="container">
            <div class="contact_nav">
                <a href="">
                    <i class="fa fa-phone" aria-hidden="true"></i>
                    <span>
                        Call : 021 - 786 3191
                    </span>
                </a>
                <a href="">
                    <i class="fa fa-envelope" aria-hidden="true"></i>
                    <span>
                        Email : info@nurulfikri.ac.id
                    </span>
                </a>
                <a href="https://www.google.com/maps/search/stt+nf/@-6.3578491,106.8282384,15z/data=!3m1!4b1?entry=ttu"
                    target="_blank">
                    <i class="fa fa-map-marker" aria-hidden="true"></i>
                    <span>Location</span>
                </a>
            </div>

           
        </div>
    </section>
    <!-- end info_section -->

@endsection

