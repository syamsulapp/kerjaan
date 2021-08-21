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
                                                <th class="no-content">Actions</th>
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