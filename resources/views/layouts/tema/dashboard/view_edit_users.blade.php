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

                        <div class="row">
                            <div id="flStackForm" class="col-lg-12 layout-spacing layout-top-spacing">
                                <div class="statbox widget box box-shadow">
                                    <div class="widget-header">
                                        <div class="row">
                                            <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                                <h4>Tambah Users Baru</h4>
                                            </div>
                                        </div>
                                    </div>
                                    @if($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                    @endif
                                    <div class="widget-content widget-content-area">
                                        <form action="{{ url('/admin/users-management-form') }}{{('/')}}{{$edit->id}}{{('/update-data')}}" method="POST">
                                            @method('put')
                                            @csrf
                                            <div class="form-group mb-3">
                                                <input type="name" name="nama" class="form-control" id="sEmail" aria-describedby="emailHelp1" placeholder="Nama" value="{{ $edit->name }}">
                                            </div>
                                            <div class="form-group mb-3">
                                                <input type="email" name="email" class="form-control" id="sEmail" aria-describedby="emailHelp1" placeholder="Email address" value="{{ $edit->email }}">
                                                <small id=" emailHelp1" class="form-text text-muted">We'll never
                                                    share your email with anyone else.</small>
                                            </div>
                                            <div class="form-group mb-4">
                                                <input type="password" name="password" class="form-control" id="sPassword" placeholder="Password">
                                            </div>
                                            <div class="form-group mb-4">
                                                <input type="password" name="konfir-password" class="form-control" id="sPassword" placeholder="konfirmasipass">
                                            </div>
                                            <div class="form-group mb-3">
                                                Pilih Hak Akses Yang Di Buat.</h9>
                                            </div>
                                            <div class="form-group mb-3">
                                                <select name="role" id="role" class="form-control">
                                                    <option selected>user</option>
                                                    <option>admin</option>
                                                </select>
                                            </div>
                                            <button type="submit" class="btn btn-primary mt-3">Submit</button>
                                        </form>
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

@endsection