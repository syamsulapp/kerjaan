@extends('layouts.tema.depan.main.app')

@section('judul','SIOLA Prov_Sultra Kota Kendari')

@section('konten')

<body>
    <section id="topbar" class="d-flex align-items-center">
        <div class="container d-flex justify-content-center justify-content-md-between">
            <div class="contact-info d-flex align-items-center">
                <div class="logo">
                    <h1><a href="index.html"><img src="{{ url('fronts/assets/img/header_frontend.png') }}" width="290" height="40"></a></h1>
                    <!-- Uncomment below if you prefer to use an image logo -->
                    <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
                </div>
            </div>
            <div class="social-links d-none d-md-flex align-items-center">
                <i class="bi bi-envelope d-flex align-items-center"><a href="mailto:contact@example.com">pengaduan@kemendagri.go.id</a></i>
                <i class="bi bi-phone d-flex align-items-center ms-4"><span>(021) 3521468</span></i>
            </div>
        </div>
    </section>
    <!-- ======= Header ======= -->
    <header id="header" class="d-flex align-items-center">
        <div class="container d-flex justify-content-between align-items-center">

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="active" href="index.html">Beranda</a></li>
                    <li class="dropdown"><a href="#"><span>Tentang ULA</span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="#">Visi,Misi, Motto dan Maklumat Pelayanan</a></li>
                            <li><a href="#">Mekanisme dan Alur Layanan Administrasi dan Konsultasi Online</a></li>
                            <li><a href="#">Road Map ULA Kemendagri</a></li>
                            <li><a href="#">SOP Jenis Layanan Administrasi</a></li>
                            <li><a href="#">Progres Layanan Administrasi dan Konsultasi Tahun 2019</a></li>
                            <li><a href="#">Galeri</a></li>
                            <li><a href="#">Kontak</a></li>
                            <li><a href="#">Survei 2019</a></li>
                            <li><a href="#">Penghargaan</a></li>
                            <li><a href="#">Sertifikat Petugas Layanan Terbaik</a></li>
                            <li><a href="#">Struktur Organisasi</a></li>
                        </ul>
                    </li>
                    <li class="dropdown"><a href="#"><span>Brosur Layanan</span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="#">Evaluasi Rancangan Peraturan Daerah tentang APBD dan Rancangan <br> Peraturan Gubernur
                                    tentang Penjabaran APBD</a></li>
                            <li><a href="#">Evaluasi Rancangan Peraturan Daerah tentang Pertanggungjawaban Pelaksanaan <br> APBD
                                    dan
                                    Rancangan Peraturan Gubernur tentang Penjabaran Pertanggungjawaban <br> Pelaksanaan APBD</a></li>
                            <li><a href="#">Evaluasi Rancangan Peraturan Daerah Tentang Perubahan APBD dan Rancangan <br>
                                    Peraturan
                                    Peraturan Gubernur tentang Penjabaran Perubahan APBD</a></li>
                            <li><a href="#">Rekomendasi Izin Perjalanan Dinas Luar Negeri Bagi Pejabat Negara & DPRD Provinsi,
                                    <br> Kabupaten/Kota</a></li>
                            <li><a href="#">Rekomendasi Izin Perjalanan Dinas Luar Negeri Bagi ASN Pemda</a></li>

                            <li><a href="#">Pemberitahuan Penelitian Orang Asing dan Lembaga Asing</a></li>
                            <li><a href="#">Penerbitan Kepmendagri Tentang Pemberhentian <br> dan Pengangkatan Bupati/Wakil Bupati
                                    atau
                                    Walikota/Wakil Walikota</a></li>
                            <li><a href="#">Penerbitan Kepmendagri Tentang Peresmian Pergantian Antar Waktu(PAW) <br> Anggota DPRD
                                    Provinsi</a></li>
                            <li><a href="#">Penerbitan Surat Keterangan Terdaftar (SKT)</a></li>
                            <li><a href="#">Pemberian Rekomendasi Penelitian</a></li>
                        </ul>
                    </li>
                    <li><a href="Berita.html">Berita</a></li>
                    <li class="dropdown"><a href="#"><span>Galeri</span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="portfolio.html">Galeri Photo</a></li>
                            <li><a href="portfolio.html">Galeri Vidio</a></li>
                        </ul>
                    </li>

                    <li class="dropdown"><a href="#"><span>Dokumen</span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="services.html">MANUAL LAYANAN ADMINISTRASI</a></li>
                            <li><a href="services.html">MANUAL LAYANAN KONSULTASI</a></li>
                            <li><a href="#">Kepmendagri 061-8490 tentang Standar Pelayanan Publik</a></li>
                            <li><a href="#">SE Mendagri kepada Bupati dan Walikota</a></li>
                            <li><a href="#">SE Mendagri kepada Gubernur Se Indonesia</a></li>
                            <li><a href="">SE Mendagri kepada Komponen Kemendagri</a></li>
                            <li><a href="">Surat Edaran Mendagri tentang Penerapan <br> Layanan Online untuk Daerah
                                    Indonesia</a></li>
                        </ul>
                    </li>
                    <li class="dropdown"><a href="#"><span>Survei Kepuasan Masyarakat</span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="services.html">Survei Index Kepuasan Masyarakat 2019</a></li>
                            <li><a href="services.html">Survei Index Kepuasan Masyarakat 2020</a></li>
                        </ul>
                    </li>
                    <li><a href="contact.html"><svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1">
                                <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                <circle cx="12" cy="7" r="4"></circle>
                            </svg> Login</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav>
            <!-- .navbar -->

        </div>
    </header><!-- End Header -->

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
                    <div class="col-lg-4">
                        <div class="icon-box">
                            <i class="bi bi-card-checklist"></i>
                            <h3><a href="">Lorem Ipsum</a></h3>
                            <p>Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate
                                non provident</p>
                        </div>
                    </div>
                    <div class="col-lg-4 mt-4 mt-lg-0">
                        <div class="icon-box">
                            <i class="bi bi-bar-chart"></i>
                            <h3><a href="">Dolor Sitema</a></h3>
                            <p>Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat tarad
                                limino ata</p>
                        </div>
                    </div>
                    <div class="col-lg-4 mt-4 mt-lg-0">
                        <div class="icon-box">
                            <i class="bi bi-binoculars"></i>
                            <h3><a href="">Sed ut perspiciatis</a></h3>
                            <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur
                            </p>
                        </div>
                    </div>
                </div>

            </div>
        </section><!-- End Featured Section -->

        <!-- ======= Services Section ======= -->
        <section id="services" class="services">
            <div class="container">

                <div class="row">
                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                        <div class="icon-box">
                            <div class="icon"><i class="bx bxl-dribbble"></i></div>
                            <h4><a href="">Lorem Ipsum</a></h4>
                            <p>Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0">
                        <div class="icon-box">
                            <div class="icon"><i class="bx bx-file"></i></div>
                            <h4><a href="">Sed ut perspiciatis</a></h4>
                            <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0">
                        <div class="icon-box">
                            <div class="icon"><i class="bx bx-tachometer"></i></div>
                            <h4><a href="">Magni Dolores</a></h4>
                            <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
                        <div class="icon-box">
                            <div class="icon"><i class="bx bx-world"></i></div>
                            <h4><a href="">Nemo Enim</a></h4>
                            <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
                        <div class="icon-box">
                            <div class="icon"><i class="bx bx-slideshow"></i></div>
                            <h4><a href="">Dele cardo</a></h4>
                            <p>Quis consequatur saepe eligendi voluptatem consequatur dolor consequuntur</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
                        <div class="icon-box">
                            <div class="icon"><i class="bx bx-arch"></i></div>
                            <h4><a href="">Divera don</a></h4>
                            <p>Modi nostrum vel laborum. Porro fugit error sit minus sapiente sit aspernatur</p>
                        </div>
                    </div>

                </div>

            </div>
        </section>
        <!-- End Services Section -->

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

    <!-- ======= Footer ======= -->
    <footer id="footer">

        <div class="footer-top">
            <div class="container">
                <div class="row">

                    <div class="col-lg-4 col-md-5 footer-links">
                        <h4>Waktu Pelayanan</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Senin-Kamis : 08.00 - 16.00 WIB</a></li>
                            <li><i class="bx bx-chevron-right"></i> Jum'at : 08.00 - 16.30 WIB</li>
                        </ul>
                        <br>
                        <p><i>Dokumen Aplikasi ini sudah mendukung Tanda Tangan Elektronik yang diterbitkan oleh BSrE.</i>
                        </p>
                        <div class="social-links mt-3">
                            <img src="{{ url('fronts/assets/img/logo-bsre.png') }}" width="150" height="72" alt="">
                            <img src="{{ url('fronts/assets/img/iso_9001-2015.png') }}" width="150" height="58" alt="">
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-5 footer-contact">
                        <h4>Tempat Pelayanan</h4>
                        <p>
                            <strong>Alamat :</strong>Gedung B Lt.1 Jl. Medan Merdeka Utara <br> No. 7 Jakarta Pusat 10110 <br>
                            <br><br>
                            <strong>Layanan Registrasi :</strong> (021) 3450038 ext. 2655 / 2654 <br>
                            <strong>Layanan Administrasi :</strong> (021) 3521468<br>
                            <strong>Layanan Pengaduan Lapor Kemendagri :</strong> (021) 3843222 <br>
                            <strong>Email Pengaduan :</strong> pengaduan@kemendagri.go.id <br>
                            <strong>Website Pengaduan :</strong> kemendagri.lapor.go.id <br>
                        </p>

                    </div>

                    <!-- map -->
                    <div class="col-lg-4 col-md5 footer-info">
                        <iframe class="mb-4 mb-lg-0" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15866.800676955954!2d106.8277476!3d-6.1708863!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x30b7ec7f0aeb8f12!2sKementerian+Dalam+Negeri+Republik+Indonesia!5e0!3m2!1sid!2sid!4v1515981401104" frameborder="0" style="border:0; width: 100%; height: 305px;" allowfullscreen></iframe>
                    </div>

                </div>
            </div>
        </div>

        <div class="container">
            <div class="copyright">
                &copy; Copyright <strong><span>ULA Kemendagri</span></strong>. <script>
                    document.write(new Date().getFullYear())
                </script>
            </div>
            <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/eterna-free-multipurpose-bootstrap-template/ -->
                Designed by <a href="#">SIOLA</a>
            </div>
        </div>
    </footer>

    @endsection