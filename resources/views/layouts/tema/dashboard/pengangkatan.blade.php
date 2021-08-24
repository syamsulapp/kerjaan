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
                                    <br>
                                    <div class="page-title">
                                        <h3>Data Pengangkatan</h3>
                                    </div>
                                    <br>
                                    @if($pesan = Session::get('sukses'))
                                    <div class="alert alert-success" role="alert">
                                        {{ $pesan }}
                                    </div>
                                    @endif
                                    <br>
                                    <table id="zero-config" class="table dt-table-hover" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama</th>
                                                <th>No_reg</th>
                                                <th>kategori permohonan</th>
                                                <th class="no-content">Lihat Data</th>
                                                <th class="no-content">Hapus Data</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($pengangkatan as $ps)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $ps->nama }}</td>
                                                <td><span class="badge badge-info">{{ $ps->noreg }}</span></td>
                                                <td>{{ $ps->kategori_permohonan }}</td>
                                                <td><a href="{{ url('/admin/edit-data-2') }}{{('/')}}{{$ps->id}}{{('/view')}}" class="btn btn-primary">view</a></td>
                                                <td><form action="{{ url('/admin/hapus-data-pengangkatan') }}{{('/')}}{{$ps->id}}{{('/hapus')}}" method="POST" class="d-inline">
                                                        @method('delete')
                                                        @csrf
                                                        <button class="btn btn-tdanger mb-2"><svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1">
                                                                <polyline points="3 6 5 6 21 6"></polyline>
                                                                <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
                                                                </path>
                                                                Edinburgh <line x1="10" y1="11" x2="10" y2="17"></line>
                                                                <line x1="14" y1="11" x2="14" y2="17"></line>
                                                            </svg> delete</button>
                                                    </form>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
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
<!-- END MAIN CONTAINER -->
@endsection