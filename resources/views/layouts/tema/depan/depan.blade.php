@extends('layouts.tema.depan.main.app')

@section('judul','SIOLA Prov_Sultra KDH')

@section('konten')

<body>
    <section id="topbar" class="d-flex align-items-center">
        <div class="container d-flex justify-content-center justify-content-md-between">
            <div class="social-links d-none d-md-flex align-items-center">
                <i class="bi bi-envelope d-flex align-items-center"><a href="mailto:contact@example.com">pengaduan@sultraprov.go.id</a></i>
            </div>
            <div class="social-links d-none d-md-flex align-items-center">
                <i class="bi bi-phone d-flex align-items-center ms-4"><span>(0401) 391609</span></i>
            </div>
        </div>
    </section>

    <!-- include header -->
    @include('layouts.tema.depan.header')
    <!-- ======= Hero Section ======= -->
    
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                              <ol class="carousel-indicators">
                                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                              </ol>
                              <div class="carousel-inner">
                                <div class="carousel-item active">
                                  <img class="d-block w-100" src="fronts/assets/img/slide/dpn.jpeg" alt="First slide">
                                </div>
                              </div>
                             
                            </div>

                    </div>
                </div>
    <main id="main">

        <!-- ======= Featured Section ======= -->
        <section id="featured" class="featured">
            <div class="container">

                <div class="row">
                    <div class="col-lg-6 pt-4 pt-lg-0">
                        <div class="icon-box">
                            <i class="bi bi-card-checklist"></i>
                            <h3><a href="">Pemberhentian kepala daerah</a></h3>
                            <p>penerbitan usul Pemberhentian kepala daerah dan wakil daerah Bupati/wakil bupati atau wali kota/wakil wali kota</p>
                        </div>
                    </div>
                    <div class="col-lg-6 pt-4 pt-lg-0 content">
                        <div class="icon-box">
                            <i class="bi bi-bar-chart"></i>
                            <h3><a href="">Pengangkatan kepala daerah</a></h3>
                            <p>penerbitan usul pengangkatan kepala daerah dan wakil daerah Bupati/wakil bupati atau wali kota/wakil wali kota</p>
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