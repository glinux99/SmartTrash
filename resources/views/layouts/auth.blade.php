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
    <title>@yield('title', 'Trash Controller | Login')</title>
    <meta charset="utf-8" />
    <meta name="description"
        content="Seven admin dashboard live demo. Check out all the features of the admin panel. Light & dark skins. A large number of settings, additional services and widgets." />
    <meta name="keywords"
        content="Seven, bootstrap, bootstrap 5, dmin themes, free admin themes, bootstrap admin, bootstrap dashboard" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="controller la poubelle" />
    <meta property="og:url" content="" />
    <meta property="og:site_name" content="Controlle de la poubelle" />
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

<body id="home" data-bs-spy="scroll" data-bs-target="#fab_home_menu" class="position-relative app-blank">

    {{-- Google tag manager --}}
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5FS8GGP" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript>
    {{-- Endload theme in the page loaded --}}

    {{-- Content of page form another pages --}}

    <!--begin::Authentication - Sign-in -->
    <div style="background: url({{ asset('assets/img/ixmages.jpg')}}) ; background-position: center; background-repeat: no-repeat;background-size: contain;"
        class="d-flex flex-column flex-column-fluid bgi-position-y-bottom position-x-center bgi-no-repeat bgi-size-contain bgi-attachment-fixed auth-page-bg">
        <!--begin::Content-->
        <div class="d-flex flex-center flex-column flex-column-fluid ">


            <!--begin::Wrapper-->
            <div class="w-lg-500px bg-body rounded shadow-sm px-10 p-lg-15  pt-4 mx-auto">
                <!--begin::Logo-->
                <a href="/" class="d-flex justify-content-center">
                    <img alt="Logo" src="{{ asset('assets/img/logo.png')}}" class="h-60px" />
                </a>
                <!--end::Logo-->
                @yield('content')
            </div>
            <!--end::Wrapper-->
        </div>
        <!--end::Content-->
    </div>
    <!--end::Authentication - Sign-in-->
    </div>
    <!--end::Main-->

    <div id="fab_scrolltop" class="scrolltop" data-kt-scrolltop="true">
        <i class="ki-duotone ki-arrow-up"><span class="path1"></span><span class="path2"></span></i>
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
