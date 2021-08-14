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
                                            @if($pesan = Session::get('sukses'))
                                            <div class="alert alert-success" role="alert">
                                                {{ $pesan }}
                                            </div>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="widget-content widget-content-area">
                                        <div id="circle-basic" class="">
                                            <!-- pilihan 1 -->
                                            <h3>Pilih Layanan</h3>
                                            <section>
                                                <p class="mb-4">Silahkan Pilih layanan :</p>
                                                <form action="{{ url('/user/pilihan/') }}" method="GET">
                                                    <div class="n-chk">
                                                        <label class="new-control new-radio new-radio-text radio-classic-success">
                                                            <input type="radio" class="new-control-input" name="input1" value="1">
                                                            <span class="new-control-indicator"></span>
                                                            <span class="new-radio-content">Penerbitan
                                                                Kepmendagri tentang pemberhentian dan pengangkatan
                                                                Bupati/Wali atau wali kota/wakil wali kota</span>
                                                        </label>
                                                    </div> <br> <br>
                                                    <div class="n-chk">
                                                        <label class="new-control new-radio new-radio-text radio-classic-success">
                                                            <input type="radio" class="new-control-input" name="input2" value="2">
                                                            <span class="new-control-indicator"></span>
                                                            <span class="new-radio-content">Penerbitan Kepmendagri
                                                                tentang Peresmian Pengangkatan dan Pemberhentian
                                                                pimpinan anggota DPRD Provinsi</span>
                                                        </label>
                                                    </div>
                                                    <button type="submit" class="btn btn-primary">{{ __('Pilih') }}</button>
                                                    <form>
                                            </section>


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