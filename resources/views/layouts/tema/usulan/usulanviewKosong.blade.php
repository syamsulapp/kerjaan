@extends('layouts.tema.app')

@section('title','SIOLA_Prov KDH')

@include('layouts.tema.style.tampilan')

@include('layouts.tema.komponen.header')

@include('layouts.tema.komponen.menu')

@section('konten')

<!--  BEGIN CONTENT AREA  -->
<div id="content" class="main-content">
    <div class="layout-px-spacing">

        <div class="content-container">

            <div class="col-left layout-top-spacing">
                <div class="col-left-content">

                    <div class="header-container">
                        @include('layouts.tema.style.usertheme')

                    </div>

                    <div class="admin-data-content layout-top-spacing">

                        <div class="row layout-top-spacing" id="cancel-row">

                            <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                                <div class="widget-content widget-content-area br-6">
                                    <table id="zero-config" class="table dt-table-hover" style="width:100%">
                                        <br>
                                        <div class="page-title">
                                            <h3>Histori Permohonan Layanan Administrasi Saya</h3>
                                        </div>
                                        <thead>
                                            <tr>
                                                <th>Nama</th>
                                                <th>Tgl Kirim Usulan</th>
                                                <th>Nomor Usulan</th>
                                                <th>Jenis Usulan</th>
                                                <th>Keterangan</th>
                                                <th>Status Usulan</th>
                                                <th class="no-content">Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="text-center">Anda Belum Mengirim Usulan</td>
                                            <tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                        </div>

                    </div>

                    <div class="footer-wrapper col-xl-12">
                        <div class="footer-section f-section-1">
                            <p class="">?? {{ now()->year }} <a target="_blank" href="https://designreset.com">SIOLA_Prov KDH</a>
                            </p>
                        </div>
                        <div class="footer-section f-section-2">
                            <p class="">Indonesia <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart">
                                    <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z">
                                    </path>
                                </svg></p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

</div>
<!--  END CONTENT AREA  -->
</div>
<!-- END MAIN CONTAINER -->

@endsection