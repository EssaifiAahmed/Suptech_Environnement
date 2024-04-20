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
                <h2>{{ __('messages.RequestBourse') }}</h2>
            </div>

            {{-- @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif --}}


            <div class="row" id="response">

                <div class="col-lg-12" data-aos="fade-up" data-aos-delay="300">

                    <form id="OrderInfo" action="{{ route('InsertBourse', ['slug' => App::getLocale()]) }}"
                        method="post" role="form" class="php-email-form">
                        @csrf
                        <div class="row">
                            <a class="mb-3"> <i class="bi bi-asterisk "></i> {{ __('messages.id') }} </a> <br>
                            <div class="col-lg-4 form-group">
                                <label> <small>{{ __('messages.nom_complet') }} :</small> </label>
                                <input type="text" name="Nom" class="form-control" id="Nom"
                                    placeholder="{{ __('messages.nom_complet') }}" required>
                            </div>

                            <div class="col-lg-4 form-group">
                                <label> <small>{{ __('messages.Email') }} :</small> </label>
                                <input type="text" name="email" class="form-control" id="email"
                                    placeholder="{{ __('messages.Email') }}" required>
                            </div>


                            <div class="col-lg-4 form-group">
                                <label> <small>{{ __('messages.cin2') }} :</small> </label>
                                <input type="text" class="form-control" name="cin" id="cin"
                                    placeholder="{{ __('messages.cin2') }} " required>
                            </div>

                        </div>

                        <div class="row">

                            <div class="col-lg-4 form-group">
                                <label for="date_naissance"> <small> {{ __('messages.dn') }}</small> </label>
                                <input type="date" id="date_naissance" name="date_naissance"
                                    style="width: 100%; height: 50px;">
                            </div>


                            <div class="col-lg-4 form-group">
                                <label> <small>{{ __('messages.Tele') }} :</small> </label>
                                <input type="text" class="form-control" name="telephone" id="telephone"
                                    placeholder="{{ __('messages.Tele') }}" required>
                            </div>

                            <div class="col-lg-4 form-group">
                                <label> <small>{{ __('messages.adresse') }} :</small> </label>
                                <input type="text" class="form-control" name="adresse" id="adresse"
                                    placeholder=" {{ __('messages.adresse') }} " required>
                            </div>
                            <input type="hidden" class="form-control" name="tsrc" id="tsrc" placeholder="tsrc "
                                pattern="\d+" value="{{ request('tsrc') }}">

                        </div>
                        <div class="row">
                            <div class="col-lg-4 form-group">
                                <label> <small>{{ __('messages.cne3') }} :</small> </label>
                                <input type="text" class="form-control" name="cin_massar" id="cin_massar"
                                    placeholder=" {{ __('messages.cne3') }} " required>
                            </div>

                            <div class="col-lg-4 form-group">
                                <label> <small>{{ __('messages.cmp') }} :</small> </label>
                                <input type="text" class="form-control" name="nom_pere_complet" id="nom_pere_complet"
                                    placeholder="{{ __('messages.cmp') }}" required>
                            </div>
                            <div class="col-lg-4 form-group">
                                <label> <small>{{ __('messages.Etat') }} :</small> </label>
                                <select class="form-select" name="profession" id="mySelect" aria-label="select"
                                    required>
                                    <option disabled selected value> {{ __('messages.Etat') }}
                                    </option>
                                    <option value="Père décédé">{{ __('messages.pdec') }} </option>
                                    <option value="Père non décédé">{{ __('messages.pndec') }} </option>
                                </select>
                            </div>
                            <div class="row">
                                <div class="col-lg-4 form-group">
                                    <label> <small>{{ __('messages.ncm') }} :</small> </label>
                                    <input type="text" class="form-control" name="ncm" id="cnm"
                                        placeholder="{{ __('messages.ncm') }}" required>
                                </div>

                                <div class="col-lg-4 form-group">
                                    <label> <small>{{ __('messages.Etat') }} :</small> </label>
                                    <select class="form-select" name="profession_mere" id="mySeleprofession_merect"
                                        aria-label="select" required>
                                        <option disabled selected value> {{ __('messages.Etat') }}
                                        </option>
                                        <option value="Mère décédé">{{ __('messages.mdec') }} </option>
                                        <option value="Mère non décédé">{{ __('messages.mndec') }} </option>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4 form-group">
                                    <label> <small>{{ __('messages.nct') }} :</small> </label>
                                    <input type="text" class="form-control" name="nct" id="nct"
                                        placeholder="{{ __('messages.nct') }}" disabled>
                                </div>
                                <div class="col-lg-4 form-group">
                                    <label> <small>{{ __('messages.Etat') }} :</small> </label>
                                    <select class="form-select" name="profession_tuteur" id="mySeleprofession_tuteur"
                                        aria-label="select" onchange="toogleInput()" required>
                                        <option disabled selected value> {{ __('messages.Etat') }}
                                        </option>
                                        <option value="Aucun tuteur">{{ __('messages.aucunt') }}</option>
                                        <option value="Tuteur">{{ __('messages.avec') }}</option>
                                    </select>
                                </div>
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
                        {{-- <div class="alert alert-success alert-dismissible fade show  m-auto mt-5"
                            style="width:50%; display:none;" id="succes1" role="alert">
                            <strong>
                                {{ __('messages.success') }}</strong>{{ __('messages.successMsg') }}
                        </div>
                        <div class="alert alert-danger alert-dismissible fade show  m-auto mt-5"
                            style="width:50% ; display:none;" id="danger" role="alert">
                            <strong>{{ __('messages.echec') }}</strong>
                            {{ __('messages.erreurMsg') }}
                        </div> --}}
                    </form>
                </div>
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

        function toogleInput() {
            var selectValue = document.getElementById("mySeleprofession_tuteur").value;
            var inputField = document.getElementById("nct");

            if (selectValue === "Tuteur") {
                inputField.disabled = false;
            } else {
                inputField.disabled = true;
            }
        }

        // Hide the <div> element by setting its "display" CSS property to "none"
        loader.style.display = 'none';
        msg.style.display = 'block';
    </script>
    <!--  Script  change the language -->

    <script>
        /* Show/hide the "other" input based on the selected option
                          const select = document.getElementById("mySelect");
                          const otherOption = document.getElementById("otherOption");
                          select.addEventListener("change", function() {
                            if (select.value === "other") {
                              otherOption.style.display = "block";
                            } else {
                              otherOption.style.display = "none";
                            }
                          });*/
    </script>
    <script>
        $(".changeLang").change(function() {
            if ($(this).val() == 'fr') {
                window.location.href = "/fr/bourse_inscription";
            } else if ($(this).val() == 'ar') {
                window.location.href = "/ar/bourse_inscription";
            }
        });
    </script>

    <!--  End Script  change the language -->

</body>

</html>
