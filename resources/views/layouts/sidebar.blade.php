<!--begin::Aside-->
<div id="fab_aside" class="aside aside-extended " data-kt-drawer="true" data-kt-drawer-name="aside"
    data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="auto"
    data-kt-drawer-direction="start" data-kt-drawer-toggle="#fab_aside_toggle">

    <!--begin::Primary-->
    <div class="aside-primary d-flex flex-column align-items-lg-center flex-row-auto">
        <!--begin::Logo-->
        <div class="aside-logo d-none d-lg-flex flex-column align-items-center flex-column-auto pt-5 pb-10"
            id="fab_aside_logo">
            <a href="/">
                <img alt="Logo" src="{{ asset('assets/img/logo.png')}}" class="h-60px" />
            </a>
        </div>
        <!--end::Logo-->

        <!--begin::Nav-->
        <div class="aside-nav d-flex flex-column align-items-center flex-column-fluid w-100 pt-5 pt-lg-0"
            id="fab_aside_nav">

            <!--begin::Wrapper-->
            <div class="hover-scroll-overlay-y mb-10 scroll-ms" data-kt-scroll="true"
                data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-height="auto"
                data-kt-scroll-wrappers="#fab_aside_nav"
                data-kt-scroll-dependencies="#fab_aside_logo, #fab_aside_footer" data-kt-scroll-offset="100px">
                <!--begin::Nav-->
                <ul class="nav flex-column">
                    <!--begin::Nav item-->
                    <li class="nav-item mb-2" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="right"
                        data-bs-dismiss="click" title="Vehicule">
                        <!--begin::Nav link-->
                        <a class="nav-link btn btn-custom btn-icon " data-bs-toggle="tab"
                            href="#fab_aside_nav_tab_projects">
                            <i class="ki-duotone ki-car fs-2x"><span class="path1"></span><span
                                    class="path2"></span></i>
                        </a>
                        <!--end::Nav link-->
                    </li>
                    <!--end::Nav item-->
                    <!--begin::Nav item-->
                    <li class="nav-item mb-2" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="right"
                        data-bs-dismiss="click" title="Menu">
                        <!--begin::Nav link-->
                        <a class="nav-link btn btn-custom btn-icon active" data-bs-toggle="tab"
                            href="#fab_aside_nav_tab_menu">
                            <i class="ki-duotone ki-element-11 fs-2x"><span class="path1"></span><span
                                    class="path2"></span><span class="path3"></span><span class="path4"></span></i>
                        </a>
                        <!--end::Nav link-->
                    </li>
                    <!--end::Nav item-->
                    <!--begin::Nav item-->
                    <li class="nav-item mb-2" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="right"
                        data-bs-dismiss="click" title="Securite">
                        <!--begin::Nav link-->
                        <a class="nav-link btn btn-custom btn-icon " data-bs-toggle="tab"
                            href="#fab_aside_nav_tab_subscription">
                            <i class="ki-duotone ki-security-user fs-3x"><span class="path1"></span><span
                                    class="path2"></span><span class="path3"></span><span class="path4"></span></i>
                        </a>
                        <!--end::Nav link-->
                    </li>
                    <!--end::Nav item-->

                    <!--begin::Nav item-->
                    <li class="nav-item mb-2" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="right"
                        data-bs-dismiss="click" title="Notifications">
                        <!--begin::Nav link-->
                        <a class="nav-link btn btn-custom btn-icon " data-bs-toggle="tab"
                            href="#fab_aside_nav_tab_notifications">
                            <i class="ki-duotone ki-abstract-26 fs-2x"><span class="path1"></span><span
                                    class="path2"></span></i>
                        </a>
                        <!--end::Nav link-->
                    </li>
                    <!--end::Nav item-->

                </ul>
                <!--end::Tabs-->
            </div>
            <!--end::Nav-->

        </div>
        <!--end::Nav-->

        <!--begin::Footer-->
        <div class="aside-footer d-flex flex-column align-items-center flex-column-auto" id="fab_aside_footer">

            <!--begin::Theme mode-->
            <div class="d-flex align-items-center mb-3">

                <!--begin::Menu toggle-->
                <a href="#" class="btn btn-icon btn-custom" data-kt-menu-trigger="{default:'click', lg: 'hover'}"
                    data-kt-menu-attach="parent" data-kt-menu-placement="bottom-start">
                    <i class="ki-duotone ki-night-day theme-light-show fs-1"><span class="path1"></span><span
                            class="path2"></span><span class="path3"></span><span class="path4"></span><span
                            class="path5"></span><span class="path6"></span><span class="path7"></span><span
                            class="path8"></span><span class="path9"></span><span class="path10"></span></i> <i
                        class="ki-duotone ki-moon theme-dark-show fs-1"><span class="path1"></span><span
                            class="path2"></span></i></a>
                <!--begin::Menu toggle-->

                <!--begin::Menu-->
                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-title-gray-700 menu-icon-gray-500 menu-active-bg menu-state-color fw-semibold py-4 fs-base w-150px"
                    data-kt-menu="true" data-kt-element="theme-mode-menu">
                    <!--begin::Menu item-->
                    <div class="menu-item px-3 my-0">
                        <a href="#" class="menu-link px-3 py-2" data-kt-element="mode" data-kt-value="light">
                            <span class="menu-icon" data-kt-element="icon">
                                <i class="ki-duotone ki-night-day fs-2"><span class="path1"></span><span
                                        class="path2"></span><span class="path3"></span><span class="path4"></span><span
                                        class="path5"></span><span class="path6"></span><span class="path7"></span><span
                                        class="path8"></span><span class="path9"></span><span class="path10"></span></i>
                            </span>
                            <span class="menu-title">
                                Light
                            </span>
                        </a>
                    </div>
                    <!--end::Menu item-->

                    <!--begin::Menu item-->
                    <div class="menu-item px-3 my-0">
                        <a href="#" class="menu-link px-3 py-2" data-kt-element="mode" data-kt-value="dark">
                            <span class="menu-icon" data-kt-element="icon">
                                <i class="ki-duotone ki-moon fs-2"><span class="path1"></span><span
                                        class="path2"></span></i> </span>
                            <span class="menu-title">
                                Dark
                            </span>
                        </a>
                    </div>
                    <!--end::Menu item-->

                    <!--begin::Menu item-->
                    <div class="menu-item px-3 my-0">
                        <a href="#" class="menu-link px-3 py-2" data-kt-element="mode" data-kt-value="system">
                            <span class="menu-icon" data-kt-element="icon">
                                <i class="ki-duotone ki-screen fs-2"><span class="path1"></span><span
                                        class="path2"></span><span class="path3"></span><span class="path4"></span></i>
                            </span>
                            <span class="menu-title">
                                System
                            </span>
                        </a>
                    </div>
                    <!--end::Menu item-->
                </div>
                <!--end::Menu-->

            </div>
            <!--end::Theme mode-->

            <!--begin::User-->
            <div class="d-flex align-items-center mb-10" id="fab_header_user_menu_toggle">
                <!--begin::Menu wrapper-->
                <div class="cursor-pointer symbol symbol-40px" data-kt-menu-trigger="{default: 'click', lg: 'hover'}"
                    data-kt-menu-overflow="true" data-kt-menu-placement="top-start">
                    <img src="{{ asset('assets/img/linux.jpg')}}" alt="image" />
                </div>


                <!--begin::User account menu-->
                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-color fw-semibold py-4 fs-6 w-275px"
                    data-kt-menu="true">
                    <!--begin::Menu item-->
                    <div class="menu-item px-3">
                        <div class="menu-content d-flex align-items-center px-3">
                            <!--begin::Avatar-->
                            <div class="symbol symbol-50px me-5">
                                <img alt="Logo" src="{{ asset('assets/img/linux.jpg')}}" />
                            </div>
                            <!--end::Avatar-->

                            <!--begin::Username-->
                            <div class="d-flex flex-column">
                                <div class="fw-bold d-flex align-items-center fs-5">
                                    linx99 <span
                                        class="badge badge-light-success fw-bold fs-8 px-2 py-1 ms-2">Agent</span>
                                </div>

                                <a href="#" class="fw-semibold text-muted text-hover-primary fs-7">
                                    linux@gmail.com </a>
                            </div>
                            <!--end::Username-->
                        </div>
                    </div>
                    <!--end::Menu item-->

                    <!--begin::Menu separator-->
                    <div class="separator my-2"></div>
                    <!--end::Menu separator-->

                    <!--begin::Menu item-->
                    <div class="menu-item px-5">
                        <a href="/" class="menu-link px-5">
                            Mon profil
                        </a>
                    </div>
                    <!--end::Menu item-->

                    <!--begin::Menu item-->
                    <div class="menu-item px-5">
                        <a href="/" class="menu-link px-5">
                            <span class="menu-text">Notifications</span>
                            <span class="menu-badge">
                                <span class="badge badge-light-danger badge-circle fw-bold fs-7">3</span>
                            </span>
                        </a>
                    </div>
                    <!--end::Menu item-->


                    <!--begin::Menu separator-->
                    <div class="separator my-2"></div>
                    <!--end::Menu separator-->


                    <!--begin::Menu item-->
                    <div class="menu-item px-5" data-kt-menu-trigger="{default: 'click', lg: 'hover'}"
                        data-kt-menu-placement="right-end" data-kt-menu-offset="-15px, 0">
                        <a href="#" class="menu-link px-5">
                            <span class="menu-title position-relative">
                                Langue

                                <span
                                    class="fs-8 rounded bg-light px-3 py-2 position-absolute translate-middle-y top-50 end-0">
                                    Francais <img class="w-15px h-15px rounded-1 ms-2"
                                        src="../../assets/media/flags/france.svg" alt="" />
                                </span>
                            </span>
                        </a>

                        <!--begin::Menu sub-->
                        <div class="menu-sub menu-sub-dropdown w-175px py-4">
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="/" class="menu-link d-flex px-5 active">
                                    <span class="symbol symbol-20px me-4">
                                        <img class="rounded-1" src="../../assets/media/flags/united-states.svg"
                                            alt="" />
                                    </span>
                                    Anglais
                                </a>
                            </div>
                            <!--end::Menu item-->


                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="" class="menu-link d-flex px-5">
                                    <span class="symbol symbol-20px me-4">
                                        <img class="rounded-1" src="../../assets/media/flags/france.svg" alt="" />
                                    </span>
                                    Francais
                                </a>
                            </div>
                            <!--end::Menu item-->
                        </div>
                        <!--end::Menu sub-->
                    </div>
                    <!--end::Menu item-->

                    <!--begin::Menu item-->
                    <div class="menu-item px-5 my-1">
                        <a href="/settings" class="menu-link px-5">
                            Parametres du compte
                        </a>
                    </div>
                    <!--end::Menu item-->

                    <!--begin::Menu item-->
                    <div class="menu-item px-5">
                        <a href="/" class="menu-link px-5">
                            Deconnection
                        </a>
                    </div>
                    <!--end::Menu item-->
                </div>
                <!--end::User account menu-->
                <!--end::Menu wrapper-->
            </div>
            <!--end::User-->
        </div>
        <!--end::Footer-->
    </div>
    <!--end::Primary-->

    <!--begin::Secondary-->
    <div class="aside-secondary d-flex flex-row-fluid">
        <!--begin::Workspace-->
        <div class="aside-workspace my-5 p-5" id="fab_aside_wordspace">
            <div class="d-flex h-100 flex-column">
                <!--begin::Wrapper-->
                <div class="flex-column-fluid hover-scroll-y" data-kt-scroll="true" data-kt-scroll-activate="true"
                    data-kt-scroll-height="auto" data-kt-scroll-wrappers="#fab_aside_wordspace"
                    data-kt-scroll-dependencies="#fab_aside_secondary_footer" data-kt-scroll-offset="0px">

                    <!--begin::Tab content-->
                    <div class="tab-content">
                        <!--begin::Tab pane-->
                        <div class="tab-pane fade " id="fab_aside_nav_tab_projects" role="tabpanel">

                            <!--begin::Wrapper-->
                            <div class="m-0">
                                <!--begin::Toolbar-->
                                <div class="d-flex mb-10">

                                    <!--begin::Search-->
                                    <div id="fab_header_search"
                                        class="header-search d-flex align-items-center w-100 w-lg-300px"
                                        data-kt-search-keypress="true" data-kt-search-min-length="2"
                                        data-kt-search-enter="enter" data-kt-search-layout="menu"
                                        data-kt-search-responsive="false" data-kt-menu-trigger="auto"
                                        data-kt-menu-permanent="true" data-kt-menu-placement="bottom-start">

                                        <!--begin::Tablet and mobile search toggle-->
                                        <div data-kt-search-element="toggle"
                                            class="search-toggle-mobile d-flex d-lg-none align-items-center">
                                            <div class="d-flex ">
                                                <i class="ki-duotone ki-magnifier fs-1 "><span
                                                        class="path1"></span><span class="path2"></span></i>
                                            </div>
                                        </div>
                                        <!--end::Tablet and mobile search toggle-->

                                        <!--begin::Form(use d-none d-lg-block classes for responsive search)-->
                                        <form data-kt-search-element="form"
                                            class="d-none d-lg-block w-100 position-relative mb-5 mb-lg-0"
                                            autocomplete="off">
                                            <!--begin::Hidden input(Added to disable form autocomplete)-->
                                            <input type="hidden" />
                                            <!--end::Hidden input-->

                                            <!--begin::Icon-->
                                            <i
                                                class="ki-duotone ki-magnifier search-icon fs-2 text-gray-500 position-absolute top-50 translate-middle-y ms-5"><span
                                                    class="path1"></span><span class="path2"></span></i>
                                            <!--end::Icon-->

                                            <!--begin::Input-->
                                            <input type="text"
                                                class="search-input form-control form-control-solid  ps-13"
                                                name="search" value="" placeholder="Rechercher..."
                                                data-kt-search-element="input" />
                                            <!--end::Input-->



                                        </form>
                                        <!--end::Form-->

                                        <!--end::Menu-->
                                    </div>
                                    <!--end::Search-->
                                    <!--begin::Filter-->
                                    <div class="flex-shrink-0 ms-2">
                                        <!--begin::Menu toggle-->
                                        <button type="button"
                                            class="btn btn-icon btn-bg-light btn-active-icon-primary btn-color-gray-400"
                                            data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                            <i class="ki-duotone ki-filter fs-2"><span class="path1"></span><span
                                                    class="path2"></span></i>
                                        </button>
                                        <!--end::Menu toggle-->

                                        <!--begin::Menu-->


                                        <!--end::Menu-->
                                    </div>
                                    <!--end::Filter-->
                                </div>
                                <!--end::Toolbar-->

                                <!--begin::Projects-->
                                <div class="m-0">
                                    <!--begin::Heading-->
                                    <h1 class="text-gray-800 fw-semibold mb-6 mx-5">Vehicules</h1>
                                    <!--end::Heading-->

                                    <!--begin::Items-->
                                    <div class="mb-10">
                                        <!--begin::Item-->
                                        <a href="/vehicules" class="custom-list d-flex align-items-center px-5 py-4">
                                            <!--begin::Symbol-->
                                            <div class="symbol symbol-40px me-5">
                                                <span class="symbol-label">
                                                    <img src="../../assets/media/svg/brand-logos/bebo.svg"
                                                        class="h-50 align-self-center" alt="" />
                                                </span>
                                            </div>
                                            <!--end::Symbol-->

                                            <!--begin::Description-->
                                            <div class="d-flex flex-column flex-grow-1">
                                                <!--begin::Title-->
                                                <h5 class="custom-list-title fw-semibold text-gray-800 mb-1">
                                                    Bride Car 4x4</h5>
                                                <!--end::Title-->

                                                <!--begin::Link-->
                                                <span class="text-gray-400 fw-semibold">De linux99</span>
                                                <!--end::Link-->
                                            </div>
                                            <!--begin::Description-->
                                        </a>
                                    </div>
                                    <!--end::Items-->
                                </div>
                                <!--end::Projects-->
                            </div>
                            <!--end::Wrapper-->

                        </div>
                        <!--end::Tab pane-->

                        <!--begin::Tab pane-->
                        <div class="tab-pane fade active show" id="fab_aside_nav_tab_menu" role="tabpanel">
                            <!--begin::Menu-->
                            <div class="menu menu-column menu-sub-indention menu-rounded menu-active-bg menu-title-gray-600 menu-icon-gray-400 menu-state-primary menu-arrow-gray-500 fw-semibold fs-6 px-2 my-5 my-lg-0"
                                id="fab_aside_menu" data-kt-menu="true">

                                <div id="fab_aside_menu_wrapper">
                                    <!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu content-->
                                        <div class="menu-content pb-2"><span
                                                class="menu-section text-muted text-uppercase fs-8 ls-1">Menu</span>
                                        </div>
                                        <!--end:Menu content-->
                                    </div>
                                    <!--end:Menu item-->
                                    <!--begin:Menu item-->
                                    <div data-kt-menu-trigger="click" class="menu-item menu-accordion mb-1">
                                        <!--begin:Menu link--><span class="menu-link"><span class="menu-icon"><i
                                                    class="ki-duotone ki-element-11 fs-2"><span
                                                        class="path1"></span><span class="path2"></span><span
                                                        class="path3"></span><span class="path4"></span></i></span><span
                                                class="menu-title">Tableau de bord</span><span
                                                class="menu-arrow"></span></span>
                                        <!--end:Menu link-->
                                        <!--begin:Menu sub-->
                                        <div class="menu-sub menu-sub-accordion">

                                            <!--begin:Menu item-->
                                            <div class="menu-item">
                                                <!--begin:Menu link--><a class="menu-link" href="/analyses"><span
                                                        class="menu-bullet"><span
                                                            class="bullet bullet-dot"></span></span><span
                                                        class="menu-title">Analyse generale</span></a>
                                                <!--end:Menu link-->
                                            </div>
                                            <!--end:Menu item-->
                                            <!--begin:Menu item-->
                                            <div class="menu-item">
                                                <!--begin:Menu link--><a class="menu-link" href="/vehicules"><span
                                                        class="menu-bullet"><span
                                                            class="bullet bullet-dot"></span></span><span
                                                        class="menu-title">Vehicules</span></a>
                                                <!--end:Menu link-->
                                            </div>
                                            <!--end:Menu item-->
                                            <!--begin:Menu item-->
                                            {{-- <div class="menu-item">
                                                <!--begin:Menu link--><a class="menu-link" href="/agents"><span
                                                        class="menu-bullet"><span
                                                            class="bullet bullet-dot"></span></span><span
                                                        class="menu-title">Agents</span></a>
                                                <!--end:Menu link-->
                                            </div> --}}
                                        </div>
                                        <!--end:Menu sub-->
                                    </div>
                                    <!--end:Menu item-->
                                    <!--begin:Menu item-->
                                    <div data-kt-menu-trigger="click" class="menu-item menu-accordion mb-1">
                                        <!--begin:Menu link--><span class="menu-link"><span class="menu-icon"><i
                                                    class="ki-duotone ki-profile-circle fs-2"><span
                                                        class="path1"></span><span class="path2"></span><span
                                                        class="path3"></span></i></span><span class="menu-title">Mon
                                                compte</span><span class="menu-arrow"></span></span>
                                        <!--end:Menu link-->
                                        <!--begin:Menu sub-->
                                        <div class="menu-sub menu-sub-accordion">
                                            <!--begin:Menu item-->
                                            <div class="menu-item">
                                                <!--begin:Menu link--><a class="menu-link" href="/activity"><span
                                                        class="menu-bullet"><span
                                                            class="bullet bullet-dot"></span></span><span
                                                        class="menu-title">Activites</span></a>
                                                <!--end:Menu link-->
                                            </div>
                                            <!--end:Menu item-->
                                            <!--begin:Menu item-->
                                            <div class="menu-item">
                                                <!--begin:Menu link--><a class="menu-link" href="/settings"><span
                                                        class="menu-bullet"><span
                                                            class="bullet bullet-dot"></span></span><span
                                                        class="menu-title">Parametres</span></a>
                                                <!--end:Menu link-->
                                            </div>

                                            <!--begin:Menu item-->
                                            <div class="menu-item">
                                                <!--begin:Menu link--><a class="menu-link" href="/logs"><span
                                                        class="menu-bullet"><span
                                                            class="bullet bullet-dot"></span></span><span
                                                        class="menu-title">Logs</span></a>
                                                <!--end:Menu link-->
                                            </div>
                                            <!--end:Menu item-->
                                        </div>
                                        <!--end:Menu sub-->
                                    </div>
                                    <!--end:Menu item-->
                                    <!--begin:Menu item-->
                                    <div data-kt-menu-trigger="click" class="menu-item menu-accordion mb-1">
                                        <!--begin:Menu link--><span class="menu-link"><span class="menu-icon"><i
                                                    class="ki-duotone ki-fingerprint-scanning fs-2"><span
                                                        class="path1"></span><span class="path2"></span><span
                                                        class="path3"></span><span class="path4"></span><span
                                                        class="path5"></span></i></span><span
                                                class="menu-title">Authentification</span><span
                                                class="menu-arrow"></span></span>
                                        <!--end:Menu link-->
                                        <!--begin:Menu sub-->
                                        <div class="menu-sub menu-sub-accordion">
                                            <!--begin:Menu item-->
                                            <div class="menu-item">
                                                <!--begin:Menu link--><a class="menu-link" href="/oauth"><span
                                                        class="menu-bullet"><span
                                                            class="bullet bullet-dot"></span></span><span
                                                        class="menu-title">Demmande de connexion</span></a>
                                                <!--end:Menu link-->
                                            </div>
                                            <!--end:Menu item-->
                                            <!--begin:Menu item-->
                                            <div class="menu-item">
                                                <!--begin:Menu link--><a class="menu-link" href="/unauthorization"><span
                                                        class="menu-bullet"><span
                                                            class="bullet bullet-dot"></span></span><span
                                                        class="menu-title">Autorisation refuse</span></a>
                                                <!--end:Menu link-->
                                            </div>
                                        </div>
                                        <!--end:Menu sub-->
                                    </div>
                                    <!--end:Menu item-->
                                    <!--begin:Menu item-->
                                    <div data-kt-menu-trigger="click" class="menu-item menu-accordion mb-1">
                                        <!--begin:Menu link--><span class="menu-link"><span class="menu-icon"><i
                                                    class="ki-duotone ki-shield-tick fs-2"><span
                                                        class="path1"></span><span class="path2"></span></i></span><span
                                                class="menu-title">Gestion des utilisateurs</span><span
                                                class="menu-arrow"></span></span>
                                        <!--end:Menu link-->
                                        <!--begin:Menu sub-->
                                        <div class="menu-sub menu-sub-accordion">
                                            <div class="menu-item">
                                                <!--begin:Menu link--><a class="menu-link" href="/users"><span
                                                        class="menu-bullet"><span
                                                            class="bullet bullet-dot"></span></span><span
                                                        class="menu-title">Users</span></a>
                                                <!--end:Menu link-->
                                            </div>
                                            <div class="menu-item">
                                                <!--begin:Menu link--><a class="menu-link" href="/roles"><span
                                                        class="menu-bullet"><span
                                                            class="bullet bullet-dot"></span></span><span
                                                        class="menu-title">Roles</span></a>
                                                <!--end:Menu link-->
                                            </div>
                                            <div class="menu-item">
                                                <!--begin:Menu link--><a class="menu-link" href="permissions"><span
                                                        class="menu-bullet"><span
                                                            class="bullet bullet-dot"></span></span><span
                                                        class="menu-title">Permissions</span></a>
                                                <!--end:Menu link-->
                                            </div>
                                        </div>
                                        <!--end:Menu sub-->
                                    </div>
                                    <!--end:Menu item-->

                                    <!--end:Menu item-->

                                    <!--end:Menu item-->
                                </div>
                            </div>
                            <!--end::Menu-->
                        </div>
                        <!--end::Tab pane-->

                        <!--begin::Tab pane-->
                        <div class="tab-pane fade" id="fab_aside_nav_tab_subscription" role="tabpanel">
                            <!--begin::Subscription-->
                            <div class="mx-5">
                                <!--begin::Container-->
                                <div class="text-center pt-10 mb-20">
                                    <!--begin::Title-->
                                    <h2 class="fs-2 fw-bold mb-7">Securite de la route</h2>
                                    <!--end::Title-->

                                    <!--begin::Description-->
                                    <p class="text-gray-400 fs-6 fw-semibold mb-10">
                                        Aucune donnee n'est encore fourni pour le moment
                                    </p>
                                    <!--end::Description-->

                                    <!--begin::Action-->
                                    <a href="#" class="btn btn-primary" data-bs-toggle="modal"
                                        data-bs-target="#fab_modal_upgrade_plan">Mis a jour</a>
                                    <!--end::Action-->
                                </div>
                                <!--end::Container-->

                                <!--begin::Illustration-->
                                <div class="text-center px-4">
                                    <img class="mw-100 mh-200px" alt=""
                                        src="../../assets/media/illustrations/sigma-1/9.png" />
                                </div>
                                <!--end::Illustration-->
                            </div>
                            <!--end::Subscription-->
                        </div>
                        <!--end::Tab pane-->

                        <!--begin::Tab pane-->
                        <div class="tab-pane fade" id="fab_aside_nav_tab_tasks" role="tabpanel">

                            <!--begin::Tasks-->
                            <div class="mx-5">
                                <!--begin::Header-->
                                <h3 class="fw-bold text-dark mb-10 mx-0">
                                    Tasks Overview
                                </h3>
                                <!--end::Header-->

                                <!--begin::Body-->
                                <div class="mb-12">
                                    <!--begin::Item-->
                                    <div class="d-flex align-items-center mb-7">
                                        <!--begin::Symbol-->
                                        <div class="symbol symbol-50px me-5">
                                            <span class="symbol-label bg-light-success">
                                                <i class="ki-duotone ki-abstract-26 fs-2x text-success"><span
                                                        class="path1"></span><span class="path2"></span></i>
                                            </span>
                                        </div>
                                        <!--end::Symbol-->

                                        <!--begin::Text-->
                                        <div class="d-flex flex-column">
                                            <a href="../../pages/profile/overview.html"
                                                class="text-gray-800 text-hover-primary fs-6 fw-semibold">Project
                                                Briefing</a>

                                            <span class="text-muted fw-semibold">Project Manager</span>
                                        </div>
                                        <!--end::Text-->
                                    </div>
                                    <!--end::Item-->
                                    <!--begin::Item-->
                                    <div class="d-flex align-items-center mb-7">
                                        <!--begin::Symbol-->
                                        <div class="symbol symbol-50px me-5">
                                            <span class="symbol-label bg-light-warning">
                                                <i class="ki-duotone ki-pencil fs-2x text-warning"><span
                                                        class="path1"></span><span class="path2"></span></i>
                                            </span>
                                        </div>
                                        <!--end::Symbol-->

                                        <!--begin::Text-->
                                        <div class="d-flex flex-column">
                                            <a href="../../pages/profile/overview.html"
                                                class="text-gray-800 text-hover-primary fs-6 fw-semibold">Concept
                                                Design</a>

                                            <span class="text-muted fw-semibold">Art Director</span>
                                        </div>
                                        <!--end::Text-->
                                    </div>
                                    <!--end::Item-->
                                    <!--begin::Item-->
                                    <div class="d-flex align-items-center mb-7">
                                        <!--begin::Symbol-->
                                        <div class="symbol symbol-50px me-5">
                                            <span class="symbol-label bg-light-primary">
                                                <i class="ki-duotone ki-message-text-2 fs-2x text-primary"><span
                                                        class="path1"></span><span class="path2"></span><span
                                                        class="path3"></span></i>
                                            </span>
                                        </div>
                                        <!--end::Symbol-->

                                        <!--begin::Text-->
                                        <div class="d-flex flex-column">
                                            <a href="../../pages/profile/overview.html"
                                                class="text-gray-800 text-hover-primary fs-6 fw-semibold">Functional
                                                Logics</a>

                                            <span class="text-muted fw-semibold">Lead Developer</span>
                                        </div>
                                        <!--end::Text-->
                                    </div>
                                    <!--end::Item-->
                                    <!--begin::Item-->
                                    <div class="d-flex align-items-center mb-7">
                                        <!--begin::Symbol-->
                                        <div class="symbol symbol-50px me-5">
                                            <span class="symbol-label bg-light-danger">
                                                <i class="ki-duotone ki-disconnect fs-2x text-danger"><span
                                                        class="path1"></span><span class="path2"></span><span
                                                        class="path3"></span><span class="path4"></span><span
                                                        class="path5"></span></i>
                                            </span>
                                        </div>
                                        <!--end::Symbol-->

                                        <!--begin::Text-->
                                        <div class="d-flex flex-column">
                                            <a href="../../pages/profile/overview.html"
                                                class="text-gray-800 text-hover-primary fs-6 fw-semibold">Development</a>

                                            <span class="text-muted fw-semibold">DevOps</span>
                                        </div>
                                        <!--end::Text-->
                                    </div>
                                    <!--end::Item-->
                                    <!--begin::Item-->
                                    <div class="d-flex align-items-center mb-7">
                                        <!--begin::Symbol-->
                                        <div class="symbol symbol-50px me-5">
                                            <span class="symbol-label bg-light-info">
                                                <i class="ki-duotone ki-security-user fs-2x text-info"><span
                                                        class="path1"></span><span class="path2"></span></i>
                                            </span>
                                        </div>
                                        <!--end::Symbol-->

                                        <!--begin::Text-->
                                        <div class="d-flex flex-column">
                                            <a href="../../pages/profile/overview.html"
                                                class="text-gray-800 text-hover-primary fs-6 fw-semibold">Testing</a>

                                            <span class="text-muted fw-semibold">QA Managers</span>
                                        </div>
                                        <!--end::Text-->
                                    </div>
                                    <!--end::Item-->
                                    <!--begin::Item-->
                                    <div class="d-flex align-items-center mb-7">
                                        <!--begin::Symbol-->
                                        <div class="symbol symbol-50px me-5">
                                            <span class="symbol-label bg-light-success">
                                                <i
                                                    class="ki-duotone ki-briefcaseFile-Upload.svg fs-2x text-success"></i>
                                            </span>
                                        </div>
                                        <!--end::Symbol-->

                                        <!--begin::Text-->
                                        <div class="d-flex flex-column">
                                            <a href="../../pages/profile/overview.html"
                                                class="text-gray-800 text-hover-primary fs-6 fw-semibold">HTML,
                                                CSS Coding</a>

                                            <span class="text-muted fw-semibold">Art Director</span>
                                        </div>
                                        <!--end::Text-->
                                    </div>
                                    <!--end::Item-->
                                    <!--begin::Item-->
                                    <div class="d-flex align-items-center ">
                                        <!--begin::Symbol-->
                                        <div class="symbol symbol-50px me-5">
                                            <span class="symbol-label bg-light-danger">
                                                <i class="ki-duotone ki-chart-pie-4 fs-2x text-danger"><span
                                                        class="path1"></span><span class="path2"></span><span
                                                        class="path3"></span></i>
                                            </span>
                                        </div>
                                        <!--end::Symbol-->

                                        <!--begin::Text-->
                                        <div class="d-flex flex-column">
                                            <a href="../../pages/profile/overview.html"
                                                class="text-gray-800 text-hover-primary fs-6 fw-semibold">ReactJS
                                                Developer</a>

                                            <span class="text-muted fw-semibold">Web, UI/UX Design</span>
                                        </div>
                                        <!--end::Text-->
                                    </div>
                                    <!--end::Item-->

                                </div>
                                <!--end::Body-->
                            </div>
                            <!--end::Tasks-->
                        </div>
                        <!--end::Tab pane-->

                        <!--begin::Tab pane-->
                        <div class="tab-pane fade" id="fab_aside_nav_tab_notifications" role="tabpanel">

                            <!--begin::Notifications-->
                            <div class="mx-5">
                                <!--begin::Header-->
                                <h3 class="fw-bold text-dark mb-10 mx-0">Notifications</h3>
                                <!--end::Header-->

                                <!--begin::Body-->
                                <div class="mb-12">
                                    @for($i = 0 ;$i < 4; $i++) <!--begin::Item-->
                                        <div class="d-flex align-items-center bg-light-warning rounded p-5 mb-7">
                                            <!--begin::Icon-->
                                            <span class="svg-icon text-warning me-5">
                                                <i class="ki-duotone ki-abstract-26 fs-1 text-warning"><span
                                                        class="path1"></span><span class="path2"></span></i>
                                            </span>
                                            <!--end::Icon-->

                                            <!--begin::Title-->
                                            <div class="flex-grow-1 me-2">
                                                <a href="../../widgets/lists.html"
                                                    class="fw-bold text-gray-800 text-hover-primary fs-8">Scan Vehicule
                                                    1x8TwC CD</a>

                                                <span class="text-muted fw-semibold d-block fs-9">Zone Charlie par
                                                    1Cobra22</span>
                                            </div>
                                            <!--end::Title-->

                                            <!--begin::Lable-->
                                            <span class="fw-bold text-success py-1">
                                                <i class="ki-duotone ki-check-circle fs-2x text-success"><span
                                                        class="path1"></span><span class="path2"></span><span
                                                        class="path3"></span></i>
                                            </span>
                                            <!--end::Lable-->
                                        </div>
                                        @endfor


                                </div>
                                <!--end::Body-->
                            </div>
                            <!--end::Notifications-->
                        </div>
                        <!--end::Tab pane-->

                        <!--begin::Tab pane-->
                        <div class="tab-pane fade" id="fab_aside_nav_tab_authors" role="tabpanel">

                            <!--begin::Authors-->
                            <div class="mx-5">
                                <!--begin::Header-->
                                <h3 class="fw-bold text-dark mx-0 mb-10">Authors</h3>
                                <!--end::Header-->

                                <!--begin::Body-->
                                <div class="mb-12">
                                    <!--begin::Item-->
                                    <div class="d-flex align-items-center mb-7">
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-50px me-5">
                                            <img src="../../assets/media/avatars/300-6.jpg" class="" alt="" />
                                        </div>
                                        <!--end::Avatar-->

                                        <!--begin::Text-->
                                        <div class="flex-grow-1">
                                            <a href="../../pages/projects/users.html"
                                                class="text-dark fw-bold text-hover-primary fs-6">Emma
                                                Smith</a>

                                            <span class="text-muted d-block fw-semibold">Project
                                                Manager</span>
                                        </div>
                                        <!--end::Text-->
                                    </div>
                                    <!--end::Item-->
                                    <!--begin::Item-->
                                    <div class="d-flex align-items-center mb-7">
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-50px me-5">
                                            <img src="../../assets/media/avatars/300-5.jpg" class="" alt="" />
                                        </div>
                                        <!--end::Avatar-->

                                        <!--begin::Text-->
                                        <div class="flex-grow-1">
                                            <a href="../../pages/projects/users.html"
                                                class="text-dark fw-bold text-hover-primary fs-6">Sean
                                                Bean</a>

                                            <span class="text-muted d-block fw-semibold">PHP, SQLite,
                                                Artisan CLI</span>
                                        </div>
                                        <!--end::Text-->
                                    </div>
                                    <!--end::Item-->
                                    <!--begin::Item-->
                                    <div class="d-flex align-items-center mb-7">
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-50px me-5">
                                            <img src="../../assets/media/avatars/300-11.jpg" class="" alt="" />
                                        </div>
                                        <!--end::Avatar-->

                                        <!--begin::Text-->
                                        <div class="flex-grow-1">
                                            <a href="../../pages/projects/users.html"
                                                class="text-dark fw-bold text-hover-primary fs-6">Brian
                                                Cox</a>

                                            <span class="text-muted d-block fw-semibold">HTML5, jQuery,
                                                CSS3</span>
                                        </div>
                                        <!--end::Text-->
                                    </div>
                                    <!--end::Item-->
                                    <!--begin::Item-->
                                    <div class="d-flex align-items-center mb-7">
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-50px me-5">
                                            <img src="../../assets/media/avatars/300-23.jpg" class="" alt="" />
                                        </div>
                                        <!--end::Avatar-->

                                        <!--begin::Text-->
                                        <div class="flex-grow-1">
                                            <a href="../../pages/projects/users.html"
                                                class="text-dark fw-bold text-hover-primary fs-6">Dan
                                                Wilson</a>

                                            <span class="text-muted d-block fw-semibold">MangoDB,
                                                Java</span>
                                        </div>
                                        <!--end::Text-->
                                    </div>
                                    <!--end::Item-->
                                    <!--begin::Item-->
                                    <div class="d-flex align-items-center mb-7">
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-50px me-5">
                                            <img src="../../assets/media/avatars/300-10.jpg" class="" alt="" />
                                        </div>
                                        <!--end::Avatar-->

                                        <!--begin::Text-->
                                        <div class="flex-grow-1">
                                            <a href="../../pages/projects/users.html"
                                                class="text-dark fw-bold text-hover-primary fs-6">Natali
                                                Trump</a>

                                            <span class="text-muted d-block fw-semibold">NET, Oracle,
                                                MySQL</span>
                                        </div>
                                        <!--end::Text-->
                                    </div>
                                    <!--end::Item-->
                                    <!--begin::Item-->
                                    <div class="d-flex align-items-center mb-7">
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-50px me-5">
                                            <img src="{{ asset('assets/img/linux.jpg')}}" class="" alt="" />
                                        </div>
                                        <!--end::Avatar-->

                                        <!--begin::Text-->
                                        <div class="flex-grow-1">
                                            <a href="../../pages/projects/users.html"
                                                class="text-dark fw-bold text-hover-primary fs-6">Francis
                                                Mitcham</a>

                                            <span class="text-muted d-block fw-semibold">React, Vue</span>
                                        </div>
                                        <!--end::Text-->
                                    </div>
                                    <!--end::Item-->
                                    <!--begin::Item-->
                                    <div class="d-flex align-items-center ">
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-50px me-5">
                                            <img src="../../assets/media/avatars/300-12.jpg" class="" alt="" />
                                        </div>
                                        <!--end::Avatar-->

                                        <!--begin::Text-->
                                        <div class="flex-grow-1">
                                            <a href="../../pages/projects/users.html"
                                                class="text-dark fw-bold text-hover-primary fs-6">Jessie
                                                Clarcson</a>

                                            <span class="text-muted d-block fw-semibold">Angular,
                                                React</span>
                                        </div>
                                        <!--end::Text-->
                                    </div>
                                    <!--end::Item-->

                                </div>
                                <!--end::Body-->
                            </div>
                            <!--end::Authors-->
                        </div>
                        <!--end::Tab pane-->
                    </div>
                    <!--end::Tab content-->
                </div>
                <!--end::Wrapper-->

                <!--begin::Footer-->
                <div class="flex-column-auto pt-10 px-5" id="fab_aside_secondary_footer">
                    <a href="{{ route('goma.map') }}"
                        class="btn btn-bg-light btn-color-gray-600 btn-flex btn-active-color-primary flex-center w-100"
                        data-bs-toggle="tooltip" data-bs-custom-class="tooltip-dark" data-bs-trigger="hover"
                        data-bs-offset="0,5" data-bs-dismiss-="click" title="200+ point de surveuillance routiere">
                        <span class="btn-label">
                            Carte aerienne de Goma
                        </span>
                        <i class="ki-duotone ki-map btn-icon fs-4 ms-2 text-danger"><span class="path1"></span><span
                                class="path2"></span></i> </a>
                </div>
                <!--end::Footer-->
            </div>
        </div>
        <!--end::Workspace-->
    </div>
    <!--end::Secondary-->

    <!--begin::Aside Toggle-->
    <button
        class="btn btn-sm btn-icon bg-body btn-color-success btn-active-success position-absolute translate-middle start-100 end-0 bottom-0 shadow-sm d-none d-lg-flex "
        data-kt-toggle="true" data-kt-toggle-state="active" data-kt-toggle-target="body"
        data-kt-toggle-name="aside-minimize" style="margin-bottom: 1.35rem">

        <i class="ki-duotone ki-arrow-left fs-2 rotate-180"><span class="path1"></span><span class="path2"></span></i>
    </button>
    <!--end::Aside Toggle-->
</div>
<!--end::Aside-->
