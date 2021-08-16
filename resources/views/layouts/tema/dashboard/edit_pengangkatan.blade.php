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
                                                <h4>Detail Data Pengangkatan</h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="widget-content widget-content-area">
                                        <div id="circle-basic" class="">
                                            <!-- pilihan 2 -->
                                            <section>
                                                <div class="widget-header">
                                                    <!-- PENGANGKATAN -->
                                                    <div class="row">
                                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                                        </div>
                                                    </div> <br> <br>
                                                    <form action="{{ url('admin/edit-data-2') }}{{ ('/') }}{{ $data_pengangkatan->id}}{{('/')}}{{ ('ubah') }}" method="POST">
                                                        @method('put')
                                                        @csrf
                                                        <input type="hidden" name="id" value="{{ $data_pengangkatan->id }}">
                                                        <div class="form-group row mb-4">
                                                            <label for="nama" class="col-xl-2 col-sm-3 col-sm-2 col-form-label">
                                                                <h6>nama</h6>
                                                            </label>
                                                            <div class="col-xl-5 col-lg-9 col-sm-10">
                                                                <input type="text" name="nama" class="form-control" id="nama" placeholder="nama" value="{{ $data_pengangkatan->nama }}">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row mb-4">
                                                            <label for="hEmail" class="col-xl-2 col-sm-3 col-sm-2 col-form-label">
                                                                <h6>Provinsi</h6>
                                                            </label>
                                                            <div class="col-xl-5 col-lg-9 col-sm-10">
                                                                <input type="text" name="provinsi" class="form-control" id="hEmail" value="{{ $data_pengangkatan->provinsi }}">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row mb-4">
                                                            <label for="hEmail" class="col-xl-2 col-sm-3 col-sm-2 col-form-label">
                                                                <h6>kabupaten</h6>
                                                            </label>
                                                            <div class="col-xl-5 col-lg-9 col-sm-10">
                                                                <input type="text" name="kabupaten" class="form-control" id="hEmail" placeholder="" value="{{  $data_pengangkatan->kabupaten   }}">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row mb-4">
                                                            <label for="hEmail" class="col-xl-2 col-sm-3 col-sm-2 col-form-label">
                                                                <h6>jenis_kelamin</h6>
                                                            </label>
                                                            <div class="col-xl-5 col-lg-9 col-sm-10">
                                                                <input type="text" name="jk" class="form-control" id="hEmail" placeholder="" value="{{  $data_pengangkatan->jk }}">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row mb-4">
                                                            <label for="hEmail" class="col-xl-2 col-sm-3 col-sm-2 col-form-label">
                                                                <h6>objekkdh</h6>
                                                            </label>
                                                            <div class="col-xl-5 col-lg-9 col-sm-10">
                                                                <input type="text" name="objekkdh" class="form-control" id="hEmail" placeholder="" value="{{  $data_pengangkatan->objekkdh }}">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row mb-4">
                                                            <label for="hEmail" class="col-xl-2 col-sm-3 col-sm-2 col-form-label">
                                                                <h6>penyebabkdh</h6>
                                                            </label>
                                                            <div class="col-xl-5 col-lg-9 col-sm-10">
                                                                <input type="text" name="penyebabkdh" class="form-control" id="hEmail" placeholder="" value="{{  $data_pengangkatan->penyebabkdh }}">
                                                            </div>
                                                        </div>

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
                                                                <br>
                                                                <br>
                                                                <a class="btn btn-primary" href="{{ url('/storage/dokumen_pengangkatan/' .$data_pengangkatan->noreg . '/' . $data_pengangkatan->upload1) }}">File Scan SURAT KETERANGAN </a>
                                                            </div>
                                                            <br>
                                                            <!-- berkas ke 2 -->
                                                            <div class="col-xl-10 col-md-12 col-sm-12 col-12">
                                                                <label for="fullName">
                                                                    <h6>File Scan FOTOCOPY KEPUTUSAN MENTERI DALAM NEGERI TENTANG PENGANGKATAN BUPATI DAN WAKIL BUPATI ATAU WALIKOTA DAN WAKIL WALIKOTA PERIODE SEBELUMNYA</h6>
                                                                </label>
                                                                <br>
                                                                <a class="btn btn-primary" href="{{ url('/storage/dokumen_pengangkatan/' .$data_pengangkatan->noreg . '/' . $data_pengangkatan->upload2) }}">File Scan FOTOCOPY KEPUTUSAN MENTERI</a>
                                                            </div>
                                                            <br>
                                                            <!-- berkas ke 3 -->
                                                            <div class="col-xl-10 col-md-12 col-sm-12 col-12">
                                                                <label for="fullName">
                                                                    <h6>File Scan FOTOCOPY KEPUTUSAN MENTERI DALAM NEGERI TENTANG PENGANGKATAN PEJABAT BUPATI/WALIKOTA (DALAM HAL DAERAH DIPIMPIN OLEH PEJABAT)
                                                                    </h6>
                                                                </label>
                                                                <br>
                                                                <a class="btn btn-primary" href="{{ url('/storage/dokumen_pengangkatan/' .$data_pengangkatan->noreg . '/' . $data_pengangkatan->upload3) }}">FOTOCOPY KEPUTUSAN MENTERI DALAM NEGERI </a>
                                                            </div>
                                                            <br>
                                                            <!-- berkas ke 4 -->
                                                            <div class="col-xl-10 col-md-12 col-sm-12 col-12">
                                                                <label for="fullName">
                                                                    <h6>File Scan FOTOCOPY BERITA ACARA PELANTIKAN
                                                                        BUPATI DAN WAKIL BUPATI ATAU WALIKOTA
                                                                        DAN WAKIL WALIKOTA PERIODE SEBELUMNYA
                                                                    </h6>
                                                                </label>
                                                                <br>
                                                                <a class="btn btn-primary" href="{{ url('/storage/dokumen_pengangkatan/' .$data_pengangkatan->noreg . '/' . $data_pengangkatan->upload4) }}">File Scan FOTOCOPY BERITA ACARA </a>
                                                            </div>
                                                            <!-- berkas ke 5 -->
                                                            <br>
                                                            <div class="col-xl-10 col-md-12 col-sm-12 col-12">
                                                                <label for="fullName">
                                                                    <h6>File Scan KEPUTUSAN KPU KABUPATEN/KOTA TENTANG REKAPPITULASI HASIL PERHITUNGAN SUARA
                                                                    </h6>
                                                                </label>
                                                                <br>
                                                                <a class="btn btn-primary" href="{{ url('/storage/dokumen_pengangkatan/' .$data_pengangkatan->noreg . '/' . $data_pengangkatan->upload5) }}">File Scan KEPUTUSAN KPU KABUPATEN</a>
                                                            </div>
                                                            <!-- berkas ke 6 -->
                                                            <br>
                                                            <div class="col-xl-10 col-md-12 col-sm-12 col-12">
                                                                <label for="fullName">
                                                                    <h6>File Scan KEPUTUSAN KPU KABUPATEN/KOTA TENTANG PENETAPAN PASANGAN CALON TERPILIH</h6>
                                                                </label>
                                                                <br>
                                                                <a class="btn btn-primary" href="{{ url('/storage/dokumen_pengangkatan/' .$data_pengangkatan->noreg . '/' . $data_pengangkatan->upload6) }}">FILE TENTANG PENETAPAN PASANGAN </a>
                                                            </div>
                                                            <!-- berkas ke 7 -->
                                                            <br>
                                                            <div class="col-xl-10 col-md-12 col-sm-12 col-12">
                                                                <label for="fullName">
                                                                    <h6>File Scan RISALAH DAN BERITA ACARA RAPAT PARIPURNA DPRD KABUPATEN/KOTA DALAM RANGKA PENGUMUMAN PENETAPAN PASANGAN CALON BUPATI DAN WAKIL BUPATI ATAU WALIKOTA DAN WAKIL WALIKOTA TERPILIH</h6>
                                                                </label>
                                                                <br>
                                                                <a class="btn btn-primary" href="{{ url('/storage/dokumen_pengangkatan/' .$data_pengangkatan->noreg . '/' . $data_pengangkatan->upload7) }}">File Scan RISALAH DAN BERITA ACARA</a>
                                                            </div>
                                                            <!-- berkas ke 8 -->
                                                            <br>
                                                            <div class="col-xl-10 col-md-12 col-sm-12 col-12">
                                                                <label for="fullName">
                                                                    <h6>File Scan PUTUSAN MAHKAMAH KONSTITUSI RI TENTANG PERSELISIHAN HASIL PEMILIHAN (APABILA TERDAPAT GUGATAN)</h6>
                                                                </label>
                                                                <br>
                                                                <a class="btn btn-primary" href="{{ url('/storage/dokumen_pengangkatan/' .$data_pengangkatan->noreg . '/' . $data_pengangkatan->upload8) }}">File Scan PUTUSAN MAHKAMAH KONSTITUSI </a>
                                                            </div>
                                                            <!-- berkas ke 9 -->
                                                            <br>
                                                            <div class="col-xl-10 col-md-12 col-sm-12 col-12">
                                                                <label for="fullName">
                                                                    <h6>File Scan SURAT MAHKAMAH KONSTITUSI RI MENGENAI TIDA TERDAFTARNYA GUGATAN PERSELISIHAN HASIL PEMILIHAN (APABILA TIDAK TERDAPAT GUGATAN)</h6>
                                                                </label>
                                                                <br>
                                                                <a class="btn btn-primary" href="{{ url('/storage/dokumen_pengangkatan/' .$data_pengangkatan->noreg . '/' . $data_pengangkatan->upload9) }}">File Scan TERDAFTARNYA GUGATAN </a>
                                                            </div>
                                                            <!-- berkas ke 10 -->
                                                            <br>
                                                            <div class="col-xl-10 col-md-12 col-sm-12 col-12">
                                                                <label for="fullName">
                                                                    <h6>File Scan SURAT KPU RI PERIHAL PENETAPAN PASANGAN CALON TERPILIH TANPA PERMOHONAN PERSELISIHAN HASIL PEMILIHAN DI MAHKAMAH KONSTITUSI RI (APABILA TIDAK TERDAPAT GUGATAN)</h6>
                                                                </label>
                                                                <br>
                                                                <a class="btn btn-primary" href="{{ url('/storage/dokumen_pengangkatan/' .$data_pengangkatan->noreg . '/' . $data_pengangkatan->upload10) }}">File Scan SURAT KPU RI PERIHAL</a>
                                                            </div>
                                                            <!-- berkas ke 11 -->
                                                            <br>
                                                            <div class="col-xl-10 col-md-12 col-sm-12 col-12">
                                                                <label for="fullName">
                                                                    <h6>File Scan SURAT PENYAMPAIAN PENETAPAN PASANGAN CALON TERPILIH OLEH PKU KABUPATEN/KOTA KEPADA DPRD KABUPATEN/KOTA</h6>
                                                                </label>
                                                                <br>
                                                                <a class="btn btn-primary" href="{{ url('/storage/dokumen_pengangkatan/' .$data_pengangkatan->noreg . '/' . $data_pengangkatan->upload11) }}">File Scan SURAT PENYAMPAIAN</a>
                                                            </div>
                                                            <!-- berkas ke 12 -->
                                                            <br>
                                                            <div class="col-xl-10 col-md-12 col-sm-12 col-12">
                                                                <label for="fullName">
                                                                    <h6>File Scan SURAT USULAN PENGESAHAN PENGANGKATAN PASANGAN CALON BUPATI DAN WAKIL BUPATI ATAU WALIKOTA DAN WAKIL WALIKOTA OLEH DPRD KABUPATEN/KOTA KEPADA MENDAGRI MELALUI GUBERNUR</h6>
                                                                </label>
                                                                <br>
                                                                <a class="btn btn-primary" href="{{ url('/storage/dokumen_pengangkatan/' .$data_pengangkatan->noreg . '/' . $data_pengangkatan->upload12) }}">File Scan SURAT USULAN PENGESAHAN</a>
                                                            </div>
                                                            <!-- berkas ke 13 -->
                                                            <br>
                                                            <div class="col-xl-10 col-md-12 col-sm-12 col-12">
                                                                <label for="fullName">
                                                                    <h6>File Scan SURAT USULAN PENGESAHAN PENGANGKATAN PASANGAN CALON BUPATI DAN WAKIL BUPATI ATAU WALIKOTA DAN WAKIL WALIKOTA OLEH GUBERNUR KEPADA MENDAGRI</h6>
                                                                </label>
                                                                <br>
                                                                <a class="btn btn-primary" href="{{ url('/storage/dokumen_pengangkatan/' .$data_pengangkatan->noreg . '/' . $data_pengangkatan->upload13) }}">File Scan SURAT WALIKOTA OLEH GUBERNUR</a>
                                                            </div>
                                                            <div class="col-xl-10 col-md-12 col-sm-12 col-12">
                                                                <label for="fullName">
                                                                    <h6>Kirim Status Berkas</h6>
                                                                    <select class="form-control" name="kirim_status" id="kirim_status">
                                                                        <option>disapprove</option>
                                                                        <option>approve</option>
                                                                    </select>
                                                                </label>
                                                            </div>
                                                            <br>
                                                            <a class="btn btn-primary d-inline" href="{{ url('admin/pengangkatan') }}" type="submit" di>kembali</a>
                                                            <button class="btn btn-primary">kirim</button>
                                                        </form>
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

@endsection