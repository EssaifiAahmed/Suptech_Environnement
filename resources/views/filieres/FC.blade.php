<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>SUPTECH SANTE</title>
  <meta content="" name="description">
  <meta content="" name="keywords">



  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,600,600i,700,700i,900" rel="stylesheet">

  @include('layouts.MainCss')



</head>

<body>

  

  
  <!-- ======= Header ======= -->
  
  
  @include('layouts.header')<!-- End Header -->


  <div class="row mb-4"> </div>
  <div class="row mb-4"> </div>

  <div class="text-center" data-aos="fade-up" >
  <h2>{{ __('messages.fc_bac_3_5') }}</h2>
</div>

<section class="counts section-bg">
      <div class="container">
  
        <div class="row">

          <h2 data-aos="fade-up" >{{ __('messages.fs') }}: </h2>
      <div class="row mb-4"> </div>
          <div class="col-lg-12 col-md-6 text-center " data-aos="fade-up" >
          <div class="count-box sector">
              <i class="bi bi-simple-smile" style="color: #20b38e;"></i>
              <a href="{{ route('fcm', ['slug' => App::getLocale()]) }}"><h4>- {{ __('messages.mgb') }}. </h4></a>
              <a href="{{ route('fcg', ['slug' => App::getLocale()]) }}"><h4>- {{ __('messages.gil') }}. </h4></a>
              <a href="{{ route('fce', ['slug' => App::getLocale()]) }}"><h4>- {{ __('messages.e') }}.  </h4></a>
              

            </div>
          </div>

        </div>

      </div>
    </section>

  </main>
  <!-- End #main -->




  <!-- ======= Footer ======= -->
  @include('layouts.footer')
<!-- End Footer -->  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

@include('layouts.MainJs')

<script>  
        $(".changeLang").change(function(){
            if($(this).val() == 'fr'){
                window.location.href = "/fr/fc";
            }else if($(this).val() == 'ar'){
                window.location.href = "/ar/fc";
            }
        });
    </script>
</body>

</html>