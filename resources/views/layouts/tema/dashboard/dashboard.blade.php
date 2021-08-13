@extends('layouts.tema.app')

@section('title','SIOLA KEMENDAGRI')

@include('layouts.tema.style.tampilan')

@include('layouts.tema.komponen.header')

@include('layouts.tema.komponen.menu')


@section('konten')

<!--  BEGIN CONTENT AREA  -->

<!-- dashboard user -->
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
                                                    <!-- pilihan 1 -->
                                                    <h3>Pilih Layanan</h3>
                                                    <section>
                                                        <p class="mb-4">Silahkan Pilih layanan :</p>
                                                        <form action="{{ url('/user/view') }}" method="GET">
                                                        @csrf
                                                        <div class="n-chk">
                                                            <label
                                                                class="new-control new-radio new-radio-text radio-classic-success">
                                                                <input type="radio" class="new-control-input"
                                                                    name="input1" value="1" @if(old('input1')) checked @endif> 
                                                                <span class="new-control-indicator"></span>
                                                                <span class="new-radio-content">Penerbitan
                                                                    Kepmendagri tentang penerbitan dan pengangkatan
                                                                    Bupati
                                                                    wali atau wali kota/wakil wali kota</span>
                                                            </label>
                                                        </div> <br> <br>
                                                        <div class="n-chk">
                                                            <label
                                                                class="new-control new-radio new-radio-text radio-classic-success">
                                                                <input type="radio" class="new-control-input"
                                                                    name="input2" value="2" @if(old('input2')) checked @endif>
                                                                <span class="new-control-indicator"></span>
                                                                <span class="new-radio-content">Penercheckedbitan Kepmendagri
                                                                    tentang peresmian pengangkatan dan pemberhentian
                                                                    pimpinan anggota DPRD Provinsi</span>
                                                            </label>
                                                        </div>
                                                        <button type="submit" class="btn btn-primary">{{ __('Pilih') }}</button>
                                                        <form>
                                                    </section>

                                                    <!-- pilihan 2 -->
                                                    <h3>Isi Data & Upload Persyaratan</h3>
                                                    <section>
                                                        <div class="widget-header">
                                                            <!-- DATA KE 1 -->
                                                            @if($data['key1'])
                                                            <div class="row">
                                                                <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                                                    <h4><b>DATA PERMOHONAN</b></h4>
                                                                </div>
                                                            </div> <br> <br>
                                                            <form>
                                                                <div class="form-group row mb-4">
                                                                    <label for="hEmail"
                                                                        class="col-xl-2 col-sm-3 col-sm-2 col-form-label">
                                                                        <h6>Provinsi</h6>
                                                                    </label>
                                                                    <div class="col-xl-5 col-lg-9 col-sm-10">
                                                                        <input type="email" class="form-control"
                                                                            id="hEmail" placeholder="">
                                                                    </div>
                                                                </div>
                                                                <div class="form-group mb-4">
                                                                    <div class="row">
                                                                        <label
                                                                            class="col-form-label col-xl-2 col-sm-3 col-sm-2 pt-0">
                                                                            <h6>Kabupaten/Kota</h6>
                                                                        </label>
                                                                        <div class="col-xl-5 col-lg-9 col-sm-10">
                                                                            <select class="form-control  basic">
                                                                                <option selected="selected">Pilihan 1
                                                                                </option>
                                                                                <option>Pilihan 2</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group mb-4">
                                                                    <div class="row">
                                                                        <label
                                                                            class="col-form-label col-xl-2 col-sm-3 col-sm-2 pt-0">
                                                                            <h6>Jenis
                                                                                Kelamin</h6>
                                                                        </label>
                                                                        <div class="col-xl-5 col-lg-9 col-sm-10">
                                                                            <select class="form-control  basic">
                                                                                <option selected="selected">Laki-Laki
                                                                                </option>
                                                                                <option>Perempuan</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group mb-4">
                                                                    <div class="row">
                                                                        <label
                                                                            class="col-form-label col-xl-2 col-sm-3 col-sm-2 pt-0">
                                                                            <h6>Objek
                                                                                KDH</h6>
                                                                        </label>
                                                                        <div class="col-xl-5 col-lg-9 col-sm-10">
                                                                            <select class="form-control  basic">
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
                                                                        <label
                                                                            class="col-form-label col-xl-2 col-sm-3 col-sm-2 pt-0">
                                                                            <h6>Penyebab
                                                                                KDH</h6>
                                                                        </label>
                                                                        <div class="col-xl-5 col-lg-9 col-sm-10">
                                                                            <select class="form-control  basic">
                                                                                <option selected="selected">pilihan 1
                                                                                </option>
                                                                                <option>Pilihan 2</option>
                                                                                <option>Pilihan 3</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                            </form>
                                                            @else
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
                                                                        <h6>Pilih Scan FOTOCOPY KEPUTUSAN MENTERI DALAM
                                                                            NEGERI TENTANG PENGANGKATAN BUPATI DAN/ATAU
                                                                            WAKIL BUPATI ATAU WALIKOTA DAN/ATAU WAKIL
                                                                            WALIKOTA YANG BERSANGKUTAN</h6>
                                                                    </label>
                                                                    <div class="col-xl-10 col-lg-9 col-sm-10">
                                                                        <input type="file" class="form-control-file"
                                                                            id="exampleFormControlFile1">
                                                                    </div>
                                                                </div>
                                                                <br>
                                                                <!-- berkas ke 2 -->
                                                                <div class="col-xl-10 col-md-12 col-sm-12 col-12">
                                                                    <label for="fullName">
                                                                        <h6>Pilih Scan FOTOCOPY BERITA ACARA PELANTIKAN
                                                                            BUPATI DAN/ATAU WAKIL BUPATI ATAU WALIKOTA
                                                                            DAN/ATAU WAKIL WALIKOTA YANG BERSANGKUTAN
                                                                        </h6>
                                                                    </label>
                                                                    <div class="col-xl-10 col-lg-9 col-sm-10">
                                                                        <input type="file" class="form-control-file"
                                                                            id="exampleFormControlFile1">
                                                                    </div>
                                                                </div>
                                                                <!-- berkas ke 3 -->
                                                                <br>
                                                                <div class="col-xl-10 col-md-12 col-sm-12 col-12">
                                                                    <label for="fullName">
                                                                        <h6>Pilih Scan SURAT RISALAH DAN BERITA ACARA
                                                                            RAPAT PARIPURNA DPRD KABUPATEN/KOTA DALAM
                                                                            RANGKA PENGUMUMAN PEMBERHENTIAN BUPATI <DAN>
                                                                                <ATAU> WAKIL BUPATI DAN/ATAU WALIKOTA
                                                                                    DAN/ATAU WAKIL WALIKOTA KARENA
                                                                                    BERAKHIR MASA JABATANNYA</ATAU>
                                                                        </h6>
                                                                    </label>
                                                                    <div class="col-xl-10 col-lg-9 col-sm-10">
                                                                        <input type="file" class="form-control-file"
                                                                            id="exampleFormControlFile1">
                                                                    </div>
                                                                </div>
                                                                <!-- berkas ke 4 -->
                                                                <br>
                                                                <div class="col-xl-10 col-md-12 col-sm-12 col-12">
                                                                    <label for="fullName">
                                                                        <h6>Pilih Scan SURAT USULAN PENGESAHAN
                                                                            PEMBERHENTIAN BUPATI DAN/ATAU WAKIL BUPATI
                                                                            ATAU WALIKOTA DAN/ATAU WAKIL WALIKOTA OLEH
                                                                            PIMPINAN DPRD KABUPATEN/KOTA KEPADA MENDAGRI
                                                                            MELALUI GUBERNUR</h6>
                                                                    </label>
                                                                    <div class="col-xl-10 col-lg-9 col-sm-10">
                                                                        <input type="file" class="form-control-file"
                                                                            id="exampleFormControlFile1">
                                                                    </div>
                                                                </div>
                                                                <!-- berkas ke 5 -->
                                                                <br>
                                                                <div class="col-xl-10 col-md-12 col-sm-12 col-12">
                                                                    <label for="fullName">
                                                                        <h6>Pilih Scan SURAT USULAN PENGESAHAN
                                                                            PEMBERHENTIAN BUPATI DAN/ATAU WAKIL BUPATI
                                                                            ATAU WALIKOTA DAN/ATAU WAKIL WALIKOTA OLEH
                                                                            GUBERNUR KEPADA MENDAGRI</h6>
                                                                    </label>
                                                                    <div class="col-xl-10 col-lg-9 col-sm-10">
                                                                        <input type="file" class="form-control-file"
                                                                            id="exampleFormControlFile1">
                                                                    </div>
                                                                </div>
                                                            </form>
                                                            @endif
                                                        </div>
                                                    </section>

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
        <!--  END CONTENT AREA  -->

        </div>

@endsection