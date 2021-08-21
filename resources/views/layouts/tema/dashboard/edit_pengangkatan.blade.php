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
                                                <h4>Detail Data Usulan Pengangkatan</h4>
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
                                                                <input type="text" name="nama" class="form-control" id="nama" placeholder="nama" value="{{ $data_pengangkatan->nama }}" disabled>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row mb-4">
                                                            <label for="hEmail" class="col-xl-2 col-sm-3 col-sm-2 col-form-label">
                                                                <h6>Provinsi</h6>
                                                            </label>
                                                            <div class="col-xl-5 col-lg-9 col-sm-10">
                                                                <input type="text" name="provinsi" class="form-control" id="hEmail" value="{{ $data_pengangkatan->provinsi }}" disabled>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row mb-4">
                                                            <label for="hEmail" class="col-xl-2 col-sm-3 col-sm-2 col-form-label">
                                                                <h6>kabupaten</h6>
                                                            </label>
                                                            <div class="col-xl-5 col-lg-9 col-sm-10">
                                                                <input type="text" name="kabupaten" class="form-control" id="hEmail" placeholder="" value="{{  $data_pengangkatan->kabupaten   }}" disabled>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row mb-4">
                                                            <label for="hEmail" class="col-xl-2 col-sm-3 col-sm-2 col-form-label">
                                                                <h6>jenis_kelamin</h6>
                                                            </label>
                                                            <div class="col-xl-5 col-lg-9 col-sm-10">
                                                                <input type="text" name="jk" class="form-control" id="hEmail" placeholder="" value="{{  $data_pengangkatan->jk }}" disabled>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row mb-4">
                                                            <label for="hEmail" class="col-xl-2 col-sm-3 col-sm-2 col-form-label">
                                                                <h6>objekkdh</h6>
                                                            </label>
                                                            <div class="col-xl-5 col-lg-9 col-sm-10">
                                                                <input type="text" name="objekkdh" class="form-control" id="hEmail" placeholder="" value="{{  $data_pengangkatan->objekkdh }}" disabled>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row mb-4">
                                                            <label for="hEmail" class="col-xl-2 col-sm-3 col-sm-2 col-form-label">
                                                                <h6>penyebabkdh</h6>
                                                            </label>
                                                            <div class="col-xl-5 col-lg-9 col-sm-10">
                                                                <input type="text" name="penyebabkdh" class="form-control" id="hEmail" placeholder="" value="{{  $data_pengangkatan->penyebabkdh }}" disabled>
                                                            </div>
                                                        </div>

                                                        <!-- DATA UPLOAD -->
                                                        <div class="row">
                                                            <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                                                <h4><b>KELENGKAPAN ADMINISTRASI</b></h4>
                                                            </div>
                                                        </div> <br>
                                                        @if($data_pengangkatan->upload11 == 'null')
                                                            <!-- berkas ke 1 -->
                                                            <div class="col-xl-10 col-md-12 col-sm-12 col-12">
                                                                <label for="fullName">
                                                                    <h6>Surat Keterangan Keaslian Dokumen Dari Biro Pemerintahan/Otda Provinsi (Asisten Bidang Pemerintahan); </h6>
                                                                </label>
                                                                <br>
                                                                <br>
                                                                <a class="btn btn-primary" href="{{ url('/storage/dokumen_pengangkatan/' .$data_pengangkatan->noreg . '/' . $data_pengangkatan->upload1) }}">Berkas 1 </a>
                                                            </div>
                                                            <br>
                                                            <!-- berkas ke 2 -->
                                                            <div class="col-xl-10 col-md-12 col-sm-12 col-12">
                                                                <label for="fullName">
                                                                    <h6>Fotokopi Keputusan Menteri Dalam Negeri Tentang Pemberhentian Wakil Bupati Atau Wakil Walikota Sebelumnya;   </h6>
                                                                </label>
                                                                <br>
                                                                <a class="btn btn-primary" href="{{ url('/storage/dokumen_pengangkatan/' .$data_pengangkatan->noreg . '/' . $data_pengangkatan->upload2) }}">Berkas 2</a>
                                                            </div>
                                                            <br>
                                                            <!-- berkas ke 3 -->
                                                            <div class="col-xl-10 col-md-12 col-sm-12 col-12">
                                                                <label for="fullName">
                                                                    <h6>Surat Usulan Parpol/Gabungan Parpol Pengusung (Kesepakatan Bersama Parpol/Gabungan Parpol Pengusung Tingkat DPP), Yang Mengusulkan 2 (Dua) Orang Calon Wakil Bupati Atau Wakil Walikota Kepada DPRD Kabupaten/Kota Melalui Bupati/Walikota (Jika Calon Berasal Dari Parpol Atau Gabungan Parpol);
                                                                    </h6>
                                                                </label>
                                                                <br>
                                                                <a class="btn btn-primary" href="{{ url('/storage/dokumen_pengangkatan/' .$data_pengangkatan->noreg . '/' . $data_pengangkatan->upload3) }}">Berkas 3</a>
                                                            </div>
                                                            <br>
                                                            <!-- berkas ke 4 -->
                                                            <div class="col-xl-10 col-md-12 col-sm-12 col-12">
                                                                <label for="fullName">
                                                                    <h6>Surat Usulan Bupati/Walikota, Yang Mengusulkan 2 (Dua) Orang Calon Wakil Bupati Atau Wakil Walikota Kepada DPRD Kabupaten/Kota (Jika Berasal Dari Calon Perseorangan);
                                                                    </h6>
                                                                </label>
                                                                <br>
                                                                <a class="btn btn-primary" href="{{ url('/storage/dokumen_pengangkatan/' .$data_pengangkatan->noreg . '/' . $data_pengangkatan->upload4) }}">Berkas 4</a>
                                                            </div>
                                                            <!-- berkas ke 5 -->
                                                            <br>
                                                            <div class="col-xl-10 col-md-12 col-sm-12 col-12">
                                                                <label for="fullName">
                                                                    <h6>Risalah Rapat Paripurna DPRD Kabupaten/Kota Dalam Rangka Pemilihan Wakil Bupati Atau Wakil Walikota;
                                                                    </h6>
                                                                </label>
                                                                <br>
                                                                <a class="btn btn-primary" href="{{ url('/storage/dokumen_pengangkatan/' .$data_pengangkatan->noreg . '/' . $data_pengangkatan->upload5) }}">Berkas 5</a>
                                                            </div>
                                                            <!-- berkas ke 6 -->
                                                            <br>
                                                            <div class="col-xl-10 col-md-12 col-sm-12 col-12">
                                                                <label for="fullName">
                                                                    <h6>Berita Acara DPRD Kabupaten/Kota Tentang Hasil Pemilihan Wakil Bupati Atau Wakil Walikota;</h6>
                                                                </label>
                                                                <br>
                                                                <a class="btn btn-primary" href="{{ url('/storage/dokumen_pengangkatan/' .$data_pengangkatan->noreg . '/' . $data_pengangkatan->upload6) }}">Berkas 6</a>
                                                            </div>
                                                            <!-- berkas ke 7 -->
                                                            <br>
                                                            <div class="col-xl-10 col-md-12 col-sm-12 col-12">
                                                                <label for="fullName">
                                                                    <h6>Keputusan DPRD Kabupaten/Kota Tentang Hasil Pemilihan Wakil Bupati Atau Wakil Walikota; </h6>
                                                                </label>
                                                                <br>
                                                                <a class="btn btn-primary" href="{{ url('/storage/dokumen_pengangkatan/' .$data_pengangkatan->noreg . '/' . $data_pengangkatan->upload7) }}">Berkas 7</a>
                                                            </div>
                                                            <!-- berkas ke 8 -->
                                                            <br>
                                                            <div class="col-xl-10 col-md-12 col-sm-12 col-12">
                                                                <label for="fullName">
                                                                    <h6>Tata Tertib DPRD Kabupaten/Kota Yang Mengatur Mekanisme Pemilihan Wakil Bupati Atau Wakil Walikota; </h6>
                                                                </label>
                                                                <br>
                                                                <a class="btn btn-primary" href="{{ url('/storage/dokumen_pengangkatan/' .$data_pengangkatan->noreg . '/' . $data_pengangkatan->upload8) }}">Berkas 8</a>
                                                            </div>
                                                            <!-- berkas ke 9 -->
                                                            <br>
                                                            <div class="col-xl-10 col-md-12 col-sm-12 col-12">
                                                                <label for="fullName">
                                                                    <h6>Surat Usulan Pimpinan DPRD Kabupaten/Kota Kepada Mendagri Melalui Gubernur;</h6>
                                                                </label>
                                                                <br>
                                                                <a class="btn btn-primary" href="{{ url('/storage/dokumen_pengangkatan/' .$data_pengangkatan->noreg . '/' . $data_pengangkatan->upload9) }}">Berkas 9</a>
                                                            </div>
                                                            <!-- berkas ke 10 -->
                                                            <br>
                                                            <div class="col-xl-10 col-md-12 col-sm-12 col-12">
                                                                <label for="fullName">
                                                                    <h6>Surat Usulan Gubernur Kepada Mendagri. </h6>
                                                                </label>
                                                                <br>
                                                                <a class="btn btn-primary" href="{{ url('/storage/dokumen_pengangkatan/' .$data_pengangkatan->noreg . '/' . $data_pengangkatan->upload10) }}">Berkas 10</a>
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
                                                                @else
                                                                <!-- berkas ke 1 -->
                                                            <div class="col-xl-10 col-md-12 col-sm-12 col-12">
                                                                <label for="fullName">
                                                                    <h6>Surat Keterangan Keaslian Dokumen Dari Biro Pemerintahan/Otda Provinsi (Asisten Bidang Pemerintahan); </h6>
                                                                </label>
                                                                <br>
                                                                <br>
                                                                <a class="btn btn-primary" href="{{ url('/storage/dokumen_pengangkatan/' .$data_pengangkatan->noreg . '/' . $data_pengangkatan->upload1) }}">Berkas 1 </a>
                                                            </div>
                                                            <br>
                                                            <!-- berkas ke 2 -->
                                                            <div class="col-xl-10 col-md-12 col-sm-12 col-12">
                                                                <label for="fullName">
                                                                    <h6>Fotokopi Keputusan Menteri Dalam Negeri Tentang Pengangkatan Bupati Dan Wakil Bupati Atau Walikota Dan Wakil Walikota Periode Sebelumnya; </h6>
                                                                </label>
                                                                <br>
                                                                <a class="btn btn-primary" href="{{ url('/storage/dokumen_pengangkatan/' .$data_pengangkatan->noreg . '/' . $data_pengangkatan->upload2) }}">Berkas 2</a>
                                                            </div>
                                                            <br>
                                                            <!-- berkas ke 3 -->
                                                            <div class="col-xl-10 col-md-12 col-sm-12 col-12">
                                                                <label for="fullName">
                                                                    <h6>Fotokopi Keputusan Menteri Dalam Negeri Tentang Pengangkatan Penjabat Bupati/Walikota (Dalam Hal Daerah Dipimpin Oleh Penjabat);
                                                                    </h6>
                                                                </label>
                                                                <br>
                                                                <a class="btn btn-primary" href="{{ url('/storage/dokumen_pengangkatan/' .$data_pengangkatan->noreg . '/' . $data_pengangkatan->upload3) }}">Berkas 3</a>
                                                            </div>
                                                            <br>
                                                            <!-- berkas ke 4 -->
                                                            <div class="col-xl-10 col-md-12 col-sm-12 col-12">
                                                                <label for="fullName">
                                                                    <h6>Fotokopi Berita Acara Pelantikan Bupati Dan Wakil Bupati Atau Walikota Dan Wakil Walikota Periode Sebelumnya;
                                                                    </h6>
                                                                </label>
                                                                <br>
                                                                <a class="btn btn-primary" href="{{ url('/storage/dokumen_pengangkatan/' .$data_pengangkatan->noreg . '/' . $data_pengangkatan->upload4) }}">Berkas 4</a>
                                                            </div>
                                                            <!-- berkas ke 5 -->
                                                            <br>
                                                            <div class="col-xl-10 col-md-12 col-sm-12 col-12">
                                                                <label for="fullName">
                                                                    <h6>Keputusan Kpu Kabupaten/Kota Tentang Rekapitulasi Hasil Penghitungan Suara;
                                                                    </h6>
                                                                </label>
                                                                <br>
                                                                <a class="btn btn-primary" href="{{ url('/storage/dokumen_pengangkatan/' .$data_pengangkatan->noreg . '/' . $data_pengangkatan->upload5) }}">Berkas 5</a>
                                                            </div>
                                                            <!-- berkas ke 6 -->
                                                            <br>
                                                            <div class="col-xl-10 col-md-12 col-sm-12 col-12">
                                                                <label for="fullName">
                                                                    <h6>Keputusan Kpu Kabupaten/Kota Tentang Penetapan Pasangan Calon Terpilih; </h6>
                                                                </label>
                                                                <br>
                                                                <a class="btn btn-primary" href="{{ url('/storage/dokumen_pengangkatan/' .$data_pengangkatan->noreg . '/' . $data_pengangkatan->upload6) }}">Berkas 6</a>
                                                            </div>
                                                            <!-- berkas ke 7 -->
                                                            <br>
                                                            <div class="col-xl-10 col-md-12 col-sm-12 col-12">
                                                                <label for="fullName">
                                                                    <h6>Risalah Dan Berita Acara Rapat Paripurna DPRD Kabupaten/Kota Dalam Rangka Pengumuman Penetapan Pasangan Calon Bupati Dan Wakil Bupati Atau Walikota Dan Wakil Walikota Terpilih; </h6>
                                                                </label>
                                                                <br>
                                                                <a class="btn btn-primary" href="{{ url('/storage/dokumen_pengangkatan/' .$data_pengangkatan->noreg . '/' . $data_pengangkatan->upload7) }}">Berkas 7</a>
                                                            </div>
                                                            <!-- berkas ke 8 -->
                                                            <br>
                                                            <div class="col-xl-10 col-md-12 col-sm-12 col-12">
                                                                <label for="fullName">
                                                                    <h6>Putusan Mahkamah Konstitusi RI Tentang Perselisihan Hasil Pemilihan (Apabila Terdapat Gugatan); </h6>
                                                                </label>
                                                                <br>
                                                                <a class="btn btn-primary" href="{{ url('/storage/dokumen_pengangkatan/' .$data_pengangkatan->noreg . '/' . $data_pengangkatan->upload8) }}">Berkas 8</a>
                                                            </div>
                                                            <!-- berkas ke 9 -->
                                                            <br>
                                                            <div class="col-xl-10 col-md-12 col-sm-12 col-12">
                                                                <label for="fullName">
                                                                    <h6>Surat Mahkamah Konstitusi RI Mengenai Tidak Terdaftarnya Gugatan Perselisihan Hasil Pemilihan (Apabila Tidak Terdapat Gugatan); </h6>
                                                                </label>
                                                                <br>
                                                                <a class="btn btn-primary" href="{{ url('/storage/dokumen_pengangkatan/' .$data_pengangkatan->noreg . '/' . $data_pengangkatan->upload9) }}">Berkas 9</a>
                                                            </div>
                                                            <!-- berkas ke 10 -->
                                                            <br>
                                                            <div class="col-xl-10 col-md-12 col-sm-12 col-12">
                                                                <label for="fullName">
                                                                    <h6>Surat KPU RI Perihal Penetapan Pasangan Calon Terpilih Tanpa Permohonan Perselisihan Hasil Pemilihan Di Mahkamah Konstitusi RI (Apabila Tidak Terdapat Gugatan); </h6>
                                                                </label>
                                                                <br>
                                                                <a class="btn btn-primary" href="{{ url('/storage/dokumen_pengangkatan/' .$data_pengangkatan->noreg . '/' . $data_pengangkatan->upload10) }}">Berkas 10</a>
                                                            </div>
                                                            <!-- berkas ke 11 -->
                                                            <br>
                                                            <div class="col-xl-10 col-md-12 col-sm-12 col-12">
                                                                <label for="fullName">
                                                                    <h6>Surat Penyampaian Penetapan Pasangan Calon Terpilih Oleh Kpu Kabupaten/Kota Kepada DPRD Kabupaten/Kota; </h6>
                                                                </label>
                                                                <br>
                                                                <a class="btn btn-primary" href="{{ url('/storage/dokumen_pengangkatan/' .$data_pengangkatan->noreg . '/' . $data_pengangkatan->upload11) }}">Berkas 11</a>
                                                            </div>
                                                            <!-- berkas ke 12 -->
                                                            <br>
                                                            <div class="col-xl-10 col-md-12 col-sm-12 col-12">
                                                                <label for="fullName">
                                                                    <h6>Surat Usulan Pengesahan Pengangkatan Pasangan Calon Bupati Dan Wakil Bupati Atau Walikota Dan Wakil Walikota Oleh DPRD Kabupaten/Kota Kepada Mendagri Melalui Gubernur</h6>
                                                                </label>
                                                                <br>
                                                                <a class="btn btn-primary" href="{{ url('/storage/dokumen_pengangkatan/' .$data_pengangkatan->noreg . '/' . $data_pengangkatan->upload12) }}">Berkas 12</a>
                                                            </div>
                                                            <!-- berkas ke 13 -->
                                                            <br>
                                                            <div class="col-xl-10 col-md-12 col-sm-12 col-12">
                                                                <label for="fullName">
                                                                    <h6>Surat Usulan Pengesahan Pengangkatan Pasangan Calon Bupati Dan Wakil Bupati Atau Walikota Dan Wakil Walikota Oleh Gubernur Kepada Mendagri. </h6>
                                                                </label>
                                                                <br>
                                                                <a class="btn btn-primary" href="{{ url('/storage/dokumen_pengangkatan/' .$data_pengangkatan->noreg . '/' . $data_pengangkatan->upload13) }}">Berkas 13</a>
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
                                                            @endif
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
