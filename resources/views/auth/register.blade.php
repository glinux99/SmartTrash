@extends('layouts.auth')

@section('content')
<!--begin::Form-->
<form class="form w-100" method="POST" action="{{ route('login') }}">
    <!--begin::Heading-->
    <div class="text-center mb-10">
        <!--begin::Title-->
        <h1 class="text-dark mb-3">
            Authentification {{ Config('app.name')}} System</h1>
        <!--end::Title-->


    </div>
    <!--begin::Heading-->


    <!--begin::Input group-->
    <div class="fv-row mb-3">
        <!--begin::Label-->
        <label class="form-label fs-6 fw-bold text-dark">Email</label>
        <!--end::Label-->

        <!--begin::Input-->
        <input class="form-control form-control-lg form-control-solid" type="text" name="email" autocomplete="off" />
        <!--end::Input-->
    </div>
    <!--end::Input group-->

    <!--begin::Input group-->
    <div class="fv-row mb-10">
        <!--begin::Wrapper-->
        <div class="d-flex flex-stack mb-2">
            <!--begin::Label-->
            <label class="form-label fw-bold text-dark fs-6 mb-0">Mot de passe</label>
            <!--end::Label-->


        </div>
        <!--end::Wrapper-->

        <div class="fv-row mb-3" data-kt-password-meter="true">
            <div class="position-relative">
                <input type="password" placeholder="Password" v-model="form.password" autocomplete="off"
                    class="form-control bg-transparent" />

                <span class="btn btn-sm btn-icon text-white position-absolute translate-middle top-50 end-0 me-n2"
                    data-kt-password-meter-control="visibility">
                    <i class="ki-duotone ki-eye-slash fs-1"><span class="path1"></span><span class="path2"></span><span
                            class="path3"></span><span class="path4"></span></i>
                    <i class="ki-duotone ki-eye d-none fs-1"><span class="path1"></span><span class="path2"></span><span
                            class="path3"></span></i>
                </span>
            </div>
        </div>

        <div class="row mb-8 d-flex align-items-stretch justify-content-between">
            <div class="col-6">
                <label class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" v-model="form.remember" value="1" />
                    <span class="form-check-label fw-semibold text-gray-700 fs-base ms-1">
                        Se souvenir de moi
                    </span>
                </label>
            </div>
            <div class="col-6 d-flex align-items-stretch justify-content-end">
                <!--begin::Link-->
                <a href="/" class="link-primary fs-6 fw-bold">
                    Mot de passe oublie
                </a>
                <!--end::Link-->
            </div>
        </div>
    </div>
    <!--end::Input group-->

    <!--begin::Actions-->
    <div class="text-center">
        <!--begin::Submit button-->
        <button type="submit" id="kt_sign_in_submit" class="btn btn-lg btn-primary w-100 mb-5">
            <span class="indicator-label">
                Continuer
            </span>

            <span class="indicator-progress">
                Veuillez patienter... <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
            </span>
        </button>
        <!--end::Submit button-->


    </div>
    <!--end::Actions-->
</form>
<!--end::Form-->
@endsection
