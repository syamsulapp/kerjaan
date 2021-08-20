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
                                                                <h4><b>Upload Berkas Pengangkatan</b></h4>
                                                            </div>
                                                        </div> <br> <br>
                                                        <!-- DATA KE 2 -->
                                                        <div class="row">
                                                            <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                                                <h4><b>KELENGKAPAN ADMINISTRASI</b></h4>
                                                            </div>
                                                        </div> <br>
                                                        <form action="{{ url('/user/insert-form_pengangkatan') }}" method="POST" enctype="multipart/form-data">
                                                            @csrf
                                                            <!-- berkas ke 1 -->
                                                            <input type="hidden" name="noreg" value="{{ $data['noreg'] }}">
                                                            <input type="hidden" name="nama" value="{{ $data['nama'] }}">
                                                            <input type="hidden" name="jk" value="{{ $data['jk'] }}">
                                                            <input type="hidden" name="kategori_permohonan" value="{{ $data['kategori_permohonan'] }}">
                                                            <input type="hidden" name="objekkdh" value="{{ $data['objekkdh'] }}">
                                                            <input type="hidden" name="provinsi" value="{{ $data['provinsi'] }}">
                                                            <input type="hidden" name="kabupaten" value="{{ $data['kabupaten'] }}">
                                                            <input type="hidden" name="penyebabkdh" value="{{ $data['penyebabkdh'] }}">

                                                            @if($data['penyebabkdh'] == '1')
                                                                <!-- berkas 1 -->
                                                            <div class="col-xl-10 col-md-12 col-sm-12 col-12">
                                                                <label for="fullName">
                                                                    <h6>Surat Keterangan Keaslian Dokumen Dari Biro Pemerintahan/Otda Provinsi (Asisten Bidang Pemerintahan); </h6>
                                                                </label>
                                                                <div class="col-xl-10 col-lg-9 col-sm-10">
                                                                    <input type="file" name="upload1" class="form-control-file @error('upload1') is-invalid @enderror" id="exampleFormControlFile1" required>
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
                                                                    <h6>Fotokopi Keputusan Menteri Dalam Negeri Tentang Pengangkatan Bupati Dan Wakil Bupati Atau Walikota Dan Wakil Walikota Periode Sebelumnya; </h6>
                                                                </label>
                                                                <div class="col-xl-10 col-lg-9 col-sm-10">
                                                                    <input type="file" name="upload2" class="form-control-file @error('upload2') is-invalid @enderror" id="exampleFormControlFile1" required>
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
                                                                    <h6>Fotokopi Keputusan Menteri Dalam Negeri Tentang Pengangkatan Penjabat Bupati/Walikota (Dalam Hal Daerah Dipimpin Oleh Penjabat);
                                                                    </h6>
                                                                </label>
                                                                <div class="col-xl-10 col-lg-9 col-sm-10">
                                                                    <input type="file" name="upload3" class="form-control-file @error('upload3') is-invalid @enderror" id="exampleFormControlFile1" required>
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
                                                                    <h6>Fotokopi Berita Acara Pelantikan Bupati Dan Wakil Bupati Atau Walikota Dan Wakil Walikota Periode Sebelumnya;
                                                                    </h6>
                                                                </label>
                                                                <div class="col-xl-10 col-lg-9 col-sm-10">
                                                                    <input type="file" name="upload4" class="form-control-file @error('upload4') is-invalid @enderror" id="exampleFormControlFile1" required>
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
                                                                    <h6>Keputusan Kpu Kabupaten/Kota Tentang Rekapitulasi Hasil Penghitungan Suara;
                                                                    </h6>
                                                                </label>
                                                                <div class="col-xl-10 col-lg-9 col-sm-10">
                                                                    <input type="file" name="upload5" class="form-control-file @error('upload5') is-invalid @enderror" id="exampleFormControlFile1" required>
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
                                                                    <h6>Keputusan Kpu Kabupaten/Kota Tentang Penetapan Pasangan Calon Terpilih; </h6>
                                                                </label>
                                                                <div class="col-xl-10 col-lg-9 col-sm-10">
                                                                    <input type="file" name="upload6" class="form-control-file @error('upload6') is-invalid @enderror" id="exampleFormControlFile1" required>
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
                                                                    <h6>Risalah Dan Berita Acara Rapat Paripurna DPRD Kabupaten/Kota Dalam Rangka Pengumuman Penetapan Pasangan Calon Bupati Dan Wakil Bupati Atau Walikota Dan Wakil Walikota Terpilih; </h6>
                                                                </label>
                                                                <div class="col-xl-10 col-lg-9 col-sm-10">
                                                                    <input type="file" name="upload7" class="form-control-file @error('upload7') is-invalid @enderror" id="exampleFormControlFile1" required>
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
                                                                    <h6>Putusan Mahkamah Konstitusi RI Tentang Perselisihan Hasil Pemilihan (Apabila Terdapat Gugatan); </h6>
                                                                </label>
                                                                <div class="col-xl-10 col-lg-9 col-sm-10">
                                                                    <input type="file" name="upload8" class="form-control-file @error('upload8') is-invalid @enderror" id="exampleFormControlFile1" required>
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
                                                                    <h6>Surat Mahkamah Konstitusi RI Mengenai Tidak Terdaftarnya Gugatan Perselisihan Hasil Pemilihan (Apabila Tidak Terdapat Gugatan); </h6>
                                                                </label>
                                                                <div class="col-xl-10 col-lg-9 col-sm-10">
                                                                    <input type="file" name="upload9" class="form-control-file @error('upload9') is-invalid @enderror" id="exampleFormControlFile1" required>
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
                                                                    <h6>Surat KPU RI Perihal Penetapan Pasangan Calon Terpilih Tanpa Permohonan Perselisihan Hasil Pemilihan Di Mahkamah Konstitusi RI (Apabila Tidak Terdapat Gugatan); </h6>
                                                                </label>
                                                                <div class="col-xl-10 col-lg-9 col-sm-10">
                                                                    <input type="file" name="upload10" class="form-control-file @error('upload10') is-invalid @enderror" id="exampleFormControlFile1" required>
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
                                                                    <h6>Surat Penyampaian Penetapan Pasangan Calon Terpilih Oleh Kpu Kabupaten/Kota Kepada DPRD Kabupaten/Kota; </h6>
                                                                </label>
                                                                <div class="col-xl-10 col-lg-9 col-sm-10">
                                                                    <input type="file" name="upload11" class="form-control-file @error('upload11') is-invalid @enderror" id="exampleFormControlFile1" required>
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
                                                                    <h6>Surat Usulan Pengesahan Pengangkatan Pasangan Calon Bupati Dan Wakil Bupati Atau Walikota Dan Wakil Walikota Oleh DPRD Kabupaten/Kota Kepada Mendagri Melalui Gubernur; </h6>
                                                                </label>
                                                                <div class="col-xl-10 col-lg-9 col-sm-10">
                                                                    <input type="file" name="upload12" class="form-control-file @error('upload12') is-invalid @enderror" id="exampleFormControlFile1" required>
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
                                                                    <h6>Surat Usulan Pengesahan Pengangkatan Pasangan Calon Bupati Dan Wakil Bupati Atau Walikota Dan Wakil Walikota Oleh Gubernur Kepada Mendagri. </h6>
                                                                </label>
                                                                <div class="col-xl-10 col-lg-9 col-sm-10">
                                                                    <input type="file" name="upload13" class="form-control-file @error('upload13') is-invalid @enderror" id="exampleFormControlFile1" required>
                                                                </div>
                                                                <br>
                                                                @error('upload13')
                                                                <span class="alert alert-danger">{{ $message }}</span>
                                                                @enderror
                                                            </div>
                                                            <br>
                                                                    <a class="btn btn-primary d-inline" href="{{ url('user/pilihan') }}" type="submit" di>kembali</a>
                                                                    <button class="btn btn-primary">kirim</button>
                                                            <!-- jika user pilih 2 maka formnya seperti berikut -->
                                                            @else
                                                                <!-- berkas 1 -->
                                                                    <div class="col-xl-10 col-md-12 col-sm-12 col-12">
                                                                        <label for="fullName">
                                                                            <h6>Surat Keterangan Keaslian Dokumen Dari Biro Pemerintahan/Otda Provinsi (Asisten Bidang Pemerintahan); </h6>
                                                                        </label>
                                                                        <div class="col-xl-10 col-lg-9 col-sm-10">
                                                                            <input type="file" name="upload1" class="form-control-file @error('upload1') is-invalid @enderror" id="exampleFormControlFile1" required>
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
                                                                            <h6>Fotokopi Keputusan Menteri Dalam Negeri Tentang Pemberhentian Wakil Bupati Atau Wakil Walikota Sebelumnya;   </h6>
                                                                        </label>
                                                                        <div class="col-xl-10 col-lg-9 col-sm-10">
                                                                            <input type="file" name="upload2" class="form-control-file @error('upload2') is-invalid @enderror" id="exampleFormControlFile1" required>
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
                                                                            <h6>Surat Usulan Parpol/Gabungan Parpol Pengusung (Kesepakatan Bersama Parpol/Gabungan Parpol Pengusung Tingkat DPP), Yang Mengusulkan 2 (Dua) Orang Calon Wakil Bupati Atau Wakil Walikota Kepada DPRD Kabupaten/Kota Melalui Bupati/Walikota (Jika Calon Berasal Dari Parpol Atau Gabungan Parpol);
                                                                            </h6>
                                                                        </label>
                                                                        <div class="col-xl-10 col-lg-9 col-sm-10">
                                                                            <input type="file" name="upload3" class="form-control-file @error('upload3') is-invalid @enderror" id="exampleFormControlFile1" required>
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
                                                                            <h6>Surat Usulan Bupati/Walikota, Yang Mengusulkan 2 (Dua) Orang Calon Wakil Bupati Atau Wakil Walikota Kepada DPRD Kabupaten/Kota (Jika Berasal Dari Calon Perseorangan);
                                                                            </h6>
                                                                        </label>
                                                                        <div class="col-xl-10 col-lg-9 col-sm-10">
                                                                            <input type="file" name="upload4" class="form-control-file @error('upload4') is-invalid @enderror" id="exampleFormControlFile1" required>
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
                                                                            <h6>Risalah Rapat Paripurna DPRD Kabupaten/Kota Dalam Rangka Pemilihan Wakil Bupati Atau Wakil Walikota;
                                                                            </h6>
                                                                        </label>
                                                                        <div class="col-xl-10 col-lg-9 col-sm-10">
                                                                            <input type="file" name="upload5" class="form-control-file @error('upload5') is-invalid @enderror" id="exampleFormControlFile1" required>
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
                                                                            <h6>Berita Acara DPRD Kabupaten/Kota Tentang Hasil Pemilihan Wakil Bupati Atau Wakil Walikota;</h6>
                                                                        </label>
                                                                        <div class="col-xl-10 col-lg-9 col-sm-10">
                                                                            <input type="file" name="upload6" class="form-control-file @error('upload6') is-invalid @enderror" id="exampleFormControlFile1" required>
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
                                                                            <h6>Keputusan DPRD Kabupaten/Kota Tentang Hasil Pemilihan Wakil Bupati Atau Wakil Walikota; </h6>
                                                                        </label>
                                                                        <div class="col-xl-10 col-lg-9 col-sm-10">
                                                                            <input type="file" name="upload7" class="form-control-file @error('upload7') is-invalid @enderror" id="exampleFormControlFile1" required>
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
                                                                            <h6>Tata Tertib DPRD Kabupaten/Kota Yang Mengatur Mekanisme Pemilihan Wakil Bupati Atau Wakil Walikota;  </h6>
                                                                        </label>
                                                                        <div class="col-xl-10 col-lg-9 col-sm-10">
                                                                            <input type="file" name="upload8" class="form-control-file @error('upload8') is-invalid @enderror" id="exampleFormControlFile1" required>
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
                                                                            <h6>Surat Usulan Pimpinan DPRD Kabupaten/Kota Kepada Mendagri Melalui Gubernur; dan  </h6>
                                                                        </label>
                                                                        <div class="col-xl-10 col-lg-9 col-sm-10">
                                                                            <input type="file" name="upload9" class="form-control-file @error('upload9') is-invalid @enderror" id="exampleFormControlFile1" required>
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
                                                                            <h6>Surat Usulan Gubernur Kepada Mendagri.  </h6>
                                                                        </label>
                                                                        <div class="col-xl-10 col-lg-9 col-sm-10">
                                                                            <input type="file" name="upload10" class="form-control-file @error('upload10') is-invalid @enderror" id="exampleFormControlFile1" required>
                                                                        </div>
                                                                        <br>
                                                                        @error('upload10')
                                                                        <span class="alert alert-danger">{{ $message }}</span>
                                                                        @enderror
                                                                    </div>
                                                                <br>
                                                                    <a class="btn btn-primary d-inline" href="{{ url('user/pilihan') }}" type="submit" di>kembali</a>
                                                                    <button class="btn btn-primary">kirim</button>
                                                            @endif
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
