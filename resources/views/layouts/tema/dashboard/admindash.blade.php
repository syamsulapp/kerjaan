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

                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
                                <div class="widget widget-chart-one">
                                    <div class="widget-heading">
                                        <h5 class="">Data Statistik Permohonan Users</h5>
                                        <div class="task-action">
                                            <div class="dropdown">
                                                <a class="dropdown-toggle" href="#" role="button" id="pendingTask" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal">
                                                        <circle cx="12" cy="12" r="1"></circle>
                                                        <circle cx="19" cy="12" r="1"></circle>
                                                        <circle cx="5" cy="12" r="1"></circle>
                                                    </svg>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="pendingTask" style="will-change: transform;">
                                                    <a class="dropdown-item" href="javascript:void(0);">Weekly</a>
                                                    <a class="dropdown-item" href="javascript:void(0);">Monthly</a>
                                                    <a class="dropdown-item" href="javascript:void(0);">Yearly</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="widget-content">
                                        <div id="revenueMonthly"></div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 layout-spacing">

                                <div class="widget widget-activity-four">

                                    <div class="widget-heading">
                                        <h5 class="">Daftar Users</h5>
                                        <div class="w-icon">
                                            <a class="btn btn-primary" href="javascript:void(0);"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right">
                                                    <line x1="5" y1="12" x2="19" y2="12"></line>
                                                    <polyline points="12 5 19 12 12 19"></polyline>
                                                </svg></a>
                                        </div>
                                    </div>

                                    <div class="widget-content">

                                        <div class="mt-container mx-auto">
                                            <div class="timeline-line">
                                                @foreach($dashboard as $ds)
                                                <div class="item-timeline timeline-primary">
                                                    <div class="t-dot" data-original-title="" title="">
                                                    </div>
                                                    <div class="t-text">
                                                        <p><span>{{ $ds->name}}</span> {{ $ds->noreg}}</p>
                                                        <span class="badge">{{ $ds->role }}</span>
                                                        <p class="t-time">{{ $ds->created_at }}</p>
                                                    </div>
                                                </div>
                                                @endforeach

                                            </div>
                                        </div>

                                        <div class="tm-action-btn">
                                            <button class="btn"><span>View All</span> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right">
                                                    <line x1="5" y1="12" x2="19" y2="12"></line>
                                                    <polyline points="12 5 19 12 12 19"></polyline>
                                                </svg></button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
                                <div class="widget widget-chart-two">
                                    <div class="widget-heading">
                                        <h5 class="">Total Data Permohonan</h5>
                                        <div class="w-icon">
                                            <a class="btn btn-primary" href="javascript:void(0);"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right">
                                                    <line x1="5" y1="12" x2="19" y2="12"></line>
                                                    <polyline points="12 5 19 12 12 19"></polyline>
                                                </svg></a>
                                        </div>
                                    </div>
                                    <div class="widget-content">
                                        <div id="chart-2" class=""></div>
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
<!-- END MAIN CONTAINER -->
@endsection