@extends('layouts.tema.depan.main.app')

@section('judul','SIOLA Prov_Sultra Kota Kendari')

@section('konten')

<body>
    <section id="topbar" class="d-flex align-items-center">
        <div class="container d-flex justify-content-center justify-content-md-between">
            <div class="social-links d-none d-md-flex align-items-center">
                <i class="bi bi-envelope d-flex align-items-center"><a href="mailto:contact@example.com">pengaduan@kemendagri.go.id</a></i>
            </div>
            <div class="social-links d-none d-md-flex align-items-center">
                <i class="bi bi-phone d-flex align-items-center ms-4"><span>(021) 3521468</span></i>
            </div>
        </div>
    </section>

    <!-- include header -->
    @include('layouts.tema.depan.header')
    <!-- ======= Hero Section ======= -->
    <section id="hero">
        <div class="hero-container">
            <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

                <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

                <div class="carousel-inner" role="listbox">

                    <!-- Slide 1 -->
                    <div class="carousel-item active" style="background: url(fronts/assets/img/slide/slide-1.jpg)">
                        <div class="carousel-container">
                            <div class="carousel-content">
                                <h2 class="animate__animated animate__fadeInDown">Welcome to <span>SIOLA</span></h2>
                                <p class="animate__animated animate__fadeInUp">Ut velit est quam dolor ad a aliquid qui aliquid. Sequi
                                    ea ut et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem mollitia ut. Similique ea
                                    voluptatem. Esse doloremque accusamus repellendus deleniti vel. Minus et tempore modi architecto.</p>
                                <a href="" class="btn-get-started animate__animated animate__fadeInUp">Read More</a>
                            </div>
                        </div>
                    </div>

                    <!-- Slide 2 -->
                    <div class="carousel-item" style="background: url(fronts/assets/img/slide/slide-2.png)">
                        <div class="carousel-container">
                            <div class="carousel-content">
                                <h2 class="animate__animated fanimate__adeInDown">Lorem <span>Ipsum Dolor</span></h2>
                                <p class="animate__animated animate__fadeInUp">Ut velit est quam dolor ad a aliquid qui aliquid. Sequi
                                    ea ut et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem mollitia ut. Similique ea
                                    voluptatem. Esse doloremque accusamus repellendus deleniti vel. Minus et tempore modi architecto.</p>
                                <a href="" class="btn-get-started animate__animated animate__fadeInUp">Read More</a>
                            </div>
                        </div>
                    </div>

                    <!-- Slide 3 -->
                    <div class="carousel-item" style="background: url(fronts/assets/img/slide/slide-3.jpg)">
                        <div class="carousel-container">
                            <div class="carousel-content">
                                <h2 class="animate__animated animate__fadeInDown">Sequi ea <span>Dime Lara</span></h2>
                                <p class="animate__animated animate__fadeInUp">Ut velit est quam dolor ad a aliquid qui aliquid. Sequi
                                    ea ut et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem mollitia ut. Similique ea
                                    voluptatem. Esse doloremque accusamus repellendus deleniti vel. Minus et tempore modi architecto.</p>
                                <a href="" class="btn-get-started animate__animated animate__fadeInUp">Read More</a>
                            </div>
                        </div>
                    </div>

                </div>

                <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
                </a>

                <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
                    <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
                </a>

            </div>
        </div>
    </section><!-- End Hero -->

    <main id="main">

        <!-- ======= Featured Section ======= -->
        <section id="featured" class="featured">
            <div class="container">

                <div class="row">
                    <div class="col-lg-6 pt-4 pt-lg-0">
                        <div class="icon-box">
                            <i class="bi bi-card-checklist"></i>
                            <h3><a href="">Pemberhentian</a></h3>
                            <p>Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate
                                non provident</p>
                        </div>
                    </div>
                    <div class="col-lg-6 pt-4 pt-lg-0 content">
                        <div class="icon-box">
                            <i class="bi bi-bar-chart"></i>
                            <h3><a href="">Pengangkatan</a></h3>
                            <p>Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat tarad
                                limino ata</p>
                        </div>
                    </div>
                </div>
        </section>
        <!-- End Featured Section -->

        <section id="footer">
            <div class="footer-newsletter">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <h4><b>
                                    <center>MOTTO : Bersama Wujudkan Pelayanan yang Mudah, Bersih, Cepat, Pasti dan Menyenangkan</center>
                                </b>
                            </h4>
                            <h5>
                                <center>
                                    <font color="aqua"><b>Visi : Menjadi Unit Layanan Berbasis Teknologi Informasi</b></font>
                                </center>
                            </h5>
                        </div>
                    </div>
                </div>
            </div>
        </section><br><br>

        <!-- ======= About Section ======= -->
        <section id="about" class="about">
            <div class="container">

                <div class="row">
                    <div class="col-lg-6">
                        <img src="{{ url('/fronts/assets/img/slide-2.png') }}" class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-6 pt-4 pt-lg-0 content">
                        <div class="section-title">
                            <h3>MAKLUMAT PELAYANAN</h3>
                        </div>
                        <ul>
                            <li><i class="bi bi-check-circle"></i> Selalu menunjukkan sikap ramah, santun dan menyenangkan dalam
                                memberikan pelayanan</li>
                            <li><i class="bi bi-check-circle"></i> Memberikan pelayanan yang bersih, cepat dan pasti</li>
                            <li><i class="bi bi-check-circle"></i> Menyediakan fasilitas dan petugas layanan yang terbaik</li>
                            <li><i class="bi bi-check-circle"></i> Menerima saran dan masukan guna peningkatan kualitas layanan </li>
                            <li><i class="bi bi-check-circle"></i> Melakukan Peningkatan Kompetensi petugas pelayanan, guna
                                meningkatkan kualitas pelayanan</li>
                            <li><i class="bi bi-check-circle"></i> Menerapkan sistem manajemen mutu ISO 9001:2015 secara konsisten dan
                                berkesinambungan</li>
                            <li><i class="bi bi-check-circle"></i> Senantiasa menjunjung tinggi integritas, objektivitas dan tidak
                                berpihak serta tidak ada benturan kepentingan dan</li>
                            <li><i class="bi bi-check-circle"></i> Menyelenggarakan pelayanan sesuai standar pelayanan yang telah
                                ditetapkan dan apabila tidak menepati janji, kami siap menerima sanksi sesuai peraturan
                                perundang-undangan yang berlaku</li>
                        </ul>
                    </div>
                </div>

            </div>
        </section><!-- End About Section -->
    </main><!-- End #main -->
    @include('layouts.tema.depan.footer')
    @endsection