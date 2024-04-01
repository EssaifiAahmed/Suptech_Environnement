
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
    <title>SUPTECH SANTE</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="author" content="colorlib.com">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css" rel="stylesheet">    
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


    <style>

body {
    background: #eee
}

#regForm {
    background-color: #ffffff;
    margin: 0px auto;
    font-family: Raleway;
    padding: 30px;
    
    box-shadow: 0 0 30px rgba(214, 215, 216, 0.6);
  
}

#register{

  color: #4583c8;
}

h1 {
    text-align: center
}

input {
    padding: 10px;
    width: 100%;
    font-size: 17px;
    font-family: Raleway;
    border: 1px solid #aaaaaa;
    -webkit-appearance: none;
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



.tab input:focus{

  border:1px solid #4583c8 !important;
  outline: none;
}

input.invalid {
 
    border:1px solid #e03a0666;
}

button {
    background-color: #4583c8;
    color: #ffffff;
    border: none;
    border-radius: 50%;
    padding: 10px 20px;
    font-size: 17px;
    font-family: Raleway;
    cursor: pointer
}



.all-steps{
      text-align: center;
    margin-top: 30px;
    margin-bottom: 30px;
    width: 100%;
    display: inline-flex;
    justify-content: center;
}

.step {
       height: 40px;
    width: 40px;
    margin: 0 2px;
    background-color: #7abaff;
    border: none;
    border-radius: 50%;
    display: flex;
    justify-content: center;
    align-items: center;
    font-size: 15px;
    color: #fff;
    opacity: 1;
}



.all-steps {
    text-align: center;
    margin-top: 30px;
    margin-bottom: 30px
}


    </style>

@include('layouts.MainCss')
	</head>

	<body>


  @include('layouts.header')


           

  <h1 style="text-align:center" class="mt-5">  {{__('messages.dbI')}} </h1>

    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">
        <div class="col-lg-12" data-aos="fade-up" data-aos-delay="300">
        <form method="POST" id="OrderInfo" action="{{ route('uploadfiles_Inscr.storefile',[ 'id' => session()->get('cni'), 'slug' => App::getLocale()]) }}" enctype="multipart/form-data" class="php-email-form">
    @csrf

    <div class="alert alert-primary alert-dismissible fade show" id="msg_return"   style="display:none;width:50px my-auto" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
  <span aria-hidden="false">&times; </span>
  </button>
</div>

<div class="alert alert-primary alert-dismissible fade show" id="msg_return2"   style="display:none;width:50px my-auto" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="false">&times; </span>
  </button>
</div>


<div class="alert alert-success alert-dismissible fade show  m-auto mt-5"
style="width:50%; display:none;" id="succes1" role="alert">
</div>



<div class="row">
<a class="mb-3" style="color:red;" ><i class="bi bi-asterisk "></i> {{ __('messages.msgnotes') }} </a>  <br> 
              <div class="col-lg-4 form-group">
              <label>{{ __('messages.note_s1') }}</label>
                <input type="text" class="form-control" name="note_s1" id="note_s1" placeholder=" {{ __('messages.note_s1') }}" >
              </div>

              <div class="col-lg-4 form-group">
              <label>{{ __('messages.note_s2') }}</label>
                <input type="text" class="form-control" name="note_s2" id="note_s2" placeholder=" {{ __('messages.note_s2') }}" >
              </div>

              <div class="col-lg-4 form-group">
              <label>{{ __('messages.moy_A1') }}</label>
                <input type="text" class="form-control" name="note_A1" id="note_A1" placeholder=" {{ __('messages.moy_A1') }} " >
              </div>
  </div>

  <div class="row">
              <div class="col-lg-4 form-group">
              <label>{{ __('messages.note_s3') }}</label>
                <input type="text" class="form-control" name="note_s3" id="note_s3" placeholder=" {{ __('messages.note_s3') }}" >
              </div>

              <div class="col-lg-4 form-group">
              <label>{{ __('messages.note_s4') }}</label>
                <input type="text" class="form-control" name="note_s4" id="note_s4" placeholder=" {{ __('messages.note_s4') }}" >
              </div>

              <div class="col-lg-4 form-group">
              <label>{{ __('messages.moy_A2') }}</label>
                <input type="text" class="form-control" name="note_A2" id="note_A2" placeholder=" {{ __('messages.moy_A2') }} " >
              </div>
  </div>

  <div class="row">
              <div class="col-lg-4 form-group">
              <label>{{ __('messages.note_s5') }}</label>
                <input type="text" class="form-control" name="note_s5" id="note_s5" placeholder=" {{ __('messages.note_s5') }}" >
              </div>

              <div class="col-lg-4 form-group">
              <label>{{ __('messages.note_s6') }}</label>
                <input type="text" class="form-control" name="note_s6" id="note_s6" placeholder=" {{ __('messages.note_s6') }}" >
              </div>

              <div class="col-lg-4 form-group">
              <label>{{ __('messages.moy_A3') }}</label>
                <input type="text" class="form-control" name="note_A3" id="note_A3" placeholder=" {{ __('messages.moy_A3') }} " >
              </div>
  </div>

  <div class="row">
              <div class="col-lg-4 form-group">
              <label>{{ __('messages.note_s7') }}</label>
                <input type="text" class="form-control" name="note_s7" id="note_s7" placeholder=" {{ __('messages.note_s7') }}" >
              </div>

              <div class="col-lg-4 form-group">
              <label>{{ __('messages.note_s8') }}</label>
                <input type="text" class="form-control" name="note_s8" id="note_s8" placeholder=" {{ __('messages.note_s8') }}" >
              </div>

              <div class="col-lg-4 form-group">
              <label>{{ __('messages.moy_A4') }}</label>
                <input type="text" class="form-control" name="note_A4" id="note_A4" placeholder=" {{ __('messages.moy_A4') }} " >
              </div>
  </div>

  <div class="row">
              <div class="col-lg-4 form-group">
              <label>{{ __('messages.note_s9') }}</label>
                <input type="text" class="form-control" name="note_s9" id="note_s9" placeholder=" {{ __('messages.note_s9') }}" >
              </div>

              <div class="col-lg-4 form-group">
              <label>{{ __('messages.note_s10') }}</label>
                <input type="text" class="form-control" name="note_s10" id="note_s10" placeholder=" {{ __('messages.note_s10') }}" >
              </div>

              <div class="col-lg-4 form-group">
              <label>{{ __('messages.moy_A5') }}</label>
                <input type="text" class="form-control" name="note_A5" id="note_A5" placeholder=" {{ __('messages.moy_A5') }} " >
              </div>
  </div>
    


@if(Session::has('locale'))
        @if(Session::get('locale') == 'fr')
      
@foreach( session()->get('message')  as $msg)



<a class="mb-3" style="color:red;" ><i class="bi bi-asterisk "></i>{{ $msg}}</a>  <br> 
<div class="mb-2"></div>
    

<input class="form-control" name="releve[]" type="file" accept="application/pdf" multiple style="padding:6px;" id="file" required>


@endforeach
        @endif
    @endif


    
@if(Session::has('locale'))
        @if(Session::get('locale') == 'ar')
      

        @php
        $message_ar = session()->get('message_ar');
        $message = session()->get('message');
        $count = count($message_ar);
    @endphp


    @for ($i = 0; $i < $count; $i++)
        @php
            $msg_ar = $message_ar[$i];
            $msg = $message[$i];
        @endphp

        <a class="mb-3" style="color:red;" ><i class="bi bi-asterisk "></i>{{ $msg_ar}}</a>  <br> 
        <div class="mb-2"></div>


  <input class="form-control" name="releve[]" type="file" accept="application/pdf" multiple style="padding:6px;" id="file" required>

    @endfor



        @endif
    @endif

<div class="mb-4"></div>
  
<div style="overflow:auto;" id="nextprevious">
                    

<button type="submit" class="mt-2 d-flex justify-content-center align-items-center" style="width: 100%;">
    <div class="my-class">
        <span class="loader"></span>
    </div>
    
    <div class="msg"> {{__('messages.UploadButton')}}</button></div>
              </div>
 
            </form>
          </div>
      </div>
    </section>

<div class="row mb-4"></div>

@include('layouts.footer')
@include('layouts.MainJs')
<script>
        $(".changeLang").change(function () {
            if ($(this).val() == 'fr') {
                window.location.href = "/fr/FilesInscription";
            } else if ($(this).val() == 'ar') {
                window.location.href = "/ar/FilesInscription";
            }
        });
</script>

<script>

var succes1= document.getElementById('succes1');
var loader = document.querySelector('.loader');
var msg = document.querySelector('.msg');
// Hide the <div> element by setting its "display" CSS property to "none"
loader.style.display = 'none';
msg.style.display = 'block';


$("#OrderInfo").on("submit", function (e) {
            loader.style.display = 'block';
            msg.style.display = 'none';

$.ajax({
                type: "POST",

                url: "{{ route('uploadfiles_Inscr.storefile',[ 'id' => session()->get('cni'), 'slug' => App::getLocale()]) }}",

                data: new FormData(this),
                contentType: false,
                cache: false,
                processData: false,
                dataType: 'json',
                success: function (response) {
                   loader.style.display = 'none';
                    msg.style.display = 'block';
                    succes1.innerHTML = " {{ __('messages.upload2') }} ";
                    succes1.style.display = 'block';
                    document.getElementById("OrderInfo").reset();
                    setTimeout(function() {


    window.location.href = "{{ session()->get('locale') == 'fr'? '/fr' : '/ar'}}";

}, 5000); // 5000 ms = 5 seconds

                },
                error: function (xhr, status, error) {
                    loader.style.display = 'none';
                    msg.style.display = 'block';
                }
            });
            e.preventDefault();
    }); 

</script>

<script>

var msg_return2 = document.getElementById('msg_return2');

$('input#file').on('change', function() {

  var myFile = $(this).val();
  console.log(myFile);

  var upld = myFile.split('.').pop();
  if (upld != 'pdf') {
    msg_return2.style.display = 'block';
    msg_return2.innerHTML = "<br> <h5> {{ __('messages.spdf') }}   </h5><br> ";
  
    $(this).val('');

    setTimeout(function() {
      msg_return2.style.display = 'none';
    }, 5000); 
  }
});
</script>
<script>

    var msg_return= document.getElementById('msg_return');

  const MAX_FILE_SIZE = 1024 * 1024 * 5; // Maximum file size is 5MB

  const fileInputs = document.querySelectorAll('input[type="file"]');
  fileInputs.forEach(fileInput => {
    fileInput.addEventListener('change', event => {
      const file = event.target.files[0];

      if (file.size > MAX_FILE_SIZE) {
    
        msg_return.style.display = 'block';
        msg_return.innerHTML = "<br> <h5> {{ __('messages.taille') }}   </h5><br> " ;
        event.target.value = ''; // Clear the file input to prevent uploading

        setTimeout(function() {

          msg_return.style.display = 'none';

}, 5000); 

        
      }
    });
  });


</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
    
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
</body>
</html>

