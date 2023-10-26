@extends('layouts.app')
@section('menuTitle')
Tableau de bord
@endsection
@section('contentIndex')

<li class="breadcrumb-item text-muted">
    <a href="/" class="text-muted">
        Acceuil </a>
</li>
<li class="breadcrumb-item text-dark">
    poubelles </li>
@endsection
@section('content')
<map-trash />
<div class=" container-xxl " id="fab_content_container" data-select2-id="select2-data-fab_content_container">


    <div class="card" data-select2-id="select2-data-156-v9nn">

        <div class="card-header border-0 pt-6" data-select2-id="select2-data-155-sseq">

            <div class="card-title">

                <div class="d-flex align-items-center position-relative my-1">
                    <i class="ki-duotone ki-magnifier fs-3 position-absolute ms-5"><span class="path1"></span><span
                            class="path2"></span></i> <input type="text" data-kt-user-table-filter="search"
                        class="form-control form-control-solid w-250px ps-13" placeholder="Chercher une poubelle">
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
                                    aria-label="Marque/Model: activate to sort column ascending">CouleurCoordonnees</th>
                                <th></th>
                                <th class="min-w-125px sorting" tabindex="0" aria-controls="fab_table_users" rowspan="1"
                                    colspan="1" style="width: 125px;"
                                    aria-label="Immatric.: activate to sort column ascending">Adresse Ip.</th>
                                <th class="min-w-125px sorting" tabindex="0" aria-controls="fab_table_users" rowspan="1"
                                    colspan="1" style="width: 125px;"
                                    aria-label="Proprietaire : activate to sort column ascending">Proprietaire </th>
                                <th class="min-w-25px sorting fs-8" tabindex="0" aria-controls="fab_table_users"
                                    rowspan="1" colspan="1" style="width: 25px;"
                                    aria-label="Nbre d'infractions: activate to sort column ascending">Status</th>
                                <th class="text-end min-w-100px sorting_disabled" rowspan="1" colspan="1"
                                    style="width: 100px;" aria-label="Actions">Actions</th>
                            </tr>
                        </thead>
                        <tbody class="text-gray-600 fw-semibold">






















                            @foreach ($trashes as $trash)
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
                                                <i class="ki-duotone ki-trash fs-2x"><span class="path1"></span><span
                                                        class="path2"></span></i>
                                            </div>
                                        </a>
                                    </div>


                                    <div class="d-flex flex-column">
                                        <a href="/" class="text-gray-800 text-hover-primary mb-1">{{
                                            $trash->couleur}}</a>
                                        <span>{{ $trash->longitude}} / {{ $trash->latitude}}</span>
                                    </div>

                                </td>
                                <td>
                                </td>
                                <td data-order="2023-10-08T02:23:51+02:00">
                                    <div class="badge badge-light fw-bold">{{ $trash->ip}}</div>
                                </td>
                                <td>
                                    <div class="badge badge-light-success fw-bold">{{ $trash->name}} {{ $trash->l_name}}
                                    </div>
                                </td>
                                <td data-order="2023-08-19T20:43:00+02:00" class="text-center">
                                    {{ $trash->status}} </td>
                                <td class="text-end">
                                    <button class="btn btn-icon btn-active-light-primary w-30px h-30px me-3"
                                        tooltip="Mise a jour" data-bs-toggle="modal"
                                        data-bs-target="#fab_modal_update_account" onclick="updateLink({{$trash}})">
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
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>

        </div>

    </div>

</div>
<div class="modal fade" id="fab_modal_update_account" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-hidden="true">

    <div class="modal-dialog mw-1000px">

        <div class="modal-content">

            <div class="modal-header">

                <h2>Mis a jour d'un nouveau client</h2>



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



                    <form class="mx-auto w-100 py-10" novalidate="novalidate" id="fab_create_account_form"
                        action="/trashes" method="POST">


                        <div class="current" data-kt-stepper-element="content">

                            <div class="w-100 px-20 d">
                                <div class="row ">
                                    <div class="col-md-6">
                                        <label class="required form-label">Adresse IP</label>
                                        <input type="url" class="form-control form-control-lg form-control-solid"
                                            name="ip" placeholder="192.168.1.1" value="">
                                    </div>
                                    <div class="col-md-6">
                                        <label class="required form-label">Couleur</label>
                                        <input type="text" class="form-control form-control-lg form-control-solid"
                                            name="couleur" placeholder="couleur" value="">
                                    </div>
                                    <div class="col-md-6">
                                        <label class="required form-label">SSID</label>
                                        <input type="text" class="form-control form-control-lg form-control-solid"
                                            name="ssid" placeholder="ssid du reseau" value="">
                                    </div>
                                    <div class="col-md-6">
                                        <label class="required form-label">Mot de passe du reseau</label>
                                        <input type="text" class="form-control form-control-lg form-control-solid"
                                            name="password" placeholder="************" value="">
                                    </div>
                                    <div class="col-md-6">
                                        <label class="required form-label">Longitude</label>
                                        <input type="text" class="form-control form-control-lg form-control-solid"
                                            name="longitude" placeholder="192.168.1.1" value="">
                                    </div>
                                    <div class="col-md-6">
                                        <label class="required form-label">Latitude</label>
                                        <input type="text" class="form-control form-control-lg form-control-solid"
                                            name="latitude" placeholder="192.168.1.1" value="">
                                    </div>
                                    <div>
                                        <label class="form-label fw-normal fs-7">Details sur l'emplacement</label>
                                        <div class="ms-auto">
                                            <textarea id="" name="description" cols="20" rows="3"
                                                class="form-control bg-light"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>


                        <div data-kt-stepper-element="content">
                            @csrf
                            <div class="w-100 px-20 d-md-flex flex-column ">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label class="required form-label">Nom</label>
                                        <input type="text" class="form-control form-control-lg form-control-solid"
                                            name="name" placeholder="nom du proprietaire" value="">
                                    </div>
                                    <div class="col-md-6">
                                        <label class=" form-label">Prenom</label>
                                        <input type="text" class="form-control form-control-lg form-control-solid"
                                            name="l_name" placeholder="prenom du proprietaire" value="">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label class="required form-label">Telephone</label>
                                        <input type="number" class="form-control form-control-lg form-control-solid"
                                            name="phone" placeholder="" value="" required>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label">Email</label>
                                        <input type="email" class="form-control form-control-lg form-control-solid"
                                            name="email" placeholder="email du proprietaire" value="">
                                    </div>
                                </div>
                                <div>
                                    <label class="form-label">Type de client</label>
                                    <div class="ms-2 ">
                                        <select name="type" class="form-select form-select-solid form-select-lg"
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
                                <button type="submit" class="btn btn-lg btn-primary me-3"
                                    data-kt-stepper-action="submit">
                                    <span class="indicator-label" id="">
                                        Envoyer
                                        <i class="ki-duotone ki-arrow-right fs-3 ms-2 me-0"><span
                                                class="path1"></span><span class="path2"></span></i> </span>
                                    <span class="indicator-progress">
                                        Veuillez patienter svp... <span
                                            class="spinner-border spinner-border-sm align-middle ms-2"></span>
                                    </span>
                                </button>
                                <button type="submit" id="submitHidden" hidden></button>
                                <button type="button" class="btn btn-lg btn-primary" data-kt-stepper-action="next">
                                    Continue
                                    <i class="ki-duotone ki-arrow-right fs-4 ms-1 me-0"><span class="path1"></span><span
                                            class="path2"></span></i> </button>
                            </div>

                        </div>

                    </form>

                </div>

            </div>

        </div>

    </div>

</div>
@endsection
