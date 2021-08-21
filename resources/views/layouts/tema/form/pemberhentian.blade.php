@extends('layouts.tema.app')

@section('title','SIOLA_Prov KDH')

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
                                                            <h4><b>DATA Usulan Pemberhentian  {{ $data['form_pilihan'] }}</b></h4>
                                                        </div>
                                                    </div> <br> <br>
                                                    <?php

                                                    use Illuminate\Support\Facades\Auth;
                                                    // buat kode registrasi form
                                                    $data['no-reg'] = Auth::user()->noreg;
                                                    $noreg = $data['no-reg'];
                                                    ?>
                                                    <form action="{{ url('/user/upload_berkas_pemberhentian') }}" method="GET">
                                                        @csrf
                                                        <div class="form-group row mb-4">
                                                            <!-- <label for="noreg" class="col-xl-2 col-sm-3 col-sm-2 col-form-label">
                                                                <h6>Kategori Permohonan</h6>
                                                            </label> -->
                                                            <div class="col-xl-5 col-lg-9 col-sm-10">
                                                                <input type="hidden" name="kategori_permohonan" class="form-control @error('kategori_permohonan') is-invalid @enderror" id="kategori_permohonan" placeholder="kategori_permohonan" value="@if($data['form_pilihan']) {{ __('pemberhentian') }} @endif">
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
                                                                <input type="text" name="nama" class="form-control @error('nama') is-invalid @enderror" id="nama" placeholder="nama" value="{{ Auth::user()->name}}" readonly>
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
                                                                <input type="text"  name="provinsi" class="form-control @error('provinsi') is-invalid @enderror" id="provinsi" placeholder="provinsi" value="{{ __('sulawesi tenggara') }}" readonly>
                                                            </div>
                                                            @error('provinsi')
                                                            <div class="alert alert-danger">{{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                        <div class="form-group mb-4">
                                                            <div class="row">
                                                                <label class="col-form-label col-xl-2 col-sm-3 col-sm-2 pt-0">
                                                                    <h6>Jenis
                                                                        Kelamin</h6>
                                                                </label>
                                                                <div class="col-xl-5 col-lg-9 col-sm-10">
                                                                    <select class="form-control  basic" name="jk" required>
                                                                        <option selected disabled value="">Pilih</option>
                                                                        <option>Laki-Laki</option>
                                                                        <option>Perempuan</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group mb-4">
                                                            <div class="row">
                                                                <label class="col-form-label col-xl-2 col-sm-3 col-sm-2 pt-0">
                                                                    <h6>Objek KDH</h6>
                                                                </label>
                                                                <div class="col-xl-5 col-lg-9 col-sm-10">
                                                                    <select class="form-control  basic" name="objekkdh" required>
                                                                        <option selected disabled value="" >Pilih</option>
                                                                        @foreach($data["objekkdh"] as $objek => $kdh)
                                                                            <option value="{{ $kdh->objekkdh }}" >{{ $kdh->objekkdh }}</option>
                                                                        @endforeach
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group mb-4">
                                                            <div class="row">
                                                                <label class="col-form-label col-xl-2 col-sm-3 col-sm-2 pt-0">
                                                                    <h6>Kabupaten</h6>
                                                                </label>
                                                                <div class="col-xl-5 col-lg-9 col-sm-10">
                                                                    <select class="form-control  basic" name="kabupaten" required>
                                                                        <option selected disabled value="" >Pilih</option>
                                                                        @foreach($data["kabupaten"] as $data => $kabupaten)
                                                                            <option value="{{ $kabupaten->kabupaten }}" >{{ $kabupaten->kabupaten }}</option>
                                                                        @endforeach
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
                                                                    <select class="form-control  basic" name="penyebabkdh" required>
                                                                        <option selected disabled value="">Pilih</option>
                                                                        <option value="1">Pengesahan Pemberhentian Bupati Dan/Atau Wakil Bupati Atau Walikota Dan/Atau Wakil Walikota Karena Berakhir Masa Jabatan</option>
                                                                        <option value="2">Pemberhentian Bupati Dan/Atau Wakil Bupati Atau Walikota Dan/Atau Wakil Walikota Karena   Meninggal Dunia : </option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <!-- // batas form inputan -->
                                                        <br>
                                                        <a class="btn btn-primary d-inline" href="{{ url('user/pilihan') }}" type="submit" di>kembali</a>
                                                        <button type="submit" class="btn btn-primary">{{ __('Next') }}</button>
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
