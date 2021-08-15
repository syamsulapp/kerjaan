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

                    <div class="header-container">
                        @include('layouts.tema.style.usertheme')
                    </div>

                    <div class="admin-data-content layout-top-spacing">

                        <div class="row layout-top-spacing" id="cancel-row">

                            <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                                <div class="widget-content widget-content-area br-6">
                                    <br>
                                    <div class="page-title">
                                        <h3>Data Pemberhentian</h3>
                                    </div>
                                    <br>
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
                                            @foreach($pemberhentian as $p)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $p->nama }}</td>
                                                <td><span class="badge badge-info">{{ $p->noreg }}</span></td>
                                                <td>{{ $p->kategori_permohonan }}</td>
                                                <td><a href="{{ url('/admin/edit-data') }}{{('/')}}{{$p->id}}{{('/view')}}" class="btn btn-primary">view</a></td>
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