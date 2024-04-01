<!DOCTYPE html>
@if(Session::has('locale'))
    @if(Session::get('locale') == 'ar')
        <html lang="ar" dir="rtl">
    @else
    <html lang="fr">
    @endif
@else
<html lang="fr">
@endif
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>SUPTECH SANTE</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

<style>
  #titles {
    text-align:center;
  }
</style>

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,600,600i,700,700i,900" rel="stylesheet">

  @include('layouts.MainCss')


</head>

<body>

  @include('layouts.header')

    <!-- ======= Contact Us Section ======= -->
       <section class="counts section-bg">
            <div class="container">
                <h2> {{ __("messages.document d'inscription") }}: </h2>
                <div class="row mb-4"> </div>
                <div class="row">

                    <div class="col-lg-6 col-md-6 text-center  " data-aos="fade-up">
                        <a
                            href="{{ asset('REGLEMENT_ETUDES_INTERIEUR_CYCLE_INGENIEUR.pdf') }}">
                            <div class="count-box sector">
                                <i class="bi bi-simple-smile"></i>
                                <h3>Réglement intérieur Classes Préparatoires et Cycle Ingénieur</h3>
                            </div>
                        </a>
                    </div>

                    <div class="col-lg-6 col-md-6 text-center " data-aos="fade-up">
                        <a
                            href="{{asset('Acte_de_cautionnement.pdf')}}">
                            <div class="count-box sector" style="height: 83%;">
                                <i class="bi bi-simple-smile" style="color: #20b38e;"></i>
                                <h3>{{ __('messages.Acte de cautionnement') }}</h3>
                            </div>
                        </a>
                    </div>
                    
                    <div class="col-lg-6 col-md-6 text-center " data-aos="fade-up">
                        <a
                            href="{{asset('Règlement_Inernat.pdf')}}">
                            <div class="count-box sector">
                                <i class="bi bi-simple-smile" style="color: #20b38e;"></i>
                                <h3 style="text-align: center;">{{ __('messages.réglement internat') }}</h3>
                            </div>
                        </a>
                    </div>
                    
                    <div class="col-lg-6 col-md-6 text-center " data-aos="fade-up">
                        <a
                            href="{{asset('Suptech_sante_RIB.pdf')}}">
                            <div class="count-box sector">
                                <i class="bi bi-simple-smile" style="color: #20b38e;"></i>
                                <h3 style="text-align: center;">RIB</h3>
                            </div>
                        </a>
                    </div>
                    
                    <div class="col-lg-6 col-md-6 text-center " data-aos="fade-up">
                        <a
                            href="{{asset('REGLEMENT_INTERIEUR_CYCLE_LICENCE_MASTER VF.pdf')}}">
                            <div class="count-box sector">
                                <i class="bi bi-simple-smile" style="color: #20b38e;"></i>
                                <h3 style="text-align: center;">Réglement intérieur Cycle Licence et Master</h3>
                            </div>
                        </a>
                    </div>
                </div>

            </div>
        </section><!-- End sectors Section -->
    
    <!-- End Contact Us Section -->




  </main><!-- End #main -->  <!-- ======= Footer ======= -->
  @include('layouts.footer')

<!-- End Footer -->  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

@include('layouts.MainJs')

  <script>
$("#succes1").hide();

$("#danger").hide();

// $("#contactajax").on("submit", function(e) {
//           $("#succes1").hide();
//           $("#danger").hide();
//             $.ajax({
//                 type: "POST",
//                 url: "{{ route('InsertContact', ['slug' => App::getLocale()]) }}",
//                 data: new FormData(this),
//                 contentType: false,
//                 cache: false,
//                 processData:false,
               
//                 success: function(response){
                 
//                   $("#succes1").show();
//                   $("#contactajax")[0].reset(); 
                  
//                 },
//                 error: function(response) {
                 
//                   $("#danger").show();
//                 }
//             });
//             e.preventDefault();
//         });
        
</script>
<script>  
        $(".changeLang").change(function(){
            if($(this).val() == 'fr'){
                window.location.href = "/fr/contact";
            }else if($(this).val() == 'ar'){
                window.location.href = "/ar/contact";
            }
        });
    </script>

</body>

</html>