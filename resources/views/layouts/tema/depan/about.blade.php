@extends('layouts.tema.depan.main.app')

@section('judul','SIOLA Prov_Sultra Kota Kendari')

@section('konten')

<!-- include header -->
@include('layouts.tema.depan.header')

<!-- ======= Breadcrumbs ======= -->
<section id="breadcrumbs" class="breadcrumbs">
    <div class="container">

        <ol>
            <li><a href="{{ url('/') }}">Home</a></li>
            <li><a href="{{ url('menu/about') }}">About</li>
        </ol>
        <h2>{{ __('Tentang Kami') }}</h2>

    </div>
</section><!-- End Breadcrumbs -->
<!-- ======= About Section ======= -->
<section id="about" class="about">
    <div class="container">

        <div class="row">
            <div class="col-lg-6">
                <img src="{{ asset('assets/img/mtq.jpg') }}" class="img-fluid" alt="">
            </div>
            <div class="col-lg-6 pt-4 pt-lg-0 content">
                <h3>Title Content</h3>
                <p class="fst-italic">
                    Content Here
                </p>
                <p>
                    example content : Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                    velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                    culpa qui officia deserunt mollit anim id est laborum
                </p>
            </div>
        </div>

    </div>
</section><!-- End About Section -->

<!-- ======= Counts Section ======= -->

<!-- ======= Footer ======= -->
@include('layouts.tema.depan.footer')
@endsection