

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>SUPTECH ENVIRONNEMENT</title>
  <meta content="" name="description">
  <meta content="" name="keywords">



  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,600,600i,700,700i,900" rel="stylesheet">

  @include('layouts.MainCss')

    @if(Session::has('locale'))
        @if(Session::get('locale') == 'ar')
            <style>
                p{
                    text-align: right;
                }
            </style>
        @endif
    @endif
</head>

<body>



  
  <!-- ======= Header ======= -->
 
  @include('layouts.header')
  <!-- End Header -->

  


  <div class="row mb-4"> </div>
  <div class="row mb-4"> </div>

  <div class="text-center" data-aos="fade-up">
  <h2>{{ __('messages.ccpi') }}</h2>
</div>

<section class="counts section-bg" >
      <div class="container">
    
        <div class="row">

         
          <h2 data-aos="fade-up" > {{ __('messages.années') }} </h2>
      <div class="row mb-4"> </div>
          <div class="col-lg-12 col-md-6 text-center ">
          <div class="count-box sector" data-aos="fade-up">
              <i class="bi bi-simple-smile" style="color: #20b38e;"></i>
              <a href="#"><h4>- {{ __('messages.1ere') }} </h4></a>
              <a href="#"><h4>- {{ __('messages.2eme') }} </h4></a>

            </div>
          </div>

    </section><!-- End sectors Section -->




  <!-- ======= Footer ======= -->

  @include('layouts.footer')
<!-- End Footer -->  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

@include('layouts.MainJs')
<script>  
        $(".changeLang").change(function(){
            if($(this).val() == 'fr'){
                window.location.href = "/fr/cp";
            }else if($(this).val() == 'ar'){
                window.location.href = "/ar/cp";
            }
        });
    </script>
</body>

</html>