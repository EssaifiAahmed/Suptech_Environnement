
    <a href="https://api.whatsapp.com/send?phone=661625586" class="float" target="_blank">
        <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
  <path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z"/>
</svg>
    </a>

<div style="position: fixed; bottom: 20px; left: 30px; z-index: 99; font-size: 18px; border: none; outline: none; color: white; cursor: pointer; border-radius: 4px;">

<select class="form-control changeLang">
        <option value="fr" {{ session()->get('locale') == 'fr' ? 'selected' : '' }}>{{ __('messages.Fr') }}</option>
        <option value="ar" {{ session()->get('locale') == 'ar' ? 'selected' : '' }}>{{ __('messages.Ar') }}</option>
</select>

</div>

<footer id="footer">
  
  <div class="footer-top">
    <div class="container">
      <div class="row">


      <div class="col-lg-4 col-md-4 footer-links">
            <h4> {{ __('messages.nf') }} :  </h4>
              <ul>

                <li><i class="bx bx-chevron-right"></i> <a href="{{ route('cp', ['slug' => App::getLocale()]) }}"> {{ __('messages.ccpi') }} </a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="{{ route('ci', ['slug' => App::getLocale()]) }}"> {{ __('messages.ingenieur') }}</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="{{ route('cl', ['slug' => App::getLocale()]) }}">{{ __('messages.licence') }}</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="{{ route('cm', ['slug' => App::getLocale()]) }}"> {{ __('messages.cmm') }}</a></li>

              </ul>
          </div>


          <div class="col-lg-4 col-md-4 footer-info">
            <h4> {{ __('messages.ContactUs') }}:</h4>
              <p>
                <strong> {{ __('messages.adresse') }}:</strong> 
                <p> {{ __('messages.adresse1') }} </p>
                <p> {{ __('messages.adresse2') }} </p>
              </p>
                


              @if(Session::has('locale'))
    @if(Session::get('locale') == 'fr')

    <p> <br> <strong> {{ __('messages.telephone') }}: </strong>  +212 661 625 586 <br></p>

    @else
    <p> <br> <strong> {{ __('messages.telephone') }}: </strong>     586 625 661 212+ <br></p>

    @endif
@endif

                <p> <br><strong> {{ __('messages.email') }} :</strong> contact@suptech-environnement.ma<br></p>
                <br>

                <div class="social-links mt-3">
                    <a href="#"  target="_blank" class="facebook"  traget="_blank" > <i class="bi bi-facebook"></i></a>
                    <a href="#"  target="_blank"  class="instagram"><i class="bi bi-instagram"></i></a>
                    <a href="#"  target="_blank" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
                </div>


                
                </div>
                

             <!--   <div class="col-lg-4 col-md-4 footer-info">
                <img src="{{ asset('logo.png')}}" width="300px"   height="300px" alt="Logo suptech-sante" class="img-fluid">
                <img src="{{ asset('assets/img/logo.jpeg')}}" width="300px"   height="200px" alt="Logo suptech-sante" class="img-fluid">



                
                </div>
-->
                
      
        


       
      </div>
    </div>
  </div>

  <div class="container">
    <div class="copyright">
      </strong>SUPTECH ENVIRONNEMENT ©<script> 
                                document.write(new Date().getFullYear());
                            </script> {{ __('messages.CopyRightTwo') }}   
    </div>
  </div>


</footer>