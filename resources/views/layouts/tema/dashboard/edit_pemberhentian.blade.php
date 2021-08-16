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
                                    <div class="widget-content widget-content-area">
                                        <div id="circle-basic" class="">
                                            <!-- pilihan 2 -->
                                            <section>
                                                <div class="widget-header">
                                                    <!-- DATA KE 1 -->
                                                    <!-- PEMBERHENTIAN -->
                                                    <div class="row">
                                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                                            <h4><b>Detail Data Pemberhentian</b></h4>
                                                        </div>
                                                    </div> <br> <br>
                                                    <form action="{{ url('admin/edit-data') }}{{ ('/') }}{{ $data_pemberhentian->id}}{{('/')}}{{ ('ubah') }}" method="POST">
                                                        @method('put')
                                                        @csrf
                                                        <input type="hidden" name="id" value="{{ $data_pemberhentian->id }}">
                                                        <div class="form-group row mb-4">
                                                            <label for="nama" class="col-xl-2 col-sm-3 col-sm-2 col-form-label">
                                                                <h6>nama</h6>
                                                            </label>
                                                            <div class="col-xl-5 col-lg-9 col-sm-10">
                                                                <input type="text" name="nama" class="form-control @error('nama') is-invalid @enderror" id="nama" placeholder="nama" value="{{ $data_pemberhentian->nama }}">
                                                            </div>
                                                            @error('nama')
                                                            <div class="alert alert-danger">{{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                        <div class="form-group row mb-4">
                                                            <label for="provinsi" class="col-xl-2 col-sm-3 col-sm-2 col-form-label">
                                                                <h6>Provinsi</h6>
                                                            </label>
                                                            <div class="col-xl-5 col-lg-9 col-sm-10">
                                                                <input type="text" name="provinsi" class="form-control @error('provinsi') is-invalid @enderror" id="provinsi" placeholder="provinsi" value="{{ $data_pemberhentian->provinsi }}">
                                                            </div>
                                                            @error('provinsi')
                                                            <div class="alert alert-danger">{{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                        <div class="form-group row mb-4">
                                                            <label for="kabupaten" class="col-xl-2 col-sm-3 col-sm-2 col-form-label">
                                                                <h6>kabupaten</h6>
                                                            </label>
                                                            <div class="col-xl-5 col-lg-9 col-sm-10">
                                                                <input type="text" name="kabupaten" class="form-control @error('kabupaten') is-invalid @enderror" id="kabupaten" placeholder="kabupaten" value="{{ $data_pemberhentian->kabupaten }}">
                                                            </div>
                                                            @error('kabupaten')
                                                            <div class="alert alert-danger">{{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                        <div class="form-group row mb-4">
                                                            <label for="penyebabkdh" class="col-xl-2 col-sm-3 col-sm-2 col-form-label">
                                                                <h6>penyebabkdh</h6>
                                                            </label>
                                                            <div class="col-xl-5 col-lg-9 col-sm-10">
                                                                <input type="text" name="penyebabkdh" class="form-control @error('penyebabkdh') is-invalid @enderror" id="penyebabkdh" placeholder="penyebabkdh" value="{{ $data_pemberhentian->penyebabkdh }}">
                                                            </div>
                                                            @error('penyebabkdh')
                                                            <div class="alert alert-danger">{{ $message }}</div>
                                                            @enderror
                                                        </div>

                                                        <div class="form-group row mb-4">
                                                            <label for="objekkdh" class="col-xl-2 col-sm-3 col-sm-2 col-form-label">
                                                                <h6>objekkdh</h6>
                                                            </label>
                                                            <div class="col-xl-5 col-lg-9 col-sm-10">
                                                                <input type="text" name="objekkdh" class="form-control @error('objekkdh') is-invalid @enderror" id="objekkdh" placeholder="objekkdh" value="{{ $data_pemberhentian->objekkdh }}">
                                                            </div>
                                                            @error('objekkdh')
                                                            <div class="alert alert-danger">{{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                        <div class="form-group row mb-4">
                                                            <label for="jk" class="col-xl-2 col-sm-3 col-sm-2 col-form-label">
                                                                <h6>jk</h6>
                                                            </label>
                                                            <div class="col-xl-5 col-lg-9 col-sm-10">
                                                                <input type="text" name="jk" class="form-control @error('jk') is-invalid @enderror" id="jk" placeholder="jk" value="{{ $data_pemberhentian->jk }}">
                                                            </div>
                                                            @error('jk')
                                                            <div class="alert alert-danger">{{ $message }}</div>
                                                            @enderror
                                                        </div>

                                                        <!-- DATA KE 2 -->
                                                        <div class="row">
                                                            <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                                                <h4><b>KELENGKAPAN ADMINISTRASI</b></h4>
                                                            </div>
                                                        </div> <br>
                                                        <!-- berkas ke 1 -->
                                                        <div class="col-xl-10 col-md-12 col-sm-12 col-12">
                                                            <label for="fullName">
                                                                <h6>File Scan KETERANGAN KEASLIAN DOKUMENT DARI BIRO PEMERINTAHAN/OTDA PROVINSI (<i> ASISTEN BIDANG PEMERINTAHAN</i>)</h6>
                                                            </label>
                                                            <br>
                                                            <a class="btn btn-primary" href="{{ url('/storage/dokumen_pemberhentian/' .$data_pemberhentian->noreg . '/' . $data_pemberhentian->upload1) }}">File Scan KETERANGAN KEASLIAN DOKUMENT</a>
                                                        </div>
                                                        <br>
                                                        <!-- berkas ke 2 -->
                                                        <div class="col-xl-10 col-md-12 col-sm-12 col-12">
                                                            <label for="fullName">
                                                                <h6>File Scan FOTOCOPY KEPUTUSAN MENTERI DALAM NEGERI TENTANG PENGANGKATAN BUPATI DAN/ATAU WAKIL BUPATI ATAU WALIKOTA DAN/ATAU WAKIL WALIKOTA YANG BERSANGKUTAN</h6>
                                                            </label>
                                                            <br>
                                                            <a class="btn btn-primary" href="{{ url('/storage/dokumen_pemberhentian/' .$data_pemberhentian->noreg . '/' . $data_pemberhentian->upload2) }}">File Scan FOTOCOPY KEPUTUSAN MENTERI DALAM NEGERI</a>
                                                        </div>
                                                        <br>
                                                        <!-- berkas ke 3 -->
                                                        <div class="col-xl-10 col-md-12 col-sm-12 col-12">
                                                            <label for="fullName">
                                                                <h6>File Scan FOTOCOPY BERITA ACARA PELANTIKAN
                                                                    BUPATI DAN/ATAU WAKIL BUPATI ATAU WALIKOTA
                                                                    DAN/ATAU WAKIL WALIKOTA YANG BERSANGKUTAN
                                                                </h6>
                                                            </label>
                                                            <a class="btn btn-primary" href="{{ url('/storage/dokumen_pemberhentian/' .$data_pemberhentian->noreg . '/' . $data_pemberhentian->upload3) }}">File Scan FOTOCOPY BERITA ACARA PELANTIKAN
                                                                BUPATI DAN/ATAU WAKIL BUPATI</a>
                                                        </div>
                                                        <!-- berkas ke 4 -->
                                                        <br>
                                                        <div class="col-xl-10 col-md-12 col-sm-12 col-12">
                                                            <label for="fullName">
                                                                <h6>File Scan SURAT RISALAH DAN BERITA ACARA
                                                                    RAPAT PARIPURNA DPRD KABUPATEN/KOTA DALAM
                                                                    RANGKA PENGUMUMAN PEMBERHENTIAN BUPATI DAN/ATAU WAKIL BUPATI DAN/ATAU WALIKOTA
                                                                    DAN/ATAU WAKIL WALIKOTA KARENA
                                                                    BERAKHIR MASA JABATANNYA
                                                                </h6>
                                                            </label>
                                                            <a class="btn btn-primary" href="{{ url('/storage/dokumen_pemberhentian/' .$data_pemberhentian->noreg . '/' . $data_pemberhentian->upload4) }}">File Scan SURAT RISALAH DAN BERITA ACARA
                                                                RAPAT PARIPURNA DPRD</a>

                                                        </div>
                                                        <!-- berkas ke 5 -->
                                                        <br>
                                                        <div class="col-xl-10 col-md-12 col-sm-12 col-12">
                                                            <label for="fullName">
                                                                <h6>File Scan SURAT USULAN PENGESAHAN
                                                                    PEMBERHENTIAN BUPATI DAN/ATAU WAKIL BUPATI
                                                                    ATAU WALIKOTA DAN/ATAU WAKIL WALIKOTA OLEH
                                                                    PIMPINAN DPRD KABUPATEN/KOTA KEPADA MENDAGRI
                                                                    MELALUI GUBERNUR</h6>
                                                            </label>
                                                            <br>
                                                            <a class="btn btn-primary" href="{{ url('/storage/dokumen_pemberhentian/' .$data_pemberhentian->noreg . '/' . $data_pemberhentian->upload5) }}">File Scan SURAT USULAN PENGESAHAN
                                                                PEMBERHENTIAN BUPATI DAN/ATAU WAKIL BUPATI
                                                                ATAU WALIKOTA </a>

                                                        </div>
                                                        <!-- berkas ke 6 -->
                                                        <br>
                                                        <div class="col-xl-10 col-md-12 col-sm-12 col-12">
                                                            <label for="fullName">
                                                                <h6>File Scan SURAT USULAN PENGESAHAN
                                                                    PEMBERHENTIAN BUPATI DAN/ATAU WAKIL BUPATI
                                                                    ATAU WALIKOTA DAN/ATAU WAKIL WALIKOTA OLEH
                                                                    GUBERNUR KEPADA MENDAGRI</h6>
                                                            </label>
                                                            <br>
                                                            <a class="btn btn-primary" href="{{ url('/storage/dokumen_pemberhentian/' .$data_pemberhentian->noreg . '/' . $data_pemberhentian->upload6) }}">File Scan SURAT USULAN PENGESAHAN
                                                                PEMBERHENTIAN</a>

                                                        </div>
                                                        <br>
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
                                                        <a class="btn btn-primary d-inline" href="{{ url('admin/pemberhentian') }}" type="submit" di>kembali</a>
                                                        <button type="submit" class="btn btn-primary d-inline">{{ __('kirim') }}</button>
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