@extends('user.layouts.app')

@section('title', 'Pengajuan Cuti')

@section('content')

    <!-- slider section -->
    <section class="slider_section ">
        <div id="customCarousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="container ">
                        <div class="row">
                            <div class="col-md-5">
                                <div class="detail-box">
                                    <h1>
                                        For All Employees <br>
                                        Who Want To Register For Leave
                                    </h1>
                                    <p>
                                        Pengajuan Cuti Pegawai adalah platform yang dirancang untuk mempermudah dan
                                        mempercepat pegawai dalam mengajukan cuti secara efisien dan terstruktur. Kami
                                        menyediakan sistem yang user-friendly dengan fitur-fitur modern untuk mempermudah
                                        proses pengajuan, persetujuan, dan manajemen cuti secara keseluruhan.
                                    </p>
                                    <div class="btn-box">
                                        <a href="{{ url('/contact') }}" class="btn1">
                                            Contact Us
                                        </a>
                                        <a href="{{ url('/about') }}" class="btn2">
                                            About Us
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-7">
                                <div class="img-box">
                                    <img src="{{ asset('home/images/b2.jpg') }}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="container ">
                        <div class="row">
                            <div class="col-md-5">
                                <div class="detail-box">
                                    <h1>
                                        For All Employees <br>
                                        Who Want To Register For Leave
                                    </h1>
                                    <p>
                                        Pengajuan Cuti Pegawai adalah platform yang dirancang untuk mempermudah dan
                                        mempercepat pegawai dalam mengajukan cuti secara efisien dan terstruktur. Kami
                                        menyediakan sistem yang user-friendly dengan fitur-fitur modern untuk mempermudah
                                        proses pengajuan, persetujuan, dan manajemen cuti secara keseluruhan.
                                    </p>
                                    <div class="btn-box">
                                        <a href="" class="btn1">
                                            Contact Us
                                        </a>
                                        <a href="" class="btn2">
                                            About Us
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-7">
                                <div class="img-box">
                                    <img src="{{ asset('home/images/b2.jpg') }}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="container ">
                        <div class="row">
                            <div class="col-md-5">
                                <div class="detail-box">
                                    <h1>
                                        For All Employees <br>
                                        Who Want To Register For Leave
                                    </h1>
                                    <p>
                                        Pengajuan Cuti Pegawai adalah platform yang dirancang untuk mempermudah dan
                                        mempercepat pegawai dalam mengajukan cuti secara efisien dan terstruktur. Kami
                                        menyediakan sistem yang user-friendly dengan fitur-fitur modern untuk mempermudah
                                        proses pengajuan, persetujuan, dan manajemen cuti secara keseluruhan.
                                    </p>
                                    <div class="btn-box">
                                        <a href="" class="btn1">
                                            Contact Us
                                        </a>
                                        <a href="" class="btn2">
                                            About Us
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-7">
                                <div class="img-box">
                                    <img src="{{ asset('home/images/b2.jpg') }}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <ol class="carousel-indicators">
                <li data-target="#customCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#customCarousel" data-slide-to="1"></li>
                <li data-target="#customCarousel" data-slide-to="2"></li>
            </ol>
        </div>
    </section>
    <!-- end slider section -->
    </div>

    <!-- furniture section -->

    <section class="furniture_section layout_padding">
        <div class="container">
            <div class="heading_container">
                <h2>
                    Our Furniture
                </h2>
                <p>
                    which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to
                    be sure there isn't an
                </p>
            </div>
            <div class="row">
                <div class="col-md-6 col-lg-4">
                    <div class="box">
                        <div class="img-box">
                            <img src="images/f1.png" alt="">
                        </div>
                        <div class="detail-box">
                            <h5>
                                brown Chair Design
                            </h5>
                            <div class="price_box">
                                <h6 class="price_heading">
                                    <span>$</span> 100.00
                                </h6>
                                <a href="">
                                    Buy Now
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="box">
                        <div class="img-box">
                            <img src="images/f2.png" alt="">
                        </div>
                        <div class="detail-box">
                            <h5>
                                Double Bed Design
                            </h5>
                            <div class="price_box">
                                <h6 class="price_heading">
                                    <span>$</span> 200.00
                                </h6>
                                <a href="">
                                    Buy Now
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="box">
                        <div class="img-box">
                            <img src="images/f3.png" alt="">
                        </div>
                        <div class="detail-box">
                            <h5>
                                House Chair Design
                            </h5>
                            <div class="price_box">
                                <h6 class="price_heading">
                                    <span>$</span> 200.00
                                </h6>
                                <a href="">
                                    Buy Now
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="box">
                        <div class="img-box">
                            <img src="images/f4.png" alt="">
                        </div>
                        <div class="detail-box">
                            <h5>
                                brown Table Design
                            </h5>
                            <div class="price_box">
                                <h6 class="price_heading">
                                    <span>$</span> 100.00
                                </h6>
                                <a href="">
                                    Buy Now
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="box">
                        <div class="img-box">
                            <img src="images/f5.png" alt="">
                        </div>
                        <div class="detail-box">
                            <h5>
                                Blue Chair Design
                            </h5>
                            <div class="price_box">
                                <h6 class="price_heading">
                                    <span>$</span> 200.00
                                </h6>
                                <a href="">
                                    Buy Now
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="box">
                        <div class="img-box">
                            <img src="images/f6.png" alt="">
                        </div>
                        <div class="detail-box">
                            <h5>
                                Brown Table Design
                            </h5>
                            <div class="price_box">
                                <h6 class="price_heading">
                                    <span>$</span> 200.00
                                </h6>
                                <a href="">
                                    Buy Now
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- end furniture section -->


    <!-- about section -->

    <section class="about_section layout_padding ">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="img-box">
                        <img src="{{ asset('images/about-img-2.png') }}" alt="">
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
                            Kami berkomitmen untuk memberikan layanan terbaik kepada pengguna kami dengan memastikan bahwa
                            setiap proses terkait cuti pegawai dapat dilakukan dengan transparan dan efektif. Bergabunglah
                            dengan kami untuk mengalami pengalaman pengajuan cuti yang lebih baik dan efisien.
                        </p>
                        <a href="{{ url('/about') }}">
                            Read More
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- end about section -->

    <!-- blog section -->

    <section class="blog_section layout_padding">
        <div class="container">
            <div class="heading_container">
                <h2>
                    Latest Blog
                </h2>
            </div>
            <div class="row">
                <div class="mx-auto col-md-6 col-lg-4">
                    <div class="box">
                        <div class="img-box">
                            <img src="images/b1.jpg" alt="">
                        </div>
                        <div class="detail-box">
                            <h5>
                                Look even slightly believable. If you are
                            </h5>
                            <p>
                                alteration in some form, by injected humour, or randomised words which don't look even
                                slightly believable.
                            </p>
                            <a href="">
                                Read More
                            </a>
                        </div>
                    </div>
                </div>
                <div class="mx-auto col-md-6 col-lg-4">
                    <div class="box">
                        <div class="img-box">
                            <img src="images/b2.jpg" alt="">
                        </div>
                        <div class="detail-box">
                            <h5>
                                Anything embarrassing hidden in the middle
                            </h5>
                            <p>
                                alteration in some form, by injected humour, or randomised words which don't look even
                                slightly believable.
                            </p>
                            <a href="">
                                Read More
                            </a>
                        </div>
                    </div>
                </div>
                <div class="mx-auto col-md-6 col-lg-4">
                    <div class="box">
                        <div class="img-box">
                            <img src="images/b3.jpg" alt="">
                        </div>
                        <div class="detail-box">
                            <h5>
                                Molestias magni natus dolores odio commodi. Quaerat!
                            </h5>
                            <p>
                                alteration in some form, by injected humour, or randomised words which don't look even
                                slightly believable.
                            </p>
                            <a href="">
                                Read More
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- end blog section -->

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
                            <div class="mx-auto col-md-11 col-lg-10">
                                <div class="box">
                                    <div class="img-box">
                                        <img src="images/client.jpg" alt="" />
                                    </div>
                                    <div class="detail-box">
                                        <div class="name">
                                            <i class="fa fa-quote-left" aria-hidden="true"></i>
                                            <h6>
                                                Siaalya
                                            </h6>
                                        </div>
                                        <p>
                                            It is a long established fact that a reader will be
                                            distracted by the readable cIt is a long established fact
                                            that a reader will be distracted by the readable c
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row">
                            <div class="mx-auto col-md-11 col-lg-10">
                                <div class="box">
                                    <div class="img-box">
                                        <img src="images/client.jpg" alt="" />
                                    </div>
                                    <div class="detail-box">
                                        <div class="name">
                                            <i class="fa fa-quote-left" aria-hidden="true"></i>
                                            <h6>
                                                Siaalya
                                            </h6>
                                        </div>
                                        <p>
                                            It is a long established fact that a reader will be
                                            distracted by the readable cIt is a long established fact
                                            that a reader will be distracted by the readable c
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row">
                            <div class="mx-auto col-md-11 col-lg-10">
                                <div class="box">
                                    <div class="img-box">
                                        <img src="images/client.jpg" alt="" />
                                    </div>
                                    <div class="detail-box">
                                        <div class="name">
                                            <i class="fa fa-quote-left" aria-hidden="true"></i>
                                            <h6>
                                                Siaalya
                                            </h6>
                                        </div>
                                        <p>
                                            It is a long established fact that a reader will be
                                            distracted by the readable cIt is a long established fact
                                            that a reader will be distracted by the readable c
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel_btn-container">
                    <a class="carousel-control-prev" href="#carouselExample2Controls" role="button" data-slide="prev">
                        <i class="fa fa-long-arrow-left" aria-hidden="true"></i>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExample2Controls" role="button" data-slide="next">
                        <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- end client section -->

    <!-- contact section -->
    <section class="contact_section ">
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
    <section class="info_section ">

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
        <div class="mx-auto col-sm-6 col-md-4 col-lg-3">
            <div class="info_post">
                <h5>
                </h5>
                <div </div>
                </div>
            </div>
        </div>
        </div>
        </div>
        <div class="social_box">
            <a href="https://web.facebook.com/STTTerpaduNF/?locale=id_ID&_rdc=1&_rdr">
                <i class="fa fa-facebook" aria-hidden="true"></i>
            </a>
            <a href="https://x.com/sttterpadunf1/status/1156387244233519104">
                <i class="fa fa-twitter" aria-hidden="true"></i>
            </a>
            <a href="https://www.linkedin.com/in/sttterpadunf/">
                <i class="fa fa-linkedin" aria-hidden="true"></i>
            </a>
            <a href="https://www.instagram.com/sttnf_official?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw==">
                <i class="fa fa-instagram" aria-hidden="true"></i>
            </a>
        </div>
        </div>
        </div>
        </div>
        </div>
        </div>
    </section>
    <!-- end info_section -->


@endsection
