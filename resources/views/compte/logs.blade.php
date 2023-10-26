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


    @include('compte.header')
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
                        @for($i = 0; $i < 1; $i++) <tr>
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
