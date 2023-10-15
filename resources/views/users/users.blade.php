@extends('layouts.app')
@section('menuTitle')
Gestion d'utilisateurs
@endsection
@section('contentIndex')

<li class="breadcrumb-item text-muted">
    <a href="/" class="text-muted">
        Acceuil </a>
</li>
<li class="breadcrumb-item text-dark">
    utilisateurs </li>
@endsection

@section('content')
<div class=" container-xxl " id="fab_content_container" data-select2-id="select2-data-fab_content_container">


    <div class="card" data-select2-id="select2-data-156-v9nn">

        <div class="card-header border-0 pt-6" data-select2-id="select2-data-155-sseq">

            <div class="card-title">

                <div class="d-flex align-items-center position-relative my-1">
                    <i class="ki-duotone ki-magnifier fs-3 position-absolute ms-5"><span class="path1"></span><span
                            class="path2"></span></i> <input type="text" data-kt-user-table-filter="search"
                        class="form-control form-control-solid w-250px ps-13" placeholder="Rechercher un utiisateur">
                </div>

            </div>



            <div class="card-toolbar" data-select2-id="select2-data-154-zqod">

                <div class="d-flex justify-content-end" data-kt-user-table-toolbar="base">





                    <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                        data-bs-target="#fab_modal_add_user">
                        <i class="ki-duotone ki-plus fs-2"></i> Ajouter un utilisateur
                    </button>

                </div>



                <div class="d-flex justify-content-end align-items-center d-none" data-kt-user-table-toolbar="selected">
                    <div class="fw-bold me-5">
                        <span class="me-2" data-kt-user-table-select="selected_count"></span> Selectionnee(s)
                    </div>

                    <button type="button" class="btn btn-danger" data-kt-user-table-select="delete_selected">
                        Supprimer la selection
                    </button>
                </div>





                <div class="modal fade" id="fab_modal_add_user" tabindex="-1" aria-hidden="true">

                    <div class="modal-dialog modal-dialog-centered mw-650px">

                        <div class="modal-content">

                            <div class="modal-header" id="fab_modal_add_user_header">

                                <h2 class="fw-bold">Ajouter un utilisateur</h2>



                                <div class="btn btn-icon btn-sm btn-active-icon-primary"
                                    data-kt-users-modal-action="close">
                                    <i class="ki-duotone ki-cross fs-1"><span class="path1"></span><span
                                            class="path2"></span></i>
                                </div>

                            </div>



                            <div class="modal-body px-5 my-7">

                                <form id="fab_modal_add_user_form"
                                    class="form fv-plugins-bootstrap5 fv-plugins-framework" action="#">

                                    <div class="d-flex flex-column scroll-y px-5 px-lg-10"
                                        id="fab_modal_add_user_scroll" data-kt-scroll="true"
                                        data-kt-scroll-activate="true" data-kt-scroll-max-height="auto"
                                        data-kt-scroll-dependencies="#fab_modal_add_user_header"
                                        data-kt-scroll-wrappers="#fab_modal_add_user_scroll"
                                        data-kt-scroll-offset="300px" style="max-height: 269px;">

                                        <div class="fv-row mb-7">

                                            <label class="d-block fw-semibold fs-6 mb-5">Avatar</label>




                                            <style>
                                                .image-input-placeholder {
                                                    background-image: url('../../../assets/media/svg/files/blank-image.svg');
                                                }

                                                [data-bs-theme="dark"] .image-input-placeholder {
                                                    background-image: url('../../../assets/media/svg/files/blank-image-dark.svg');
                                                }
                                            </style>


                                            <div class="image-input image-input-outline image-input-placeholder"
                                                data-kt-image-input="true">

                                                <div class="image-input-wrapper w-125px h-125px"
                                                    style="background-image: url(../../../assets/media/avatars/300-6.jpg);">
                                                </div>



                                                <label
                                                    class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                                    data-kt-image-input-action="change" data-bs-toggle="tooltip"
                                                    aria-label="Change avatar" data-bs-original-title="Change avatar"
                                                    data-kt-initialized="1">
                                                    <i class="ki-duotone ki-pencil fs-7"><span
                                                            class="path1"></span><span class="path2"></span></i>

                                                    <input type="file" name="avatar" accept=".png, .jpg, .jpeg">
                                                    <input type="hidden" name="avatar_remove">

                                                </label>



                                                <span
                                                    class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                                    data-kt-image-input-action="cancel" data-bs-toggle="tooltip"
                                                    aria-label="Cancel avatar" data-bs-original-title="Cancel avatar"
                                                    data-kt-initialized="1">
                                                    <i class="ki-duotone ki-cross fs-2"><span class="path1"></span><span
                                                            class="path2"></span></i> </span>



                                                <span
                                                    class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                                    data-kt-image-input-action="remove" data-bs-toggle="tooltip"
                                                    aria-label="Remove avatar" data-bs-original-title="Remove avatar"
                                                    data-kt-initialized="1">
                                                    <i class="ki-duotone ki-cross fs-2"><span class="path1"></span><span
                                                            class="path2"></span></i> </span>

                                            </div>



                                            <div class="form-text">Allowed file types: png, jpg, jpeg.</div>

                                        </div>



                                        <div class="fv-row mb-7 fv-plugins-icon-container">

                                            <label class="required fw-semibold fs-6 mb-2">Full Name</label>



                                            <input type="text" name="user_name"
                                                class="form-control form-control-solid mb-3 mb-lg-0"
                                                placeholder="Full name" value="Emma Smith">

                                            <div
                                                class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">
                                            </div>
                                        </div>



                                        <div class="fv-row mb-7 fv-plugins-icon-container">

                                            <label class="required fw-semibold fs-6 mb-2">Email</label>



                                            <input type="email" name="user_email"
                                                class="form-control form-control-solid mb-3 mb-lg-0"
                                                placeholder="example@domain.com" value="smith@kpmg.com">

                                            <div
                                                class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">
                                            </div>
                                        </div>



                                        <div class="mb-5">

                                            <label class="required fw-semibold fs-6 mb-5">Role</label>




                                            <div class="d-flex fv-row">

                                                <div class="form-check form-check-custom form-check-solid">

                                                    <input class="form-check-input me-3" name="user_role" type="radio"
                                                        value="0" id="fab_modal_update_role_option_0" checked="checked">



                                                    <label class="form-check-label"
                                                        for="fab_modal_update_role_option_0">
                                                        <div class="fw-bold text-gray-800">Administrator</div>
                                                        <div class="text-gray-600">Best for business owners and company
                                                            administrators</div>
                                                    </label>

                                                </div>

                                            </div>


                                            <div class="separator separator-dashed my-5"></div>

                                            <div class="d-flex fv-row">

                                                <div class="form-check form-check-custom form-check-solid">

                                                    <input class="form-check-input me-3" name="user_role" type="radio"
                                                        value="1" id="fab_modal_update_role_option_1">



                                                    <label class="form-check-label"
                                                        for="fab_modal_update_role_option_1">
                                                        <div class="fw-bold text-gray-800">Developer</div>
                                                        <div class="text-gray-600">Best for developers or people
                                                            primarily using the API</div>
                                                    </label>

                                                </div>

                                            </div>


                                            <div class="separator separator-dashed my-5"></div>

                                            <div class="d-flex fv-row">

                                                <div class="form-check form-check-custom form-check-solid">

                                                    <input class="form-check-input me-3" name="user_role" type="radio"
                                                        value="2" id="fab_modal_update_role_option_2">



                                                    <label class="form-check-label"
                                                        for="fab_modal_update_role_option_2">
                                                        <div class="fw-bold text-gray-800">Analyst</div>
                                                        <div class="text-gray-600">Best for people who need full access
                                                            to analytics data, but don't need to update business
                                                            settings</div>
                                                    </label>

                                                </div>

                                            </div>


                                            <div class="separator separator-dashed my-5"></div>

                                            <div class="d-flex fv-row">

                                                <div class="form-check form-check-custom form-check-solid">

                                                    <input class="form-check-input me-3" name="user_role" type="radio"
                                                        value="3" id="fab_modal_update_role_option_3">



                                                    <label class="form-check-label"
                                                        for="fab_modal_update_role_option_3">
                                                        <div class="fw-bold text-gray-800">Support</div>
                                                        <div class="text-gray-600">Best for employees who regularly
                                                            refund payments and respond to disputes</div>
                                                    </label>

                                                </div>

                                            </div>


                                            <div class="separator separator-dashed my-5"></div>

                                            <div class="d-flex fv-row">

                                                <div class="form-check form-check-custom form-check-solid">

                                                    <input class="form-check-input me-3" name="user_role" type="radio"
                                                        value="4" id="fab_modal_update_role_option_4">



                                                    <label class="form-check-label"
                                                        for="fab_modal_update_role_option_4">
                                                        <div class="fw-bold text-gray-800">Trial</div>
                                                        <div class="text-gray-600">Best for people who need to preview
                                                            content data, but don't need to make any updates</div>
                                                    </label>

                                                </div>

                                            </div>



                                        </div>

                                    </div>



                                    <div class="text-center pt-10">
                                        <button type="reset" class="btn btn-light me-3"
                                            data-kt-users-modal-action="cancel">
                                            Discard
                                        </button>

                                        <button type="submit" class="btn btn-primary"
                                            data-kt-users-modal-action="submit">
                                            <span class="indicator-label">
                                                Submit
                                            </span>
                                            <span class="indicator-progress">
                                                Please wait... <span
                                                    class="spinner-border spinner-border-sm align-middle ms-2"></span>
                                            </span>
                                        </button>
                                    </div>

                                </form>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>



        <div class="card-body py-4">


            <div id="fab_table_users_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                <div class="table-responsive">
                    <table class="table align-middle table-row-dashed fs-6 gy-5 dataTable no-footer"
                        id="fab_table_users">
                        <thead>
                            <tr class="text-start text-muted fw-bold fs-7 text-uppercase gs-0">
                                <th class="w-10px pe-2 sorting_disabled" rowspan="1" colspan="1" style="width: 29.9px;"
                                    aria-label="
                
                    
                
            ">
                                    <div class="form-check form-check-sm form-check-custom form-check-solid me-3">
                                        <input class="form-check-input" type="checkbox" data-kt-check="true"
                                            data-kt-check-target="#fab_table_users .form-check-input" value="1">
                                    </div>
                                </th>
                                <th class="min-w-125px sorting" tabindex="0" aria-controls="fab_table_users" rowspan="1"
                                    colspan="1" style="width: 206.533px;"
                                    aria-label="Utilisateur: activate to sort column ascending">Utilisateur</th>
                                <th class="min-w-125px sorting" tabindex="0" aria-controls="fab_table_users" rowspan="1"
                                    colspan="1" style="width: 125px;"
                                    aria-label="Role: activate to sort column ascending">Role</th>
                                <th class="min-w-100px sorting" tabindex="0" aria-controls="fab_table_users" rowspan="1"
                                    colspan="1" style="width: 100px;"
                                    aria-label="Connexion: activate to sort column ascending">Connexion</th>
                                <th> </th>
                                <th class="min-w-100px sorting" tabindex="0" aria-controls="fab_table_users" rowspan="1"
                                    colspan="1" style="width: 100px;"
                                    aria-label="Date creat.: activate to sort column ascending">Date creat.</th>
                                <th class="text-end min-w-100px sorting_disabled" rowspan="1" colspan="1"
                                    style="width: 100px;" aria-label="Actions">Actions</th>
                            </tr>
                        </thead>
                        <tbody class="text-gray-600 fw-semibold">
                            <tr class="odd">
                                <td>
                                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                                        <input class="form-check-input" type="checkbox" value="1">
                                    </div>
                                </td>
                                <td class="d-flex align-items-center">

                                    <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                                        <a href="view.html">
                                            <div class="symbol-label">
                                                <img src="../../../assets/media/avatars/300-6.jpg" alt="Emma Smith"
                                                    class="w-100">
                                            </div>
                                        </a>
                                    </div>


                                    <div class="d-flex flex-column">
                                        <a href="view.html" class="text-gray-800 text-hover-primary mb-1">Emma Smith</a>
                                        <span>smith@kpmg.com</span>
                                    </div>

                                </td>
                                <td>
                                    Administrator </td>
                                <td data-order="2023-10-07T02:43:51+02:00">
                                    <div class="badge badge-light fw-bold">Yesterday</div>
                                </td>
                                <td>
                                </td>
                                <td data-order="2023-04-15T22:10:00+02:00">
                                    15 Apr 2023, 10:10 pm </td>
                                <td class="text-end">
                                    <button class="btn btn-icon btn-active-light-primary w-30px h-30px me-3"
                                        @click="editModal(product)">
                                        <i class="ki-duotone ki-pencil fs-3"><span class="path1"></span><span
                                                class="path2"></span><span class="path3"></span><span
                                                class="path4"></span><span class="path5"></span></i>
                                    </button>
                                    <button class="btn btn-icon btn-active-light-primary w-30px h-30px"
                                        data-kt-permissions-table-filter="delete_row">
                                        <i class="ki-duotone ki-trash fs-3"><span class="path1"></span><span
                                                class="path2"></span><span class="path3"></span><span
                                                class="path4"></span><span class="path5"></span></i>
                                    </button>
                                </td>
                            </tr>
                            <tr class="even">
                                <td>
                                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                                        <input class="form-check-input" type="checkbox" value="1">
                                    </div>
                                </td>
                                <td class="d-flex align-items-center">

                                    <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                                        <a href="view.html">
                                            <div class="symbol-label fs-3 bg-light-danger text-danger">
                                                M </div>
                                        </a>
                                    </div>


                                    <div class="d-flex flex-column">
                                        <a href="view.html" class="text-gray-800 text-hover-primary mb-1">Melody
                                            Macy</a>
                                        <span>melody@altbox.com</span>
                                    </div>

                                </td>
                                <td>
                                    Analyst </td>
                                <td data-order="2023-10-08T02:23:51+02:00">
                                    <div class="badge badge-light fw-bold">20 mins ago</div>
                                </td>
                                <td>

                                </td>
                                <td data-order="2023-08-19T20:43:00+02:00">
                                    19 Aug 2023, 8:43 pm </td>
                                <td class="text-end">
                                    <button class="btn btn-icon btn-active-light-primary w-30px h-30px me-3"
                                        @click="editModal(product)">
                                        <i class="ki-duotone ki-pencil fs-3"><span class="path1"></span><span
                                                class="path2"></span><span class="path3"></span><span
                                                class="path4"></span><span class="path5"></span></i>
                                    </button>
                                    <button class="btn btn-icon btn-active-light-primary w-30px h-30px"
                                        data-kt-permissions-table-filter="delete_row">
                                        <i class="ki-duotone ki-trash fs-3"><span class="path1"></span><span
                                                class="path2"></span><span class="path3"></span><span
                                                class="path4"></span><span class="path5"></span></i>
                                    </button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

        </div>

    </div>

</div>
@endsection