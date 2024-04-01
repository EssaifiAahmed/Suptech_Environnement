<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">

    <title>SUPTECH SANTE</title>
    <meta content="" name="description">
    <meta content="" name="keywords">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">




    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,600,600i,700,700i,900"
        rel="stylesheet">

    @include('layouts.MainCss')



    <style>
        .line {
            border-left: 1px solid grey;
            height: 50px;
        }

    </style>

</head>

<body>





    <!-- ======= Header ======= -->
    @include('layouts.header')
    <!-- End Header -->


    <div class="row mb-2"> </div>


    <section class="counts section-bg" data-aos="fade-up">
        <div class="container">

            <div class="text-center ">
                <div class="count-box sector">
                    <i class="bi bi-simple-smile" style="color: #20b38e;"></i>
                    <h2>{{ __('messages.title_result') }}</h2>
                </div>
            </div>

                <div class="row mb-4"> </div>
            <div class="row">

            <div class="col-lg-12 col-md-6 ">
            <h2 data-aos="fade-up" > {{ __('messages.res_S1') }}  </h2>
                <div class="count-box sector">
                    <i class="bi bi-simple-smile" style="color: #20b38e;"></i>
                    <h3>- <a href="{{ asset('assets/Résultats_du_Concours_Prépa_Session_1_Mohammedia.pdf') }}" target="_blank" style="color:red;">{{ __('messages.med') }}</a></h3>
                    <h3>- <a href="{{ asset('assets/Résultats_du_Concours_Prépa_Session_1_Essaouira.pdf') }}" target="_blank" style="color:red;" >{{ __('messages.ess') }}</a></h3>
                </div>
            </div>


            <div class="col-lg-12 col-md-6 ">
            <h2 data-aos="fade-up" >{{ __('messages.res_S2') }} </h2>
                <div class="count-box sector">
                    <i class="bi bi-simple-smile" style="color: #20b38e;"></i>
                    <h3>- <a href="{{ asset('assets/Résultats_Concours_Prépa_Session_2_Mohammedia.pdf') }}" target="_blank" style="color:red;">{{ __('messages.med') }}</a></h3>
                    <h3>- <a href="{{ asset('assets/Résultats_Concours_Prépa_Session_2_Essaouira.pdf') }}" target="_blank" style="color:red;" >{{ __('messages.ess') }}</a></h3>
                </div>
            </div>

            </div>
            



            <div class="row mb-2"> </div>
        </div>
    </section>

    <div class="row mb-4"> </div>


    </main>
    <!-- End #main -->




    <!-- ======= Footer ======= -->

    @include('layouts.footer')

    <!-- End Footer --> <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    @include('layouts.MainJs')


    <script>
        $(".changeLang").change(function () {
            if ($(this).val() == 'fr') {
                window.location.href = "/fr/results";
            } else if ($(this).val() == 'ar') {
                window.location.href = "/ar/results";
            }
        });

    </script>

</body>

</html>
