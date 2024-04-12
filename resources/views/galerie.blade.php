

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




  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,600,600i,700,700i,900" rel="stylesheet">

  @include('layouts.MainCss')


<style>

select option[value="off"] {
  background: #93b1c7;
} 
.loadcenter {
    display: flex;
    justify-content: center;
    align-items: center;
  }

  

  .my-class {
    display: flex;
  align-items: center;
  justify-content: center;

}

.loader {
  width: 48px;
  height: 48px;
  border: 5px solid rgba(0, 123, 255, 0.2);
  border-radius: 50%;
  display: none;
  box-sizing: border-box;
  position: relative;
  animation: pulse 1s linear infinite;
}

.loader:after {
  content: '';
  position: absolute;
  width: 48px;
  height: 48px;
  border: 5px solid rgba(0, 123, 255, 0.2);
  border-radius: 50%;
  display: inline-block;
  box-sizing: border-box;
  left: 50%;
  top: 50%;
  transform: translate(-50%, -50%);
  animation: scaleUp 1s linear infinite;
}

@keyframes scaleUp {
  0% { transform: translate(-50%, -50%) scale(0) }
  60% , 100% { transform: translate(-50%, -50%)  scale(1)}
}
@keyframes pulse {
  0% , 60% , 100%{ transform:  scale(1) }
  80% { transform:  scale(1.2)}
}


</style>
 
@if(Session::has('locale'))
        @if(Session::get('locale') == 'ar')
            <style>
                h1, h3, h4, h5{
                    text-align: right;
                }
                #text{
                    text-align: right;
                }
                #textFooter{
                    text-align: right;
                }
                #List{
                    float:right;
                    content: ' ';
                    clear: right;
                    display: block;
                }
                h6{
                    text-align: left;
                }
            </style>
        @endif
    @endif
</head>

<body>



  @include('layouts.header')

    <!-- ======= Contact Us Section ======= -->
    <section id="portfolio" class="portfolio section-bg">
      <div class="container" data-aos="fade-up" data-aos-delay="100">

      <div class="section-title">
          <h2> {{ __('messages.ad') }} SUPTECH SANTE   </h2>

        </div>

        <div class="row" id="bo">

      
  @foreach($images as $image)
    <div class="col-lg-4 col-md-6 portfolio-item filter-web">
      <div class="portfolio-wrap">
        <a href="{{ asset('Galerie/' . $image->name) }}" data-gallery="portfolioGallery" class="portfolio-lightbox">
          <img src="{{ asset('Galerie/' . $image->name) }}" class="img-fluid" alt="">
        </a>
      </div>  
    </div>
  @endforeach




              </div>
        
     
              <div class="my-class">
              <span   class="loader"></span>
              </div>
        <div>
        </div>
    </div>

    
    </section><!-- End Contact Us Section -->

    <div style="position: fixed; bottom: 20px; left: 30px; z-index: 99; font-size: 18px; border: none; outline: none; color: white; cursor: pointer; border-radius: 4px;">

    <select class="form-control changeLang">
        <option value="fr" {{ session()->get('locale') == 'fr' ? 'selected' : '' }}>{{ __('Fr') }}</option>
        <option value="ar" {{ session()->get('locale') == 'ar' ? 'selected' : '' }}>{{ __('Ar') }}</option>
</select>

</div>

  </main>
  <!-- End #main -->  
  @include('layouts.footer')
   <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

   @include('layouts.MainJs')

<script>
    
    var hasDisplayedAlert2 = false;

    let start=6;

$(window).scroll(function() {
  

  
  if ( !hasDisplayedAlert2 && $(window).scrollTop() + $(window).height() >= $('.my-class').offset().top + $('.my-class').outerHeight()) {

    var loader = document.querySelector('.loader');
              // Hide the <div> element by setting its "display" CSS property to "none"
              loader.style.display = 'block';
    hasDisplayedAlert2 = true;
 
    $.ajax({
          type: "GET",
          url: "{{ route('images', ['slug' => App::getLocale()]) }}",
          data: {start:start},
          success: function(response){
            if (response.length==0){
              var loader = document.querySelector('.loader');
              // Hide the <div> element by setting its "display" CSS property to "none"
              loader.style.display = 'none';
            }
           start = start + response.length ;
        for(var i = 0; i < response.length; i++){
          
             var htmll = "<div class='col-lg-4 col-md-6 portfolio-item filter-web'>" +
             "<div class='portfolio-wrap'>" +
              "<a href='" + "{{ asset('Galerie/') }}/" + response[i].name + "' data-gallery='portfolioGallery' class='portfolio-lightbox'>" +
                  "<img src='" + "{{ asset('Galerie/') }}/" + response[i].name + "' class='img-fluid' alt=''>" +
                "</a>" +
              "</div>" +
            "</div>";

document.getElementById("bo").innerHTML += htmll;
hasDisplayedAlert2 = false;
var loader = document.querySelector('.loader');
              // Hide the <div> element by setting its "display" CSS property to "none"
              loader.style.display = 'none';
            }
            const portfolioLightbox = GLightbox({
    selector: '.portfolio-lightbox'
  });
            
            
          },
        });



  }
});


</script>
  <!--  Script  change the language -->
  <script>  
        $(".changeLang").change(function(){
            if($(this).val() == 'fr'){
                window.location.href = "/fr/galerie";
            }else if($(this).val() == 'ar'){
                window.location.href = "/ar/galerie";
            }
        });
    </script>

 <!--  End Script  change the language -->
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
</body>

</html>