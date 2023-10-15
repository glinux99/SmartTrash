@extends('layouts.app')
@section('menuTitle')
Authentification
@endsection
@section('contentIndex')

<li class="breadcrumb-item text-muted">
    <a href="/" class="text-muted">
        Acceuil </a>
</li>
<li class="breadcrumb-item text-dark">
    Demande de connexion </li>
@endsection

@section('content')
<div class=" container-xxl " id="fab_content_container" data-select2-id="select2-data-fab_content_container">


    <div class="card" data-select2-id="select2-data-156-v9nn">

        <div class="card-header border-0 pt-6" data-select2-id="select2-data-155-sseq">

            <div class="card-title">

                <div class="d-flex align-items-center position-relative my-1">
                    <i class="ki-duotone ki-magnifier fs-3 position-absolute ms-5"><span class="path1"></span><span
                            class="path2"></span></i> <input type="text" data-kt-user-table-filter="search"
                        class="form-control form-control-solid w-250px ps-13" placeholder="Chercher une demande...">
                </div>

            </div>



            <div class="card-toolbar" data-select2-id="select2-data-154-zqod">

                <div class="d-flex justify-content-end" data-kt-user-table-toolbar="base">





                    <button type="button" class="btn btn-light-primary me-3" data-bs-toggle="modal">
                        <i class="ki-duotone ki-exit-up fs-2"><span class="path1"></span><span class="path2"></span></i>
                        Exporter
                    </button>

                </div>



                <div class="d-flex justify-content-end align-items-center d-none" data-kt-user-table-toolbar="selected">
                    <div class="fw-bold me-5">
                        <span class="me-2" data-kt-user-table-select="selected_count"></span> Selectione(s)
                    </div>

                    <button type="button" class="btn btn-danger">
                        Supprimer
                    </button>
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
                                    aria-label="Marque/Model: activate to sort column ascending">Type d'Appareil</th>
                                <th></th>
                                <th class="min-w-125px sorting" tabindex="0" aria-controls="fab_table_users" rowspan="1"
                                    colspan="1" style="width: 125px;"
                                    aria-label="Immatric.: activate to sort column ascending">Code Agent</th>
                                <th class="min-w-125px sorting" tabindex="0" aria-controls="fab_table_users" rowspan="1"
                                    colspan="1" style="width: 125px;"
                                    aria-label="Proprietaire : activate to sort column ascending">Nom Agent </th>
                                <th class="min-w-25px sorting fs-8" tabindex="0" aria-controls="fab_table_users"
                                    rowspan="1" colspan="1" style="width: 25px;"
                                    aria-label="Nbre d'infractions: activate to sort column ascending">Status</th>
                                <th class="text-end min-w-100px sorting_disabled" rowspan="1" colspan="1"
                                    style="width: 100px;" aria-label="Actions">Actions</th>
                            </tr>
                        </thead>
                        <tbody class="text-gray-600 fw-semibold">






















                            <tr class="even/odd">
                                <td>
                                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                                        <input class="form-check-input" type="checkbox" value="1">
                                    </div>
                                </td>
                                <td class="d-flex align-items-center">

                                    <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                                        <a href="/">
                                            <div class="symbol-label fs-3 bg-light-danger text-danger">
                                                <i class="fa fa-mobile -2x"><span class="path1"></span><span
                                                        class="path2"></span></i>
                                            </div>
                                        </a>
                                    </div>


                                    <div class="d-flex flex-column">
                                        <a href="/" class="text-gray-800 text-hover-primary mb-1">Mobile</a>
                                        <span>192.168.43.12</span>
                                    </div>

                                </td>
                                <td>
                                </td>
                                <td data-order="2023-10-08T02:23:51+02:00">
                                    <div class="badge badge-light fw-bold">ACLM2XXW0CD</div>
                                </td>
                                <td>
                                    <div class="badge badge-light-success fw-bold">Daniel Kikimba</div>
                                </td>
                                <td data-order="2023-08-19T20:43:00+02:00" class="text-center">
                                    Access </td>
                                <td class="text-end">
                                    <button class="btn btn-icon btn-active-light-primary w-30px h-30px me-3"
                                        @click="editModal(product)">
                                        <i class="fa fa-user-check fs-3"><span class="path1"></span><span
                                                class="path2"></span><span class="path3"></span><span
                                                class="path4"></span><span class="path5"></span></i>
                                    </button>
                                    <button class="btn btn-icon btn-active-light-primary w-30px h-30px"
                                        data-kt-permissions-table-filter="delete_row">
                                        <i class="fa fa-user-slash fs-3"><span class="path1"></span><span
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