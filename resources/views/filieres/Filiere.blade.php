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
  @include('layouts.header')
  <!-- End Header -->

    <!-- ======= About Lists Section ======= -->
    <section class="about-lists">
      <div class="container">
        
        <h1 class="mb-5" style="text-align: center;" data-aos="fade-up">{{ __('messages.fs') }} </h1>
        <div class="row no-gutters">

          <div class="col-lg-6 col-md-6 content-item" data-aos="fade-up">
            <h5>{{ __('messages.ccpi') }} </h5>
            <span><i class="bi bi-asterisk"></i>{{ __('messages.1ere') }}   <br> <i class="bi bi-asterisk"></i> {{ __('messages.2eme') }}</span>
          </div>

          <div class="col-lg-6 col-md-6 content-item" data-aos="fade-up">
            <h5>{{ __('messages.fc_bac_3_5') }}Cycle ingénieur</h5>
            <span><i class="bi bi-asterisk"></i> {{ __('messages.gb') }} <br> <i class="bi bi-asterisk"></i>{{ __('messages.gds') }} </span>
          </div>

          <div class="col-lg-6 col-md-6 content-item" data-aos="fade-up">
            <h5>{{ __('messages.licence') }} </h5>
            <span>
                <i class="bi bi-asterisk"></i> {{ __('messages.lpmgb') }} <br> 
                <i class="bi bi-asterisk"></i> {{ __('messages.lplh') }} <br>
                <i class="bi bi-asterisk"></i> {{ __('messages.lpidsd') }}<br>
                <i class="bi bi-asterisk"></i> {{ __('messages.lpe') }} <br>
            </span>
          </div>

          <div class="col-lg-6 col-md-6 content-item" data-aos="fade-up">
            <h5>{{ __('messages.cmm') }}</h5>
            <span>
                <i class="bi bi-asterisk"></i> {{ __('messages.mdmar') }}<br> 
                <i class="bi bi-asterisk"></i> {{ __('messages.mmgb') }}<br>
                <i class="bi bi-asterisk"></i> {{ __('messages.me') }} <br>
                <span style="color:red"><i class="bi bi-asterisk"></i> {{ __('messages.mmqmb') }}</span> <br>
            </span>
          </div>

        </div>

      </div>
    </section><!-- End About Lists Section -->

  </main><!-- End #main -->  <!-- ======= Footer ======= -->

  @include('layouts.footer')

<!-- End Footer -->  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

@include('layouts.MainJs')
<script>  
        $(".changeLang").change(function(){
            if($(this).val() == 'fr'){
                window.location.href = "/fr/filiere";
            }else if($(this).val() == 'ar'){
                window.location.href = "/ar/filiere";
            }
        });
    </script>
</body>

</html>