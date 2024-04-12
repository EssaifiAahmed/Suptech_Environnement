<!DOCTYPE html>


<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>SUPTECH ENVIRONNEMENT</title>
    <meta content="" name="description">
    <meta content="" name="keywords">



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
        }

        <blade keyframes|%20pulse%20%7B%0D>0%,
        60%,
        100% {
            transform: scale(1)
        }

        80% {
            transform: scale(1.2)
        }
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

            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            <div class="row">

                <div class="col-lg-12" data-aos="fade-up" data-aos-delay="300">
                    <form id="OrderInfo"
                        action="{{ route('Insert', ['slug' => App::getLocale()]) }}"
                        method="post" role="form" class="php-email-form">
                        @csrf
                        <div class="row">
                            <div class="col-lg-4 form-group">
                                <input type="text" name="Nom" class="form-control" id="Nom"
                                    placeholder="{{ __('messages.nom') }}" required>
                            </div>

                            <div class="col-lg-4 form-group">
                                <input type="text" name="Prenom" class="form-control" id="Prenom"
                                    placeholder="{{ __('messages.prenom') }}" required>
                            </div>


                            <div class="col-lg-4 form-group">
                                <input type="text" class="form-control" name="dip" id="dip"
                                    placeholder=" {{ __('messages.dip') }} " required>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-4 form-group">
                                <input type="text" class="form-control" name="cin_massar" id="cin_massar"
                                    placeholder=" {{ __('messages.cin') }} " pattern="^[a-zA-Z]+[0-9]+$" required>
                            </div>

                            <div class="col-lg-4 form-group">
                                <input type="email" class="form-control" name="email" id="email"
                                    placeholder="{{ __('messages.Email') }}" required>
                            </div>
                            
                            <div class="col-lg-4 form-group">
                                <input type="text" name="adresse" class="form-control" id="Adresse"
                                    placeholder="{{ __('messages.adresse') }}" required>
                            </div>
                            
                            <input type="hidden" class="form-control" name="tsrc" id="tsrc" placeholder="tsrc "
                                pattern="\d+" value="{{ request('tsrc') }}">


                        </div>



                        <div class="row">
                            
                            <div class="col-lg-4 form-group">
                                <input type="tel" class="form-control" name="telephone" id="Tele" placeholder="{{ __('messages.Tele') }}"
                                    pattern="^0+[0-9]{9}" required>
                            </div>


                            <div class="col-lg-4 form-group">
                                <select class="form-select" name="Sexe" aria-label="select" required>
                                    <option disabled selected value> {{ __('messages.Sexe') }}
                                    </option>
                                    <option value="Homme">{{ __('messages.Homme') }} </option>
                                    <option value="Femme">{{ __('messages.Femme') }} </option>
                                </select>
                            </div>
                            <div class="col-lg-4 form-group">


                                <select class="form-select form-control" name="nat" id="nat">
                                    <option value="" disabled selected>{{ __('messages.nat') }}</option>
                                    <option value="Afghan">Afghan</option>
                                    <option value="Albanais">Albanais</option>
                                    <option value="Algérien">Algérien</option>
                                    <option value="Américain">Américain</option>
                                    <option value="Andorran">Andorran</option>
                                    <option value="Angolais">Angolais</option>
                                    <option value="Antiguais-et-Barbudien">Antiguais-et-Barbudien</option>
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
                                    <option value="Papouasien-Néo-Guinéen">Papouasien-Néo-Guinéen</option>
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
                                    <option value="Saint-Vincentais-et-Grenadin">Saint-Vincentais-et-Grenadin</option>
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
                                <!--                   <select class="form-select" name="Sectors" aria-label="select" required>
                    <option disabled selected value>Filiére</option>
                    <option value="Cycle Classes préparatoires intégrées">Cycle Classes préparatoires intégrées</option>
                    <option value="Cycle ingénieur">Cycle ingénieur</option>
                    <option value="Cycle licence">Cycle licence</option>
                    <option value="Cycle Master">Cycle Master</option>
                    <option value="Cycle Master">Formation continue</option>
                  </select> -->

                                <select class="form-select" name="Sectors" id="Sectors" aria-label="select" required>
                                    <option disabled selected value>{{ __('messages.f') }} </option>

                                    <option disabled value="off">{{ __('messages.ccpi') }} </option>
                                    <option value="Classes préparatoires intégrées: 1ère année">
                                        {{ __('messages.1ere') }} </option>
                                    <option value="Classes préparatoires intégrées: 2ème année">
                                        {{ __('messages.2eme') }}</option>

                                    <option disabled value="off">{{ __('messages.ingenieur') }}
                                    </option>
                                    <option value="Cycle ingénieur: Génie Biomédical">
                                        {{ __('messages.gb') }}</option>
                                    <option
                                        value="Cycle ingénieur: Génie digital et intelligence Artificielle en santé">
                                        {{ __('messages.gdias') }}</option>

                                    <option disabled value="off">{{ __('messages.licence') }}</option>
                                    <option value="Licence en Maintenance Médicale (L2M)">
                                        {{ __('messages.lpmgb') }}</option>
                                    <option value="Licence en Génie Industriel et Logistique Hospitalière (LGILH)">
                                        {{ __('messages.lpgil') }}</option>
                                    <option
                                        value="Licence en Informatique Décisionnelle et e-Santé (LIDe-S)">
                                        {{ __('messages.lpidsd') }}</option>
                                    <option value="Licence en Sciences de Gestion (LSG)">
                                        {{ __('messages.lpsg') }}</option>
                                    <option value="Licence en Techniques de Laboratoires de Biologie Médicale (LTech-Labo)">
                                        {{ __('messages.ltlbm') }}</option>
                                    <option value="Licence Infirmier Polyvalent (LIP)">
                                        {{ __('messages.lip') }}</option>
                                    <option value="Licence Infirmier en Anesthésie et Réanimation (LIAR)">
                                        {{ __('messages.liar') }}</option>
                                    <option value="Licence Infirmier en Instrumentalisation de Bloc Opératoire (L2IBO)">
                                        {{ __('messages.liibo') }}</option>

                                    <option disabled value="off">{{ __('messages.cmm') }}</option>
                                    <option value="Master en dispositifs médicaux et affaires réglementaires">
                                        {{ __('messages.mdmar') }} </option>
                                    <option value="Master en Maintenance et Génie biomédical">
                                        {{ __('messages.mmgb') }}</option>
                                    <option value="Master en entreprenariat et Management Technologique">
                                        {{ __('messages.memt') }} </option>

                                    <option disabled value="off">{{ __('messages.fc') }}</option>
                                    <option value="Formation continue: Maintenance et génie biomédical">
                                        {{ __('messages.mgb') }}</option>
                                    <option value="Formation continue: Génie industriel et logistique">
                                        {{ __('messages.gil') }}</option>
                                    <option value="Formation continue: Entrepreneuriat">
                                        {{ __('messages.e') }}</option>
                                </select>

                            </div>
                            
                            <div class="col-lg-4 form-group">
                                <select class="form-select" name="Ville" id="Ville" aria-label="select" required>
                                    <option disabled selected value> Ville</option>
                                    <option value="MOHAMMEDIA"> MOHAMMEDIA</option>
                                    <option value="ESSAOUIRA"> ESSAOUIRA</option>
                                </select>
                            </div>
                        </div>
                        <div class="text-center">

                            <button type="submit">


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

        </div>
    </section><!-- End Contact Us Section -->

    <div
        style="position: fixed; bottom: 20px; left: 30px; z-index: 99; font-size: 18px; border: none; outline: none; color: white; cursor: pointer; border-radius: 4px;">

        <select class="form-control changeLang">
            <option value="fr"
                {{ session()->get('locale') == 'fr' ? 'selected' : '' }}>
                {{ __('Fr') }}</option>
            <option value="ar"
                {{ session()->get('locale') == 'ar' ? 'selected' : '' }}>
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

        $("#OrderInfo").on("submit", function (e) {
            loader.style.display = 'block';
            msg.style.display = 'none';
            $("#succes1").hide();
            $("#danger").hide();
            $.ajax({
                type: "POST",

                url: "{{ route('Insert', ['slug' => App::getLocale()]) }}",
                data: new FormData(this),
                contentType: false,
                cache: false,
                processData: false,
                dataType: 'json',
                success: function (response) {
                    $("#succes1").hide();
                    $("#danger").hide();
                    if (response.hasOwnProperty('message')) {
                        loader.style.display = 'none';
                        msg.style.display = 'block';
                        $("#danger").show();
                        //alert(response.message);
                        document.getElementById('danger').innerText = response.message;
                    } else {
                        $("#succes1").show();
                        // window.open(response);
                        var pdfData = atob(response.pdf);
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
                        loader.style.display = 'none';
                        msg.style.display = 'block';
                    }
                },
                error: function (xhr, status, error) {
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
        $(".changeLang").change(function () {
            if ($(this).val() == 'fr') {
                window.location.href = "/fr/inscription?tsrc={{ request('tsrc') }}";
            } else if ($(this).val() == 'ar') {
                window.location.href = "/ar/inscription?tsrc={{ request('tsrc') }}";
            }
        });
    </script>

    <!--  End Script  change the language -->

</body>

</html>
