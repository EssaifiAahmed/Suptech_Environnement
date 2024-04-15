<!DOCTYPE html>


<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>SUPTECH ENVIRONNEMENT</title>
    <meta content="" name="description">
    <meta content="" name="keywords">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,600,600i,700,700i,900"
        rel="stylesheet">

    @include('layouts.MainCss')


    <style>
        select option[value="off"] {
            background: #93b1c7;
        }


        .loader {
            width: 30px;
            height: 30px;
            border: 5px solid white;
            border-radius: 50%;
            display: block;
            box-sizing: border-box;
            position: relative;
            animation: pulse 1s linear infinite;
        }

        .loader:after {
            content: '';
            position: absolute;
            width: 30px;
            height: 30px;
            border: 5px solid white;
            border-radius: 50%;
            display: inline-block;
            box-sizing: border-box;
            left: 50%;
            top: 50%;
            transform: translate(-50%, -50%);
            animation: scaleUp 1s linear infinite;
        }

        <blade keyframes|%20scaleUp%20%7B%0D>0% {
            transform: translate(-50%, -50%) scale(0)
        }

        60%,
        100% {
            transform: translate(-50%, -50%) scale(1)
        }


        <blade keyframes|%20pulse%20%7B%0D>0%,
        60%,
        100% {
            transform: scale(1)
        }

        80% {
            transform: scale(1.2)
        }
    </style>

</head>

<body>



    @include('layouts.header')

    <!-- ======= Contact Us Section ======= -->
    <section id="contact" class="contact">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>{{ __('messages.preinscription') }}</h2>
            </div>

            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif


            <div class="row">

                <div class="col-lg-12" data-aos="fade-up" data-aos-delay="300">
                    <form id="OrderInfo" action="{{ route('InsertTest', ['slug' => App::getLocale()]) }}" method="POST"
                        role="form" class="php-email-form">
                        @csrf
                        <!--------  ////////////////---->

                        <div id="accordion">
                            <div class="card">
                                <div class="card-header" id="headingOne">
                                    <h5 class="mb-0">


                                        <button type="button"
                                            class="btn btn-link text-decoration-none text-primary fw-bold"
                                            data-toggle="collapse" data-target="#collapseOne" aria-expanded="false"
                                            aria-controls="collapseOne">
                                            {{ __('messages.preinscription') }}
                                        </button>
                                    </h5>
                                </div>

                                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                                    data-parent="#accordion">
                                    <div class="card-body">

                                        <!------------>

                                        <div style="display:block;" id="form-1">
                                            <div class="row">
                                                <div class="col-lg-4 form-group">
                                                    <label for="Nom"> <small>{{ __('messages.nom') }} :</small>
                                                    </label>

                                                    <input type="text" name="Nom" class="form-control"
                                                        id="Nom" placeholder="{{ __('messages.nom') }}" required>
                                                </div>

                                                <div class="col-lg-4 form-group">
                                                    <label for="Prenom"> <small>{{ __('messages.prenom') }} :</small>
                                                    </label>
                                                    <input type="text" name="Prenom" class="form-control"
                                                        id="Prenom" placeholder="{{ __('messages.prenom') }}"
                                                        required>
                                                </div>


                                                <div class="col-lg-4 form-group">
                                                    <label for="dip"> <small>{{ __('messages.dip') }} :</small>
                                                    </label>
                                                    <select class="form-select" id="dipdip" name="dip"
                                                        aria-label="select" required>
                                                        <option disabled selected value>{{ __('messages.dip') }}
                                                        </option>
                                                        <option value="BAC en cours">BAC en cours</option>
                                                        <option value="BAC">BAC</option>
                                                        <option value="BAC+1">BAC+1</option>
                                                        <option value="BAC+2">BAC+2</option>
                                                        <option value="BAC+3">BAC+3</option>
                                                        <option value="BAC+5">BAC+5</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-lg-4 form-group">
                                                    <label for="cin_massar"> <small>{{ __('messages.cne3') }} :</small>
                                                    </label>
                                                    <input type="text" class="form-control" name="cin_massar"
                                                        id="cin_massar" placeholder=" {{ __('messages.cne3') }} "
                                                        required>

                                                </div>



                                                <div class="col-lg-4 form-group">
                                                    <label for="email"> <small>{{ __('messages.Email') }} :</small>
                                                    </label>
                                                    <input type="email" class="form-control" name="email"
                                                        id="email" placeholder="{{ __('messages.Email') }}"
                                                        required>
                                                </div>

                                                <div class="col-lg-4 form-group">
                                                    <label for="Tele"> <small>{{ __('messages.Tele') }} :</small>
                                                    </label>
                                                    <input type="tel" class="form-control" name="telephone"
                                                        id="Tele" placeholder="{{ __('messages.Tele') }}"
                                                        required>
                                                </div>
                                                <input type="hidden" class="form-control" name="tsrc" id="tsrc"
                                                    placeholder="tsrc " pattern="\d+"
                                                    value="{{ request('tsrc') }}">


                                            </div>



                                            <div class="row">
                                                <div class="col-lg-4 form-group">
                                                    <label for="Tele"> <small>{{ __('messages.Sexe') }} :</small>
                                                    </label>
                                                    <select class="form-select" name="Sexe" aria-label="select"
                                                        required>
                                                        <option disabled selected value>
                                                            {{ __('messages.Sexe') }}
                                                        </option>
                                                        <option value="Homme">
                                                            {{ __('messages.Homme') }} </option>
                                                        <option value="Femme">
                                                            {{ __('messages.Femme') }} </option>
                                                    </select>
                                                </div>
                                                <div class="col-lg-4 form-group">

                                                    <label for="Tele"> <small>{{ __('messages.nat') }} :</small>
                                                    </label>

                                                    <select class="form-select form-control" name="nat"
                                                        id="nat" required>
                                                        <option value="" disabled selected>
                                                            {{ __('messages.nat') }}</option>
                                                        <option value="Afghan">Afghan</option>
                                                        <option value="Albanais">Albanais</option>
                                                        <option value="Algérien">Algérien</option>
                                                        <option value="Américain">Américain</option>
                                                        <option value="Andorran">Andorran</option>
                                                        <option value="Angolais">Angolais</option>
                                                        <option value="Antiguais-et-Barbudien">Antiguais-et-Barbudien
                                                        </option>
                                                        <option value="Argentin">Argentin</option>
                                                        <option value="Arménien">Arménien</option>
                                                        <option value="Australien">Australien</option>
                                                        <option value="Autrichien">Autrichien</option>
                                                        <option value="Azerbaïdjanais">Azerbaïdjanais</option>
                                                        <option value="Bahaméen">Bahaméen</option>
                                                        <option value="Bahreïni">Bahreïni</option>
                                                        <option value="Bangladais">Bangladais</option>
                                                        <option value="Barbadien">Barbadien</option>
                                                        <option value="Belge">Belge</option>
                                                        <option value="Bélizien">Bélizien</option>
                                                        <option value="Béninois">Béninois</option>
                                                        <option value="Bhoutanais">Bhoutanais</option>
                                                        <option value="Biélorusse">Biélorusse</option>
                                                        <option value="Birman">Birman</option>
                                                        <option value="Bissau-Guinéen">Bissau-Guinéen</option>
                                                        <option value="Bolivien">Bolivien</option>
                                                        <option value="Bosnien">Bosnien</option>
                                                        <option value="Botswanais">Botswanais</option>
                                                        <option value="Brésilien">Brésilien</option>
                                                        <option value="Britannique">Britannique</option>
                                                        <option value="Brunéien">Brunéien</option>
                                                        <option value="Bulgare">Bulgare</option>
                                                        <option value="Burkinabé">Burkinabé</option>
                                                        <option value="Burundais">Burundais</option>
                                                        <option value="Cambodgien">Cambodgien</option>
                                                        <option value="Camerounais">Camerounais</option>
                                                        <option value="Canadien">Canadien</option>
                                                        <option value="Cap-Verdien">Cap-Verdien</option>
                                                        <option value="Centrafricain">Centrafricain</option>
                                                        <option value="Chilien">Chilien</option>
                                                        <option value="Chinois">Chinois</option>
                                                        <option value="Chypriote">Chypriote</option>
                                                        <option value="Colombien">Colombien</option>
                                                        <option value="Comorien">Comorien</option>
                                                        <option value="Congolais">Congolais</option>
                                                        <option value="Costaricain">Costaricain</option>
                                                        <option value="Croate">Croate</option>
                                                        <option value="Cubain">Cubain</option>
                                                        <option value="Danois">Danois</option>
                                                        <option value="Djiboutien">Djiboutien</option>
                                                        <option value="Dominicain">Dominicain</option>
                                                        <option value="Dominiquais">Dominiquais</option>
                                                        <option value="Égyptien">Égyptien</option>
                                                        <option value="Émirati">Émirati</option>
                                                        <option value="Équato-Guinéen">Équato-Guinéen</option>
                                                        <option value="Équatorien">Équatorien</option>
                                                        <option value="Érythréen">Érythréen</option>
                                                        <option value="Espagnol">Espagnol</option>
                                                        <option value="Estonien">Estonien</option>
                                                        <option value="Éthiopien">Éthiopien</option>
                                                        <option value="Fidjien">Fidjien</option>
                                                        <option value="Finlandais">Finlandais</option>
                                                        <option value="Français">Française</option>
                                                        <option value="Gabonais">Gabonais</option>
                                                        <option value="Gambien">Gambien</option>
                                                        <option value="Géorgien">Géorgien</option>
                                                        <option value="Ghanéen">Ghanéen</option>
                                                        <option value="Grec">Grec</option>
                                                        <option value="Grenadien">Grenadien</option>
                                                        <option value="Guatémaltèque">Guatémaltèque</option>
                                                        <option value="Guinéen">Guinéen</option>
                                                        <option value="Guyanais">Guyanais</option>
                                                        <option value="Haïtien">Haïtien</option>
                                                        <option value="Hondurien">Hondurien</option>
                                                        <option value="Hongrois">Hongrois</option>
                                                        <option value="Indien">Indien</option>
                                                        <option value="Indonésien">Indonésien</option>
                                                        <option value="Irakien">Irakien</option>
                                                        <option value="Iranien">Iranien</option>
                                                        <option value="Irlandais">Irlandais</option>
                                                        <option value="Islandais">Islandais</option>
                                                        <option value="Israélien">Israélien</option>
                                                        <option value="Italien">Italien</option>
                                                        <option value="Ivoirien">Ivoirien</option>
                                                        <option value="Jamaïcain">Jamaïcain</option>
                                                        <option value="Japonais">Japonais</option>
                                                        <option value="Jordanien">Jordanien</option>
                                                        <option value="Kazakh">Kazakh</option>
                                                        <option value="Kényan">Kényan</option>
                                                        <option value="Kirghize">Kirghize</option>
                                                        <option value="Kiribatien">Kiribatien</option>
                                                        <option value="Koweïtien">Koweïtien</option>
                                                        <option value="Laotien">Laotien</option>
                                                        <option value="Lesothan">Lesothan</option>
                                                        <option value="Lettone">Lettone</option>
                                                        <option value="Libanais">Libanais</option>
                                                        <option value="Libérien">Libérien</option>
                                                        <option value="Libyen">Libyen</option>
                                                        <option value="Liechtensteinois">Liechtensteinois</option>
                                                        <option value="Lituanien">Lituanien</option>
                                                        <option value="Luxembourgeois">Luxembourgeois</option>
                                                        <option value="Macédonien">Macédonien</option>
                                                        <option value="Malaisien">Malaisien</option>
                                                        <option value="Malawien">Malawien</option>
                                                        <option value="Maldivien">Maldivien</option>
                                                        <option value="Malgache">Malgache</option>
                                                        <option value="Maliens">Maliens</option>
                                                        <option value="Maltais">Maltais</option>
                                                        <option value="Marocain">Marocain</option>
                                                        <option value="Marshallais">Marshallais</option>
                                                        <option value="Mauricien">Mauricien</option>
                                                        <option value="Mauritanien">Mauritanien</option>
                                                        <option value="Mexicain">Mexicain</option>
                                                        <option value="Micronésien">Micronésien</option>
                                                        <option value="Moldave">Moldave</option>
                                                        <option value="Monégasque">Monégasque</option>
                                                        <option value="Mongol">Mongol</option>
                                                        <option value="Monténégrin">Monténégrin</option>
                                                        <option value="Mozambicain">Mozambicain</option>
                                                        <option value="Namibien">Namibien</option>
                                                        <option value="Nauruan">Nauruan</option>
                                                        <option value="Néerlandais">Néerlandais</option>
                                                        <option value="Néo-Zélandais">Néo-Zélandais</option>
                                                        <option value="Népalais">Népalais</option>
                                                        <option value="Nicaraguayen">Nicaraguayen</option>
                                                        <option value="Nigérien">Nigérien</option>
                                                        <option value="Nigérian">Nigérian</option>
                                                        <option value="Norvégien">Norvégien</option>
                                                        <option value="Omanais">Omanais</option>
                                                        <option value="Ougandais">Ougandais</option>
                                                        <option value="Ouzbek">Ouzbek</option>
                                                        <option value="Pakistana">Pakistana</option>
                                                        <option value="Palau">Palau</option>
                                                        <option value="Panaméen">Panaméen</option>
                                                        <option value="Papouasien-Néo-Guinéen">Papouasien-Néo-Guinéen
                                                        </option>
                                                        <option value="Paraguayen">Paraguayen</option>
                                                        <option value="Péruvien">Péruvien</option>
                                                        <option value="Philippin">Philippin</option>
                                                        <option value="Polonais">Polonais</option>
                                                        <option value="Portugais">Portugais</option>
                                                        <option value="Qatari">Qatari</option>
                                                        <option value="Roumain">Roumain</option>
                                                        <option value="Russe">Russe</option>
                                                        <option value="Rwandais">Rwandais</option>
                                                        <option value="Saint-Lucien">Saint-Lucien</option>
                                                        <option value="Saint-Marinais">Saint-Marinais</option>
                                                        <option value="Saint-Vincentais-et-Grenadin">
                                                            Saint-Vincentais-et-Grenadin</option>
                                                        <option value="Salomonais">Salomonais</option>
                                                        <option value="Salvadorien">Salvadorien</option>
                                                        <option value="Samoan">Samoan</option>
                                                        <option value="Santoméen">Santoméen</option>
                                                        <option value="Saoudien">Saoudien</option>
                                                        <option value="Sénégalais">Sénégalais</option>
                                                        <option value="Serbe">Serbe</option>
                                                        <option value="Seychellois">Seychellois</option>
                                                        <option value="Sierra-Léonais">Sierra-Léonais</option>
                                                        <option value="Singapourien">Singapourien</option>
                                                        <option value="Slovaque">Slovaque</option>
                                                        <option value="Slovène">Slovène</option>
                                                        <option value="Somalien">Somalien</option>
                                                        <option value="Soudanais">Soudanais</option>
                                                        <option value="Sri-Lankais">Sri-Lankais</option>
                                                        <option value="Suédois">Suédois</option>
                                                        <option value="Suisse">Suisse</option>
                                                        <option value="Surinamien">Surinamien</option>
                                                        <option value="Swazi">Swazi</option>
                                                        <option value="Syrien">Syrien</option>
                                                        <option value="Tadjik">Tadjik</option>
                                                        <option value="Tanzanien">Tanzanien</option>
                                                        <option value="Tchadien">Tchadien</option>
                                                        <option value="Tchèque">Tchèque</option>
                                                        <option value="Thaïlandais">Thaïlandais</option>
                                                        <option value="Timorais">Timorais</option>
                                                        <option value="Togolais">Togolais</option>
                                                        <option value="Tonguien">Tonguien</option>
                                                        <option value="Trinidadien">Trinidadien</option>
                                                        <option value="Tunisien">Tunisien</option>
                                                        <option value="Turc">Turc</option>
                                                        <option value="Turkmène">Turkmène</option>
                                                        <option value="Tuvaluan">Tuvaluan</option>
                                                        <option value="Ukrainien">Ukrainien</option>
                                                        <option value="Uruguayen">Uruguayen</option>
                                                        <option value="Vanuatuan">Vanuatuan</option>
                                                        <option value="Vénézuélien">Vénézuélien</option>
                                                        <option value="Vietnamien">Vietnamien</option>
                                                        <option value="Yéménite">Yéménite</option>
                                                        <option value="Zambien">Zambien</option>
                                                        <option value="Zimbabwéen">Zimbabwéen</option>
                                                        <option value="Autre">Autre</option>
                                                    </select>

                                                </div>
                                                <div class="col-lg-4 form-group">
                                                    <label for="adresse"> <small>{{ __('messages.adresse') }}
                                                            :</small> </label>
                                                    <input type="text" class="form-control" name="adresse"
                                                        id="adresse" placeholder=" {{ __('messages.adresse') }}  "
                                                        required>
                                                </div>

                                            </div>
                                            <div class="row">


                                                <div class="col-lg-4 form-group">
                                                    <label> <small>{{ __('messages.dn') }} :</small> </label><br>
                                                    <SELECT id ="year" name = "yyyy"
                                                        onchange="change_year(this)" required>
                                                    </SELECT>
                                                    <SELECT id ="month" name = "mm"
                                                        onchange="change_month(this)" required>
                                                    </SELECT>
                                                    <SELECT id ="day" name = "dd" required>
                                                    </SELECT>

                                                </div>
                                                <div class="col-lg-4 form-group">
                                                    <label for="cin"> <small>{{ __('messages.cin2') }}</small>
                                                    </label>
                                                    <input type="text" class="form-control" name="cin"
                                                        id="cin" placeholder=" {{ __('messages.cin2') }}  "
                                                        required>
                                                </div>
                                                <div class="col-lg-4 form-group">

                                                    <label> <small> {{ __('messages.f') }} : </small> </label>
                                                    <select class="form-select" id="Sectors" name="Sectors"
                                                        aria-label="select" required>
                                                        <option disabled selected value>
                                                            {{ __('messages.f') }} </option>


                                                        <option disabled value="off">
                                                            {{ __('messages.ccpi') }} </option>

                                                        <option value="Classes préparatoires intégrées: 1ère année">
                                                            {{ __('messages.1ere') }}</option>

                                                        <option value="Classes préparatoires intégrées: 2ème année">
                                                            {{ __('messages.2eme') }}</option>



                                                        <option disabled value="off">
                                                            {{ __('messages.ingenieur') }}
                                                        </option>
                                                        <option
                                                            value="Cycle d’ingénieur : Génie de l'Eau et de l'Environnement">
                                                            {{ __('messages.gee') }}</option>
                                                        <option
                                                            value="Cycle ingénieur: Génie digital et intelligence Artificielle en santé">
                                                            {{ __('messages.gdeer') }}</option>
                                                        <option
                                                            value="Cycle ingénieur: Génie Digitale des Système Energétiques">
                                                            {{ __('messages.gdse') }}</option>

                                                        <option disabled value="off">
                                                            {{ __('messages.licence') }}</option>
                                                        <option
                                                            value="Licence en Génie de l'Assainissement et des Systèmes de Traitement des Eaux">
                                                            {{ __('messages.gaste') }}</option>
                                                        <option
                                                            value="Licence en Qualité, Hygiène, Sécurité et Environnement">
                                                            {{ __('messages.qhse') }}</option>
                                                        <option value="Licence en smart Energies Renouvelables">
                                                            {{ __('messages.ser') }}</option>
                                                        <option
                                                            value="Licence en Gestion digitale Intégrée Du Littoral Et Valorisation Halieutique">
                                                            {{ __('messages.gsilvh') }}</option>
                                                        <option disabled
                                                            value="Licence en Métiers Subaquatiques et Plongée Sous-Marine">
                                                            {{ __('messages.mspsm') }}</option>
                                                        <option
                                                            value="Licence en Métiers Subaquatiques et Plongée Sous-Marine -> Option 1 : Plongeur inspecteur">
                                                            {{ __('messages.mspsm_o1pi') }}</option>
                                                        <option
                                                            value="Licence en Métiers Subaquatiques et Plongée Sous-Marine -> Option 2 : Travaux public, ouvrages">
                                                            {{ __('messages.mspsm_o2tpo') }}</option>
                                                        <option disabled value="off">
                                                            {{ __('messages.cmm') }}</option>
                                                        <option
                                                            value="Master en Génie de l'Eau, de l'Assainissement et des Aménagements Hydroagricoles">
                                                            {{ __('messages.mgeaah') }} </option>

                                                        {{-- <option disabled value="off">
                                                            {{ __('messages.FormationContinueLycence') }}</option>

                                                        <option
                                                            value="Formation continue Bac+3: Maintenance Médicale (L2M)">
                                                            {{ __('messages.lpmgbFC') }}</option>
                                                        <option
                                                            value="Formation continue Bac+3: Génie Industriel et Logistique Hospitalière (LGILH)">
                                                            {{ __('messages.lpgilFC') }}</option>
                                                        <option
                                                            value="Formation continue Bac+3: Informatique Décisionnelle et e-Santé (LIDe-S)">
                                                            {{ __('messages.lpidsdFC') }}</option>
                                                        <option
                                                            value="Formation continue Bac+3: Sciences de Gestion (LSG)">
                                                            {{ __('messages.lpsgFC') }}</option>
                                                        <option
                                                            value="Formation continue Bac+3: Techniques de Laboratoires de Biologie Médicale (LTech-Labo)">
                                                            {{ __('messages.ltlbmFC') }}</option>
                                                        <option
                                                            value="Formation continue Bac+3: Infirmier Polyvalent (LIP)">
                                                            {{ __('messages.lipFC') }}</option>
                                                        <option
                                                            value="Formation continue Bac+3: Infirmier en Anesthésie et Réanimation (LIAR)">
                                                            {{ __('messages.liarFC') }}</option>
                                                        <option
                                                            value="Formation continue Bac+3: Infirmier en Instrumentalisation de Bloc Opératoire (L2IBO)">
                                                            {{ __('messages.liiboFC') }}</option> --}}
                                                        {{-- <option disabled value="off">
                                                            {{ __('messages.FormationContinueMaster') }}</option>

                                                        <option
                                                            value="Formation continue Bac+5: Dispositifs médicaux et affaires réglementaires">
                                                            {{ __('messages.mdmarFC') }} </option>
                                                        <option
                                                            value="Formation continue Bac+5: Maintenance et Génie biomédical">
                                                            {{ __('messages.mmgbFC') }}</option>
                                                        <option
                                                            value="Formation continue Bac+5: Entreprenariat et Management Technologique">
                                                            {{ __('messages.memtFC') }} </option> --}}
                                                    </select>

                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-4 form-group">
                                                    <label> <small> {{ __('messages.villef') }} : </small> </label>
                                                    <select class="form-select" name="Ville" id="Ville"
                                                        aria-label="select" required>
                                                        <option disabled selected value> {{ __('messages.villef') }}
                                                        </option>
                                                        <option value="MOHAMMEDIA"> MOHAMMEDIA</option>
                                                        <option value="ESSAOUIRA"> ESSAOUIRA</option>
                                                    </select>
                                                </div>
                                                <div class="col-lg-4 form-group">
                                                    <label> <small> {{ __('messages.vvppub') }} </small> </label><br>
                                                    <select class="form-select form-control" name="select_bourse" id="select_bourse">
                                                        <option value="bourse_oui">{{ __('messages.oui') }}</option>
                                                        <option value="bourse_non">{{ __('messages.non') }}</option>
                                                    </select>
                                                </div>
                                            </div>
                                            {{-- <label>
                                                <input type="radio" name="radiogroup" value="bourse_oui">
                                                {{ __('messages.oui') }}
                                            </label>&nbsp;
                                            <label>
                                                <input type="radio" name="radiogroup" value="bourse_non">
                                                {{ __('messages.non') }}
                                            </label> --}}
                                            <!------------>
                                        </div>
                                    </div>
                                </div>
                                {{-- <div class="card">

                                    <div class="card-header" id="headingTwo">
                                        <h5 class="mb-0">



                                            <button type="button"
                                                class="btn btn-link text-decoration-none text-primary fw-bold"
                                                data-toggle="collapse" data-target="#collapseTwo"
                                                aria-expanded="false" aria-controls="collapseTwo">
                                                {{ __('messages.RequestBourse') }}
                                            </button>
                                        </h5>
                                    </div>

                                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                                        data-parent="#accordion">
                                        <div class="card-body">

                                            <div style="display:block;">

                                                <div class="row" id="form-2">
                                                    <a class="mb-3"> <i class="bi bi-asterisk "></i>
                                                        {{ __('messages.id') }} </a> <br>





                                                </div>

                                                <div class="row">


                                                    <div class="col-lg-4 form-group">
                                                        <label> <small> {{ __('messages.cmp') }} : </small> </label>
                                                        <input type="text" class="form-control"
                                                            name="nom_pere_complet" id="mySelect5"
                                                            placeholder="{{ __('messages.cmp') }}" disabled>
                                                    </div>


                                                    <div class="col-lg-4 form-group">
                                                        <label> <small> {{ __('messages.profession') }} : </small>
                                                        </label>
                                                        <select class="form-select" name="profession" id="mySelect10"
                                                            aria-label="select" disabled>
                                                            <option disabled selected value>
                                                                {{ __('messages.profession') }}
                                                            </option>
                                                            <option value="Parent commerçant">
                                                                {{ __('messages.pcmrct') }} </option>
                                                            <option value="Parent fonctionnaire">
                                                                {{ __('messages.pfctn') }} </option>
                                                            <option value="Parent salarié">
                                                                {{ __('messages.psals') }} </option>
                                                            <option value="Parent retraité">
                                                                {{ __('messages.pret') }} </option>
                                                            <option value="Parent dans la profession libérale">
                                                                {{ __('messages.psal') }} </option>
                                                            <option value="Parent sans activité professionnelle">
                                                                {{ __('messages.pap') }} </option>
                                                            <option value="Parent décédé">{{ __('messages.pdec') }}
                                                            </option>
                                                        </select>

                                                    </div>

                                                    <input type="hidden" class="form-control" name="tsrc"
                                                        id="tsrc" placeholder="tsrc " pattern="\d+"
                                                        value="{{ request('tsrc') }}" disabled>

                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-4 form-group">
                                                        <label> <small> {{ __('messages.ncm') }} : </small> </label>
                                                        <input type="text" class="form-control" name="ncm"
                                                            id="mySelect6" placeholder="{{ __('messages.ncm') }}"
                                                            disabled>
                                                    </div>

                                                    <div class="col-lg-4 form-group">
                                                        <label> <small> {{ __('messages.profession') }} : </small>
                                                        </label>
                                                        <select class="form-select" name="profession_mere"
                                                            id="mySelect7" aria-label="select" disabled>
                                                            <option disabled selected value>
                                                                {{ __('messages.profession') }}
                                                            </option>
                                                            <option value="Parent commerçant">
                                                                {{ __('messages.pcmrct') }} </option>
                                                            <option value="Parent fonctionnaire">
                                                                {{ __('messages.pfctn') }} </option>
                                                            <option value="Parent salarié">
                                                                {{ __('messages.psals') }} </option>
                                                            <option value="Parent retraité">
                                                                {{ __('messages.pret') }} </option>
                                                            <option value="Parent dans la profession libérale">
                                                                {{ __('messages.psal') }} </option>
                                                            <option value="Parent sans activité professionnelle">
                                                                {{ __('messages.pap') }} </option>
                                                            <option value="Parent décédé">{{ __('messages.pdec') }}
                                                            </option>
                                                        </select>


                                                    </div>


                                                    <div class="row">
                                                        <a class="mb-3"> <i class="bi bi-asterisk "></i>
                                                            {{ __('messages.tbd') }} </a> <br>
                                                        <div class="col-lg-12 form-group">


                                                            <select class="form-select" name="type_bourse"
                                                                id="mySelect8" aria-label="select" disabled>
                                                                <option disabled selected value>
                                                                    {{ __('messages.tbd') }}
                                                                </option>
                                                                <option value="100%">
                                                                    {{ __('messages.100') }} </option>
                                                                <option value="50%">
                                                                    {{ __('messages.50') }} </option>
                                                                <option value="20%">
                                                                    {{ __('messages.20') }} </option>

                                                            </select>


                                                        </div>

                                                    </div>

                                                    <div class="row">
                                                        <a class="mb-3"> <i class="bi bi-asterisk "></i>
                                                            {{ __('messages.possedez_vous') }} </a>
                                                        <br>
                                                        <div class="col-lg-12 form-group">


                                                            <select class="form-select" name="compte_bancaire"
                                                                id="mySelect9" aria-label="select" disabled>
                                                                <option disabled selected value>
                                                                    {{ __('messages.oui/non') }}
                                                                </option>
                                                                <option value="oui">
                                                                    {{ __('messages.oui') }} </option>
                                                                <option value="non">
                                                                    {{ __('messages.non') }} </option>

                                                            </select>


                                                        </div>

                                                    </div>


                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                </div> --}}
                            </div>
                            <div class="text-center mt-5">

                                <button type="submit" id="CheckForm" aria-expanded="false">


                                    <div class="my-class">
                                        <span class="loader"></span>
                                    </div>

                                    <div class="msg"> {{ __('messages.inscrire') }} </div>

                                </button>


                            </div>

                            <div class="alert alert-success alert-dismissible fade show  m-auto mt-5"
                                style="width:50%; display:none;" id="succes1" role="alert">
                                <strong>
                                    {{ __('messages.success') }}</strong>{{ __('messages.successMsg') }}

                            </div>

                            <div class="alert alert-danger alert-dismissible fade show  m-auto mt-5"
                                style="width:50% ; display:none;" id="danger" role="alert">
                                <strong>{{ __('messages.echec') }}</strong>
                                {{ __('messages.erreurMsg') }}

                            </div>
                    </form>
                </div>

            </div>
    </section><!-- End Contact Us Section -->

    <div
        style="position: fixed; bottom: 20px; left: 30px; z-index: 99; font-size: 18px; border: none; outline: none; color: white; cursor: pointer; border-radius: 4px;">

        <select class="form-control changeLang">
            <option value="fr" {{ session()->get('locale') == 'fr' ? 'selected' : '' }}>
                {{ __('Fr') }}</option>
            <option value="ar" {{ session()->get('locale') == 'ar' ? 'selected' : '' }}>
                {{ __('Ar') }}</option>
        </select>



    </div>

    </main>
    <!-- End #main -->
    @include('layouts.footer')
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    @include('layouts.MainJs')

    <script>
        var loader = document.querySelector('.loader');
        var msg = document.querySelector('.msg');
        // Hide the <div> element by setting its "display" CSS property to "none"
        loader.style.display = 'none';
        msg.style.display = 'block';


        $("#succes1").hide();

        $("#danger").hide();

        $("#OrderInfo").on("submit", function(e) {

            loader.style.display = 'block';
            msg.style.display = 'none';
            $.ajax({
                type: "POST",

                url: "{{ route('InsertTest', ['slug' => App::getLocale()]) }}",
                data: new FormData(this),
                contentType: false,
                cache: false,
                processData: false,
                dataType: 'json',
                success: function(response) {
                    $("#succes1").hide();
                    $("#danger").hide();






                    if (response.hasOwnProperty('message_deja')) {


                        $("#danger").show();
                        //alert(response.message);
                        document.getElementById('danger').innerText = response.message_deja;

                    }



                    if (response.hasOwnProperty('message')) {

                        $("#succes1").show();
                        //alert(response.message);
                        document.getElementById('succes1').innerText = response.message;
                        // document.getElementById('succes1').innerHTML += response.message_bourse;

                        if (response.hasOwnProperty('pdf_inscription') && response.hasOwnProperty(
                                'pdf_bourse')) {
                            if (response.hasOwnProperty('message_bourse')) {

                                document.getElementById('succes1').innerHTML +=
                                    "<br><br> <p> {{ __('messages.RecuDetailsText') }} </p> <br> <h3> {{ __('messages.DocumentsEtudiant') }}  </h3><br><p>    {{ __('messages.CNI') }} .<br> {{ __('messages.FDB') }} .<br> </p> ";
                                document.getElementById('succes1').innerHTML +=
                                    "<br> <h3> {{ __('messages.ppd') }}  </h3><br> " + response
                                    .message_bourse;
                                document.getElementById('succes1').innerHTML +=
                                    "<br><br> <p> {{ __('messages.RecuDetailsFooterText1') }} <a href='https://suptech-sante.ma/fr/Suivi' target='_blank'>{{ __('messages.Click') }}</a> {{ __('messages.RecuDetailsFooterTextContinue') }} <br> {{ __('messages.RecuDetailsFooterText2') }} <br> {{ __('messages.RecuDetailsFooterText3') }} </p><br> ";
                            }

                            var pdfData = atob(response.pdf_inscription);
                            var pdfArray = new Uint8Array(pdfData.length);
                            for (var i = 0; i < pdfData.length; i++) {
                                pdfArray[i] = pdfData.charCodeAt(i);
                            }
                            // Create a blob from the decoded PDF data
                            var blob = new Blob([pdfArray], {
                                type: 'application/pdf'
                            });
                            var url = URL.createObjectURL(blob);
                            var link = document.createElement('a');
                            link.href = url;
                            link.download = 'reçu_inscription.pdf';
                            link.click();



                            var pdfData = atob(response.pdf_bourse);
                            var pdfArray = new Uint8Array(pdfData.length);
                            for (var i = 0; i < pdfData.length; i++) {
                                pdfArray[i] = pdfData.charCodeAt(i);

                            }
                            // Create a blob from the decoded PDF data
                            var blob = new Blob([pdfArray], {
                                type: 'application/pdf'
                            });
                            var url = URL.createObjectURL(blob);
                            var link = document.createElement('a');
                            link.href = url;
                            link.download = 'pdf_bourse.pdf';
                            link.click();



                        }




                        if (response.hasOwnProperty('pdf_bourse') && !response.hasOwnProperty(
                                'pdf_inscription')) {
                            document.getElementById('succes1').innerHTML +=
                                "<br><br> <p> {{ __('messages.RecuDetailsText') }} </p> <br> <h3> {{ __('messages.DocumentsEtudiant') }}  </h3><br><p>    {{ __('messages.CNI') }} .<br> {{ __('messages.FDB') }} .<br> </p> ";
                            document.getElementById('succes1').innerHTML +=
                                "<br> <h3> {{ __('messages.ppd') }}  </h3><br> " + response
                                .message_bourse;
                            document.getElementById('succes1').innerHTML +=
                                "<br><br> <p> {{ __('messages.RecuDetailsFooterText1') }} <a href='https://suptech-sante.ma/fr/Suivi' target='_blank'>{{ __('messages.Click') }}</a> {{ __('messages.RecuDetailsFooterTextContinue') }} <br> {{ __('messages.RecuDetailsFooterText2') }} <br> {{ __('messages.RecuDetailsFooterText3') }} </p><br> ";


                            var pdfData = atob(response.pdf_bourse);
                            var pdfArray = new Uint8Array(pdfData.length);
                            for (var i = 0; i < pdfData.length; i++) {
                                pdfArray[i] = pdfData.charCodeAt(i);

                            }
                            // Create a blob from the decoded PDF data
                            var blob = new Blob([pdfArray], {
                                type: 'application/pdf'
                            });
                            var url = URL.createObjectURL(blob);
                            var link = document.createElement('a');
                            link.href = url;
                            link.download = 'reçu_bourse.pdf';
                            link.click();
                        }



                        if (!response.hasOwnProperty('pdf_bourse') && response.hasOwnProperty(
                                'pdf_inscription')) {

                            document.getElementById('succes1').innerText = response.message;

                            var pdfData = atob(response.pdf_inscription);
                            var pdfArray = new Uint8Array(pdfData.length);
                            for (var i = 0; i < pdfData.length; i++) {
                                pdfArray[i] = pdfData.charCodeAt(i);

                            }
                            // Create a blob from the decoded PDF data
                            var blob = new Blob([pdfArray], {
                                type: 'application/pdf'
                            });
                            var url = URL.createObjectURL(blob);
                            var link = document.createElement('a');
                            link.href = url;
                            link.download = 'reçu_inscription.pdf';
                            link.click();



                        }



                        document.getElementById("OrderInfo").reset();


                        loader.style.display = 'none';
                        msg.style.display = 'block';


                    }
                    loader.style.display = 'none';
                    msg.style.display = 'block';
                },
                error: function(xhr, status, error) {
                    console.log(xhr);
                    loader.style.display = 'none';
                    msg.style.display = 'block';

                    $("#danger").show();

                }
            });
            e.preventDefault();
        });
    </script>
    <!--  Script  change the language -->
    <script>
        $(".changeLang").change(function() {
            if ($(this).val() == 'fr') {
                window.location.href = "/fr/inscription?tsrc={{ request('tsrc') }}";
            } else if ($(this).val() == 'ar') {
                window.location.href = "/ar/inscription?tsrc={{ request('tsrc') }}";
            }
        });
    </script>
    <script>
        var Days = [31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31]; // index => month [0-11]

        const months = ["", "{{ __('messages.janvier') }}", "{{ __('messages.fevrier') }}",
            "{{ __('messages.mars') }}", "{{ __('messages.avril') }}", "{{ __('messages.mai') }}",
            "{{ __('messages.juin') }}", "{{ __('messages.juillet') }}", "{{ __('messages.aout') }}",
            "{{ __('messages.septembre') }}", "{{ __('messages.octobre') }}", "{{ __('messages.novembre') }}",
            "{{ __('messages.decembre') }}"
        ];


        $(document).ready(function() {
            var option = "<option value='day' disabled>{{ __('messages.jour') }}</option>";
            var selectedDay = "day";
            for (var i = 1; i <= Days[0]; i++) { //add option days
                if (i <= 9) {
                    option += '<option value="' + i + '">' + '0' + i + '</option>';
                } else {
                    option += '<option value="' + i + '">' + i + '</option>';
                }

            }
            $('#day').append(option);
            $('#day').val(selectedDay);

            var option = "<option value='month' disabled >{{ __('messages.mois') }}</option>";
            var selectedMon = "month";
            for (var i = 1; i <= 12; i++) {

                if (i <= 9) {
                    option += '<option value="' + i + '">' + months[i] + '</option>';
                } else {
                    option += '<option value="' + i + '">' + months[i] + '</option>';
                }

            }
            $('#month').append(option);
            $('#month').val(selectedMon);

            var option = "<option value='month' disabled>{{ __('messages.mois') }}</option>";
            var selectedMon = "month";
            for (var i = 1; i <= 12; i++) {

                if (i <= 9) {

                    option += '<option value="' + i + '">' + months[i] + '</option>';
                } else {
                    option += '<option value="' + i + '">' + months[i] + '</option>';
                }

            }
            $('#month2').append(option);
            $('#month2').val(selectedMon);

            var d = new Date();
            var option = "<option value='year' disabled >{{ __('messages.annee') }}</option>";
            selectedYear = "year";
            for (var i = 1974; i <= d.getFullYear() - 16; i++) { // years start i
                option += '<option value="' + i + '">' + i + '</option>';
            }
            $('#year').append(option);
            $('#year').val(selectedYear);
        });

        function isLeapYear(year) {
            year = parseInt(year);
            if (year % 4 != 0) {
                return false;
            } else if (year % 400 == 0) {
                return true;
            } else if (year % 100 == 0) {
                return false;
            } else {
                return true;
            }
        }

        function change_year(select) {
            if (isLeapYear($(select).val())) {
                Days[1] = 29;

            } else {
                Days[1] = 28;
            }
            if ($("#month").val() == 2) {
                var day = $('#day');
                var val = $(day).val();
                $(day).empty();
                var option = '<option value="day" disabled >{{ __('messages.jour') }}</option>';
                for (var i = 1; i <= Days[1]; i++) { //add option days
                    if (i <= 9) {
                        option += '<option value="' + i + '">' + '0' + i + '</option>';
                    } else {
                        option += '<option value="' + i + '">' + i + '</option>';
                    }

                }
                $(day).append(option);
                if (val > Days[month]) {
                    val = 1;
                }
                $(day).val(val);
            }
        }

        function change_month(select) {

            var day = $('#day');
            var val = $(day).val();

            if (!val) {
                val = 1;
            }

            $(day).empty();
            var option = '<option value="day" disabled>{{ __('messages.jour') }}</option>';
            var month = parseInt($(select).val()) - 1;
            for (var i = 1; i <= Days[month]; i++) { //add option days
                if (i <= 9) {
                    option += '<option value="' + i + '">' + '0' + i + '</option>';
                } else {
                    option += '<option value="' + i + '">' + i + '</option>';
                }

            }

            $(day).append(option);
            if (val > Days[month]) {
                val = 1;
            }
            $(day).val(val);


        }
    </script>
    <script>
        const radioButtons = document.querySelectorAll('input[name="radio-group"]');
        const input1 = document.getElementById('mySelect5');
        // const input2 = document.getElementById('mySelect6');
        // const input3 = document.getElementById('mySelect7');
        // const input4 = document.getElementById('mySelect8');
        // const input5 = document.getElementById('mySelect9');
        // const input6 = document.getElementById('mySelect10');

        radioButtons.forEach((button) => {
            button.addEventListener('change', (event) => {
                if (event.target.value === 'bourse_oui') {

                    // const SubmitButton = document.getElementById("CheckForm");
                    // SubmitButton.setAttribute("data-target", "#collapseTwo");
                    // SubmitButton.setAttribute("data-toggle", "collapse");

                    input1.disabled = false;
                    // input2.disabled = false;
                    // input3.disabled = false;
                    // input4.disabled = false;
                    // input5.disabled = false;
                    // input6.disabled = false;


                    input1.required = true;
                    // input2.required = true;
                    // input3.required = true;
                    // input4.required = true;
                    // input5.required = true;
                    // input6.required = true;


                } else {
                    // const SubmitButton = document.getElementById("CheckForm");
                    // SubmitButton.removeAttribute("data-target");
                    // SubmitButton.removeAttribute("data-toggle");

                    input1.disabled = true;
                    // input2.disabled = true;
                    // input3.disabled = true;
                    // input4.disabled = true;
                    // input5.disabled = true;
                    // input6.disabled = true;

                    input1.required = false;
                    // input2.required = false;
                    // input3.required = false;
                    // input4.required = false;
                    // input5.required = false;
                    // input6.required = false;

                }
            });
        });
    </script>

    <!---->

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>

    <!--  End Script  change the language -->

</body>

</html>
