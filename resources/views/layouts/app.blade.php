<!DOCTYPE html>
<!--
Author: linux99
Product Name: PCR
Product Version: 1.0
Website: subnetcongo.net
Contact: danielkikimba@mali-tic.com
Follow: www.twitter.com/genesiskikimba
Like: www.facebook.com/danielkikimba
-->
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <title>@yield('title', 'PCR Controller | Acceuil')</title>
    <meta charset="utf-8" />
    <meta name="description"
        content="Seven admin dashboard live demo. Check out all the features of the admin panel. Light & dark skins. A large number of settings, additional services and widgets." />
    <meta name="keywords"
        content="Seven, bootstrap, bootstrap 5, dmin themes, free admin themes, bootstrap admin, bootstrap dashboard" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="police de circulation routiere" />
    <meta property="og:url" content="" />
    <meta property="og:site_name" content="PCR PNC Controller" />
    <link rel="canonical" href="" />
    <link rel="shortcut icon" href="{{ asset('assets/img/logo.png')}}" />
    <link rel="stylesheet" href="{{ asset('assets/css/style.css')}}">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />



    <link href="../../assets/plugins/custom/datatables/datatables.bundle.css" rel="stylesheet" type="text/css" />




    <link href="../../assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
    <link href="../../assets/css/style.bundle.css" rel="stylesheet" type="text/css" />

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-37564768-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'UA-37564768-1');
    </script>

    <script>
        // Frame-busting to prevent site from being loaded within a frame without permission (click-jacking)
        if (window.top != window.self) {
            window.top.location.replace(window.self.location.href);
        }
    </script>
</head>




<body id="fab_body" class="header-fixed header-tablet-and-mobile-fixed aside-fixed aside-secondary-enabled">

    <script>
        var defaultThemeMode = "light";
        var themeMode;

        if (document.documentElement) {
            if (document.documentElement.hasAttribute("data-bs-theme-mode")) {
                themeMode = document.documentElement.getAttribute("data-bs-theme-mode");
            } else {
                if (localStorage.getItem("data-bs-theme") !== null) {
                    themeMode = localStorage.getItem("data-bs-theme");
                } else {
                    themeMode = defaultThemeMode;
                }
            }

            if (themeMode === "system") {
                themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light";
            }

            document.documentElement.setAttribute("data-bs-theme", themeMode);
        }
    </script>


    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5FS8GGP" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript>




    <div class="d-flex flex-column flex-root">

        <div class="page d-flex flex-row flex-column-fluid">
            @include('layouts.sidebar')


            <div class="wrapper d-flex flex-column flex-row-fluid" id="fab_wrapper">

                <div id="fab_header" class="header " data-kt-sticky="true" data-kt-sticky-name="header"
                    data-kt-sticky-offset="{default: '200px', lg: '300px'}">


                    <div class=" container-xxl  d-flex align-items-center justify-content-between"
                        id="fab_header_container">


                        <div class="page-title d-flex flex-column align-items-start justify-content-center flex-wrap me-lg-2 pb-5 pb-lg-0"
                            data-kt-swapper="true" data-kt-swapper-mode="prepend"
                            data-kt-swapper-parent="{default: '#fab_content_container', lg: '#fab_header_container'}">


                            <h1 class="text-dark fw-semibold my-0 fs-2">
                                @yield('menuTitle')</h1>



                            <ul class="breadcrumb breadcrumb-line text-muted fw-semibold fs-base my-1">

                                @yield('contentIndex')
                            </ul>

                        </div>



                        <div class="d-flex d-lg-none align-items-center ms-n2 me-2">

                            <div class="btn btn-icon btn-active-icon-primary" id="fab_aside_toggle">
                                <i class="ki-duotone ki-abstract-14 fs-2x"><span class="path1"></span><span
                                        class="path2"></span></i>
                            </div>



                            <a href="/" class="d-flex align-items-center">
                                <img alt="Logo" src="{{ asset('assets/img/logo.png')}}" class="h-40px" />
                            </a>

                        </div>



                        <div class="d-flex flex-shrink-0">

                            <div class="d-flex ms-3">
                                <a href="#" class=" btn bg-body btn-color-gray-600 btn-active-info" tooltip="New Member"
                                    data-bs-toggle="modal" data-bs-target="#fab_modal_create_account">
                                    Nouveau client
                                </a>
                            </div>

                        </div>

                    </div>

                </div>

                <div class="content d-flex flex-column flex-column-fluid" id="app">
                    @yield('content')
                </div>

                @include('layouts.footer')
            </div>

        </div>

    </div>





    <div id="fab_scrolltop" class="scrolltop" data-kt-scrolltop="true">
        <i class="ki-duotone ki-arrow-up"><span class="path1"></span><span class="path2"></span></i>
    </div>


    <div class="modal fade" id="fab_modal_create_account" data-bs-backdrop="static" data-bs-keyboard="false"
        tabindex="-1" aria-hidden="true">

        <div class="modal-dialog mw-1000px">

            <div class="modal-content">

                <div class="modal-header">

                    <h2>Enregistement d'un nouveau client</h2>



                    <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                        <i class="ki-duotone ki-cross fs-1"><span class="path1"></span><span class="path2"></span></i>
                    </div>

                </div>



                <div class="modal-body scroll-y p-0">

                    <div class="stepper stepper-links d-flex flex-column" id="fab_create_account_stepper">

                        <div class="stepper-nav ">

                            <div class="stepper-item current" data-kt-stepper-element="nav">
                                <h3 class="stepper-title">
                                    Information sur la poubelle
                                </h3>
                            </div>



                            <div class="stepper-item" data-kt-stepper-element="nav">
                                <h3 class="stepper-title">
                                    Information sur le proprietaire
                                </h3>
                            </div>



                        </div>



                        <form class="mx-auto w-100 py-10" novalidate="novalidate" id="fab_create_account_form">

                            <div class="current" data-kt-stepper-element="content">

                                <div class="w-100 px-20 d">
                                    <div class="row ">
                                        <div class="col-md-6">
                                            <label class="required form-label">Adresse IP</label>
                                            <input type="url" class="form-control form-control-lg form-control-solid"
                                                name="" placeholder="192.168.1.1" value="">
                                        </div>
                                        <div class="col-md-6">
                                            <label class="required form-label">Couleur</label>
                                            <input type="text" class="form-control form-control-lg form-control-solid"
                                                name="" placeholder="couleur" value="">
                                        </div>
                                        <div class="col-md-6">
                                            <label class="required form-label">SSID</label>
                                            <input type="text" class="form-control form-control-lg form-control-solid"
                                                name="" placeholder="ssid du reseau" value="">
                                        </div>
                                        <div class="col-md-6">
                                            <label class="required form-label">Mot de passe du reseau</label>
                                            <input type="text" class="form-control form-control-lg form-control-solid"
                                                name="" placeholder="************" value="">
                                        </div>
                                        <div class="col-md-6">
                                            <label class="required form-label">Longitude</label>
                                            <input type="text" class="form-control form-control-lg form-control-solid"
                                                name="" placeholder="192.168.1.1" value="">
                                        </div>
                                        <div class="col-md-6">
                                            <label class="required form-label">Latitude</label>
                                            <input type="text" class="form-control form-control-lg form-control-solid"
                                                name="" placeholder="192.168.1.1" value="">
                                        </div>
                                        <div>
                                            <label class="form-label fw-normal fs-7">Details sur l'emplacement</label>
                                            <div class="ms-auto">
                                                <textarea id="" cols="20" rows="3"
                                                    class="form-control bg-light"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>


                            <div data-kt-stepper-element="content">
                                <div class="w-100 px-20 d-md-flex flex-column ">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label class="required form-label">Nom</label>
                                            <input type="text" class="form-control form-control-lg form-control-solid"
                                                name="" placeholder="model du proprietaire" value="">
                                        </div>
                                        <div class="col-md-6">
                                            <label class=" form-label">Prenom</label>
                                            <input type="text" class="form-control form-control-lg form-control-solid"
                                                name="" placeholder="prenom du proprietaire" value="">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label class="required form-label">Telephone</label>
                                            <input type="number" class="form-control form-control-lg form-control-solid"
                                                name="telephone" placeholder="" value="" required>
                                        </div>
                                        <div class="col-md-6">
                                            <label class="form-label">Email</label>
                                            <input type="email" class="form-control form-control-lg form-control-solid"
                                                name="" placeholder="email du proprietaire" value="">
                                        </div>
                                    </div>
                                    <div>
                                        <label class="form-label">Type de client</label>
                                        <div class="ms-2 ">
                                            <select class="form-select form-select-solid form-select-lg"
                                                data-control="select2" data-hide-search="true">
                                                <option value="1">Proprietaire</option>
                                                <option value="2">Locataire</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>





                            <div class="d-flex flex-stack pt-15 px-md-20">

                                <div class="mr-2">
                                    <button type="button" class="btn btn-lg btn-light-primary me-3"
                                        data-kt-stepper-action="previous" data-kt-stepper-state="hide-on-last-step">
                                        <i class="ki-duotone ki-arrow-left fs-4 me-1"><span class="path1"></span><span
                                                class="path2"></span></i> Back
                                    </button>
                                </div>



                                <div class="">
                                    <button type="button" class="btn btn-lg btn-primary me-3"
                                        data-kt-stepper-action="submit">
                                        <span class="indicator-label">
                                            Envoyer
                                            <i class="ki-duotone ki-arrow-right fs-3 ms-2 me-0"><span
                                                    class="path1"></span><span class="path2"></span></i> </span>
                                        <span class="indicator-progress">
                                            Veuillez patienter svp... <span
                                                class="spinner-border spinner-border-sm align-middle ms-2"></span>
                                        </span>
                                    </button>

                                    <button type="button" class="btn btn-lg btn-primary" data-kt-stepper-action="next">
                                        Continue
                                        <i class="ki-duotone ki-arrow-right fs-4 ms-1 me-0"><span
                                                class="path1"></span><span class="path2"></span></i> </button>
                                </div>

                            </div>

                        </form>

                    </div>

                </div>

            </div>

        </div>

    </div>


    <script>
        var hostUrl = "/";
    </script>


    <script src="../../assets/plugins/global/plugins.bundle.js"></script>
    <script src="../../assets/js/scripts.bundle.js"></script>



    <script src="../../assets/plugins/custom/datatables/datatables.bundle.js"></script>



    <script src="../../assets/js/custom/apps/projects/list/list.js"></script>
    <script src="../../assets/js/widgets.bundle.js"></script>
    <script src="../../assets/js/custom/utilities/modals/upgrade-plan.js"></script>
    <script src="../../assets/js/custom/utilities/modals/create-account.js"></script>
    <script src="../../assets/js/custom/utilities/modals/create-campaign.js"></script>
    <script src="../../assets/js/custom/utilities/modals/users-search.js"></script>
    <script src="{{asset('assets/js/custom/apps/user-management/users/list/table.js')}}"></script>
    <script src="../assets/js/custom/account/settings/signin-methods.js"></script>
    <script src="../assets/js/custom/account/settings/profile-details.js"></script>
    <script src="../assets/js/custom/account/settings/deactivate-account.js"></script>
    <script src="../assets/js/custom/pages/user-profile/general.js"></script>



</body>

</html>
