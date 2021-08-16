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
                                            <!-- pilihan 2 -->
                                            <h3>Isi Data & Upload Persyaratan</h3>
                                            <section>
                                                <div class="widget-header">
                                                    <!-- DATA KE 1 -->
                                                    <!-- PEMBERHENTIAN -->
                                                    <div class="row">
                                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                                            <h4><b>DATA PERMOHONAN @if($data['form']) {{ __('PEMBERHENTIAN') }}@endif</b></h4>
                                                        </div>
                                                    </div> <br> <br>
                                                    <?php

                                                    use Illuminate\Support\Facades\Auth;
                                                    // buat kode registrasi form
                                                    $data['no-reg'] = Auth::user()->noreg;
                                                    $noreg = $data['no-reg'];
                                                    ?>
                                                    <form action="{{ url('/user/insert-form_pemberhentian') }}" method="POST" enctype="multipart/form-data">
                                                        @csrf
                                                        <div class="form-group row mb-4">
                                                            <!-- <label for="noreg" class="col-xl-2 col-sm-3 col-sm-2 col-form-label">
                                                                <h6>Kategori Permohonan</h6>
                                                            </label> -->
                                                            <div class="col-xl-5 col-lg-9 col-sm-10">
                                                                <input type="hidden" name="kategori_permohonan" class="form-control @error('kategori_permohonan') is-invalid @enderror" id="kategori_permohonan" placeholder="kategori_permohonan" value="@if($data['form']) {{ __('pemberhentian') }} @endif">
                                                            </div>
                                                            @error('kategori_permohonan')
                                                            <div class="alert alert-danger">{{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                        <div class="form-group row mb-4">
                                                            <!-- <label for="noreg" class="col-xl-2 col-sm-3 col-sm-2 col-form-label">
                                                                <h6>NomorRegistrasi</h6>
                                                            </label> -->
                                                            <div class="col-xl-5 col-lg-9 col-sm-10">
                                                                <input type="hidden" name="noreg" class="form-control @error('noreg') is-invalid @enderror" id="noreg" placeholder="noreg" value="{{ $noreg }}">
                                                            </div>
                                                            @error('noreg')
                                                            <div class="alert alert-danger">{{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                        <div class="form-group row mb-4">
                                                            <label for="nama" class="col-xl-2 col-sm-3 col-sm-2 col-form-label">
                                                                <h6>nama</h6>
                                                            </label>
                                                            <div class="col-xl-5 col-lg-9 col-sm-10">
                                                                <input type="text" name="nama" class="form-control @error('nama') is-invalid @enderror" id="nama" placeholder="nama" value="{{ Auth::user()->name}}">
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
                                                                <input type="text" name="provinsi" class="form-control @error('provinsi') is-invalid @enderror" id="provinsi" placeholder="provinsi" value="{{ old('provinsi') }}">
                                                            </div>
                                                            @error('provinsi')
                                                            <div class="alert alert-danger">{{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                        <div class="form-group mb-4">
                                                            <div class="row">
                                                                <label class="col-form-label col-xl-2 col-sm-3 col-sm-2 pt-0">
                                                                    <h6>Kabupaten/Kota</h6>
                                                                </label>
                                                                <div class="col-xl-5 col-lg-9 col-sm-10">
                                                                    <select class="form-control  basic" name="kabupaten">
                                                                        <option selected="selected">Konawe
                                                                        </option>
                                                                        <option>konsel</option>
                                                                        <option>kendari</option>
                                                                        <option>unaha</option>
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
                                                            <div class="col-xl-10 col-lg-9 col-sm-10">
                                                                <input type="file" name="upload1" class="form-control-file @error('upload1') is-invalid @enderror" id="exampleFormControlFile1" value="{{ old('upload1') }}">
                                                            </div>
                                                            <br>
                                                            @error('upload1')
                                                            <span class="alert alert-danger">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                        <br>
                                                        <!-- berkas ke 2 -->
                                                        <div class="col-xl-10 col-md-12 col-sm-12 col-12">
                                                            <label for="fullName">
                                                                <h6>File Scan FOTOCOPY KEPUTUSAN MENTERI DALAM NEGERI TENTANG PENGANGKATAN BUPATI DAN/ATAU WAKIL BUPATI ATAU WALIKOTA DAN/ATAU WAKIL WALIKOTA YANG BERSANGKUTAN</h6>
                                                            </label>
                                                            <div class="col-xl-10 col-lg-9 col-sm-10">
                                                                <input type="file" name="upload2" class="form-control-file  @error('upload2') is-invalid @enderror" id="exampleFormControlFile1" value="{{ old('upload2') }}">
                                                            </div>
                                                            <br>
                                                            @error('upload2')
                                                            <span class="alert alert-danger">{{ $message }}</span>
                                                            @enderror
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
                                                            <div class="col-xl-10 col-lg-9 col-sm-10">
                                                                <input type="file" name="upload3" class="form-control-file @error('upload3') is-invalid @enderror" id="exampleFormControlFile1" value="{{ old('upload3') }}">
                                                            </div>
                                                            <br>
                                                            @error('upload3')
                                                            <span class="alert alert-danger">{{ $message }}</span>
                                                            @enderror
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
                                                            <div class="col-xl-10 col-lg-9 col-sm-10">
                                                                <input type="file" name="upload4" class="form-control-file  @error('upload4') is-invalid @enderror" id="exampleFormControlFile1" value="{{ old('upload4') }}">
                                                            </div>
                                                            <br>
                                                            @error('upload4')
                                                            <span class="alert alert-danger">{{ $message }}</span>
                                                            @enderror
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
                                                            <div class="col-xl-10 col-lg-9 col-sm-10">
                                                                <input type="file" name="upload5" class="form-control-file @error('upload5') is-invalid @enderror" id="exampleFormControlFile1" value="{{ old('upload5') }}">
                                                            </div>
                                                            <br>
                                                            @error('upload5')
                                                            <span class="alert alert-danger">{{ $message }}</span>
                                                            @enderror
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
                                                            <div class="col-xl-10 col-lg-9 col-sm-10">
                                                                <input type="file" name="upload6" class="form-control-file @error('upload6') is-invalid @enderror" id="exampleFormControlFile1" value="{{ old('upload6') }}">
                                                            </div>
                                                            <br>
                                                            @error('upload6')
                                                            <span class="alert alert-danger">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                        <br>
                                                        <a class="btn btn-primary d-inline" href="{{ url('user/pilihan') }}" type="submit" di>kembali</a>
                                                        <button type="submit" class="btn btn-primary">{{ __('kirim') }}</button>
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