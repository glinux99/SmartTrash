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
    poubelle </li>
@endsection
@section('content')
<div class="mx-10 d-flex flex-column" id="fab_create_account_stepper">
    <form class="mx-auto w-100 py-10" method="POST" action="{{ route('trash.update',$trash->id)}}" method=" POST">
        @csrf
        <div class="w-100 px-20 card my-5 py-8 ">
            <h3 class="stepper-title mb-5">
                Information sur la poubelle
            </h3>
            <div class="row ">
                <div class="col-md-6">
                    <label class=" form-label">Adresse IP</label>
                    <input type="text" class="form-control form-control-lg form-control-solid" name="ip"
                        placeholder="192.168.1.1" value="{{ $trash->ip}}">
                </div>
                <div class="col-md-6">
                    <label class=" form-label">Couleur</label>
                    <input type="text" class="form-control form-control-lg form-control-solid" name="couleur"
                        placeholder="couleur" value="{{ $trash->couleur}}">
                </div>
                <div class="col-md-6">
                    <label class=" form-label">SSID</label>
                    <input type="text" class="form-control form-control-lg form-control-solid" name="ssid"
                        placeholder="ssid du reseau" value="{{ $trash->ssid}}">
                </div>
                <div class="col-md-6">
                    <label class=" form-label">Mot de passe du reseau</label>
                    <input type="text" class="form-control form-control-lg form-control-solid" name="password"
                        placeholder="************" value="{{ $trash->password}}">
                </div>
                <div class="col-md-6">
                    <label class=" form-label">Longitude</label>
                    <input type="text" class="form-control form-control-lg form-control-solid" name="longitude"
                        placeholder="192.168.1.1" value="{{ $trash->longitude}}">
                </div>
                <div class="col-md-6">
                    <label class=" form-label">Latitude</label>
                    <input type="text" class="form-control form-control-lg form-control-solid" name="latitude"
                        placeholder="192.168.1.1" value="{{ $trash->latitude}}">
                </div>
                <div>
                    <label class="form-label fw-normal fs-7">Details sur l'emplacement</label>
                    <div class="ms-auto">
                        <textarea id="" name="description" cols="20" rows="3"
                            class="form-control bg-light">{{ $trash->description}}</textarea>
                    </div>
                </div>
            </div>
        </div>

        <div class="w-100 px-20 d-md-flex flex-column card pt-5">
            <h3 class="stepper-title mb-5">
                Information sur le proprietaire
            </h3>
            <div class="row">
                <div class="col-md-6">
                    <label class=" form-label">Nom</label>
                    <input type="text" class="form-control form-control-lg form-control-solid" name="name"
                        placeholder="nom du proprietaire" value="{{ $trash->name}}">
                </div>
                <div class="col-md-6">
                    <label class=" form-label">Prenom</label>
                    <input type="text" class="form-control form-control-lg form-control-solid" name="l_name"
                        placeholder="prenom du proprietaire" value="{{ $trash->l_name}}">
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <label class=" form-label">Telephone</label>
                    <input type="number" class="form-control form-control-lg form-control-solid" name="phone"
                        placeholder="" value="{{ $trash->phone}}">
                </div>
                <div class="col-md-6">
                    <label class="form-label">Email</label>
                    <input type="email" class="form-control form-control-lg form-control-solid" name="email"
                        placeholder="email du proprietaire" value="{{ $trash->email}}">
                </div>
            </div>
            <div>
                <label class="form-label">Type de client</label>
                <div class="ms-2 ">
                    <select name="type" class="form-select form-select-solid form-select-lg" data-control="select2"
                        data-hide-search="true">
                        <option value="1">Proprietaire</option>
                        <option value="2">Locataire</option>
                    </select>
                </div>
            </div>






            <div class="d-flex flex-stack pt-15 px-md-20 my-5 d-flex justify-content-end ">




                <div class=" ">
                    <button type="submit" class="btn btn-lg btn-primary me-3">
                        <span class="indicator-label">
                            Envoyer
                            <i class="ki-duotone ki-arrow-right fs-3 ms-2 me-0"><span class="path1"></span><span
                                    class="path2"></span></i> </span>
                        <span class="indicator-progress">
                            Veuillez patienter svp... <span
                                class="spinner-border spinner-border-sm align-middle ms-2"></span>
                        </span>
                    </button>
                </div>

            </div>

    </form>

</div>
@endsection
