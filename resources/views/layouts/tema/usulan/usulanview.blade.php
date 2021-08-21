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
                                            <h3>Histori Permohonan Layanan Administrasi Saya(64)</h3>
                                        </div>
                                        <thead>
                                            <tr>
                                                <th>Nama</th>
                                                <th>Tgl Kirim Usulan</th>
                                                <th>Nomor Usulan</th>
                                                <th>Jenis Usulan</th>
                                                <th>Objek KDH</th>
                                                <th>ket</th>
                                                <th>Status Usulan</th>
                                                <th class="no-content">Actions</th>
                                            </tr>
                                        </thead>
                                        @php
                                        $cek['data_id'] = Auth::user()->noreg
                                        @endphp
                                        <tbody>
                                            @foreach($usulan as $usulan_saya)
                                            <tr>
                                                <!-- fungsi untuk datanya bisa sesuai pada masing2 session user -->
                                                @if($cek['data_id'] == $usulan_saya->noreg)
                                                <td>{{ $usulan_saya->nama }}</td>
                                                <td>{{ $usulan_saya->created_at }}</td>
                                                <td><span class="badge badge-info">{{ $usulan_saya->noreg }}</span></td>
                                                <td>{{ $usulan_saya->kategori_permohonan }}</td>
                                                <td>{{ $usulan_saya->objekkdh }}</td>
                                                <td>{{ $usulan_saya->penyebabkdh }}</td>
                                                <td>
                                                    <!-- untuk cek usernya sdh di disetujui permohonannya atau tidak -->
                                                    @if($usulan_saya->status_permohonan == 'approve')
                                                    <span class="badge badge-success">{{ __('Diterima') }}</span>
                                                    @elseif($usulan_saya->status_permohonan == 'disapprove')
                                                    <span class="badge badge-danger">{{ __('tidak diterima') }}</span>
                                                    @else
                                                    <span class="badge badge-warning">{{ __('pending') }}</span>
                                                    @endif
                                                </td>
                                                <td>
                                                    @if($usulan_saya->status_permohonan == 'pending' )
                                                        <span class="badge badge-warning">{{__('Anda Belum Bisa mencetak') }}</span>
                                                    @elseif ($usulan_saya->status_permohonan == 'disapprove')
                                                        <span class="badge badge-danger">{{__('tidak bisa mencetak karena berkas anda gagal') }}</span>
                                                    @else
                                                    <a href="{{ url('user/cetak_usulan_saya') }}" class="btn btn-success mb-2"><svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1">
                                                            <polyline points="6 9 6 2 18 2 18 9"></polyline>
                                                            <path d="M6 18H4a2 2 0 0 1-2-2v-5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2h-2"></path>
                                                            <rect x="6" y="14" width="12" height="8"></rect>
                                                        </svg>Cetak Usulan</a>
                                                    @endif
                                                </td>
                                                @endif
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                        </div>

                    </div>


                    <div class="admin-data-content layout-top-spacing">

                                <div class="row layout-top-spacing" id="cancel-row">

                                    <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                                        <div class="widget-content widget-content-area br-6">
                                            <table id="zero-config" class="table dt-table-hover" style="width:100%">
                                                <thead>
                                                    <tr>
                                                        <th>No</th>
                                                        <th>Nama</th>
                                                        <th>Email</th>
                                                        <th class="no-content">Actions</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>No</td>
                                                        <td>System Architect</td>
                                                        <td>Edinburgh</td>
                                                        <td>
                                                            <button class="btn btn-danger mb-2"><svg viewBox="0 0 24 24"
                                                                    width="24" height="24" stroke="currentColor"
                                                                    stroke-width="2" fill="none" stroke-linecap="round"
                                                                    stroke-linejoin="round" class="css-i6dzq1">
                                                                    <polyline points="3 6 5 6 21 6"></polyline>
                                                                    <path
                                                                        d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
                                                                    </path>
                                                                    <line x1="10" y1="11" x2="10" y2="17"></line>
                                                                    <line x1="14" y1="11" x2="14" y2="17"></line>
                                                                </svg> delete</button>
                                                            <a href="formuser.html" class="btn btn-info mb-2"><svg
                                                                    viewBox="0 0 24 24" width="24" height="24"
                                                                    stroke="currentColor" stroke-width="2" fill="none"
                                                                    stroke-linecap="round" stroke-linejoin="round"
                                                                    class="css-i6dzq1">
                                                                    <line x1="8" y1="6" x2="21" y2="6"></line>
                                                                    <line x1="8" y1="12" x2="21" y2="12"></line>
                                                                    <line x1="8" y1="18" x2="21" y2="18"></line>
                                                                    <line x1="3" y1="6" x2="3.01" y2="6"></line>
                                                                    <line x1="3" y1="12" x2="3.01" y2="12"></line>
                                                                    <line x1="3" y1="18" x2="3.01" y2="18"></line>
                                                                </svg> Detail</a>
                                                            <a href="formuser.html" class="btn btn-warning mb-2"><svg
                                                                    viewBox="0 0 24 24" width="24" height="24"
                                                                    stroke="currentColor" stroke-width="2" fill="none"
                                                                    stroke-linecap="round" stroke-linejoin="round"
                                                                    class="css-i6dzq1">
                                                                    <path d="M12 20h9"></path>
                                                                    <path
                                                                        d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z">
                                                                    </path>
                                                                </svg> Edit</a>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>

                                </div>

                            </div>

                    <div class="footer-wrapper col-xl-12">
                        <div class="footer-section f-section-1">
                            <p class="">© {{ now()->year }} <a target="_blank" href="https://designreset.com">SIOLA_Prov KDH</a>
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
