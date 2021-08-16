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
                                                    <!-- PENGANGKATAN -->
                                                    <div class="row">
                                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                                            <h4><b>DATA PERMOHONAN @if($data['form']) {{ __('PENGANGKATAN') }}@endif</b></h4>
                                                        </div>
                                                    </div> <br> <br>
                                                    <?php

                                                    use Illuminate\Support\Facades\Auth;
                                                    // buat kode registrasi form
                                                    $data['no-reg'] = Auth::user()->noreg;
                                                    $noreg = $data['no-reg'];
                                                    ?>
                                                    <form action="{{ url('/user/insert-form_pengangkatan') }}" method="POST" enctype="multipart/form-data">
                                                        @csrf
                                                        <div class="form-group row mb-4">
                                                            <!-- <label for="noreg" class="col-xl-2 col-sm-3 col-sm-2 col-form-label">
                                                                <h6>Kategori Permohonan</h6>
                                                            </label> -->
                                                            <div class="col-xl-5 col-lg-9 col-sm-10">
                                                                <input type="hidden" name="kategori_permohonan" class="form-control @error('kategori_permohonan') is-invalid @enderror" id="kategori_permohonan" placeholder="kategori_permohonan" value="@if($data['form']) {{ __('pengangkatan') }} @endif">
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
                                                            <label for="hEmail" class="col-xl-2 col-sm-3 col-sm-2 col-form-label">
                                                                <h6>Provinsi</h6>
                                                            </label>
                                                            <div class="col-xl-5 col-lg-9 col-sm-10">
                                                                <input type="text" name="provinsi" class="form-control @error('provinsi') is-invalid @enderror" id="hEmail" placeholder="" value="{{ old('provinsi') }}">
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
                                                        <form>
                                                            <!-- berkas ke 1 -->
                                                            <div class="col-xl-10 col-md-12 col-sm-12 col-12">
                                                                <label for="fullName">
                                                                    <h6>File Scan SURAT KETERANGAN KEASLIAN DOCUMENT DARI BIRO PEMERINTAHAN/OTDA PROVINSI (ASISTEN BIDANG PEMERINTAHAN)</h6>
                                                                </label>
                                                                <div class="col-xl-10 col-lg-9 col-sm-10">
                                                                    <input type="file" name="upload1" class="form-control-file @error('upload1') is-invalid @enderror" id="exampleFormControlFile1">
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
                                                                    <h6>File Scan FOTOCOPY KEPUTUSAN MENTERI DALAM NEGERI TENTANG PENGANGKATAN BUPATI DAN WAKIL BUPATI ATAU WALIKOTA DAN WAKIL WALIKOTA PERIODE SEBELUMNYA</h6>
                                                                </label>
                                                                <div class="col-xl-10 col-lg-9 col-sm-10">
                                                                    <input type="file" name="upload2" class="form-control-file @error('upload2') is-invalid @enderror" id="exampleFormControlFile1">
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
                                                                    <h6>File Scan FOTOCOPY KEPUTUSAN MENTERI DALAM NEGERI TENTANG PENGANGKATAN PEJABAT BUPATI/WALIKOTA (DALAM HAL DAERAH DIPIMPIN OLEH PEJABAT)
                                                                    </h6>
                                                                </label>
                                                                <div class="col-xl-10 col-lg-9 col-sm-10">
                                                                    <input type="file" name="upload3" class="form-control-file @error('upload3') is-invalid @enderror" id="exampleFormControlFile1">
                                                                </div>
                                                                <br>
                                                                @error('upload3')
                                                                <span class="alert alert-danger">{{ $message }}</span>
                                                                @enderror
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
                                                                <div class="col-xl-10 col-lg-9 col-sm-10">
                                                                    <input type="file" name="upload4" class="form-control-file @error('upload4') is-invalid @enderror" id="exampleFormControlFile1">
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
                                                                    <h6>File Scan KEPUTUSAN KPU KABUPATEN/KOTA TENTANG REKAPPITULASI HASIL PERHITUNGAN SUARA
                                                                    </h6>
                                                                </label>
                                                                <div class="col-xl-10 col-lg-9 col-sm-10">
                                                                    <input type="file" name="upload5" class="form-control-file @error('upload5') is-invalid @enderror" id="exampleFormControlFile1">
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
                                                                    <h6>File Scan KEPUTUSAN KPU KABUPATEN/KOTA TENTANG PENETAPAN PASANGAN CALON TERPILIH</h6>
                                                                </label>
                                                                <div class="col-xl-10 col-lg-9 col-sm-10">
                                                                    <input type="file" name="upload6" class="form-control-file @error('upload6') is-invalid @enderror" id="exampleFormControlFile1">
                                                                </div>
                                                                <br>
                                                                @error('upload6')
                                                                <span class="alert alert-danger">{{ $message }}</span>
                                                                @enderror
                                                            </div>
                                                            <!-- berkas ke 7 -->
                                                            <br>
                                                            <div class="col-xl-10 col-md-12 col-sm-12 col-12">
                                                                <label for="fullName">
                                                                    <h6>File Scan RISALAH DAN BERITA ACARA RAPAT PARIPURNA DPRD KABUPATEN/KOTA DALAM RANGKA PENGUMUMAN PENETAPAN PASANGAN CALON BUPATI DAN WAKIL BUPATI ATAU WALIKOTA DAN WAKIL WALIKOTA TERPILIH</h6>
                                                                </label>
                                                                <div class="col-xl-10 col-lg-9 col-sm-10">
                                                                    <input type="file" name="upload7" class="form-control-file @error('upload7') is-invalid @enderror" id="exampleFormControlFile1">
                                                                </div>
                                                                <br>
                                                                @error('upload7')
                                                                <span class="alert alert-danger">{{ $message }}</span>
                                                                @enderror
                                                            </div>
                                                            <!-- berkas ke 8 -->
                                                            <br>
                                                            <div class="col-xl-10 col-md-12 col-sm-12 col-12">
                                                                <label for="fullName">
                                                                    <h6>File Scan PUTUSAN MAHKAMAH KONSTITUSI RI TENTANG PERSELISIHAN HASIL PEMILIHAN (APABILA TERDAPAT GUGATAN)</h6>
                                                                </label>
                                                                <div class="col-xl-10 col-lg-9 col-sm-10">
                                                                    <input type="file" name="upload8" class="form-control-file @error('upload8') is-invalid @enderror" id="exampleFormControlFile1">
                                                                </div>
                                                                <br>
                                                                @error('upload8')
                                                                <span class="alert alert-danger">{{ $message }}</span>
                                                                @enderror
                                                            </div>
                                                            <!-- berkas ke 9 -->
                                                            <br>
                                                            <div class="col-xl-10 col-md-12 col-sm-12 col-12">
                                                                <label for="fullName">
                                                                    <h6>File Scan SURAT MAHKAMAH KONSTITUSI RI MENGENAI TIDA TERDAFTARNYA GUGATAN PERSELISIHAN HASIL PEMILIHAN (APABILA TIDAK TERDAPAT GUGATAN)</h6>
                                                                </label>
                                                                <div class="col-xl-10 col-lg-9 col-sm-10">
                                                                    <input type="file" name="upload9" class="form-control-file @error('upload9') is-invalid @enderror" id="exampleFormControlFile1">
                                                                </div>
                                                                <br>
                                                                @error('upload9')
                                                                <span class="alert alert-danger">{{ $message }}</span>
                                                                @enderror
                                                            </div>
                                                            <!-- berkas ke 10 -->
                                                            <br>
                                                            <div class="col-xl-10 col-md-12 col-sm-12 col-12">
                                                                <label for="fullName">
                                                                    <h6>File Scan SURAT KPU RI PERIHAL PENETAPAN PASANGAN CALON TERPILIH TANPA PERMOHONAN PERSELISIHAN HASIL PEMILIHAN DI MAHKAMAH KONSTITUSI RI (APABILA TIDAK TERDAPAT GUGATAN)</h6>
                                                                </label>
                                                                <div class="col-xl-10 col-lg-9 col-sm-10">
                                                                    <input type="file" name="upload10" class="form-control-file @error('upload10') is-invalid @enderror" id="exampleFormControlFile1">
                                                                </div>
                                                                <br>
                                                                @error('upload10')
                                                                <span class="alert alert-danger">{{ $message }}</span>
                                                                @enderror
                                                            </div>
                                                            <!-- berkas ke 11 -->
                                                            <br>
                                                            <div class="col-xl-10 col-md-12 col-sm-12 col-12">
                                                                <label for="fullName">
                                                                    <h6>File Scan SURAT PENYAMPAIAN PENETAPAN PASANGAN CALON TERPILIH OLEH PKU KABUPATEN/KOTA KEPADA DPRD KABUPATEN/KOTA</h6>
                                                                </label>
                                                                <div class="col-xl-10 col-lg-9 col-sm-10">
                                                                    <input type="file" name="upload11" class="form-control-file @error('upload11') is-invalid @enderror" id="exampleFormControlFile1">
                                                                </div>
                                                                <br>
                                                                @error('upload11')
                                                                <span class="alert alert-danger">{{ $message }}</span>
                                                                @enderror
                                                            </div>
                                                            <!-- berkas ke 12 -->
                                                            <br>
                                                            <div class="col-xl-10 col-md-12 col-sm-12 col-12">
                                                                <label for="fullName">
                                                                    <h6>File Scan SURAT USULAN PENGESAHAN PENGANGKATAN PASANGAN CALON BUPATI DAN WAKIL BUPATI ATAU WALIKOTA DAN WAKIL WALIKOTA OLEH DPRD KABUPATEN/KOTA KEPADA MENDAGRI MELALUI GUBERNUR</h6>
                                                                </label>
                                                                <div class="col-xl-10 col-lg-9 col-sm-10">
                                                                    <input type="file" name="upload12" class="form-control-file @error('upload12') is-invalid @enderror" id="exampleFormControlFile1">
                                                                </div>
                                                                <br>
                                                                @error('upload12')
                                                                <span class="alert alert-danger">{{ $message }}</span>
                                                                @enderror
                                                            </div>
                                                            <!-- berkas ke 13 -->
                                                            <br>
                                                            <div class="col-xl-10 col-md-12 col-sm-12 col-12">
                                                                <label for="fullName">
                                                                    <h6>File Scan SURAT USULAN PENGESAHAN PENGANGKATAN PASANGAN CALON BUPATI DAN WAKIL BUPATI ATAU WALIKOTA DAN WAKIL WALIKOTA OLEH GUBERNUR KEPADA MENDAGRI</h6>
                                                                </label>
                                                                <div class="col-xl-10 col-lg-9 col-sm-10">
                                                                    <input type="file" name="upload13" class="form-control-file @error('upload13') is-invalid @enderror" id="exampleFormControlFile1">
                                                                </div>
                                                                <br>
                                                                @error('upload13')
                                                                <span class="alert alert-danger">{{ $message }}</span>
                                                                @enderror
                                                            </div>
                                                            <br>
                                                            <a class="btn btn-primary d-inline" href="{{ url('user/pilihan') }}" type="submit" di>kembali</a>
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