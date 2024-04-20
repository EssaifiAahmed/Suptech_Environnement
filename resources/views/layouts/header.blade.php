<!-- ======= Top Bar ======= -->
@if (Session::has('locale'))
    @if (Session::get('locale') == 'ar')
        <html lang="ar" dir="rtl">
    @else
        <html lang="fr">
    @endif
@else
    <html lang="fr">
@endif
@if (Session::has('locale'))
    @if (Session::get('locale') == 'ar')
        <style>
            #tit {
                text-align: center;
            }

            h1,
            h3,
            h4,
            h5 {
                text-align: right;
            }

            #text {
                text-align: right;
            }

            #textFooter {
                text-align: right;
            }

            #List,
            .btee {
                float: right;
                content: ' ';
                clear: right;
                display: block;
            }

            h6 {
                text-align: left;
            }

            .contact-info {
                font-size: 13px;
            }

            .logoo {
                font-size: 13px;
            }
        </style>
    @else
        <style>
            .logoo {
                font-size: 13px;
            }

            .contact-info {
                font-size: 13px;
            }

            h1,
            h3,
            h4,
            h5 {
                text-align: left;
            }

            .tit {
                text-align: left;

            }

            #text {
                text-align: left;
            }

            #textFooter {
                text-align: left;
            }

            #List,
            .btee {
                float: left;
                content: ' ';
                clear: left;
                display: block;
            }
        </style>
    @endif
@endif


<section id="topbar" class="d-flex align-items-center" style="background-color: rgba(0, 123, 255, 0.2);">
    <div class="container d-flex justify-content-center justify-content-md-between">

        <div class="contact-info d-flex align-items-center">
            <i class="bi bi-envelope-fill"></i><a
                href="mailto:contact@suptech-environnement.ma">contact@suptech-environnement.ma</a>
            @if (Session::has('locale'))
                @if (Session::get('locale') == 'fr')
                    <i class="bi bi-phone-fill phone-icon"></i> +212 661 625 586
                @else
                    <i class="bi bi-phone-fill phone-icon"></i> 586 625 661 212+
                @endif
            @endif
        </div>




        <div class="social-links d-none d-md-block">
            <a href="https://www.facebook.com/suptechenvironnement" target="_blank" class="facebook" traget="_blank"> <i
                    class="bi bi-facebook"></i></a>
            <a href="https://www.instagram.com/suptech.environnement/" target="_blank" class="instagram"><i
                    class="bi bi-instagram"></i></a>
            <a href="https://www.linkedin.com/company/suptech-environnement/" target="_blank" class="linkedin"><i
                    class="bi bi-linkedin"></i></i></a>
        </div>
    </div>
</section>
<!-- ======= END Top Bar ======= -->

<!-- ======= Header ======= -->
<header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center">

        @if (Session::has('locale'))
            @if (Session::get('locale') == 'fr')
                <div class="logo">
                    <a href="/fr" class="logoo"> <img src="{{ asset('logo.webp') }}" width="160px" height="120"
                            alt="Logo suptech-environnement" class="img-fluid"> </a>
                    <!-- Uncomment below if you prefer to use an image logo -->
                    <!-- <a href="/"><img src="logo_img.png" alt="" class="img-fluid"></a>-->
                </div>
            @else
                <div class="logo">
                    <a href="/ar" class="logoo"><img src="{{ asset('logo.webp') }}"
                            alt="Logo suptech-environnement" class="img-fluid"> </a>
                    <!-- Uncomment below if you prefer to use an image logo -->
                    <!-- <a href="/"><img src="logo_img.png" alt="" class="img-fluid"></a>-->
                </div>
            @endif
        @endif



        <!-- ======= navbar ======= -->
        <nav id="navbar" class="navbar" style="margin:auto;">
            <ul>
                <!-- <li><a class="nav-link scrollto active" href="/">Home</a></li> -->
                <li class="dropdown"><a href="#"><span>{{ __('messages.formaions') }} </span> <i
                            class="bi bi-chevron-down"></i></a>
                    <ul>
                        <!--  <li><a href="/sectors">Filière</a></li> -->
                        <!--
              <li><a href="/sectors">Cycle Classes préparatoires intégrées</a></li>
              <li><a href="/sectors">Cycle licence</a></li>
              <li><a href="/sectors">Cycle ingénieur</a></li>
              <li><a href="/sectors">Cycle Master</a></li>
            -->

                        <li class="dropdown"><a
                                href="{{ route('cp', ['slug' => App::getLocale()]) }}"><span>{{ __('messages.ccpi') }}
                                </span> <i class="bi bi-chevron-right"></i></a>

                            <ul>
                                <li><a href="#">
                                        {{ __('messages.1ere') }}</a></li>
                                <li><a
                                        href="#">{{ __('messages.2eme') }}</a>
                                </li>
                            </ul>

                        </li>
                        <li class="dropdown"><a
                                href="{{ route('cl', ['slug' => App::getLocale()]) }}"><span>{{ __('messages.licence') }}</span>
                                <i class="bi bi-chevron-right"></i></a>

                            <ul>
                                <li><a href="{{ route('gaste', ['slug' => App::getLocale()]) }}">
                                        <div class="text-wrap"> {{ __('messages.gaste') }}</div>
                                    </a></li>
                                <li><a href="{{ route('tee', ['slug' => App::getLocale()]) }}">
                                        {{ __('messages.qhse') }}</a></li>
                                <li><a
                                        href="{{ route('ter', ['slug' => App::getLocale()]) }}">{{ __('messages.ser') }}</a>
                                </li>
                                <li><a
                                        href="{{ route('ter', ['slug' => App::getLocale()]) }}">{{ __('messages.gsilvh') }}</a>
                                </li>
                                <li class="dropdown">
                                    <a href="{{ route('ter', ['slug' => App::getLocale()]) }}"><span>{{ __('messages.mspsm') }}</span><i
                                            class="bi bi-chevron-left"></i></a>
                                    @if (app::getLocale() == 'ar')
                                        <ul style="margin-left: -170%; font-weight: bold;">
                                            <li><a href="">
                                                    {{ __('messages.mspsm_o1pi') }}
                                                </a></li>
                                            <li><a href="">
                                                    {{ __('messages.mspsm_o2tpo') }}
                                                </a></li>
                                        </ul>
                                    @elseif(app::getLocale() == 'fr')
                                        <ul style="margin-left: -235%; font-weight: bold;">
                                            <li><a href="">
                                                    {{ __('messages.mspsm_o1pi') }}
                                                </a></li>
                                            <li><a href="">
                                                    {{ __('messages.mspsm_o2tpo') }}
                                                </a></li>
                                        </ul>
                                    @endif
                                </li>
                            </ul>

                        </li>

                        <li class="dropdown"><a href="{{ route('ci', ['slug' => App::getLocale()]) }}"><span>
                                    {{ __('messages.ingenieur') }}</span> <i class="bi bi-chevron-right"></i></a>

                            <ul>
                                <li><a
                                        href="{{ route('gee', ['slug' => App::getLocale()]) }}">{{ __('messages.gee') }}</a>
                                </li>
                                {{-- <li><a
                                        href="{{ route('geer', ['slug' => App::getLocale()]) }}">{{ __('messages.gdeer') }}</a>
                                </li> --}}
                                <li><a
                                        href="{{ route('geer', ['slug' => App::getLocale()]) }}">{{ __('messages.gdse') }}</a>
                                </li>
                            </ul>


                        </li>

                        <li class="dropdown"><a
                                href="{{ route('cm', ['slug' => App::getLocale()]) }}"><span>{{ __('messages.cmm') }}</span>
                                <i class="bi bi-chevron-right"></i></a>

                            <ul>
                                <li><a href="{{ route('mee', ['slug' => App::getLocale()]) }}">
                                        <div class="text-wrap"> {{ __('messages.mgeaah') }}</div>
                                    </a></li>
                            </ul>

                        </li>

                        {{-- <li class="dropdown">
            <a>
                <span>{{ __('messages.fc') }}</span>
                <i class="bi bi-chevron-right"></i>
            </a>

            <ul>
                <li class="dropdown">
                    <a href="{{ route('cl', ['slug' => App::getLocale()]) }}">{{ __('messages.Bac3') }} <i class="bi bi-chevron-right"></i></a>
                    <ul>
                        <li><a href="{{ route('lpm', ['slug' => App::getLocale()]) }}" > {{ __('messages.lpmgbFC') }}</a></li>
                        <li><a href="{{ route('lpg', ['slug' => App::getLocale()]) }}" >{{ __('messages.lpgilFC') }}</a></li>
                        <li><a href="{{ route('lpi', ['slug' => App::getLocale()]) }}" ><div class="text-wrap"> {{ __('messages.lpidsdFC') }}</div></a></li>
                        <li><a href="{{ route('lps', ['slug' => App::getLocale()]) }}" > {{ __('messages.lpsgFC') }} </a></li>
                        <li><a href="{{ route('ltlbm', ['slug' => App::getLocale()]) }}" > {{ __('messages.ltlbmFC') }}</a></li>
                        <li><a href="{{ route('lip', ['slug' => App::getLocale()]) }}" >{{ __('messages.lipFC') }}</a></li>
                        <li><a href="{{ route('liar', ['slug' => App::getLocale()]) }}" ><div class="text-wrap"> {{ __('messages.liarFC') }}</div></a></li>
                        <li><a href="{{ route('liibo', ['slug' => App::getLocale()]) }}" > {{ __('messages.liiboFC') }} </a></li>
                  </ul>
                </li>
                <li class="dropdown">
                    <a href="{{ route('cm', ['slug' => App::getLocale()]) }}">{{ __('messages.Bac5') }} <i class="bi bi-chevron-right"></i></a>
                    <ul>
                          <li><a href="{{ route('masterd', ['slug' => App::getLocale()]) }}" >{{ __('messages.mdmarFC') }}</a></li>
                          <li><a href="{{ route('mastermaint', ['slug' => App::getLocale()]) }}" >{{ __('messages.mmgbFC') }}</a></li>
                          <li><a href="{{ route('mastere', ['slug' => App::getLocale()]) }}" >{{ __('messages.memtFC') }}</a></li>
                          
                    </ul>
                </li>

            </ul>

        </li> --}}

                        <!--               <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li>  -->

                    </ul>
                </li>


                <li class="dropdown"><a href="#"><span> {{ __('messages.preinscription') }}</span> <i
                            class="bi bi-chevron-down"></i></a>
                    <ul>
                        <li><a href="{{ route('inscription', ['slug' => App::getLocale()]) }}">
                                {{ __('messages.preinscription2') }}</a></li>
                        <li><a
                                href="{{ route('SuiviInscription', ['slug' => App::getLocale()]) }}">{{ __('messages.preinscription3') }}</a>
                        </li>
                    </ul>
                </li>


                <li class="dropdown"><a href="#"><span>{{ __('messages.bourse') }}</span> <i
                            class="bi bi-chevron-down"></i></a>
                    <ul>
                        <li><a
                                href="{{ route('check_bourse', ['slug' => App::getLocale()]) }}">{{ __('messages.DemandeBourse') }}</a>
                        </li>
                        <li><a
                                href="{{ route('Suivi', ['slug' => App::getLocale()]) }}">{{ __('messages.SuiviBourse') }}</a>
                        </li>
                    </ul>
                </li>


                {{-- <li class="dropdown"><a href="#"><span>{{ __('messages.concoursMsg') }}</span> <i
                            class="bi bi-chevron-down"></i></a>
                    <ul>
                        <li class="dropdown"><a
                                href="{{ route('cnc', ['slug' => App::getLocale()]) }}"><span>{{ __('messages.plancnc') }}</span></a>
                        </li>
                        <li class="dropdown"><a
                                href="{{ route('results', ['slug' => App::getLocale()]) }}"><span>{{ __('messages.res_cnc') }}</span></a>
                        </li>
                    </ul>
                </li> --}}

                <li><a class="nav-link scrollto" href="{{ route('galerie', ['slug' => App::getLocale()]) }}">
                        {{ __('messages.Galerie') }}</a></li>

                <li><a class="nav-link scrollto" href="{{ route('contact', ['slug' => App::getLocale()]) }}">
                        {{ __('messages.Contacts') }}</a></li>
                <li><a class="nav-link scrollto"
                        href="{{ route('documents_inscription', ['slug' => App::getLocale()]) }}">
                        {{ __("messages.document d'inscription") }}</a></li>

            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav>
        <!-- .navbar -->



        @if (Session::has('locale'))
            @if (Session::get('locale') == 'fr')
                <h4><a href="/fr"><img src="{{ asset('assets/img/logo.webp') }}" width="160px" height="120"
                            alt="" class="img-fluid"></a></h4>
            @else
                <h4><a href="/ar"><img src="{{ asset('assets/img/logo.webp') }}" width="160px" height="120"
                            alt="" class="img-fluid"></a></h4>
            @endif
        @endif


    </div>
</header><!-- End Header -->
