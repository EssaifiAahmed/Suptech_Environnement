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

  <style>
.line {
  border-left: 1px solid grey;
  height: 50px;
}
</style>

</head>

<body>

     <!-- ======= Top Bar ======= -->
   

  <!-- ======= Header ======= -->
  @include('layouts.header')
  <!-- End Header -->


  <div class="row mb-2"> </div>


<section class="counts section-bg"  data-aos="fade-up" >
    <div class="container">
   
          <div class="text-center " >
              <div class="count-box sector">
                  <i class="bi bi-simple-smile" style="color: #20b38e;"></i>
                  <h2>{{ __('messages.Fcgil') }} </h2>
              </div>
          </div>

          <h2> {{ __('messages.cda') }} : </h2>
          <div class="row mb-4"> </div>

          <div class="col-lg-12 col-md-6 ">
          <div class="count-box sector">
              <i class="bi bi-simple-smile" style="color: #20b38e;"></i>
              <h3>- {{ __('messages.etlsdd') }} .</h3> 
              <h3>- {{ __('messages.etdeugds') }} .</h3> 
            </div>
          </div>


      <div class="row mb-2"> </div>
    </div>
</section>




<div class="row mb-4"> </div>


                        
                    
   
  </main><!-- End #main -->




  <!-- ======= Footer ======= -->
  @include('layouts.footer')

<!-- End Footer -->
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  @include('layouts.MainJs')


  <script>  
        $(".changeLang").change(function(){
            if($(this).val() == 'fr'){
                window.location.href = "/fr/fcg";
            }else if($(this).val() == 'ar'){
                window.location.href = "/ar/fcg";
            }
        });
    </script>
</body>

</html>