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
                                                                <h4><b>Upload Berkas</b></h4>
                                                            </div>
                                                        </div> <br> <br>
                                            <!-- DATA KE 2 -->

                                           <form action="{{ url('/user/insert-form_pemberhentian') }}" method="post" enctype="multipart/form-data">
                                               @csrf
                                               <div class="row">
                                                   <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                                       <h4><b>KELENGKAPAN ADMINISTRASI</b></h4>
                                                   </div>
                                               </div> <br>
                                               <input type="hidden" name="noreg" value="{{ $data['noreg'] }}">
                                               <input type="hidden" name="nama" value="{{ $data['nama'] }}">
                                               <input type="hidden" name="jk" value="{{ $data['jk'] }}">
                                               <input type="hidden" name="kategori_permohonan" value="{{ $data['kategori_permohonan'] }}">
                                               <input type="hidden" name="objekkdh" value="{{ $data['objekkdh'] }}">
                                               <input type="hidden" name="provinsi" value="{{ $data['provinsi'] }}">
                                               <input type="hidden" name="kabupaten" value="{{ $data['kabupaten'] }}">
                                               <input type="hidden" name="penyebabkdh" value="{{ $data['penyebabkdh'] }}">

                                               <!-- jika users memilih opsi pertama maka berikut-->
                                           @if($data['penyebabkdh'] == '1')
                                               <!-- berkas ke 1 -->
                                               <div class="col-xl-10 col-md-12 col-sm-12 col-12">
                                                <label for="fullName">
                                                    <h6>Surat keterangan keaslian dokumen dari bagian pemerintah Kabupaten/Kota</h6>
                                                </label>
                                                <div class="col-xl-10 col-lg-9 col-sm-10">
                                                    <input type="file" name="upload1" class="form-control-file @error('upload1') is-invalid @enderror" id="exampleFormControlFile1" value="{{ old('upload1') }}" required>
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
                                                    <h6>Fotokopi Keputusan Menteri Dalam Negeri Tentang Pengangkatan Bupati Dan/Atau Wakil Bupati Atau Walikota Dan/Atau Wakil Walikota Yang Bersangkutan; </h6>
                                                </label>
                                                <div class="col-xl-10 col-lg-9 col-sm-10">
                                                    <input type="file" name="upload2" class="form-control-file  @error('upload2') is-invalid @enderror" id="exampleFormControlFile1" value="{{ old('upload2') }}" required>
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
                                                    <h6>Fotokopi Berita Acara Pelantikan Bupati Dan/Atau Wakil Bupati Atau Walikota Dan/Atau Wakil Walikota Yang Bersangkutan;
                                                    </h6>
                                                </label>
                                                <div class="col-xl-10 col-lg-9 col-sm-10">
                                                    <input type="file" name="upload3" class="form-control-file @error('upload3') is-invalid @enderror" id="exampleFormControlFile1" value="{{ old('upload3') }}" required>
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
                                                    <h6>Risalah Dan Berita Acara Rapat Paripurna DPRD Kabupaten/Kota Dalam Rangka Pengumuman Pemberhentian Bupati Dan/Atau Wakil Bupati Atau Walikota Dan/Atau Wakil Walikota Karena Berakhir Masa Jabatannya;
                                                    </h6>
                                                </label>
                                                <div class="col-xl-10 col-lg-9 col-sm-10">
                                                    <input type="file" name="upload4" class="form-control-file  @error('upload4') is-invalid @enderror" id="exampleFormControlFile1" value="{{ old('upload4') }}" required>
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
                                                    <h6>Surat Usulan Pengesahan Pemberhentian Bupati Dan/Atau Wakil Bupati Atau Walikota Dan/Atau Wakil Walikota Oleh Pimpinan DPRD Kabupaten/Kota Kepada Mendagri Melalui Gubernur;</h6>
                                                </label>
                                                <div class="col-xl-10 col-lg-9 col-sm-10">
                                                    <input type="file" name="upload5" class="form-control-file @error('upload5') is-invalid @enderror" id="exampleFormControlFile1" value="{{ old('upload5') }}" required>
                                                </div>
                                                <br>
                                                @error('upload5')
                                                <span class="alert alert-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <!-- berkas ke 6 tidak di pake lagi -->
                                            <br>
                                            <!-- <div class="col-xl-10 col-md-12 col-sm-12 col-12">
                                                <label for="fullName">
                                                    <h6>Surat Usulan Pengesahan Pemberhentian Bupati Dan/Atau Wakil Bupati Atau Walikota Dan/Atau Wakil Walikota Oleh Gubernur Kepada Mendagri. </h6>
                                                </label>
                                                <div class="col-xl-10 col-lg-9 col-sm-10">
                                                    <input type="file" name="upload6" class="form-control-file @error('upload6') is-invalid @enderror" id="exampleFormControlFile1" value="{{ old('upload6') }}" required>
                                                </div>
                                                <br>
                                                @error('upload6')
                                                <span class="alert alert-danger">{{ $message }}</span>
                                                @enderror
                                            </div> -->
                                            <a class="btn btn-primary d-inline" href="{{ url('user/view') }}" type="submit" di>kembali</a>
                                            <button type="submit" class="btn btn-primary">{{ __('Kirim') }}</button>
                                        <!-- jika users memilih opsi kedua maka berikut-->
                                    @elseif ($data['penyebabkdh'] == '2')
                                        <!-- berkas ke 1 -->
                                            <div class="col-xl-10 col-md-12 col-sm-12 col-12">
                                                <label for="fullName">
                                                    <h6>Surat keterangan keaslian dokumen dari bagian pemerintah Kabupaten/Kota</h6>
                                                </label>
                                                <div class="col-xl-10 col-lg-9 col-sm-10">
                                                    <input type="file" name="upload1" class="form-control-file @error('upload1') is-invalid @enderror" id="exampleFormControlFile1" value="{{ old('upload1') }}" required>
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
                                                    <h6>Fotokopi Keputusan Menteri Dalam Negeri Tentang Pengangkatan Bupati Dan/Atau Wakil Bupati Atau Walikota Dan/Atau Wakil Walikota Yang Bersangkutan; </h6>
                                                </label>
                                                <div class="col-xl-10 col-lg-9 col-sm-10">
                                                    <input type="file" name="upload2" class="form-control-file  @error('upload2') is-invalid @enderror" id="exampleFormControlFile1" value="{{ old('upload2') }}" required>
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
                                                    <h6>Fotokopi Berita Acara Pelantikan Bupati Dan/Atau Wakil Bupati Atau Walikota Dan/Atau Wakil Walikota Yang Bersangkutan;
                                                    </h6>
                                                </label>
                                                <div class="col-xl-10 col-lg-9 col-sm-10">
                                                    <input type="file" name="upload3" class="form-control-file @error('upload3') is-invalid @enderror" id="exampleFormControlFile1" value="{{ old('upload3') }}" required>
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
                                                    <h6>Risalah Dan Berita Acara Rapat Paripurna DPRD Kabupaten/Kota Dalam Rangka Pengumuman Pemberhentian Bupati Dan/Atau Wakil Bupati Atau Walikota Dan/Atau Wakil Walikota Karena Berakhir Masa Jabatannya;
                                                    </h6>
                                                </label>
                                                <div class="col-xl-10 col-lg-9 col-sm-10">
                                                    <input type="file" name="upload4" class="form-control-file  @error('upload4') is-invalid @enderror" id="exampleFormControlFile1" value="{{ old('upload4') }}" required>
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
                                                    <h6>Surat Usulan Pengesahan Pemberhentian Bupati Dan/Atau Wakil Bupati Atau Walikota Dan/Atau Wakil Walikota Oleh Pimpinan DPRD Kabupaten/Kota Kepada Mendagri Melalui Gubernur;</h6>
                                                </label>
                                                <div class="col-xl-10 col-lg-9 col-sm-10">
                                                    <input type="file" name="upload5" class="form-control-file @error('upload5') is-invalid @enderror" id="exampleFormControlFile1" value="{{ old('upload5') }}" required>
                                                </div>
                                                <br>
                                                @error('upload5')
                                                <span class="alert alert-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <!-- berkas ke 6 tidak di gunakan -->
                                            <!-- <br>
                                            <div class="col-xl-10 col-md-12 col-sm-12 col-12">
                                                <label for="fullName">
                                                    <h6>Surat Usulan Pengesahan Pemberhentian Bupati Dan/Atau Wakil Bupati Atau Walikota Dan/Atau Wakil Walikota Oleh Gubernur Kepada Mendagri. </h6>
                                                </label>
                                                <div class="col-xl-10 col-lg-9 col-sm-10">
                                                    <input type="file" name="upload6" class="form-control-file @error('upload6') is-invalid @enderror" id="exampleFormControlFile1" value="{{ old('upload6') }}" required>
                                                </div>
                                                <br>
                                                @error('upload6')
                                                <span class="alert alert-danger">{{ $message }}</span>
                                                @enderror
                                            </div> -->
                                        <!-- berkas ke 7 -->
                                            <br>
                                            <div class="col-xl-10 col-md-12 col-sm-12 col-12">
                                                <label for="fullName">
                                                    <h6>Akta Kematian Dari Pejabat Berwenang;   </h6>
                                                </label>
                                                <div class="col-xl-10 col-lg-9 col-sm-10">
                                                    <input type="file" name="upload6" class="form-control-file @error('upload6') is-invalid @enderror" id="exampleFormControlFile1" value="{{ old('upload6') }}" required>
                                                </div>
                                                <br>
                                                @error('upload6')
                                                <span class="alert alert-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <br>
                                                <a class="btn btn-primary d-inline" href="{{ url('user/view') }}" type="submit" di>kembali</a>
                                                <button type="submit" class="btn btn-primary">{{ __('Kirim') }}</button>
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
@endsection
