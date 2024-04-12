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

  <title>SUPTECH ENVIRONNEMENT</title>
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
    
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>{{ __('messages.ContactUs') }}</h2>
        </div>

        @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
        @endif

        
        <div class="col-lg-12" data-aos="fade-up" data-aos-delay="300">
          <form action="/InsertContact" id="contactajax" method="post" role="form" class="php-email-form">
            @csrf
            <div class="row">
              <div class="col-lg-6 form-group">
                <input type="text" name="name" class="form-control" id="name" placeholder=" {{ __('messages.nom_complet') }}" required>
              </div>
              <div class="col-lg-6 form-group">
                <input type="email" class="form-control" name="email" id="email" placeholder=" {{ __('messages.Email') }}" required>
              </div>

              <div class="col-lg-6 form-group">
                <input type="tele" class="form-control" name="Tele" id="tele" placeholder=" {{ __('messages.Tele') }} " required>
              </div>

              <div class="col-lg-6 form-group">
              <input type="text" class="form-control" name="subject" id="subject" placeholder=" {{ __('messages.Objet') }}" required>
            </div>

            </div>

            <div class="form-group">
              <textarea class="form-control" name="message" rows="5" placeholder=" {{ __('messages.msg1') }}" required></textarea>
            </div>
            <div class="text-center"><button type="submit"> {{ __('messages.EnovyerMsg') }}</button></div>

            <div class="alert alert-success alert-dismissible fade show  m-auto mt-5" style="width:50%" id="succes1" role="alert">
                            <strong> {{ __('messages.success') }} </strong> {{ __('messages.ContactMessage') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>

              <div class="alert alert-danger alert-dismissible fade show  m-auto mt-5" style="width:50%" id="danger" role="alert">
                            <strong>  {{ __('messages.echec') }} </strong> {{ __('messages.erreurMsg') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>

          </form>
      </div>



<div class="row mb-3">    </div>

        <div class="row">
          

        <div class="col-lg-6 d-flex" data-aos="fade-up">
  <div class="info-box">
    <i class="bx bx-map"></i>
    <h3 id="titles">{{ __('messages.adresse') }}</h3>
    <p>{{ __('messages.adresse1') }} </p>
    <p> {{ __('messages.adresse2') }}</p>
  </div>
</div>

<div class="col-lg-3 d-flex" data-aos="fade-up" data-aos-delay="100">
  <div class="info-box">
    <i class="bx bx-envelope"></i>
    <h3 id="titles">{{ __('messages.email') }}  </h3>
    <p>contact@suptech-sante.ma<br></p>
  </div>
</div>

<div class="col-lg-3 d-flex" data-aos="fade-up" data-aos-delay="200">
  <div class="info-box ">
    <i class="bx bx-phone-call"></i>
    <h3 id="titles" >{{ __('messages.Tele') }} </h3>
    <p dir="ltr" >+212 661 625 586<br></p>
  </div>
</div>


        <div class="row mb-3">
            <div class="col-lg-12" data-aos="fade-up">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d53117.337352523224!2d-7.430094343766269!3d33.6873730136352!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xda7b65541dc9c3d%3A0x89fe602f8927da05!2sMohammedia!5e0!3m2!1sen!2sma!4v1681506389592!5m2!1sen!2sma" width="100%" height="450" style="border:0; box-shadow: 0 0 30px rgba(214, 215, 216, 0.6);" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>

      
      </div>
    </section>
    
    <!-- End Contact Us Section -->




  </main><!-- End #main -->  <!-- ======= Footer ======= -->
  @include('layouts.footer')

<!-- End Footer -->  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

@include('layouts.MainJs')

  <script>
$("#succes1").hide();

$("#danger").hide();

$("#contactajax").on("submit", function(e) {
          $("#succes1").hide();
          $("#danger").hide();
            $.ajax({
                type: "POST",
                url: "{{ route('InsertContact', ['slug' => App::getLocale()]) }}",
                data: new FormData(this),
                contentType: false,
                cache: false,
                processData:false,
               
                success: function(response){
                 
                  $("#succes1").show();
                  $("#contactajax")[0].reset(); 
                  
                },
                error: function(response) {
                 
                  $("#danger").show();
                }
            });
            e.preventDefault();
        });
        
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