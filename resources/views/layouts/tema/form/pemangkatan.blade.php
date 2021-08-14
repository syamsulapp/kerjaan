@extends('layouts.tema.app')

@section('title','SIOLA KEMENDAGRI')

@include('layouts.tema.style.tampilan')

@include('layouts.tema.komponen.header')

@include('layouts.tema.komponen.menu')


@section('konten')
<div id="content" class="main-content">
    <div class="layout-px-spacing">

        <div class="content-container">

            <div class="col-left layout-top-spacing">
                <div class="col-left-content">

                    @include('layouts.tema.style.usertheme')
                    <div class="admin-data-content layout-top-spacing">

                        <div class="row layout-top-spacing" id="cancel-row">

                            <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                                <div class="widget-content widget-content-area br-6">
                                    <div class="widget-header">
                                        <div class="row">
                                            <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                                <h4>Buat Permohonan Layanan Administrasi</h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="widget-content widget-content-area">
                                        <div id="circle-basic" class="">

 <!-- PENGANGKATAN -->
 <div class="row">
                                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                                            <h4><b>DATA PERMOHONAN</b></h4>
                                                        </div>
                                                    </div> <br> <br>
                                                    <form>
                                                        <div class="form-group row mb-4">
                                                            <label for="hEmail" class="col-xl-2 col-sm-3 col-sm-2 col-form-label">
                                                                <h6>Provinsi</h6>
                                                            </label>
                                                            <div class="col-xl-5 col-lg-9 col-sm-10">
                                                                <input type="email" name="provinsi" class="form-control" id="hEmail" placeholder="">
                                                            </div>
                                                        </div>
                                                        <div class="form-group mb-4">
                                                            <div class="row">
                                                                <label class="col-form-label col-xl-2 col-sm-3 col-sm-2 pt-0">
                                                                    <h6>Kabupaten/Kota</h6>
                                                                </label>
                                                                <div class="col-xl-5 col-lg-9 col-sm-10">
                                                                    <select class="form-control  basic" name="kabupaten">
                                                                        <option selected="selected">Pilihan 1
                                                                        </option>
                                                                        <option>Pilihan 2</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group mb-4">
                                                            <div class="row">
                                                                <label class="col-form-label col-xl-2 col-sm-3 col-sm-2 pt-0">
                                                                    <h6>Jenis
                                                                        Kelamin</h6>
                                                                </label>
                                                                <div class="col-xl-5 col-lg-9 col-sm-10">
                                                                    <select class="form-control  basic" name="jk">
                                                                        <option selected="selected">Laki-Laki
                                                                        </option>
                                                                        <option>Perempuan</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group mb-4">
                                                            <div class="row">
                                                                <label class="col-form-label col-xl-2 col-sm-3 col-sm-2 pt-0">
                                                                    <h6>Objek
                                                                        KDH</h6>
                                                                </label>
                                                                <div class="col-xl-5 col-lg-9 col-sm-10">
                                                                    <select class="form-control  basic" name="objekkdh">
                                                                        <option selected="selected">pilihan 1
                                                                        </option>
                                                                        <option>Pilihan 2</option>
                                                                        <option>Pilihan 3</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group mb-4">
                                                            <div class="row">
                                                                <label class="col-form-label col-xl-2 col-sm-3 col-sm-2 pt-0">
                                                                    <h6>Penyebab
                                                                        KDH</h6>
                                                                </label>
                                                                <div class="col-xl-5 col-lg-9 col-sm-10">
                                                                    <select class="form-control  basic" name="penyebabkdh">
                                                                        <option selected="selected">pilihan 1
                                                                        </option>
                                                                        <option>Pilihan 2</option>
                                                                        <option>Pilihan 3</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        
                                                    </form>
                                                    <!-- DATA KE 2 -->
                                                    <div class="row">
                                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                                            <h4><b>KELENGKAPAN ADMINISTRASI</b></h4>
                                                        </div>
                                                    </div> <br>
                                                    <form>
                                                        <!-- berkas ke 1 -->
                                                        <div class="col-xl-10 col-md-12 col-sm-12 col-12">
                                                            <label for="fullName">
                                                                <h6>File Scan SURAT KETERANGAN KEASLIAN DOCUMENT DARI BIRO PEMERINTAHAN/OTDA PROVINSI (ASISTEN BIDANG PEMERINTAHAN)</h6>
                                                            </label>
                                                            <div class="col-xl-10 col-lg-9 col-sm-10">
                                                                <input type="file" name="1" class="form-control-file" id="exampleFormControlFile1">
                                                            </div>
                                                        </div>
                                                        <br>
                                                        <!-- berkas ke 2 -->
                                                        <div class="col-xl-10 col-md-12 col-sm-12 col-12">
                                                            <label for="fullName">
                                                                <h6>File Scan FOTOCOPY KEPUTUSAN MENTERI DALAM NEGERI TENTANG PENGANGKATAN BUPATI DAN WAKIL BUPATI ATAU WALIKOTA DAN WAKIL WALIKOTA PERIODE SEBELUMNYA</h6>
                                                            </label>
                                                            <div class="col-xl-10 col-lg-9 col-sm-10">
                                                                <input type="file" name="2" class="form-control-file" id="exampleFormControlFile1">
                                                            </div>
                                                        </div>
                                                        <br>
                                                        <!-- berkas ke 3 -->
                                                        <div class="col-xl-10 col-md-12 col-sm-12 col-12">
                                                            <label for="fullName">
                                                                <h6>File Scan FOTOCOPY KEPUTUSAN MENTERI DALAM NEGERI TENTANG PENGANGKATAN PEJABAT BUPATI/WALIKOTA (DALAM HAL DAERAH DIPIMPIN OLEH PEJABAT)
                                                                </h6>
                                                            </label>
                                                            <div class="col-xl-10 col-lg-9 col-sm-10">
                                                                <input type="file" name="3" class="form-control-file" id="exampleFormControlFile1">
                                                            </div>
                                                        </div>
                                                        <!-- berkas ke 4 -->
                                                        <div class="col-xl-10 col-md-12 col-sm-12 col-12">
                                                            <label for="fullName">
                                                                <h6>File Scan FOTOCOPY BERITA ACARA PELANTIKAN
                                                                    BUPATI DAN WAKIL BUPATI ATAU WALIKOTA
                                                                    DAN WAKIL WALIKOTA PERIODE SEBELUMNYA
                                                                </h6>
                                                            </label>
                                                            <div class="col-xl-10 col-lg-9 col-sm-10">
                                                                <input type="file" name="4" class="form-control-file" id="exampleFormControlFile1">
                                                            </div>
                                                        </div>
                                                        <!-- berkas ke 5 -->
                                                        <br>
                                                        <div class="col-xl-10 col-md-12 col-sm-12 col-12">
                                                            <label for="fullName">
                                                                <h6>File Scan KEPUTUSAN KPU KABUPATEN/KOTA TENTANG REKAPPITULASI HASIL PERHITUNGAN SUARA
                                                                </h6>
                                                            </label>
                                                            <div class="col-xl-10 col-lg-9 col-sm-10">
                                                                <input type="file" name="5" class="form-control-file" id="exampleFormControlFile1">
                                                            </div>
                                                        </div>
                                                        <!-- berkas ke 6 -->
                                                        <br>
                                                        <div class="col-xl-10 col-md-12 col-sm-12 col-12">
                                                            <label for="fullName">
                                                                <h6>File Scan KEPUTUSAN KPU KABUPATEN/KOTA TENTANG PENETAPAN PASANGAN CALON TERPILIH</h6>
                                                            </label>
                                                            <div class="col-xl-10 col-lg-9 col-sm-10">
                                                                <input type="file" name="6" class="form-control-file" id="exampleFormControlFile1">
                                                            </div>
                                                        </div>
                                                        <!-- berkas ke 7 -->
                                                        <br>
                                                        <div class="col-xl-10 col-md-12 col-sm-12 col-12">
                                                            <label for="fullName">
                                                                <h6>File Scan RISALAH DAN BERITA ACARA RAPAT PARIPURNA DPRD KABUPATEN/KOTA DALAM RANGKA PENGUMUMAN PENETAPAN PASANGAN CALON BUPATI DAN WAKIL BUPATI ATAU WALIKOTA DAN WAKIL WALIKOTA TERPILIH</h6>
                                                            </label>
                                                            <div class="col-xl-10 col-lg-9 col-sm-10">
                                                                <input type="file" name="7" class="form-control-file" id="exampleFormControlFile1">
                                                            </div>
                                                        </div>
                                                        <!-- berkas ke 8 -->
                                                        <br>
                                                        <div class="col-xl-10 col-md-12 col-sm-12 col-12">
                                                            <label for="fullName">
                                                                <h6>File Scan PUTUSAN MAHKAMAH KONSTITUSI RI TENTANG PERSELISIHAN HASIL PEMILIHAN (APABILA TERDAPAT GUGATAN)</h6>
                                                            </label>
                                                            <div class="col-xl-10 col-lg-9 col-sm-10">
                                                                <input type="file" name="8" class="form-control-file" id="exampleFormControlFile1">
                                                            </div>
                                                        </div>
                                                        <!-- berkas ke 9 -->
                                                        <br>
                                                        <div class="col-xl-10 col-md-12 col-sm-12 col-12">
                                                            <label for="fullName">
                                                                <h6>File Scan SURAT MAHKAMAH KONSTITUSI RI MENGENAI TIDA TERDAFTARNYA GUGATAN PERSELISIHAN HASIL PEMILIHAN (APABILA TIDAK TERDAPAT GUGATAN)</h6>
                                                            </label>
                                                            <div class="col-xl-10 col-lg-9 col-sm-10">
                                                                <input type="file" name="9" class="form-control-file" id="exampleFormControlFile1">
                                                            </div>
                                                        </div>
                                                        <!-- berkas ke 10 -->
                                                        <br>
                                                        <div class="col-xl-10 col-md-12 col-sm-12 col-12">
                                                            <label for="fullName">
                                                                <h6>File Scan SURAT KPU RI PERIHAL PENETAPAN PASANGAN CALON TERPILIH TANPA PERMOHONAN PERSELISIHAN HASIL PEMILIHAN DI MAHKAMAH KONSTITUSI RI (APABILA TIDAK TERDAPAT GUGATAN)</h6>
                                                            </label>
                                                            <div class="col-xl-10 col-lg-9 col-sm-10">
                                                                <input type="file" name="10" class="form-control-file" id="exampleFormControlFile1">
                                                            </div>
                                                        </div>
                                                        <!-- berkas ke 11 -->
                                                        <br>
                                                        <div class="col-xl-10 col-md-12 col-sm-12 col-12">
                                                            <label for="fullName">
                                                                <h6>File Scan SURAT PENYAMPAIAN PENETAPAN PASANGAN CALON TERPILIH OLEH PKU KABUPATEN/KOTA KEPADA DPRD KABUPATEN/KOTA</h6>
                                                            </label>
                                                            <div class="col-xl-10 col-lg-9 col-sm-10">
                                                                <input type="file" name="11" class="form-control-file" id="exampleFormControlFile1">
                                                            </div>
                                                        </div>
                                                        <!-- berkas ke 12 -->
                                                        <br>
                                                        <div class="col-xl-10 col-md-12 col-sm-12 col-12">
                                                            <label for="fullName">
                                                                <h6>File Scan SURAT USULAN PENGESAHAN PENGANGKATAN PASANGAN CALON BUPATI DAN WAKIL BUPATI ATAU WALIKOTA DAN WAKIL WALIKOTA OLEH DPRD KABUPATEN/KOTA KEPADA MENDAGRI MELALUI GUBERNUR</h6>
                                                            </label>
                                                            <div class="col-xl-10 col-lg-9 col-sm-10">
                                                                <input type="file" name="12" class="form-control-file" id="exampleFormControlFile1">
                                                            </div>
                                                        </div>
                                                        <!-- berkas ke 13 -->
                                                        <br>
                                                        <div class="col-xl-10 col-md-12 col-sm-12 col-12">
                                                            <label for="fullName">
                                                                <h6>File Scan SURAT USULAN PENGESAHAN PENGANGKATAN PASANGAN CALON BUPATI DAN WAKIL BUPATI ATAU WALIKOTA DAN WAKIL WALIKOTA OLEH GUBERNUR KEPADA MENDAGRI</h6>
                                                            </label>
                                                            <div class="col-xl-10 col-lg-9 col-sm-10">
                                                                <input type="file" name="13" class="form-control-file" id="exampleFormControlFile1">
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection