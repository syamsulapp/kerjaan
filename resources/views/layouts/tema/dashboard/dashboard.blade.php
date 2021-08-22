@extends('layouts.tema.app')

@section('title','SIOLA_Prov KDH')

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
                                                <h4>Usulan Layanan Administrasi</h4>
                                            </div>
                                            @if($pesan = Session::get('sukses'))
                                            <div class="alert alert-success" role="alert">
                                                {{ $pesan }}
                                            </div>
                                            @endif
                                        </div>
                                    </div>
{{--                                    <div class="alert alert-danger" role="alert">--}}

{{--                                    </div>--}}
                                    @if(Auth::user()->status_kirim_permohonan == 'belum')
                                    <div class="widget-content widget-content-area">
                                        <div id="circle-basic" class="">
                                            <!-- pilihan 1 -->
                                            <h3>Pilih Layanan</h3>
                                            <section>
                                                <p class="mb-4">Silahkan Pilih layanan :</p>
                                                <form action="{{ url('/user/pilihan/') }}" method="GET">
                                                    <div class="n-chk">
                                                        <label class="new-control new-radio new-radio-text radio-classic-success">
                                                            <input type="radio" class="new-control-input" name="input" value="1">
                                                            <span class="new-control-indicator"></span>
                                                            <span class="new-radio-content">Penerbitan
                                                                Usul Pemberhentian kepala daerah Bupati/Wakil bupati atau wali kota/wakil wali kota</span>
                                                        </label>
                                                    </div> <br> <br>
                                                    <div class="n-chk">
                                                        <label class="new-control new-radio new-radio-text radio-classic-success">
                                                            <input type="radio" class="new-control-input" name="input" value="2">
                                                            <span class="new-control-indicator"></span>
                                                            <span class="new-radio-content">Penerbitan
                                                                Usul Pengangkatan kepala daerah Bupati/Wakil bupati atau wali kota/wakil wali kota</span>
                                                        </label>
                                                    </div>
                                                    <button type="submit" class="btn btn-primary">{{ __('Pilih') }}</button>
                                                    <br>
                                                    <form>
                                            </section>
                                        </div>
                                    </div>
                                    @else
                                    <div class="alert alert-success" role="alert">
                                        <h4 class="alert-heading">Anda Sudah Mengirim Permohonan</h4>
                                        <p>silahkan cek status data anda.</p>
                                        <hr>
                                        <p class="mb-0">{{ __('@') }} {{ now()->year }} {{ _('SIOLA_Prov KDH')}} {{ __('reserved') }}.</p>
                                    </div>
                                    <!-- whatsapp -->
                                    <div class="whatsapp_chat_support wcs_fixed_right" id="example">
                                                <div class="wcs_button_label">
                                                 Butuh Konsultasi? klik disini.
                                                </div>  
                                                <div class="wcs_button wcs_button_circle">
                                                    <span class="fa fa-whatsapp"></span>
                                                </div>  
                                            
                                                <div class="wcs_popup">
                                                    <div class="wcs_popup_close">
                                                        <span class="fa fa-close"></span>
                                                    </div>
                                                    <div class="wcs_popup_header">
                                                        <strong>Layanan Konsultasi</strong>
                                                        <br>
                                                        <div class="wcs_popup_header_description">Anda cukup memilih admin kabupaten kota </div>
                                                    </div>  
                                                    <div data-spy="scroll" class="wcs_popup_person_container">
                                                        <div 
                                                            class="wcs_popup_person" 
                                                            data-number="62811400081"
                                                            data-availability='{ "monday":"08:30-18:30", "tuesday":"08:30-18:30", "wednesday":"08:30-18:30", "thursday":"08:30-18:30", "friday":"08:30-18:30" ,"sunday": "08:30-18:30"}'
                                                        >
                                                            <div class="wcs_popup_person_img"><img src="{{ asset('img/person_5.jpg') }}" alt=""></div>
                                                            <div class="wcs_popup_person_content">
                                                                <div class="wcs_popup_person_name">Mia Smith</div>
                                                                <div class="wcs_popup_person_description">Sales Support</div>
                                                                <div class="wcs_popup_person_status">I'm Online</div>
                                                            </div>  
                                                        </div>

                                                        <div 
                                                            class="wcs_popup_person" 
                                                            data-number="62811400081"
                                                            data-availability='{ "monday":"08:30-18:30", "tuesday":"08:30-18:30", "wednesday":"08:30-18:30", "thursday":"08:30-18:30", "friday":"08:30-18:30" ,"sunday": "08:30-18:30"}'
                                                        >
                                                            <div class="wcs_popup_person_img"><img src="{{ asset('img/person_5.jpg') }}" alt=""></div>
                                                            <div class="wcs_popup_person_content">
                                                                <div class="wcs_popup_person_name">Mia Smith</div>
                                                                <div class="wcs_popup_person_description">Sales Support</div>
                                                                <div class="wcs_popup_person_status">I'm Online</div>
                                                            </div>  
                                                        </div>


                                                        <div 
                                                            class="wcs_popup_person" 
                                                            data-number="62811400081"
                                                            data-availability='{ "monday":"08:30-18:30", "tuesday":"08:30-18:30", "wednesday":"08:30-18:30", "thursday":"08:30-18:30", "friday":"08:30-18:30" ,"sunday": "08:30-18:30"}'
                                                        >
                                                            <div class="wcs_popup_person_img"><img src="{{ asset('img/person_5.jpg') }}" alt=""></div>
                                                            <div class="wcs_popup_person_content">
                                                                <div class="wcs_popup_person_name">Mia Smith</div>
                                                                <div class="wcs_popup_person_description">Sales Support</div>
                                                                <div class="wcs_popup_person_status">I'm Online</div>
                                                            </div>  
                                                        </div>


                                                        <div 
                                                            class="wcs_popup_person" 
                                                            data-number="62811400081"
                                                            data-availability='{ "monday":"08:30-18:30", "tuesday":"08:30-18:30", "wednesday":"08:30-18:30", "thursday":"08:30-18:30", "friday":"08:30-18:30" ,"sunday": "08:30-18:30"}'
                                                        >
                                                            <div class="wcs_popup_person_img"><img src="{{ asset('img/person_5.jpg') }}" alt=""></div>
                                                            <div class="wcs_popup_person_content">
                                                                <div class="wcs_popup_person_name">Mia Smith</div>
                                                                <div class="wcs_popup_person_description">Sales Support</div>
                                                                <div class="wcs_popup_person_status">I'm Online</div>
                                                            </div>  
                                                        </div>


                                                        <div 
                                                            class="wcs_popup_person" 
                                                            data-number="62811400081"
                                                            data-availability='{ "monday":"08:30-18:30", "tuesday":"08:30-18:30", "wednesday":"08:30-18:30", "thursday":"08:30-18:30", "friday":"08:30-18:30" ,"sunday": "08:30-18:30"}'
                                                        >
                                                            <div class="wcs_popup_person_img"><img src="{{ asset('img/person_5.jpg') }}" alt=""></div>
                                                            <div class="wcs_popup_person_content">
                                                                <div class="wcs_popup_person_name">Mia Smith</div>
                                                                <div class="wcs_popup_person_description">Sales Support</div>
                                                                <div class="wcs_popup_person_status">I'm Online</div>
                                                            </div>  
                                                        </div>


                                                        <div 
                                                            class="wcs_popup_person" 
                                                            data-number="62811400081"
                                                            data-availability='{ "monday":"08:30-18:30", "tuesday":"08:30-18:30", "wednesday":"08:30-18:30", "thursday":"08:30-18:30", "friday":"08:30-18:30" ,"sunday": "08:30-18:30"}'
                                                        >
                                                            <div class="wcs_popup_person_img"><img src="{{ asset('img/person_5.jpg') }}" alt=""></div>
                                                            <div class="wcs_popup_person_content">
                                                                <div class="wcs_popup_person_name">Mia Smith</div>
                                                                <div class="wcs_popup_person_description">Sales Support</div>
                                                                <div class="wcs_popup_person_status">I'm Online</div>
                                                            </div>  
                                                        </div>

                                                        <div 
                                                            class="wcs_popup_person" 
                                                            data-number="62811400081"
                                                            data-availability='{ "monday":"08:30-18:30", "tuesday":"08:30-18:30", "wednesday":"08:30-18:30", "thursday":"08:30-18:30", "friday":"08:30-18:30" ,"sunday": "08:30-18:30"}'
                                                        >
                                                            <div class="wcs_popup_person_img"><img src="{{ asset('img/person_5.jpg') }}" alt=""></div>
                                                            <div class="wcs_popup_person_content">
                                                                <div class="wcs_popup_person_name">Mia Smith</div>
                                                                <div class="wcs_popup_person_description">Sales Support</div>
                                                                <div class="wcs_popup_person_status">I'm Online</div>
                                                            </div>  
                                                        </div>


                                            
                                                        <div 
                                                            class="wcs_popup_person" 
                                                            data-number="528123861273"
                                                            data-availability='{ "monday":"08:30-18:30", "tuesday":"08:30-18:30", "wednesday":"08:30-18:30", "thursday":"08:30-18:30", "friday":"08:30-18:30" }'
                                                        >
                                                            <div class="wcs_popup_person_img"><img src="{{ asset('img/person_6.jpg') }}" alt=""></div>
                                                            <div class="wcs_popup_person_content">
                                                                <div class="wcs_popup_person_name">James Brown</div>
                                                                <div class="wcs_popup_person_description">Customer Support</div>
                                                                <div class="wcs_popup_person_status">I'm Online</div>
                                                            </div>
                                                        </div>
                                            
                                                        <div 
                                                            class="wcs_popup_person" 
                                                            data-number="528123861273"
                                                            data-availability='{ "monday":"08:30-18:30", "tuesday":"08:30-18:30", "wednesday":"08:30-18:30", "thursday":"08:30-18:30", "friday":"08:30-18:30" }'
                                                        >
                                                            <div class="wcs_popup_person_img"><img src="{{ asset('img/person_7.jpg') }}" alt=""></div>
                                                            <div class="wcs_popup_person_content">
                                                                <div class="wcs_popup_person_name">Robert Miller</div>
                                                                <div class="wcs_popup_person_description">Techincal Support</div>
                                                                <div class="wcs_popup_person_status">I'm Online</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>  
                                    <!-- // end whatsapp -->
                                    @endif
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
