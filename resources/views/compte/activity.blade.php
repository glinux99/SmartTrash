@extends('layouts.app')
@section('menuTitle')
Mon compte
@endsection
@section('contentIndex')

<li class="breadcrumb-item text-muted">
    <a href="/" class="text-muted">
        Acceuil </a>
</li>
<li class="breadcrumb-item text-dark">
    Activites </li>
@endsection
@section('content')
<div class=" container-xxl " id="fab_content_container">

    @include('compte.header')

    <!--end::Navbar-->
    <!--begin::Timeline-->
    <div class="card">
        <!--begin::Card head-->
        <div class="card-header card-header-stretch">
            <!--begin::Title-->
            <div class="card-title d-flex align-items-center">
                <i class="ki-duotone ki-calendar-8 fs-1 text-primary me-3 lh-0"><span class="path1"></span><span
                        class="path2"></span><span class="path3"></span><span class="path4"></span><span
                        class="path5"></span><span class="path6"></span></i>

                <h3 class="fw-bold m-0 text-gray-800">{{ Carbon\Carbon::now()->locale('fr')->format('d M Y') }}
                </h3>
            </div>
            <!--end::Title-->

            <!--begin::Toolbar-->
            <div class="card-toolbar m-0">
                <!--begin::Tab nav-->
                <ul class="nav nav-tabs nav-line-tabs nav-stretch fs-6 border-0 fw-bold" role="tablist">
                    <li class="nav-item" role="presentation">
                        <a id="fab_activity_today_tab"
                            class="nav-link justify-content-center text-active-gray-800 active" data-bs-toggle="tab"
                            role="tab" href="#fab_activity_today" aria-selected="true">
                            Aujourd'hui
                        </a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a id="fab_activity_week_tab" class="nav-link justify-content-center text-active-gray-800"
                            data-bs-toggle="tab" role="tab" href="#fab_activity_week" aria-selected="false"
                            tabindex="-1">
                            Semaine
                        </a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a id="fab_activity_month_tab" class="nav-link justify-content-center text-active-gray-800"
                            data-bs-toggle="tab" role="tab" href="#fab_activity_month" aria-selected="false"
                            tabindex="-1">
                            Mois
                        </a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a id="fab_activity_year_tab"
                            class="nav-link justify-content-center text-active-gray-800 text-hover-gray-800"
                            data-bs-toggle="tab" role="tab" href="#fab_activity_year" aria-selected="false"
                            tabindex="-1">
                            2023 </a>
                    </li>
                </ul>
                <!--end::Tab nav-->
            </div>
            <!--end::Toolbar-->
        </div>
        <!--end::Card head-->

        <!--begin::Card body-->
        <div class="card-body">
            <!--begin::Tab Content-->
            <div class="tab-content">
                <!--begin::Tab panel-->
                <div id="fab_activity_today" class="card-body p-0 tab-pane fade show active" role="tabpanel"
                    aria-labelledby="fab_activity_today_tab">
                    <!--begin::Timeline-->
                    <div class="timeline timeline-border-dashed">
                        @foreach ($activities as $activity)
                        <div class="timeline-item">
                            <!--begin::Timeline line-->
                            <div class="timeline-line"></div>
                            <!--end::Timeline line-->

                            <!--begin::Timeline icon-->
                            <div class="timeline-icon">
                                <i class="ki-duotone ki-user-edit fs-2 text-gray-500"><span class="path1"></span><span
                                        class="path2"></span><span class="path3"></span></i>
                            </div>
                            <!--end::Timeline icon-->


                            <!--begin::Timeline content-->
                            <div class="timeline-content mb-10 mt-n1">
                                <!--begin::Timeline heading-->
                                <div class="pe-3 mb-5">
                                    <!--begin::Title-->
                                    <div class="fs-5 fw-semibold mb-2">{{$activity->title}} {{$activity->id}}
                                    </div>
                                    <!--end::Title-->

                                    <!--begin::Description-->
                                    <div class="d-flex align-items-center mt-1 fs-6">
                                        <!--begin::Info-->
                                        <div class="text-muted me-2 fs-7">Ajoute le {{
                                            Carbon\Carbon::parse($activity->created_at)->locale('fr')->format('d M Y')
                                            }}
                                            par</div>
                                        <!--end::Info-->

                                        <!--begin::User-->
                                        <div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip"
                                            data-bs-boundary="window" data-bs-placement="top" aria-label="Nina Nilson"
                                            data-bs-original-title="Nina Nilson" data-kt-initialized="1">
                                            <img src="{{ asset(Auth::user()->avatar)}}" alt="img">
                                        </div>
                                        <!--end::User-->
                                    </div>
                                    <!--end::Description-->
                                </div>
                                <!--end::Timeline heading-->

                                <!--begin::Timeline details-->
                                <div class="overflow-auto pb-5">

                                    <div
                                        class="d-flex align-items-center border border-dashed border-gray-300 rounded min-w-750px px-7 py-3 mb-5">
                                        <!--begin::Title-->
                                        <a href="/"
                                            class="fs-5 text-dark text-hover-primary fw-semibold w-375px min-w-200px">
                                            {{json_decode($activity->actions,
                                            true)['ip']??json_decode($activity->actions, true)['name']}}
                                        </a>
                                        <!--end::Title-->
                                        <div class="min-w-175px pe-2">
                                            <span class="badge badge-light text-muted">Proprietaire:
                                                {{json_decode($activity->actions, true)['name']}}</span>
                                        </div>
                                        <!--begin::Label-->
                                        <div class="min-w-175px pe-2">
                                            <span class="badge badge-light text-muted">coordonnees:
                                                ({{json_decode($activity->actions,
                                                true)['longitude']}}{{json_decode($activity->actions,
                                                true)['latitude']}})</span>
                                        </div>
                                        <!--end::Label-->

                                        <!--begin::Progress-->
                                        <div class="min-w-125px pe-2">
                                            <span class="badge badge-light-success">Tache finalisee</span>
                                        </div>
                                        <!--end::Progress-->


                                    </div>
                                </div>
                                <!--end::Timeline details-->

                            </div>
                            <!--end::Timeline content-->
                        </div>
                        @endforeach
                    </div>
                    <!--end::Timeline-->
                </div>
                <!--end::Tab panel-->

                <!--begin::Tab panel-->
                <div id="fab_activity_week" class="card-body p-0 tab-pane fade show" role="tabpanel"
                    aria-labelledby="fab_activity_week_tab">
                    <!--begin::Timeline-->
                    <div class="timeline timeline-border-dashed">


                        <!--begin::Timeline item-->
                        <div class="timeline-item">
                            <!--begin::Timeline line-->
                            <div class="timeline-line"></div>
                            <!--end::Timeline line-->

                            <!--begin::Timeline icon-->
                            <div class="timeline-icon">
                                <i class="ki-duotone ki-abstract-26 fs-2 text-gray-500"><span class="path1"></span><span
                                        class="path2"></span></i>
                            </div>
                            <!--end::Timeline icon-->

                            <!--begin::Timeline content-->
                            <div class="timeline-content mb-10 mt-n1">
                                <!--begin::Timeline heading-->
                                <div class="pe-3 mb-5">
                                    <!--begin::Title-->
                                    <div class="fs-5 fw-semibold mb-2">
                                        Enregistement de vehicules ...
                                    </div>
                                    <!--end::Title-->

                                    <!--begin::Description-->
                                    <div class="d-flex align-items-center mt-1 fs-6">
                                        <!--begin::Info-->
                                        <div class="text-muted me-2 fs-7">creer le 7 Oct </div>
                                        <!--end::Info-->

                                        <!--begin::User-->
                                        <div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip"
                                            data-bs-boundary="window" data-bs-placement="top" aria-label="Nina Nilson"
                                            data-bs-original-title="Nina Nilson" data-kt-initialized="1">
                                            <img src="{{ asset('assets/img/linux.jpg')}}" alt="img">
                                        </div>
                                        <!--end::User-->
                                    </div>
                                    <!--end::Description-->
                                </div>
                                <!--end::Timeline heading-->
                            </div>
                            <!--end::Timeline content-->
                        </div>
                        <div class="timeline-item">
                            <!--begin::Timeline line-->
                            <div class="timeline-line"></div>
                            <!--end::Timeline line-->

                            <!--begin::Timeline icon-->
                            <div class="timeline-icon">
                                <i class="ki-duotone ki-abstract-26 fs-2 text-gray-500"><span class="path1"></span><span
                                        class="path2"></span></i>
                            </div>
                            <!--end::Timeline icon-->

                            <!--begin::Timeline content-->
                            <div class="timeline-content mb-10 mt-n1">
                                <!--begin::Timeline heading-->
                                <div class="pe-3 mb-5">
                                    <!--begin::Title-->
                                    <div class="fs-5 fw-semibold mb-2">
                                        Enregistement de vehicules ...
                                    </div>
                                    <!--end::Title-->

                                    <!--begin::Description-->
                                    <div class="d-flex align-items-center mt-1 fs-6">
                                        <!--begin::Info-->
                                        <div class="text-muted me-2 fs-7">creer le 7 Oct </div>
                                        <!--end::Info-->

                                        <!--begin::User-->
                                        <div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip"
                                            data-bs-boundary="window" data-bs-placement="top" aria-label="Nina Nilson"
                                            data-bs-original-title="Nina Nilson" data-kt-initialized="1">
                                            <img src="{{ asset('assets/img/linux.jpg')}}" alt="img">
                                        </div>
                                        <!--end::User-->
                                    </div>
                                    <!--end::Description-->
                                </div>
                                <!--end::Timeline heading-->
                            </div>
                            <!--end::Timeline content-->
                        </div>
                        <!--end::Timeline item-->
                    </div>
                    <!--end::Timeline-->
                </div>
                <!--end::Tab panel-->

                <!--begin::Tab panel-->
                <div id="fab_activity_month" class="card-body p-0 tab-pane fade show" role="tabpanel"
                    aria-labelledby="fab_activity_month_tab">
                    <!--begin::Timeline-->
                    <div class="timeline timeline-border-dashed">


                        <div class="timeline-item">
                            <!--begin::Timeline line-->
                            <div class="timeline-line"></div>
                            <!--end::Timeline line-->

                            <!--begin::Timeline icon-->
                            <div class="timeline-icon">
                                <i class="ki-duotone ki-abstract-26 fs-2 text-gray-500"><span class="path1"></span><span
                                        class="path2"></span></i>
                            </div>
                            <!--end::Timeline icon-->

                            <!--begin::Timeline content-->
                            <div class="timeline-content mb-10 mt-n1">
                                <!--begin::Timeline heading-->
                                <div class="pe-3 mb-5">
                                    <!--begin::Title-->
                                    <div class="fs-5 fw-semibold mb-2">
                                        Enregistement de vehicules ...
                                    </div>
                                    <!--end::Title-->

                                    <!--begin::Description-->
                                    <div class="d-flex align-items-center mt-1 fs-6">
                                        <!--begin::Info-->
                                        <div class="text-muted me-2 fs-7">creer le 7 Oct </div>
                                        <!--end::Info-->

                                        <!--begin::User-->
                                        <div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip"
                                            data-bs-boundary="window" data-bs-placement="top" aria-label="Nina Nilson"
                                            data-bs-original-title="Nina Nilson" data-kt-initialized="1">
                                            <img src="{{ asset('assets/img/linux.jpg')}}" alt="img">
                                        </div>
                                        <!--end::User-->
                                    </div>
                                    <!--end::Description-->
                                </div>
                                <!--end::Timeline heading-->
                            </div>
                            <!--end::Timeline content-->
                        </div>
                    </div>
                    <!--end::Timeline-->
                </div>
                <!--end::Tab panel-->

                <!--begin::Tab panel-->
                <div id="fab_activity_year" class="card-body p-0 tab-pane fade show" role="tabpanel"
                    aria-labelledby="fab_activity_year_tab">
                    <!--begin::Timeline-->
                    <div class="timeline timeline-border-dashed">
                        <div class="timeline-item">
                            <!--begin::Timeline line-->
                            <div class="timeline-line"></div>
                            <!--end::Timeline line-->

                            <!--begin::Timeline icon-->
                            <div class="timeline-icon">
                                <i class="ki-duotone ki-abstract-26 fs-2 text-gray-500"><span class="path1"></span><span
                                        class="path2"></span></i>
                            </div>
                            <!--end::Timeline icon-->

                            <!--begin::Timeline content-->
                            <div class="timeline-content mb-10 mt-n1">
                                <!--begin::Timeline heading-->
                                <div class="pe-3 mb-5">
                                    <!--begin::Title-->
                                    <div class="fs-5 fw-semibold mb-2">
                                        Enregistement de vehicules ...
                                    </div>
                                    <!--end::Title-->

                                    <!--begin::Description-->
                                    <div class="d-flex align-items-center mt-1 fs-6">
                                        <!--begin::Info-->
                                        <div class="text-muted me-2 fs-7">creer le 7 Oct </div>
                                        <!--end::Info-->

                                        <!--begin::User-->
                                        <div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip"
                                            data-bs-boundary="window" data-bs-placement="top" aria-label="Nina Nilson"
                                            data-bs-original-title="Nina Nilson" data-kt-initialized="1">
                                            <img src="{{ asset('assets/img/linux.jpg')}}" alt="img">
                                        </div>
                                        <!--end::User-->
                                    </div>
                                    <!--end::Description-->
                                </div>
                                <!--end::Timeline heading-->
                            </div>
                            <!--end::Timeline content-->
                        </div>
                    </div>
                    <!--end::Timeline-->
                </div>
                <!--end::Tab panel-->
            </div>
            <!--end::Tab Content-->
        </div>
        <!--end::Card body-->
        <!--end::Timeline-->
    </div>
    @endsection
