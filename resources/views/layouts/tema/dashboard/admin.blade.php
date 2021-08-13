@extends('layouts.tema.app')

@section('title','SIOLA KEMENDAGRI')

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
                        @include('layouts.tema.style.usertheme')
                            <div class="admin-data-content layout-top-spacing">

                                <div class="row layout-top-spacing" id="cancel-row">

                                    <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                                        <!-- pencarian -->
                                        <div
                                            class="col-xl-4 col-lg-5 col-md-5 col-sm-7 filtered-list-search layout-spacing align-self-center">
                                            <form class="form-inline my-2 my-lg-0">
                                                <div class="">
                                                    Pencarian
                                                    
                                                    <input type="text" class="form-control product-search"
                                                        id="input-search" placeholder="Masukkan pencarian">
                                                        <br><br>
                                                        <button class="btn btn-success mb-2">Cari</button>
                                                        <button class="btn btn-danger mb-2">Refresh</button>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="widget-content widget-content-area br-6">
                                            <table class="table table-bordered mb-4">
                                                <thead class="table-light">
                                                    <tr>
                                                        <th>No</th>
                                                        <th class="text-center">Tgl Registrasi</th>
                                                        <th class="text-center">Nomor Registrasi</th>
                                                        <th class="text-center">Layanan</th>
                                                        <th class="text-center">Informasi Permohonan</th>
                                                        <th class="text-center">Status Permohonan</th>
                                                        <th class="text-center dt-no-sorting">Aksi</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>1</td>
                                                        <td>2021/08/02</td>
                                                        <td class="text-center"><span
                                                                class="badge badge-info">E474D10</span></td>
                                                        <td>Penerbitan kemendagri pemberhentian</td>
                                                        <td>Lorem ipsum dolor sit</td>
                                                        <td class="text-center"><span
                                                                class="badge badge-success">Approved</span></td>

                                                        <td class="text-center"><button
                                                                class="btn btn-danger mb-2">Cetak bukti</button>
                                                        </td>
                                                    </tr>

                                                </tbody>
                                            </table>
                                        </div>
                                    </div>

                                </div>

                            </div>
                            @include('layouts.tema.komponen.footer')
                        </div>
                    </div>

                </div>
            </div>

        </div>
        <!--  END CONTENT AREA  -->
@endsection