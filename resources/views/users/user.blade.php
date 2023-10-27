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
    utilisateur </li>
@endsection

@section('content')
<div class=" container-xxl " id="fab_content_container">

    {{-- @include('compte.header') --}}

    <div class="card mb-5 mb-xl-10">

        <div class="card-header border-0 cursor-pointer" role="button" data-bs-toggle="collapse"
            data-bs-target="#fab_account_profile_details" aria-expanded="true"
            aria-controls="fab_account_profile_details">

            <div class="card-title m-0">
                <h3 class="fw-bold m-0">Details du profil</h3>
            </div>

        </div>



        <div id="fab_account_settings_profile_details" class="collapse show">


            <form class="form" method="POST" action="/user/{{$user->id}}" enctype="multipart/form-data">
                @csrf

                <div class="card-body border-top p-9">

                    <div class="row mb-6">

                        <label class="col-lg-4 col-form-label fw-semibold fs-6">Photo</label>



                        <div class="col-lg-8">

                            <div class="image-input image-input-outline" data-kt-image-input="true"
                                style="background-image: url('../assets/media/svg/avatars/blank.svg')">

                                <div class="image-input-wrapper w-125px h-125px"
                                    style="background-image: url({{asset($user->avatar)}})"></div>



                                <label
                                    class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                    data-kt-image-input-action="change" data-bs-toggle="tooltip"
                                    title="Changer l'image">
                                    <i class="ki-duotone ki-pencil fs-7"><span class="path1"></span><span
                                            class="path2"></span></i>

                                    <input type="file" name="avatar" accept=".png, .jpg, .jpeg" />
                                    <input type="hidden" name="avatar_remove" />

                                </label>



                                <span
                                    class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                    data-kt-image-input-action="cancel" data-bs-toggle="tooltip"
                                    title="Annuler l'image">
                                    <i class="ki-duotone ki-cross fs-2"><span class="path1"></span><span
                                            class="path2"></span></i> </span>



                                <span
                                    class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                    data-kt-image-input-action="remove" data-bs-toggle="tooltip"
                                    title="Supprimer la photo">
                                    <i class="ki-duotone ki-cross fs-2"><span class="path1"></span><span
                                            class="path2"></span></i> </span>

                            </div>



                        </div>

                    </div>



                    <div class="row mb-6">

                        <label class="col-lg-4 col-form-label required fw-semibold fs-6">Nom complet</label>



                        <div class="col-lg-8">

                            <div class="row">

                                <div class="col-lg-6 fv-row">
                                    <input type="text" name="name"
                                        class="form-control form-control-lg form-control-solid mb-3 mb-lg-0"
                                        placeholder="nom" value="{{$user->name}}" />
                                </div>



                                <div class="col-lg-6 fv-row">
                                    <input type="text" name="l_name"
                                        class="form-control form-control-lg form-control-solid" placeholder="prenom"
                                        value="{{$user->l_name}}" />
                                </div>

                            </div>

                        </div>

                    </div>



                    <div class="row mb-6">

                        <label class="col-lg-4 col-form-label required fw-semibold fs-6">Agence</label>



                        <div class="col-lg-8 fv-row">
                            <input type="text" class="form-control form-control-lg form-control-solid"
                                placeholder="nom de l'agence" value="{{ config('app.name')}}" disabled />
                        </div>

                    </div>



                    <div class="row mb-6">

                        <label class="col-lg-4 col-form-label fw-semibold fs-6">
                            <span class="required">Telephone</span>


                            <span class="ms-1" data-bs-toggle="tooltip" title="Phone number must be active">
                                <i class="ki-duotone ki-information-5 text-gray-500 fs-6"><span
                                        class="path1"></span><span class="path2"></span><span
                                        class="path3"></span></i></span> </label>



                        <div class="col-lg-8 fv-row">
                            <input type="tel" name="phone" class="form-control form-control-lg form-control-solid"
                                placeholder="Phone number" value="{{$user->phone}}" />
                        </div>

                    </div>





                    <div class="row mb-6">

                        <label class="col-lg-4 col-form-label fw-semibold fs-6">
                            <span class="required">Pays</span>


                            <span class="ms-1" data-bs-toggle="tooltip" title="Country of origination">
                                <i class="ki-duotone ki-information-5 text-gray-500 fs-6"><span
                                        class="path1"></span><span class="path2"></span><span
                                        class="path3"></span></i></span> </label>



                        <div class="col-lg-8 fv-row">
                            <select name="country" aria-label="Select a Country" data-control="select2"
                                data-placeholder="Selectionner un pays..."
                                class="form-select form-select-solid form-select-lg fw-semibold">
                                <option value="">Selectionner un pays...</option>
                                <option data-kt-flag="flags/afghanistan.svg" value="AF">Afghanistan</option>
                                <option data-kt-flag="flags/aland-islands.svg" value="AX">Aland Islands</option>
                                <option data-kt-flag="flags/albania.svg" value="AL">Albania</option>
                                <option data-kt-flag="flags/algeria.svg" value="DZ">Algeria</option>
                                <option data-kt-flag="flags/american-samoa.svg" value="AS">American Samoa</option>
                                <option data-kt-flag="flags/andorra.svg" value="AD">Andorra</option>
                                <option data-kt-flag="flags/angola.svg" value="AO">Angola</option>
                                <option data-kt-flag="flags/anguilla.svg" value="AI">Anguilla</option>
                                <option data-kt-flag="flags/antigua-and-barbuda.svg" value="AG">Antigua and Barbuda
                                </option>
                                <option data-kt-flag="flags/argentina.svg" value="AR">Argentina</option>
                                <option data-kt-flag="flags/armenia.svg" value="AM">Armenia</option>
                                <option data-kt-flag="flags/aruba.svg" value="AW">Aruba</option>
                                <option data-kt-flag="flags/australia.svg" value="AU">Australia</option>
                                <option data-kt-flag="flags/austria.svg" value="AT">Austria</option>
                                <option data-kt-flag="flags/azerbaijan.svg" value="AZ">Azerbaijan</option>
                                <option data-kt-flag="flags/bahamas.svg" value="BS">Bahamas</option>
                                <option data-kt-flag="flags/bahrain.svg" value="BH">Bahrain</option>
                                <option data-kt-flag="flags/bangladesh.svg" value="BD">Bangladesh</option>
                                <option data-kt-flag="flags/barbados.svg" value="BB">Barbados</option>
                                <option data-kt-flag="flags/belarus.svg" value="BY">Belarus</option>
                                <option data-kt-flag="flags/belgium.svg" value="BE">Belgium</option>
                                <option data-kt-flag="flags/belize.svg" value="BZ">Belize</option>
                                <option data-kt-flag="flags/benin.svg" value="BJ">Benin</option>
                                <option data-kt-flag="flags/bermuda.svg" value="BM">Bermuda</option>
                                <option data-kt-flag="flags/bhutan.svg" value="BT">Bhutan</option>
                                <option data-kt-flag="flags/bolivia.svg" value="BO">Bolivia, Plurinational State of
                                </option>
                                <option data-kt-flag="flags/bonaire.svg" value="BQ">Bonaire, Sint Eustatius and Saba
                                </option>
                                <option data-kt-flag="flags/bosnia-and-herzegovina.svg" value="BA">Bosnia and
                                    Herzegovina</option>
                                <option data-kt-flag="flags/botswana.svg" value="BW">Botswana</option>
                                <option data-kt-flag="flags/brazil.svg" value="BR">Brazil</option>
                                <option data-kt-flag="flags/british-indian-ocean-territory.svg" value="IO">British
                                    Indian Ocean Territory</option>
                                <option data-kt-flag="flags/brunei.svg" value="BN">Brunei Darussalam</option>
                                <option data-kt-flag="flags/bulgaria.svg" value="BG">Bulgaria</option>
                                <option data-kt-flag="flags/burkina-faso.svg" value="BF">Burkina Faso</option>
                                <option data-kt-flag="flags/burundi.svg" value="BI">Burundi</option>
                                <option data-kt-flag="flags/cambodia.svg" value="KH">Cambodia</option>
                                <option data-kt-flag="flags/cameroon.svg" value="CM">Cameroon</option>
                                <option data-kt-flag="flags/canada.svg" value="CA">Canada</option>
                                <option data-kt-flag="flags/cape-verde.svg" value="CV">Cape Verde</option>
                                <option data-kt-flag="flags/cayman-islands.svg" value="KY">Cayman Islands</option>
                                <option data-kt-flag="flags/central-african-republic.svg" value="CF">Central African
                                    Republic</option>
                                <option data-kt-flag="flags/chad.svg" value="TD">Chad</option>
                                <option data-kt-flag="flags/chile.svg" value="CL">Chile</option>
                                <option data-kt-flag="flags/china.svg" value="CN">China</option>
                                <option data-kt-flag="flags/christmas-island.svg" value="CX">Christmas Island</option>
                                <option data-kt-flag="flags/cocos-island.svg" value="CC">Cocos (Keeling) Islands
                                </option>
                                <option data-kt-flag="flags/afghanistan.svg" value="CDF">Congo-Kinshasa</option>
                                <option data-kt-flag="flags/afghanistan.svg" value="CR">Congo-Brazza</option>
                                <option data-kt-flag="flags/colombia.svg" value="CO">Colombia</option>
                                <option data-kt-flag="flags/comoros.svg" value="KM">Comoros</option>
                                <option data-kt-flag="flags/cook-islands.svg" value="CK">Cook Islands</option>
                                <option data-kt-flag="flags/costa-rica.svg" value="CR">Costa Rica</option>
                                <option data-kt-flag="flags/ivory-coast.svg" value="CI">Côte d'Ivoire</option>
                                <option data-kt-flag="flags/croatia.svg" value="HR">Croatia</option>
                                <option data-kt-flag="flags/cuba.svg" value="CU">Cuba</option>
                                <option data-kt-flag="flags/curacao.svg" value="CW">Curaçao</option>
                                <option data-kt-flag="flags/czech-republic.svg" value="CZ">Czech Republic</option>
                                <option data-kt-flag="flags/denmark.svg" value="DK">Denmark</option>
                                <option data-kt-flag="flags/djibouti.svg" value="DJ">Djibouti</option>
                                <option data-kt-flag="flags/dominica.svg" value="DM">Dominica</option>
                                <option data-kt-flag="flags/dominican-republic.svg" value="DO">Dominican Republic
                                </option>
                                <option data-kt-flag="flags/ecuador.svg" value="EC">Ecuador</option>
                                <option data-kt-flag="flags/egypt.svg" value="EG">Egypt</option>
                                <option data-kt-flag="flags/el-salvador.svg" value="SV">El Salvador</option>
                                <option data-kt-flag="flags/equatorial-guinea.svg" value="GQ">Equatorial Guinea</option>
                                <option data-kt-flag="flags/eritrea.svg" value="ER">Eritrea</option>
                                <option data-kt-flag="flags/estonia.svg" value="EE">Estonia</option>
                                <option data-kt-flag="flags/ethiopia.svg" value="ET">Ethiopia</option>
                                <option data-kt-flag="flags/falkland-islands.svg" value="FK">Falkland Islands (Malvinas)
                                </option>
                                <option data-kt-flag="flags/fiji.svg" value="FJ">Fiji</option>
                                <option data-kt-flag="flags/finland.svg" value="FI">Finland</option>
                                <option data-kt-flag="flags/france.svg" value="FR">France</option>
                                <option data-kt-flag="flags/french-polynesia.svg" value="PF">French Polynesia</option>
                                <option data-kt-flag="flags/gabon.svg" value="GA">Gabon</option>
                                <option data-kt-flag="flags/gambia.svg" value="GM">Gambia</option>
                                <option data-kt-flag="flags/georgia.svg" value="GE">Georgia</option>
                                <option data-kt-flag="flags/germany.svg" value="DE">Germany</option>
                                <option data-kt-flag="flags/ghana.svg" value="GH">Ghana</option>
                                <option data-kt-flag="flags/gibraltar.svg" value="GI">Gibraltar</option>
                                <option data-kt-flag="flags/greece.svg" value="GR">Greece</option>
                                <option data-kt-flag="flags/greenland.svg" value="GL">Greenland</option>
                                <option data-kt-flag="flags/grenada.svg" value="GD">Grenada</option>
                                <option data-kt-flag="flags/guam.svg" value="GU">Guam</option>
                                <option data-kt-flag="flags/guatemala.svg" value="GT">Guatemala</option>
                                <option data-kt-flag="flags/guernsey.svg" value="GG">Guernsey</option>
                                <option data-kt-flag="flags/guinea.svg" value="GN">Guinea</option>
                                <option data-kt-flag="flags/guinea-bissau.svg" value="GW">Guinea-Bissau</option>
                                <option data-kt-flag="flags/haiti.svg" value="HT">Haiti</option>
                                <option data-kt-flag="flags/vatican-city.svg" value="VA">Holy See (Vatican City State)
                                </option>
                                <option data-kt-flag="flags/honduras.svg" value="HN">Honduras</option>
                                <option data-kt-flag="flags/hong-kong.svg" value="HK">Hong Kong</option>
                                <option data-kt-flag="flags/hungary.svg" value="HU">Hungary</option>
                                <option data-kt-flag="flags/iceland.svg" value="IS">Iceland</option>
                                <option data-kt-flag="flags/india.svg" value="IN">India</option>
                                <option data-kt-flag="flags/indonesia.svg" value="ID">Indonesia</option>
                                <option data-kt-flag="flags/iran.svg" value="IR">Iran, Islamic Republic of</option>
                                <option data-kt-flag="flags/iraq.svg" value="IQ">Iraq</option>
                                <option data-kt-flag="flags/ireland.svg" value="IE">Ireland</option>
                                <option data-kt-flag="flags/isle-of-man.svg" value="IM">Isle of Man</option>
                                <option data-kt-flag="flags/israel.svg" value="IL">Israel</option>
                                <option data-kt-flag="flags/italy.svg" value="IT">Italy</option>
                                <option data-kt-flag="flags/jamaica.svg" value="JM">Jamaica</option>
                                <option data-kt-flag="flags/japan.svg" value="JP">Japan</option>
                                <option data-kt-flag="flags/jersey.svg" value="JE">Jersey</option>
                                <option data-kt-flag="flags/jordan.svg" value="JO">Jordan</option>
                                <option data-kt-flag="flags/kazakhstan.svg" value="KZ">Kazakhstan</option>
                                <option data-kt-flag="flags/kenya.svg" value="KE">Kenya</option>
                                <option data-kt-flag="flags/kiribati.svg" value="KI">Kiribati</option>
                                <option data-kt-flag="flags/north-korea.svg" value="KP">Korea, Democratic People's
                                    Republic of</option>
                                <option data-kt-flag="flags/kuwait.svg" value="KW">Kuwait</option>
                                <option data-kt-flag="flags/kyrgyzstan.svg" value="KG">Kyrgyzstan</option>
                                <option data-kt-flag="flags/laos.svg" value="LA">Lao People's Democratic Republic
                                </option>
                                <option data-kt-flag="flags/latvia.svg" value="LV">Latvia</option>
                                <option data-kt-flag="flags/lebanon.svg" value="LB">Lebanon</option>
                                <option data-kt-flag="flags/lesotho.svg" value="LS">Lesotho</option>
                                <option data-kt-flag="flags/liberia.svg" value="LR">Liberia</option>
                                <option data-kt-flag="flags/libya.svg" value="LY">Libya</option>
                                <option data-kt-flag="flags/liechtenstein.svg" value="LI">Liechtenstein</option>
                                <option data-kt-flag="flags/lithuania.svg" value="LT">Lithuania</option>
                                <option data-kt-flag="flags/luxembourg.svg" value="LU">Luxembourg</option>
                                <option data-kt-flag="flags/macao.svg" value="MO">Macao</option>
                                <option data-kt-flag="flags/madagascar.svg" value="MG">Madagascar</option>
                                <option data-kt-flag="flags/malawi.svg" value="MW">Malawi</option>
                                <option data-kt-flag="flags/malaysia.svg" value="MY">Malaysia</option>
                                <option data-kt-flag="flags/maldives.svg" value="MV">Maldives</option>
                                <option data-kt-flag="flags/mali.svg" value="ML">Mali</option>
                                <option data-kt-flag="flags/malta.svg" value="MT">Malta</option>
                                <option data-kt-flag="flags/marshall-island.svg" value="MH">Marshall Islands</option>
                                <option data-kt-flag="flags/martinique.svg" value="MQ">Martinique</option>
                                <option data-kt-flag="flags/mauritania.svg" value="MR">Mauritania</option>
                                <option data-kt-flag="flags/mauritius.svg" value="MU">Mauritius</option>
                                <option data-kt-flag="flags/mexico.svg" value="MX">Mexico</option>
                                <option data-kt-flag="flags/micronesia.svg" value="FM">Micronesia, Federated States of
                                </option>
                                <option data-kt-flag="flags/moldova.svg" value="MD">Moldova, Republic of</option>
                                <option data-kt-flag="flags/monaco.svg" value="MC">Monaco</option>
                                <option data-kt-flag="flags/mongolia.svg" value="MN">Mongolia</option>
                                <option data-kt-flag="flags/montenegro.svg" value="ME">Montenegro</option>
                                <option data-kt-flag="flags/montserrat.svg" value="MS">Montserrat</option>
                                <option data-kt-flag="flags/morocco.svg" value="MA">Morocco</option>
                                <option data-kt-flag="flags/mozambique.svg" value="MZ">Mozambique</option>
                                <option data-kt-flag="flags/myanmar.svg" value="MM">Myanmar</option>
                                <option data-kt-flag="flags/namibia.svg" value="NA">Namibia</option>
                                <option data-kt-flag="flags/nauru.svg" value="NR">Nauru</option>
                                <option data-kt-flag="flags/nepal.svg" value="NP">Nepal</option>
                                <option data-kt-flag="flags/netherlands.svg" value="NL">Netherlands</option>
                                <option data-kt-flag="flags/new-zealand.svg" value="NZ">New Zealand</option>
                                <option data-kt-flag="flags/nicaragua.svg" value="NI">Nicaragua</option>
                                <option data-kt-flag="flags/niger.svg" value="NE">Niger</option>
                                <option data-kt-flag="flags/nigeria.svg" value="NG">Nigeria</option>
                                <option data-kt-flag="flags/niue.svg" value="NU">Niue</option>
                                <option data-kt-flag="flags/norfolk-island.svg" value="NF">Norfolk Island</option>
                                <option data-kt-flag="flags/northern-mariana-islands.svg" value="MP">Northern Mariana
                                    Islands</option>
                                <option data-kt-flag="flags/norway.svg" value="Non">Norway</option>
                                <option data-kt-flag="flags/oman.svg" value="OM">Oman</option>
                                <option data-kt-flag="flags/pakistan.svg" value="PK">Pakistan</option>
                                <option data-kt-flag="flags/palau.svg" value="PW">Palau</option>
                                <option data-kt-flag="flags/palestine.svg" value="PS">Palestinian Territory, Occupied
                                </option>
                                <option data-kt-flag="flags/panama.svg" value="PA">Panama</option>
                                <option data-kt-flag="flags/papua-new-guinea.svg" value="PG">Papua New Guinea</option>
                                <option data-kt-flag="flags/paraguay.svg" value="PY">Paraguay</option>
                                <option data-kt-flag="flags/peru.svg" value="PE">Peru</option>
                                <option data-kt-flag="flags/philippines.svg" value="PH">Philippines</option>
                                <option data-kt-flag="flags/poland.svg" value="PL">Poland</option>
                                <option data-kt-flag="flags/portugal.svg" value="PT">Portugal</option>
                                <option data-kt-flag="flags/puerto-rico.svg" value="PR">Puerto Rico</option>
                                <option data-kt-flag="flags/qatar.svg" value="QA">Qatar</option>
                                <option data-kt-flag="flags/romania.svg" value="RO">Romania</option>
                                <option data-kt-flag="flags/russia.svg" value="RU">Russian Federation</option>
                                <option data-kt-flag="flags/rwanda.svg" value="RW">Rwanda</option>
                                <option data-kt-flag="flags/st-barts.svg" value="BL">Saint Barthélemy</option>
                                <option data-kt-flag="flags/saint-kitts-and-nevis.svg" value="KN">Saint Kitts and Nevis
                                </option>
                                <option data-kt-flag="flags/st-lucia.svg" value="LC">Saint Lucia</option>
                                <option data-kt-flag="flags/sint-maarten.svg" value="MF">Saint Martin (French part)
                                </option>
                                <option data-kt-flag="flags/st-vincent-and-the-grenadines.svg" value="VC">Saint Vincent
                                    and the Grenadines</option>
                                <option data-kt-flag="flags/samoa.svg" value="WS">Samoa</option>
                                <option data-kt-flag="flags/san-marino.svg" value="SM">San Marino</option>
                                <option data-kt-flag="flags/sao-tome-and-prince.svg" value="ST">Sao Tome and Principe
                                </option>
                                <option data-kt-flag="flags/saudi-arabia.svg" value="SA">Saudi Arabia</option>
                                <option data-kt-flag="flags/senegal.svg" value="SN">Senegal</option>
                                <option data-kt-flag="flags/serbia.svg" value="RS">Serbia</option>
                                <option data-kt-flag="flags/seychelles.svg" value="SC">Seychelles</option>
                                <option data-kt-flag="flags/sierra-leone.svg" value="SL">Sierra Leone</option>
                                <option data-kt-flag="flags/singapore.svg" value="SG">Singapore</option>
                                <option data-kt-flag="flags/sint-maarten.svg" value="SX">Sint Maarten (Dutch part)
                                </option>
                                <option data-kt-flag="flags/slovakia.svg" value="SK">Slovakia</option>
                                <option data-kt-flag="flags/slovenia.svg" value="SI">Slovenia</option>
                                <option data-kt-flag="flags/solomon-islands.svg" value="SB">Solomon Islands</option>
                                <option data-kt-flag="flags/somalia.svg" value="SO">Somalia</option>
                                <option data-kt-flag="flags/south-africa.svg" value="ZA">South Africa</option>
                                <option data-kt-flag="flags/south-korea.svg" value="KR">South Korea</option>
                                <option data-kt-flag="flags/south-sudan.svg" value="SS">South Sudan</option>
                                <option data-kt-flag="flags/spain.svg" value="ES">Spain</option>
                                <option data-kt-flag="flags/sri-lanka.svg" value="LK">Sri Lanka</option>
                                <option data-kt-flag="flags/sudan.svg" value="SD">Sudan</option>
                                <option data-kt-flag="flags/suriname.svg" value="SR">Suriname</option>
                                <option data-kt-flag="flags/swaziland.svg" value="SZ">Swaziland</option>
                                <option data-kt-flag="flags/sweden.svg" value="SE">Sweden</option>
                                <option data-kt-flag="flags/switzerland.svg" value="CH">Switzerland</option>
                                <option data-kt-flag="flags/syria.svg" value="SY">Syrian Arab Republic</option>
                                <option data-kt-flag="flags/taiwan.svg" value="TW">Taiwan, Province of China</option>
                                <option data-kt-flag="flags/tajikistan.svg" value="TJ">Tajikistan</option>
                                <option data-kt-flag="flags/tanzania.svg" value="TZ">Tanzania, United Republic of
                                </option>
                                <option data-kt-flag="flags/thailand.svg" value="TH">Thailand</option>
                                <option data-kt-flag="flags/togo.svg" value="TG">Togo</option>
                                <option data-kt-flag="flags/tokelau.svg" value="TK">Tokelau</option>
                                <option data-kt-flag="flags/tonga.svg" value="TO">Tonga</option>
                                <option data-kt-flag="flags/trinidad-and-tobago.svg" value="TT">Trinidad and Tobago
                                </option>
                                <option data-kt-flag="flags/tunisia.svg" value="TN">Tunisia</option>
                                <option data-kt-flag="flags/turkey.svg" value="TR">Turkey</option>
                                <option data-kt-flag="flags/turkmenistan.svg" value="TM">Turkmenistan</option>
                                <option data-kt-flag="flags/turks-and-caicos.svg" value="TC">Turks and Caicos Islands
                                </option>
                                <option data-kt-flag="flags/tuvalu.svg" value="TV">Tuvalu</option>
                                <option data-kt-flag="flags/uganda.svg" value="UG">Uganda</option>
                                <option data-kt-flag="flags/ukraine.svg" value="UA">Ukraine</option>
                                <option data-kt-flag="flags/united-arab-emirates.svg" value="AE">United Arab Emirates
                                </option>
                                <option data-kt-flag="flags/united-kingdom.svg" value="GB">United Kingdom</option>
                                <option data-kt-flag="flags/united-states.svg" value="US">United States</option>
                                <option data-kt-flag="flags/uruguay.svg" value="UY">Uruguay</option>
                                <option data-kt-flag="flags/uzbekistan.svg" value="UZ">Uzbekistan</option>
                                <option data-kt-flag="flags/vanuatu.svg" value="VU">Vanuatu</option>
                                <option data-kt-flag="flags/venezuela.svg" value="VE">Venezuela, Bolivarian Republic of
                                </option>
                                <option data-kt-flag="flags/vietnam.svg" value="VN">Vietnam</option>
                                <option data-kt-flag="flags/virgin-islands.svg" value="VI">Virgin Islands</option>
                                <option data-kt-flag="flags/yemen.svg" value="YE">Yemen</option>
                                <option data-kt-flag="flags/zambia.svg" value="ZM">Zambia</option>
                                <option data-kt-flag="flags/zimbabwe.svg" value="ZW">Zimbabwe</option>


                            </select>
                        </div>

                    </div>




                    <div class="row mb-6">

                        <label class="col-lg-4 col-form-label required fw-semibold fs-6">Type d'agent</label>



                        <div class="col-lg-8 fv-row">

                            <div class="d-flex align-items-center mt-3">

                                <label class="form-check form-check-custom form-check-inline form-check-solid me-5">
                                    <input class="form-check-input" name="type" type="checkbox"
                                        value="Agent de bureau" />
                                    <span class="fw-semibold ps-2 fs-6">
                                        Agent de bureau
                                    </span>
                                </label>



                                <label class="form-check form-check-custom form-check-inline form-check-solid">
                                    <input class="form-check-input" name="type" type="checkbox"
                                        value="Agent de terrain" />
                                    <span class="fw-semibold ps-2 fs-6">
                                        Agent de terrain
                                    </span>
                                </label>

                            </div>

                        </div>

                    </div>

                </div>



                <div class="card-footer d-flex justify-content-end py-6 px-9">
                    <button type="reset" class="btn btn-light btn-active-light-primary me-2">Annuler</button>
                    <button type="submit" class="btn btn-primary">Enregistrer</button>
                </div>

            </form>

        </div>

    </div>


    <div class="card  mb-5 mb-xl-10">

        <div class="card-header border-0 cursor-pointer" role="button" data-bs-toggle="collapse"
            data-bs-target="#fab_account_signin_method">
            <div class="card-title m-0">
                <h3 class="fw-bold m-0">Methode d'authentification</h3>
            </div>
        </div>



        <div id="fab_account_settings_signin_method" class="collapse show">

            <div class="card-body border-top p-9">

                <div class="d-flex flex-wrap align-items-center">

                    <div id="fab_signin_email">
                        <div class="fs-6 fw-bold mb-1">Adresse Email</div>
                        <div class="fw-semibold text-gray-600">{{ $user->email}}</div>
                    </div>



                    <div id="fab_signin_email_edit" class="flex-row-fluid d-none">

                        <form id="fab_signin_change_email" class="form" novalidate="novalidate" method="POST"
                            action="/user/{{$user->id}}">
                            @csrf
                            <div class="row mb-6">
                                <div class="col-lg-6 mb-4 mb-lg-0">
                                    <div class="fv-row mb-0">
                                        <label for="emailaddress" class="form-label fs-6 fw-bold mb-3">Entrez une
                                            nouvelle
                                            adresse</label>
                                        <input type="email" class="form-control form-control-lg form-control-solid"
                                            id="emailaddress" placeholder="Adresse Email" name="email"
                                            value="{{ $user->email}}" />
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="fv-row mb-0">
                                        <label for="confirmemailpassword" class="form-label fs-6 fw-bold mb-3">Confirmez
                                            le
                                            mot de passe</label>
                                        <input type="password" class="form-control form-control-lg form-control-solid"
                                            name="confirmemailpassword" id="confirmemailpassword" />
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex">
                                <button type="submit" id="submitEmailChange" hidden></button>
                                <button id="fab_signin_submit" type="button" class="btn btn-primary  me-2 px-6">Mis a
                                    jour de l'Email</button>
                                <button id="fab_signin_cancel" type="button"
                                    class="btn btn-color-gray-400 btn-active-light-primary px-6">Annuler</button>
                            </div>
                        </form>

                    </div>



                    <div id="fab_signin_email_button" class="ms-auto">
                        <button class="btn btn-light btn-active-light-primary">Changer l'Email</button>
                    </div>

                </div>



                <div class="separator separator-dashed my-6"></div>



                <div class="d-flex flex-wrap align-items-center mb-10">

                    <div id="fab_signin_password">
                        <div class="fs-6 fw-bold mb-1">Mot de passe</div>
                        <div class="fw-semibold text-gray-600">************</div>
                    </div>



                    <div id="fab_signin_password_edit" class="flex-row-fluid d-none">

                        <form id="fab_signin_change_password" class="form" novalidate="novalidate" method="POST"
                            action="/user/{{$user->id}}">
                            @csrf
                            <div class="row mb-1">
                                <div class="col-lg-4">
                                    <div class="fv-row mb-0">
                                        <label for="currentpassword" class="form-label fs-6 fw-bold mb-3">Mot de passe
                                            courrant</label>
                                        <input type="password" class="form-control form-control-lg form-control-solid "
                                            name="password" id="currentpassword" />
                                    </div>
                                </div>

                                <div class="col-lg-4">
                                    <div class="fv-row mb-0">
                                        <label for="newpassword" class="form-label fs-6 fw-bold mb-3">Nouveau mot de
                                            passe</label>
                                        <input type="password" class="form-control form-control-lg form-control-solid "
                                            name="newpassword" id="newpassword" />
                                    </div>
                                </div>

                                <div class="col-lg-4">
                                    <div class="fv-row mb-0">
                                        <label for="confirmpassword" class="form-label fs-6 fw-bold mb-3">Confirmez le
                                            nouvel mot de passe</label>
                                        <input type="password" class="form-control form-control-lg form-control-solid "
                                            name="" id="confirmpassword" />
                                    </div>
                                </div>
                            </div>

                            <div class="form-text mb-5">Le mot de passe doit comporter au moins 8 caractères et contenir
                                des symboles</div>

                            <div class="d-flex">
                                <button type="submit" hidden id="passwordSubmit"></button>
                                <button id="fab_password_submit" type="button" class="btn btn-primary me-2 px-6">Mis a
                                    jour du mot de passe</button>
                                <button id="fab_password_cancel" type="button"
                                    class="btn btn-color-gray-400 btn-active-light-primary px-6">Annuler</button>
                            </div>
                        </form>

                    </div>



                    <div id="fab_signin_password_button" class="ms-auto">
                        <button class="btn btn-light btn-active-light-primary">réinitialiser le mot de passe</button>
                    </div>

                </div>


                @if ($user->id==Auth::id())

                <div class="notice d-flex bg-light-primary rounded border-primary border border-dashed  p-6">

                    <i class="ki-duotone ki-shield-tick fs-2tx text-primary me-4"><span class="path1"></span><span
                            class="path2"></span></i>




                    <div class="d-flex flex-stack flex-grow-1 flex-wrap flex-md-nowrap">

                        <div class="mb-3 mb-md-0 fw-semibold">
                            <h4 class="text-gray-900 fw-bold">Sécurise ton compte</h4>

                            <div class="fs-6 text-gray-700 pe-7">Nous vous encourageons à mettre régulièrement à jour
                                vos informations d'authentification afin de protéger votre compte contre les
                                cyberattaques
                            </div>
                        </div>



                    </div>


                </div>
                @endif

            </div>

        </div>

    </div>




    @if ($user->id==Auth::id())
    <div class="card  ">


        <div class="card-header border-0 cursor-pointer" role="button" data-bs-toggle="collapse"
            data-bs-target="#fab_account_deactivate" aria-expanded="true" aria-controls="fab_account_deactivate">
            <div class="card-title m-0">
                <h3 class="fw-bold m-0">Désactiver le compte</h3>
            </div>
        </div>



        <div id="fab_account_settings_deactivate" class="collapse show">

            <form id="fab_account_deactivate_form" class="form">


                <div class="card-body border-top p-9">


                    <div class="notice d-flex bg-light-warning rounded border-warning border border-dashed mb-9 p-6">

                        <i class="ki-duotone ki-information fs-2tx text-warning me-4"><span class="path1"></span><span
                                class="path2"></span><span class="path3"></span></i>



                        <div class="d-flex flex-stack flex-grow-1 ">

                            <div class=" fw-semibold">
                                <h4 class="text-gray-900 fw-bold">Vous désactivez votre compte</h4>

                                <div class="fs-6 text-gray-700 ">Pour plus de sécurité, cela nécessite que vous
                                    confirmiez votre
                                    e-mail ou numéro de téléphone lorsque vous réinitialisez votre mot de passe de
                                    connexion. <br /><a class="fw-bold" href="#">Lire plus</a></div>
                            </div>


                        </div>

                    </div>



                    <div class="form-check form-check-solid fv-row">
                        <input name="deactivate" class="form-check-input" type="checkbox" value="" />
                        <label class="form-check-label fw-semibold ps-2 fs-6" for="deactivate">Je confirme mon compte
                            désactivation</label>
                    </div>

                </div>



                <div class="card-footer d-flex justify-content-end py-6 px-9">
                    <button id="fab_account_deactivate_account_submit" type="submit"
                        class="btn btn-danger fw-semibold">Desactiver le compte</button>
                </div>


            </form>

        </div>

    </div>
    @endif
</div>

@endsection
