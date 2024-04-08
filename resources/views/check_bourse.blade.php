<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
    <title>SUPTECH SANTE</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="author" content="colorlib.com">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    @if(Session::has('locale'))
        @if(Session::get('locale') == 'ar')
            <style>
             div h6 {

                text-align:right;
              }
              

            </style>
        @endif
    @endif
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





    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">
        <div class="col-lg-12" data-aos="fade-up" data-aos-delay="300">
        @if(session('status'))
                <div class="alert alert-primary">
                    {{ session('status') }}
                </div>
            @endif

          <form id="regForm" action="{{ route('CheckUserBourse' , ['slug' => App::getLocale()] ) }}" method="post" >
              @csrf
                <h1 id="register">{{__('messages.suivi')}}  </h1>
                <div class="all-steps" id="all-steps"> 
                  <span class="step"><i class="fa fa-user"></i></span> 
                  <span class="step"><i class="fa fa-calendar"></i></span> 
                </div>

                <div class="tab">
                  <h6> {{__('messages.cin2')}} </h6>
                    <p><input type="text" placeholder=" {{__('messages.cin2')}}" name="cin" required></p>    
                </div>
                
                <div class="tab">
                  <h6>{{__('messages.dn')}} </h6>
                    <p><input type="date" name="date_naissance"  required ></p>      
                </div>

                @error('CIN')
                      <div class="alert alert-danger">{{ $message }}</div>
                @enderror

                @error('date_naissance')
                      <div class="alert alert-danger">{{ $message }}</div>
                @enderror

                <div style="overflow:auto;" id="nextprevious">
                    
                      <button type="submit" style="float:right">{{__('messages.SuivantBourse')}}</button>
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
                window.location.href = "/fr/Suivi";
            } else if ($(this).val() == 'ar') {
                window.location.href = "/ar/Suivi";
            }
        });
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
</body>
</html>