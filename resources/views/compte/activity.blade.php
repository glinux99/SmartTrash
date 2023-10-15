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


    <!--begin::Navbar-->
    <div class="card mb-5 mb-xl-10">
        <div class="card-body pt-9 pb-0">
            <!--begin::Details-->
            <div class="d-flex flex-wrap flex-sm-nowrap mb-3">
                <!--begin: Pic-->
                <div class="me-7 mb-4">
                    <div class="symbol symbol-100px symbol-lg-160px symbol-fixed position-relative">
                        <img src="{{asset('assets/img/linux.jpg')}}" alt="image">
                        <div
                            class="position-absolute translate-middle bottom-0 start-100 mb-6 bg-success rounded-circle border border-4 border-body h-20px w-20px">
                        </div>
                    </div>
                </div>
                <!--end::Pic-->

                <!--begin::Info-->
                <div class="flex-grow-1">
                    <!--begin::Title-->
                    <div class="d-flex justify-content-between align-items-start flex-wrap mb-2">
                        <!--begin::User-->
                        <div class="d-flex flex-column">
                            <!--begin::Name-->
                            <div class="d-flex align-items-center mb-2">
                                <a href="#" class="text-gray-900 text-hover-primary fs-2 fw-bold me-1">Daniel
                                    Kikimba</a>
                                <a href="#"><i class="ki-duotone ki-verify fs-1 text-primary"><span
                                            class="path1"></span><span class="path2"></span></i></a>

                                <a href="#" class="btn btn-sm btn-light-success fw-bold ms-2 fs-8 py-1 px-3"
                                    data-bs-toggle="modal" data-bs-target="#fab_modal_upgrade_plan">Pro</a>
                            </div>
                            <!--end::Name-->

                            <!--begin::Info-->
                            <div class="d-flex flex-wrap fw-semibold fs-6 mb-4 pe-2">
                                <a href="#"
                                    class="d-flex align-items-center text-gray-400 text-hover-primary me-5 mb-2">
                                    <i class="ki-duotone ki-profile-circle fs-4 me-1"><span class="path1"></span><span
                                            class="path2"></span><span class="path3"></span></i> Agent Guichet
                                </a>
                                <a href="#"
                                    class="d-flex align-items-center text-gray-400 text-hover-primary me-5 mb-2">
                                    <i class="ki-duotone ki-geolocation fs-4 me-1"><span class="path1"></span><span
                                            class="path2"></span></i> NK, Goma
                                </a>
                                <a href="#" class="d-flex align-items-center text-gray-400 text-hover-primary mb-2">
                                    <i class="ki-duotone ki-sms fs-4 me-1"><span class="path1"></span><span
                                            class="path2"></span></i>genesiskikimba@gmail.com
                                </a>
                            </div>
                            <!--end::Info-->
                        </div>
                        <!--end::User-->
                    </div>
                    <!--end::Title-->

                    <!--begin::Stats-->
                    <div class="d-flex flex-wrap flex-stack">
                        <!--begin::Wrapper-->
                        <div class="d-flex flex-column flex-grow-1 pe-8">
                            <!--begin::Stats-->
                            <div class="d-flex flex-wrap">
                                <!--begin::Stat-->
                                <div
                                    class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3">
                                    <!--begin::Number-->
                                    <div class="d-flex align-items-center">
                                        <i class="ki-duotone ki-arrow-up fs-3 text-success me-2"><span
                                                class="path1"></span><span class="path2"></span></i>
                                        <div class="fs-2 fw-bold counted" data-kt-countup="true"
                                            data-kt-countup-value="4500" data-kt-countup-prefix="$"
                                            data-kt-initialized="1">4,500</div>
                                    </div>
                                    <!--end::Number-->

                                    <!--begin::Label-->
                                    <div class="fw-semibold fs-6 text-gray-400">Vehicules Enreg</div>
                                    <!--end::Label-->
                                </div>
                                <!--end::Stat-->

                                <!--begin::Stat-->
                                <div
                                    class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3">
                                    <!--begin::Number-->
                                    <div class="d-flex align-items-center">
                                        <i class="ki-duotone ki-arrow-up fs-3 text-success me-2"><span
                                                class="path1"></span><span class="path2"></span></i>
                                        <div class="fs-2 fw-bold counted" data-kt-countup="true"
                                            data-kt-countup-value="75" data-kt-initialized="1">75</div>
                                    </div>
                                    <!--end::Number-->

                                    <!--begin::Label-->
                                    <div class="fw-semibold fs-6 text-gray-400">Motos</div>
                                    <!--end::Label-->
                                </div>
                                <!--end::Stat-->
                                <!--begin::Stat-->
                                <div
                                    class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3">
                                    <!--begin::Number-->
                                    <div class="d-flex align-items-center">
                                        <i class="ki-duotone ki-arrow-up fs-3 text-success me-2"><span
                                                class="path1"></span><span class="path2"></span></i>
                                        <div class="fs-2 fw-bold counted" data-kt-countup="true"
                                            data-kt-countup-value="75" data-kt-initialized="1">75</div>
                                    </div>
                                    <!--end::Number-->

                                    <!--begin::Label-->
                                    <div class="fw-semibold fs-6 text-gray-400">Autres</div>
                                    <!--end::Label-->
                                </div>

                            </div>
                            <!--end::Stats-->
                        </div>
                        <!--end::Wrapper-->

                        <!--begin::Progress-->
                        <div class="d-flex align-items-center w-200px w-sm-300px flex-column mt-3">
                            <div class="d-flex justify-content-between w-100 mt-auto mb-2">
                                <span class="fw-semibold fs-6 text-gray-400">Profil complet</span>
                                <span class="fw-bold fs-6">50%</span>
                            </div>

                            <div class="h-5px mx-3 w-100 bg-light mb-3">
                                <div class="bg-success rounded h-5px" role="progressbar" style="width: 50%;"
                                    aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                        <!--end::Progress-->
                    </div>
                    <!--end::Stats-->
                </div>
                <!--end::Info-->
            </div>
            <!--end::Details-->
        </div>
    </div>
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

                <h3 class="fw-bold m-0 text-gray-800">7 Oct 2023</h3>
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
                                    <div class="fs-5 fw-semibold mb-2">Enregistrement du vehocule et de son proprietaire
                                    </div>
                                    <!--end::Title-->

                                    <!--begin::Description-->
                                    <div class="d-flex align-items-center mt-1 fs-6">
                                        <!--begin::Info-->
                                        <div class="text-muted me-2 fs-7">Ajoute le 7 Oct par</div>
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

                                <!--begin::Timeline details-->
                                <div class="overflow-auto pb-5">

                                    @for($i = 0; $i < 3; $i++) <div
                                        class="d-flex align-items-center border border-dashed border-gray-300 rounded min-w-750px px-7 py-3 mb-5">
                                        <!--begin::Title-->
                                        <a href="/"
                                            class="fs-5 text-dark text-hover-primary fw-semibold w-375px min-w-200px">Vehicule
                                            BMWH</a>
                                        <!--end::Title-->

                                        <!--begin::Label-->
                                        <div class="min-w-175px pe-2">
                                            <span class="badge badge-light text-muted">UXMHTCD</span>
                                        </div>
                                        <!--end::Label-->

                                        <!--begin::Progress-->
                                        <div class="min-w-125px pe-2">
                                            <span class="badge badge-light-success">Tache finalisee</span>
                                        </div>
                                        <!--end::Progress-->


                                </div>
                                @endfor
                            </div>
                            <!--end::Timeline details-->
                        </div>
                        <!--end::Timeline content-->
                    </div>
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
                                <div class="fs-5 fw-semibold mb-2">Enregistrement du vehocule et de son proprietaire
                                </div>
                                <!--end::Title-->

                                <!--begin::Description-->
                                <div class="d-flex align-items-center mt-1 fs-6">
                                    <!--begin::Info-->
                                    <div class="text-muted me-2 fs-7">Ajoute le 7 Oct par</div>
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

                            <!--begin::Timeline details-->
                            <div class="overflow-auto pb-5">

                                <!--begin::Record-->
                                <div
                                    class="d-flex align-items-center border border-dashed border-gray-300 rounded min-w-750px px-7 py-3 mb-5">
                                    <!--begin::Title-->
                                    <a href="/"
                                        class="fs-5 text-dark text-hover-primary fw-semibold w-375px min-w-200px">Vehicule
                                        BMWH</a>
                                    <!--end::Title-->

                                    <!--begin::Label-->
                                    <div class="min-w-175px pe-2">
                                        <span class="badge badge-light text-muted">UXMHTCD</span>
                                    </div>
                                    <!--end::Label-->

                                    <!--begin::Progress-->
                                    <div class="min-w-125px pe-2">
                                        <span class="badge badge-light-success">Tache finalisee</span>
                                    </div>
                                    <!--end::Progress-->


                                </div>
                                <!--end::Record-->
                            </div>
                            <!--end::Timeline details-->
                        </div>
                        <!--end::Timeline content-->
                    </div>
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
</div>
<!--end::Timeline-->
</div>
@endsection