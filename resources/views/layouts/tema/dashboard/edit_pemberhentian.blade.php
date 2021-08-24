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
                                    <div class="widget-content widget-content-area">
                                        <div id="circle-basic" class="">
                                            <!-- pilihan 2 -->
                                            <section>
                                                <div class="widget-header">
                                                    <!-- DATA KE 1 -->
                                                    <!-- PEMBERHENTIAN -->
                                                    <div class="row">
                                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                                            <h4><b>Detail Data Usulan Pemberhentian</b></h4>
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
                                                                <input type="text" name="nama" class="form-control @error('nama') is-invalid @enderror" id="nama" placeholder="nama" value="{{ $data_pemberhentian->nama }}" disabled>
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
                                                                <input type="text" name="provinsi" class="form-control @error('provinsi') is-invalid @enderror" id="provinsi" placeholder="provinsi" value="{{ $data_pemberhentian->provinsi }}" disabled>
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
                                                                <input type="text" name="kabupaten" class="form-control @error('kabupaten') is-invalid @enderror" id="kabupaten" placeholder="kabupaten" value="{{ $data_pemberhentian->kabupaten }}" disabled>
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
                                                                <input type="text" name="penyebabkdh" class="form-control @error('penyebabkdh') is-invalid @enderror" id="penyebabkdh" placeholder="penyebabkdh" value="{{ $data_pemberhentian->penyebabkdh }}" disabled>
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
                                                                <input type="text" name="objekkdh" class="form-control @error('objekkdh') is-invalid @enderror" id="objekkdh" placeholder="objekkdh" value="{{ $data_pemberhentian->objekkdh }}" disabled>
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
                                                                <input type="text" name="jk" class="form-control @error('jk') is-invalid @enderror" id="jk" placeholder="jk" value="{{ $data_pemberhentian->jk }}" disabled>
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
                                                        @if($data_pemberhentian->upload6 == 'null')
                                                        <!-- berkas ke 1 -->
                                                        <div class="col-xl-10 col-md-12 col-sm-12 col-12">
                                                            <label for="fullName">
                                                                <h6>File Scan KETERANGAN KEASLIAN DOKUMENT DARI BIRO PEMERINTAHAN/OTDA PROVINSI (<i> ASISTEN BIDANG PEMERINTAHAN</i>)</h6>
                                                            </label>
                                                            <br>
                                                            <a class="btn btn-primary" href="{{ url('/storage/dokumen_pemberhentian/' .$data_pemberhentian->noreg . '/' . $data_pemberhentian->upload1) }}">Berkas 1</a>
                                                        </div>
                                                        <br>
                                                            <!-- berkas ke 2 -->
                                                        <div class="col-xl-10 col-md-12 col-sm-12 col-12">
                                                            <label for="fullName">
                                                                <h6>Fotokopi Keputusan Menteri Dalam Negeri Tentang Pengangkatan Bupati Dan/Atau Wakil Bupati Atau Walikota Dan/Atau Wakil Walikota Yang Bersangkutan</h6>
                                                            </label>
                                                            <br>
                                                            <a class="btn btn-primary" href="{{ url('/storage/dokumen_pemberhentian/' .$data_pemberhentian->noreg . '/' . $data_pemberhentian->upload2) }}">Berkas 2</a>
                                                        </div>
                                                        <br>
                                                        <!-- berkas ke 3 -->
                                                        <div class="col-xl-10 col-md-12 col-sm-12 col-12">
                                                            <label for="fullName">
                                                                <h6>Fotokopi Berita Acara Pelantikan Bupati Dan/Atau Wakil Bupati Atau Walikota Dan/Atau Wakil Walikota Yang Bersangkutan;
                                                                </h6>
                                                            </label>
                                                            <a class="btn btn-primary" href="{{ url('/storage/dokumen_pemberhentian/' .$data_pemberhentian->noreg . '/' . $data_pemberhentian->upload3) }}">Berkas 3</a>
                                                        </div>
                                                        <!-- berkas ke 4 -->
                                                        <br>
                                                        <div class="col-xl-10 col-md-12 col-sm-12 col-12">
                                                            <label for="fullName">
                                                                <h6>Risalah Dan Berita Acara Rapat Paripurna DPRD Kabupaten/Kota Dalam Rangka Pengumuman Pemberhentian Bupati Dan/Atau Wakil Bupati Atau Walikota Dan/Atau Wakil Walikota Karena Berakhir Masa Jabatannya;
                                                                </h6>
                                                            </label>
                                                            <a class="btn btn-primary" href="{{ url('/storage/dokumen_pemberhentian/' .$data_pemberhentian->noreg . '/' . $data_pemberhentian->upload4) }}">Berkas 4</a>

                                                        </div>
                                                        <!-- berkas ke 5  sampe sini sj -->
                                                        <br>
                                                        <div class="col-xl-10 col-md-12 col-sm-12 col-12">
                                                            <label for="fullName">
                                                                <h6>Surat Usulan Pengesahan Pemberhentian Bupati Dan/Atau Wakil Bupati Atau Walikota Dan/Atau Wakil Walikota Oleh Pimpinan DPRD Kabupaten/Kota Kepada Mendagri Melalui Gubernur; </h6>
                                                            </label>
                                                            <br>
                                                            <a class="btn btn-primary" href="{{ url('/storage/dokumen_pemberhentian/' .$data_pemberhentian->noreg . '/' . $data_pemberhentian->upload5) }}">Berkas 5 </a>

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
                                                        @elseif ($data_pemberhentian->upload6 != 'null')
                                                        <!-- berkas ke 1 -->
                                                            <div class="col-xl-10 col-md-12 col-sm-12 col-12">
                                                                <label for="fullName">
                                                                    <h6>File Scan KETERANGAN KEASLIAN DOKUMENT DARI BIRO PEMERINTAHAN/OTDA PROVINSI (<i> ASISTEN BIDANG PEMERINTAHAN</i>)</h6>
                                                                </label>
                                                                <br>
                                                                <a class="btn btn-primary" href="{{ url('/storage/dokumen_pemberhentian/' .$data_pemberhentian->noreg . '/' . $data_pemberhentian->upload1) }}">Berkas 1</a>
                                                            </div>
                                                            <br>
                                                            <!-- berkas ke 2 -->
                                                            <div class="col-xl-10 col-md-12 col-sm-12 col-12">
                                                                <label for="fullName">
                                                                    <h6>Fotokopi Keputusan Menteri Dalam Negeri Tentang Pengangkatan Bupati Dan/Atau Wakil Bupati Atau Walikota Dan/Atau Wakil Walikota Yang Bersangkutan</h6>
                                                                </label>
                                                                <br>
                                                                <a class="btn btn-primary" href="{{ url('/storage/dokumen_pemberhentian/' .$data_pemberhentian->noreg . '/' . $data_pemberhentian->upload2) }}">Berkas 2</a>
                                                            </div>
                                                            <br>
                                                            <!-- berkas ke 3 -->
                                                            <div class="col-xl-10 col-md-12 col-sm-12 col-12">
                                                                <label for="fullName">
                                                                    <h6>Fotokopi Berita Acara Pelantikan Bupati Dan/Atau Wakil Bupati Atau Walikota Dan/Atau Wakil Walikota Yang Bersangkutan;
                                                                    </h6>
                                                                </label>
                                                                <a class="btn btn-primary" href="{{ url('/storage/dokumen_pemberhentian/' .$data_pemberhentian->noreg . '/' . $data_pemberhentian->upload3) }}">Berkas 3</a>
                                                            </div>
                                                            <!-- berkas ke 4 -->
                                                            <br>
                                                            <div class="col-xl-10 col-md-12 col-sm-12 col-12">
                                                                <label for="fullName">
                                                                    <h6>Risalah Dan Berita Acara Rapat Paripurna DPRD Kabupaten/Kota Dalam Rangka Pengumuman Pemberhentian Bupati Dan/Atau Wakil Bupati Atau Walikota Dan/Atau Wakil Walikota Karena Berakhir Masa Jabatannya;
                                                                    </h6>
                                                                </label>
                                                                <a class="btn btn-primary" href="{{ url('/storage/dokumen_pemberhentian/' .$data_pemberhentian->noreg . '/' . $data_pemberhentian->upload4) }}">Berkas 4</a>

                                                            </div>
                                                            <!-- berkas ke 5 -->
                                                            <br>
                                                            <div class="col-xl-10 col-md-12 col-sm-12 col-12">
                                                                <label for="fullName">
                                                                    <h6>Surat Usulan Pengesahan Pemberhentian Bupati Dan/Atau Wakil Bupati Atau Walikota Dan/Atau Wakil Walikota Oleh Pimpinan DPRD Kabupaten/Kota Kepada Mendagri Melalui Gubernur; </h6>
                                                                </label>
                                                                <br>
                                                                <a class="btn btn-primary" href="{{ url('/storage/dokumen_pemberhentian/' .$data_pemberhentian->noreg . '/' . $data_pemberhentian->upload5) }}">Berkas 5 </a>

                                                            </div>
                                                        <!-- berkas ke 6 sampe sini sj -->
                                                        <br>
                                                        <div class="col-xl-10 col-md-12 col-sm-12 col-12">
                                                            <label for="fullName">
                                                                <h6>Akta Kematian Dari Pejabat Berwenang;  </h6>
                                                            </label>
                                                            <br>
                                                            <a class="btn btn-primary" href="{{ url('/storage/dokumen_pemberhentian/' .$data_pemberhentian->noreg . '/' . $data_pemberhentian->upload6) }}">Berkas 6</a>

                                                        </div>
                                                        <br>
                                                        <div class="col-xl-10 col-md-12 col-sm-12 col-12">
                                                            <label for="fullName">
                                                                <h6>Kirim Status Berkas</h6>
                                                                <select class="form-control" name="kirim_status" id="kirim_status">
                                                                    <option onclick="diTolak()">disapprove</option>
                                                                    <option onclick="diTerima()">approve</option>
                                                                </select>
                                                            </label>
                                                        </div>
                                                        <br>
                                                        <div class="form-group">
                                                                <label for="exampleFormControlTextarea1">Kirim Alasan</label>
                                                                <textarea id="kirim_alasan" name="kirim_alasan" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                                            </div>
                                                        @endif
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
<script>

    function diTolak() {
        document.getElementById("kirim_alasan").disabled = false;
    }
    function diTerima() {
        document.getElementById("kirim_alasan").disabled = true;
    }
</script>
@endsection