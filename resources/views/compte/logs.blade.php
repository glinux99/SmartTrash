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
    Logs </li>
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
    <div class="card mb-5 mb-lg-10">
        <!--begin::Card header-->
        <div class="card-header">
            <!--begin::Heading-->
            <div class="card-title">
                <h3>Sessions de connexion</h3>
            </div>
            <!--end::Heading-->
        </div>
        <!--end::Card header-->

        <!--begin::Card body-->
        <div class="card-body p-0">
            <!--begin::Table wrapper-->
            <div class="table-responsive">
                <!--begin::Table-->
                <table class="table align-middle table-row-bordered table-row-solid gy-4 gs-9">
                    <!--begin::Thead-->
                    <thead class="border-gray-200 fs-5 fw-semibold bg-lighten">
                        <tr>
                            <th class="min-w-250px">Localisation</th>
                            <th class="min-w-100px">Status</th>
                            <th class="min-w-150px">Appareil</th>
                            <th class="min-w-150px">Adresse IP</th>
                            <th class="min-w-150px">Duree</th>
                        </tr>
                    </thead>
                    <!--end::Thead-->

                    <!--begin::Tbody-->
                    <tbody class="fw-6 fw-semibold text-gray-600">
                        @for($i = 0; $i < 4; $i++) <tr>
                            <td>
                                <a href="#" class="text-hover-primary text-gray-600">RDC, Goma</a>
                            </td>

                            <td>
                                <span class="badge badge-light-success fs-7 fw-bold">OK</span>
                            </td>

                            <td>Chrome - Windows</td>

                            <td>236.125.56.78</td>

                            <td>2 mins </td>
                            </tr>
                            @endfor


                    </tbody>
                    <!--end::Tbody-->
                </table>
                <!--end::Table-->
            </div>
            <!--end::Table wrapper-->
        </div>
        <!--end::Card body-->
    </div>
    <!--end::Timeline-->
</div>
@endsection