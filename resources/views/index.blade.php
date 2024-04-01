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
    <meta content="Fondée par la Fondation de Recherche de Développement et d’Innovation en Sciences
     et Ingénierie à utilité publique, dont le président est le Conseiller de Sa Majesté Mohammed VI, 
     Monsieur David André Azoulay, l'École Supérieure de ..." name="description">
    <meta content="" name="keywords">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,600,600i,700,700i,900"
        rel="stylesheet">

    @include('layouts.MainCss')

    <!-- specific CSS File -->
    <style>
        .sector:hover {
            background-color: #93bde2 !important;
            color: white;
            animation-delay: 0.5s;
            transition: 0.5s;
        }

    </style>


    @if(Session::has('locale'))
        @if(Session::get('locale') == 'ar')
            <style>
              h2 {

                text-align:center;
              }
              .carousel-content h2{
                  text-align:right;
              }
                h1,
             
                h3,
                h4,
                h5 {
                    text-align: right;
                }

                .about .section-title p {
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
                
                .Bourse-container{
                    position:absolute; 
                    top:0; 
                    left:0%; 
                    margin-top:50px; 
                    margin-left:50px;
                }
                
                .cnc-container{
                    position:absolute; 
                    top:0; 
                    left:15%; 
                    margin-top:50px; 
                    margin-left:50px;
                }

                .cnc-container2{
                    position:absolute; 
                    top:180px; 
                    left:7%; 
                    margin-top:50px; 
                    margin-left:50px;
                }
                
                .glow-cnc{
                    margin-top:50px;
                    font-size: 17px;
                    color: #ffffff;
                    font-weight: 600;
                    padding:10px;
                    text-align:center;
        
                    -webkit-animation: glow 1s ease-in-out infinite alternate;
                    -moz-animation: glow 1s ease-in-out infinite alternate;
                    animation: glow 1s ease-in-out infinite alternate;
                }

                .glow-cnc2{
                    margin-top:50px;
                    font-size: 17px;
                    color: #ffffff;
                    font-weight: 600;
                    padding:10px;
                    text-align:center;
        
                    -webkit-animation: glow 1s ease-in-out infinite alternate;
                    -moz-animation: glow 1s ease-in-out infinite alternate;
                    animation: glow 1s ease-in-out infinite alternate;
                }
        
                .date-limite{
                    position: absolute;
                    left: 0;
                    right: 10%;
                    width: 100%;
                    bottom: 2%;
                    margin: auto;
                }
        
                .glow2 {
                    font-size: 20px;
                    color: #ffffff;
                    font-weight: 900;
                    padding:10px;
        
                    -webkit-animation: glow 1s ease-in-out infinite alternate;
                    -moz-animation: glow 1s ease-in-out infinite alternate;
                    animation: glow 1s ease-in-out infinite alternate;
                }
        
                .Bourse{
                    height: 200px;
                    width: 200px;
                    background-image: linear-gradient( 109.6deg, rgba(156,252,248,1) 11.2%, rgba(110,123,251,1) 91.1% );
                    border-radius: 50%;
                    box-shadow: rgba(50, 50, 93, 0.25) 0px 50px 100px -20px, rgba(0, 0, 0, 0.3) 0px 30px 60px -30px;
                }
        
                .glow {
                    margin-top:50px;
                    font-size: 30px;
                    color: #ffffff;
                    font-weight: 900;
                    padding:10px;
                    text-align:center;
        
                    -webkit-animation: glow 1s ease-in-out infinite alternate;
                    -moz-animation: glow 1s ease-in-out infinite alternate;
                    animation: glow 1s ease-in-out infinite alternate;
                }
        
                .img-date{
                    width:200px;
                    height:200px;
                }
        
                @media screen and (max-width: 767px) {
                    .Bourse-container{
                        position:absolute; 
                        top:0; 
                        left:0; 
                        margin-top:25px; 
                        margin-left:25px;
                    }
                    
                    .cnc-container{
                        position:absolute; 
                        top:-20px; 
                        left:25%; 
                        margin-right:50px;
                    }

                    .cnc-container2{
                        position:absolute; 
                        top:-20px; 
                        left:7%; 
                        margin-right:50px;
                    }
                    
                    .glow-cnc{
                        margin-top:10px;
                        font-size: 9px;
                        color: #ffffff;
                        font-weight: 600;
                        padding:10px;
                        text-align:center;
        
                        -webkit-animation: glow 1s ease-in-out infinite alternate;
                        -moz-animation: glow 1s ease-in-out infinite alternate;
                        animation: glow 1s ease-in-out infinite alternate;
                    }

                    .glow-cnc2{
                        margin-top:10px;
                        font-size: 9px;
                        color: #ffffff;
                        font-weight: 600;
                        padding:10px;
                        text-align:center;
        
                        -webkit-animation: glow 1s ease-in-out infinite alternate;
                        -moz-animation: glow 1s ease-in-out infinite alternate;
                        animation: glow 1s ease-in-out infinite alternate;
                    }
        
                    .date-limite{
                        position: absolute;
                        left: 0;
                        right: 10%;
                        width: 100%;
                        bottom: 2%;
                        margin: auto;
                    }
        
                    .glow2 {
                        font-size: 15px;
                        color: #ffffff;
                        font-weight: 900;
                        padding:10px;
        
                        -webkit-animation: glow 1s ease-in-out infinite alternate;
                        -moz-animation: glow 1s ease-in-out infinite alternate;
                        animation: glow 1s ease-in-out infinite alternate;
                    }
        
                    .Bourse{
                        height: 100px;
                        width: 100px;
                        background-image: linear-gradient( 109.6deg, rgba(156,252,248,1) 11.2%, rgba(110,123,251,1) 91.1% );
                        border-radius: 50%;
                        box-shadow: rgba(50, 50, 93, 0.25) 0px 50px 100px -20px, rgba(0, 0, 0, 0.3) 0px 30px 60px -30px;
                    }
        
                    .img-date{
                        width:100px;
                        height:100px;
                    }
        
                    .glow {
                        margin-top:25px;
                        font-size: 15px;
                        color: #ffffff;
                        font-weight: 900;
                        padding:10px;
                        text-align:center;
        
                        -webkit-animation: glow 1s ease-in-out infinite alternate;
                        -moz-animation: glow 1s ease-in-out infinite alternate;
                        animation: glow 1s ease-in-out infinite alternate;
                    }
                }
        
                @-webkit-keyframes glow {
                    from {
                    text-shadow: 0 0 2px #eeeeee, 0 0 4px #428bca, 0 0 8px #428bca, 0 0 12px #428bca, 
                                0 0 16px #fff, 0 0 20px #fff, 0 0 24px #fff;
                    }
                    to {
                    text-shadow: 0 0 5px #007bff, 0 0 10px #007bff, 0 0 15px #007bff, 0 0 20px #007bff,
                                0 0 25px #007bff, 0 0 30px #007bff, 0 0 35px #007bff;
                    }
                }

            </style>
        @else
            <style>
                .Bourse-container{
                    position:absolute; 
                    top:0; 
                    right:0; 
                    margin-top:50px; 
                    margin-right:50px;
                }
                
                .cnc-container{
                    position:absolute; 
                    top:0; 
                    right:15%; 
                    margin-top:50px; 
                    margin-right:50px;
                }

                .cnc-container2{
                    position:absolute; 
                    top:180px; 
                    right:8%; 
                    margin-top:50px; 
                    margin-right:50px;
                }
                
                .glow-cnc{
                    margin-top:50px;
                    font-size: 17px;
                    color: #ffffff;
                    font-weight: 600;
                    padding:10px;
                    text-align:center;
        
                    -webkit-animation: glow 1s ease-in-out infinite alternate;
                    -moz-animation: glow 1s ease-in-out infinite alternate;
                    animation: glow 1s ease-in-out infinite alternate;
                }

                .glow-cnc2{
                    margin-top:19px;
                    font-size: 18px;
                    color: #ffffff;
                    font-weight: 600;
                    padding:10px;
                    text-align:center;
        
                    -webkit-animation: glow 1s ease-in-out infinite alternate;
                    -moz-animation: glow 1s ease-in-out infinite alternate;
                    animation: glow 1s ease-in-out infinite alternate;
                }
        
                .date-limite{
                    position: absolute;
                    left: 30%;
                    right: 50%;
                    width: 100%;
                    bottom: 2%;
                    margin: auto;
                }
        
                .glow2 {
                    font-size: 20px;
                    color: #ffffff;
                    font-weight: 900;
                    padding:10px;
        
                    -webkit-animation: glow 1s ease-in-out infinite alternate;
                    -moz-animation: glow 1s ease-in-out infinite alternate;
                    animation: glow 1s ease-in-out infinite alternate;
                }
        
                .Bourse{
                    height: 200px;
                    width: 200px;
                    background-image: linear-gradient( 109.6deg, rgba(156,252,248,1) 11.2%, rgba(110,123,251,1) 91.1% );
                    border-radius: 50%;
                    box-shadow: rgba(50, 50, 93, 0.25) 0px 50px 100px -20px, rgba(0, 0, 0, 0.3) 0px 30px 60px -30px;
                }
        
                .glow {
                    margin-top:50px;
                    font-size: 30px;
                    color: #ffffff;
                    font-weight: 900;
                    padding:10px;
                    text-align:center;
        
                    -webkit-animation: glow 1s ease-in-out infinite alternate;
                    -moz-animation: glow 1s ease-in-out infinite alternate;
                    animation: glow 1s ease-in-out infinite alternate;
                }
        
                .img-date{
                    width:200px;
                    height:200px;
                }
        
                @media screen and (max-width: 767px) {
                    .Bourse-container{
                        position:absolute; 
                        top:0; 
                        right:0; 
                        margin-top:25px; 
                        margin-right:25px;
                    }
        
                    .date-limite{
                        position: absolute;
                        left: 15%;
                        right: 50%;
                        width: 100%;
                        bottom: 2%;
                        margin: auto;
                    }
        
                    .glow2 {
                        font-size: 15px;
                        color: #ffffff;
                        font-weight: 900;
                        padding:10px;
        
                        -webkit-animation: glow 1s ease-in-out infinite alternate;
                        -moz-animation: glow 1s ease-in-out infinite alternate;
                        animation: glow 1s ease-in-out infinite alternate;
                    }
        
                    .Bourse{
                        height: 100px;
                        width: 100px;
                        background-image: linear-gradient( 109.6deg, rgba(156,252,248,1) 11.2%, rgba(110,123,251,1) 91.1% );
                        border-radius: 50%;
                        box-shadow: rgba(50, 50, 93, 0.25) 0px 50px 100px -20px, rgba(0, 0, 0, 0.3) 0px 30px 60px -30px;
                    }
        
                    .img-date{
                        width:100px;
                        height:100px;
                    }
        
                    .glow {
                        margin-top:25px;
                        font-size: 15px;
                        color: #ffffff;
                        font-weight: 900;
                        padding:10px;
                        text-align:center;
        
                        -webkit-animation: glow 1s ease-in-out infinite alternate;
                        -moz-animation: glow 1s ease-in-out infinite alternate;
                        animation: glow 1s ease-in-out infinite alternate;
                    }
                    
                  /*  .cnc-container{
                        position:absolute; 
                        top:-20px; 
                        left:35%; 
                        margin-right:50px;
                    } 

                    .cnc-container2{
                        position:absolute; 
                        top:-20px; 
                        left:7%; 
                        margin-right:50px;
                    } */
                    
                      .cnc-container{
                        position:absolute; 
                        top:-20px; 
                        left:35%; 
                        margin-right:50px;
                    } 

                    .cnc-container2{
                        position:absolute; 
                        top:-20px; 
                        right:55%; 
                        margin-right:50px;
                    } 
                    
                    .glow-cnc{
                        margin-top:10px;
                        font-size: 9px;
                        color: #ffffff;
                        font-weight: 600;
                        padding:10px;
                        text-align:center;
        
                        -webkit-animation: glow 1s ease-in-out infinite alternate;
                        -moz-animation: glow 1s ease-in-out infinite alternate;
                        animation: glow 1s ease-in-out infinite alternate;
                    }

                    .glow-cnc2{
                        margin-top:10px;
                        font-size: 9px;
                        color: #ffffff;
                        font-weight: 600;
                        padding:10px;
                        text-align:center;
        
                        -webkit-animation: glow 1s ease-in-out infinite alternate;
                        -moz-animation: glow 1s ease-in-out infinite alternate;
                        animation: glow 1s ease-in-out infinite alternate;
                    }
                }
        
                @-webkit-keyframes glow {
                    from {
                    text-shadow: 0 0 2px #eeeeee, 0 0 4px #428bca, 0 0 8px #428bca, 0 0 12px #428bca, 
                                0 0 16px #fff, 0 0 20px #fff, 0 0 24px #fff;
                    }
                    to {
                    text-shadow: 0 0 5px #007bff, 0 0 10px #007bff, 0 0 15px #007bff, 0 0 20px #007bff,
                                0 0 25px #007bff, 0 0 30px #007bff, 0 0 35px #007bff;
                    }
                }
            </style>
        @endif
    @endif
    
    
    <style>
        .Bourse-container{
            position:absolute; 
            top:0; 
            right:0; 
            margin-top:50px; 
            margin-right:50px;
        }

        .Bourse{
            height: 200px;
            width: 200px;
            background-image: linear-gradient( 109.6deg, rgba(156,252,248,1) 11.2%, rgba(110,123,251,1) 91.1% );
            border-radius: 50%;
            box-shadow: rgba(50, 50, 93, 0.25) 0px 50px 100px -20px, rgba(0, 0, 0, 0.3) 0px 30px 60px -30px;
        }

        .glow {
            margin-top:50px;
            font-size: 30px;
            color: #ffffff;
            font-weight: 900;
            padding:10px;
            text-align:center;

            -webkit-animation: glow 1s ease-in-out infinite alternate;
            -moz-animation: glow 1s ease-in-out infinite alternate;
            animation: glow 1s ease-in-out infinite alternate;
        }

        .img-date{
            width:200px;
            height:200px;
        }

        @media screen and (max-width: 767px) {
            .Bourse-container{
                position:absolute; 
                top:0; 
                right:0; 
                margin-top:25px; 
                margin-right:25px;
            }

            .Bourse{
                height: 100px;
                width: 100px;
                background-image: linear-gradient( 109.6deg, rgba(156,252,248,1) 11.2%, rgba(110,123,251,1) 91.1% );
                border-radius: 50%;
                box-shadow: rgba(50, 50, 93, 0.25) 0px 50px 100px -20px, rgba(0, 0, 0, 0.3) 0px 30px 60px -30px;
            }

            .img-date{
                width:100px;
                height:100px;
            }

            .glow {
                margin-top:25px;
                font-size: 15px;
                color: #ffffff;
                font-weight: 900;
                padding:10px;
                text-align:center;

                -webkit-animation: glow 1s ease-in-out infinite alternate;
                -moz-animation: glow 1s ease-in-out infinite alternate;
                animation: glow 1s ease-in-out infinite alternate;
            }
        }

        @-webkit-keyframes glow {
            from {
            text-shadow: 0 0 2px #eeeeee, 0 0 4px #428bca, 0 0 8px #428bca, 0 0 12px #428bca, 
                        0 0 16px #fff, 0 0 20px #fff, 0 0 24px #fff;
            }
            to {
            text-shadow: 0 0 5px #007bff, 0 0 10px #007bff, 0 0 15px #007bff, 0 0 20px #007bff,
                        0 0 25px #007bff, 0 0 30px #007bff, 0 0 35px #007bff;
            }
        }
    </style>


</head>

<body>



    @include('layouts.header')


    <!-- ======= Hero Section ======= -->
    <section id="hero">
        <div class="hero-container">
            <div id="heroCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">

                <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

                <div class="carousel-inner" role="listbox">

                    <!-- Slide 1 -->
                    <div class="carousel-item active item-1" style="background-image: url('assets/img/back1.jpg');">
                        <div class="carousel-container">
                            <div class="carousel-content container">
                                <h2 class="animate__animated animate__fadeInDown">SUPTECH ENVIRONNEMENT</h2>
                                <h5 class="text-light">{{ __('messages.title') }}</h5>
                                <!--                 <p class="animate__animated animate__fadeInUp">Ut velit est quam dolor ad a aliquid qui aliquid. Sequi ea ut et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem mollitia ut. Similique ea voluptatem. Esse doloremque accusamus repellendus deleniti vel. Minus et tempore modi architecto.</p>  -->
                                <a href="#"
                                    class="btn-get-started animate__animated animate__fadeInUp scrollto btee">{{ __('messages.preinscription') }}</a>
                                    
                                    
                                <div class="animate__animated animate__fadeInUp Bourse-container">
                                    <a href="#"
                                        class="scrollto btee Bourse">
                                        <h1 class="glow-cnc" style="font-size: 17px;">Ouverture inscription pour le cycle classes préparatoires 2024/2025</h1>
                                    </a>
                                </div>
                                
                                <!-- <div class="animate__animated animate__fadeInUp cnc-container">-->
                                <!--    <a href="#"-->
                                <!--        class="scrollto btee Bourse">-->
                                <!--        <h1 class="glow-cnc">Démarrage de l'étude de class-->
                                <!--            préparatoire Essaouira sera le 2 Octobre 2023 à 9h:00</h1>-->
                                <!--    </a>-->
                                <!--</div>-->

                                <!--<div class="animate__animated animate__fadeInUp cnc-container2">-->
                                <!--    <a href="#"-->
                                <!--        class="scrollto btee Bourse">-->
                                <!--        <h1 class="glow-cnc2">Démarrage de l'étude de class-->
                                <!--            préparatoire Mohammedia sera le 4 Octobre 2023 à 9h:00</h1>-->
                                <!--    </a>-->
                                <!--</div>-->
                            
                            </div>
                        </div>
                    </div>

                    <!--<div class="carousel-item item-2">-->
                    <!--    <div class="carousel-container">-->
                    <!--        <div class="carousel-content container">-->
                    <!--            <h2 class="animate__animated animate__fadeInDown">SUPTECH SANTE</h2>-->
                    <!--            <div>-->
                    <!--                <h5 class="text-light">{{ __('messages.ccpi') }} </h5>-->
                    <!--                <h5 style="color:#fff">&nbsp;&nbsp;&nbsp; - {{ __('messages.1ere') }}</h5>-->
                    <!--                <h5 style="color:#fff">&nbsp;&nbsp;&nbsp; - {{ __('messages.2eme') }}</h5>-->
                    <!--            </div>-->
                                <!--                 <p class="animate__animated animate__fadeInUp">Ut velit est quam dolor ad a aliquid qui aliquid. Sequi ea ut et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem mollitia ut. Similique ea voluptatem. Esse doloremque accusamus repellendus deleniti vel. Minus et tempore modi architecto.</p>  -->
                    <!--            <a href="{{ route('inscription', ['slug' => App::getLocale()]) }}"-->
                    <!--                class="btn-get-started animate__animated animate__fadeInUp scrollto btee">{{ __('messages.preinscription') }}</a>-->

                    <!--            <div class="animate__animated animate__fadeInUp Bourse-container">-->
                    <!--                <a href="{{ route('inscription', ['slug' => App::getLocale()]) }}"-->
                    <!--                    class="scrollto btee Bourse">-->
                    <!--                    <h1 class="glow"> Demande de Bourse</h1>-->
                    <!--                </a>-->
                    <!--            </div>-->
                                
                             <!--   <div class="animate__animated animate__fadeInUp cnc-container">
                    <!--                <a href="{{ route('cnc', ['slug' => App::getLocale()]) }}"-->
                    <!--                    class="scrollto btee Bourse">-->
                    <!--                    <h1 class="glow-cnc">Concours d’accès aux Classes Préparatoires de SUPTECH SANTE 03 Juillet 2023 Voir menu concours</h1>-->
                    <!--                </a>-->
                    <!--            </div> -->-->
                                
                    <!--            <div class="animate__animated animate__fadeInUp cnc-container">-->
                    <!--                <a href="{{ route('results', ['slug' => App::getLocale()]) }}"-->
                    <!--                    class="scrollto btee Bourse">-->
                    <!--                    <h1 class="glow-cnc">Résultats du Concours d'Accès aux Classes Préparatoires de l'école Suptech Santé</h1>-->
                    <!--                </a>-->
                    <!--            </div>-->

                    <!--            <div class="animate__animated animate__fadeInUp cnc-container2">-->
                    <!--                <a href="{{ route('cnc', ['slug' => App::getLocale()]) }}"-->
                    <!--                    class="scrollto btee Bourse">-->
                    <!--                    <h1 class="glow-cnc2">3ème Session du Concours d’accès aux Classes Préparatoires de SUPTECH SANTE (avec la bourse) le 26 Juillet 2023</h1>-->
                    <!--                </a>-->
                    <!--            </div> -->
                                
                               <!-- <div class="date-limite glow2">
                    <!--                <p class="animate__animated animate__fadeInUp">-->
                    <!--                    Date limite d'inscription : 22 juillet pour les licences, masters et cycles d'ingénieur-->
                    <!--                </p>-->
                    <!--            </div> -->-->
                    <!--        </div>-->
                    <!--    </div>-->
                    <!--</div>-->

                    <!--<div class="carousel-item item-3">-->
                    <!--    <div class="carousel-container">-->
                    <!--        <div class="carousel-content container">-->
                    <!--            <h2 class="animate__animated animate__fadeInDown">SUPTECH SANTE</h2>-->
                    <!--            <div>-->
                    <!--                <h5 class="text-light">{{ __('messages.licence') }} </h5>-->
                    <!--                <h5 style="color:#fff">&nbsp;&nbsp;&nbsp; - {{ __('messages.lpmgb') }}</h5>-->
                    <!--                <h5 style="color:#fff">&nbsp;&nbsp;&nbsp; - {{ __('messages.lpgil') }}</h5>-->
                    <!--                <h5 style="color:#fff">&nbsp;&nbsp;&nbsp; - {{ __('messages.lpidsd') }}</h5>-->
                    <!--                <h5 style="color:#fff">&nbsp;&nbsp;&nbsp; - {{ __('messages.lpsg') }}</h5>-->
                    <!--                <h5 style="color:#fff">&nbsp;&nbsp;&nbsp; - {{ __('messages.lip') }}</h5>-->
                    <!--                <h5 style="color:#fff">&nbsp;&nbsp;&nbsp; - {{ __('messages.liibo') }}</h5>-->
                    <!--                <h5 style="color:#fff">&nbsp;&nbsp;&nbsp; - {{ __('messages.liar') }}</h5>-->
                    <!--                <h5 style="color:#fff">&nbsp;&nbsp;&nbsp; - {{ __('messages.ltlbm') }}</h5>-->
                    <!--            </div>-->
                                <!--                 <p class="animate__animated animate__fadeInUp">Ut velit est quam dolor ad a aliquid qui aliquid. Sequi ea ut et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem mollitia ut. Similique ea voluptatem. Esse doloremque accusamus repellendus deleniti vel. Minus et tempore modi architecto.</p>  -->
                    <!--            <a href="{{ route('inscription', ['slug' => App::getLocale()]) }}"-->
                    <!--                class="btn-get-started animate__animated animate__fadeInUp scrollto btee">{{ __('messages.preinscription') }}</a>-->

                    <!--            <div class="animate__animated animate__fadeInUp Bourse-container">-->
                    <!--                <a href="{{ route('inscription', ['slug' => App::getLocale()]) }}"-->
                    <!--                    class="scrollto btee Bourse">-->
                    <!--                    <h1 class="glow"> Demande de Bourse</h1>-->
                    <!--                </a>-->
                    <!--            </div>-->
                                
                             <!--   <div class="animate__animated animate__fadeInUp cnc-container">
                    <!--                <a href="{{ route('cnc', ['slug' => App::getLocale()]) }}"-->
                    <!--                    class="scrollto btee Bourse">-->
                    <!--                    <h1 class="glow-cnc">Concours d’accès aux Classes Préparatoires de SUPTECH SANTE 03 Juillet 2023 Voir menu concours</h1>-->
                    <!--                </a>-->
                    <!--            </div> -->-->
                                
                    <!--            <div class="animate__animated animate__fadeInUp cnc-container">-->
                    <!--                <a href="{{ route('results', ['slug' => App::getLocale()]) }}"-->
                    <!--                    class="scrollto btee Bourse">-->
                    <!--                    <h1 class="glow-cnc">Résultats du Concours d'Accès aux Classes Préparatoires de l'école Suptech Santé</h1>-->
                    <!--                </a>-->
                    <!--            </div>-->

                    <!--            <div class="animate__animated animate__fadeInUp cnc-container2">-->
                    <!--                <a href="{{ route('cnc', ['slug' => App::getLocale()]) }}"-->
                    <!--                    class="scrollto btee Bourse">-->
                    <!--                    <h1 class="glow-cnc2">3ème Session du Concours d’accès aux Classes Préparatoires de SUPTECH SANTE (avec la bourse) le 26 Juillet 2023</h1>-->
                    <!--                </a>-->
                    <!--            </div> -->
                                
                               <!-- <div class="date-limite glow2">
                    <!--                <p class="animate__animated animate__fadeInUp">-->
                    <!--                    Date limite d'inscription : 22 juillet pour les licences, masters et cycles d'ingénieur-->
                    <!--                </p>-->
                    <!--            </div> -->-->
                    <!--        </div>-->
                    <!--    </div>-->
                    <!--</div>-->
                    
                    <!--<div class="carousel-item item-4">-->
                    <!--    <div class="carousel-container">-->
                    <!--        <div class="carousel-content container">-->
                    <!--            <h2 class="animate__animated animate__fadeInDown">SUPTECH SANTE</h2>-->
                    <!--            <div>-->
                    <!--                <h5 class="text-light">{{ __('messages.cmm') }}</h5>-->
                    <!--                <h5 style="color:#fff">&nbsp;&nbsp;&nbsp; - {{ __('messages.mdmar') }}</h5>-->
                    <!--                <h5 style="color:#fff">&nbsp;&nbsp;&nbsp; - {{ __('messages.mmgb') }}</h5>-->
                    <!--                <h5 style="color:#fff">&nbsp;&nbsp;&nbsp; - {{ __('messages.memt') }}</h5>-->
                    <!--            </div>-->
                                <!--                 <p class="animate__animated animate__fadeInUp">Ut velit est quam dolor ad a aliquid qui aliquid. Sequi ea ut et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem mollitia ut. Similique ea voluptatem. Esse doloremque accusamus repellendus deleniti vel. Minus et tempore modi architecto.</p>  -->
                    <!--            <a href="{{ route('inscription', ['slug' => App::getLocale()]) }}"-->
                    <!--                class="btn-get-started animate__animated animate__fadeInUp scrollto btee">{{ __('messages.preinscription') }}</a>-->

                    <!--            <div class="animate__animated animate__fadeInUp Bourse-container">-->
                    <!--                <a href="{{ route('inscription', ['slug' => App::getLocale()]) }}"-->
                    <!--                    class="scrollto btee Bourse">-->
                    <!--                    <h1 class="glow"> Demande de Bourse</h1>-->
                    <!--                </a>-->
                    <!--            </div>-->
                                
                             <!--   <div class="animate__animated animate__fadeInUp cnc-container">
                    <!--                <a href="{{ route('cnc', ['slug' => App::getLocale()]) }}"-->
                    <!--                    class="scrollto btee Bourse">-->
                    <!--                    <h1 class="glow-cnc">Concours d’accès aux Classes Préparatoires de SUPTECH SANTE 03 Juillet 2023 Voir menu concours</h1>-->
                    <!--                </a>-->
                    <!--            </div> -->-->
                                
                    <!--           <div class="animate__animated animate__fadeInUp cnc-container">-->
                    <!--                <a href="{{ route('results', ['slug' => App::getLocale()]) }}"-->
                    <!--                    class="scrollto btee Bourse">-->
                    <!--                    <h1 class="glow-cnc">Résultats du Concours d'Accès aux Classes Préparatoires de l'école Suptech Santé</h1>-->
                    <!--                </a>-->
                    <!--            </div>-->

                    <!--            <div class="animate__animated animate__fadeInUp cnc-container2">-->
                    <!--                <a href="{{ route('cnc', ['slug' => App::getLocale()]) }}"-->
                    <!--                    class="scrollto btee Bourse">-->
                    <!--                    <h1 class="glow-cnc2">3ème Session du Concours d’accès aux Classes Préparatoires de SUPTECH SANTE (avec la bourse) le 26 Juillet 2023</h1>-->
                    <!--                </a>-->
                    <!--            </div> -->
                                
                            <!--    <div class="date-limite glow2">
                    <!--                <p class="animate__animated animate__fadeInUp">-->
                    <!--                    Date limite d'inscription : 22 juillet pour les licences, masters et cycles d'ingénieur-->
                    <!--                </p>-->
                    <!--            </div> -->-->
                    <!--        </div>-->
                    <!--    </div>-->
                    <!--</div>-->

                    <!--<div class="carousel-item item-5">-->
                    <!--    <div class="carousel-container">-->
                    <!--        <div class="carousel-content container">-->
                    <!--            <h2 class="animate__animated animate__fadeInDown">SUPTECH SANTE</h2>-->
                    <!--            <div>-->
                    <!--                <h5 class="text-light">{{ __('messages.ingenieur') }}</h5>-->
                    <!--                <h5 style="color:#fff">&nbsp;&nbsp;&nbsp; - {{ __('messages.gb') }}</h5>-->
                    <!--                <h5 style="color:#fff">&nbsp;&nbsp;&nbsp; - {{ __('messages.gdias') }}</h5>-->
                    <!--            </div>-->
                                <!--                 <p class="animate__animated animate__fadeInUp">Ut velit est quam dolor ad a aliquid qui aliquid. Sequi ea ut et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem mollitia ut. Similique ea voluptatem. Esse doloremque accusamus repellendus deleniti vel. Minus et tempore modi architecto.</p>  -->
                    <!--            <a href="{{ route('inscription', ['slug' => App::getLocale()]) }}"-->
                    <!--                class="btn-get-started animate__animated animate__fadeInUp scrollto btee">{{ __('messages.preinscription') }}</a>-->

                    <!--            <div class="animate__animated animate__fadeInUp Bourse-container">-->
                    <!--                <a href="{{ route('inscription', ['slug' => App::getLocale()]) }}"-->
                    <!--                    class="scrollto btee Bourse">-->
                    <!--                    <h1 class="glow"> Demande de Bourse</h1>-->
                    <!--                </a>-->
                    <!--            </div>-->
                                
                             <!--   <div class="animate__animated animate__fadeInUp cnc-container">
                    <!--                <a href="{{ route('cnc', ['slug' => App::getLocale()]) }}"-->
                    <!--                    class="scrollto btee Bourse">-->
                    <!--                    <h1 class="glow-cnc">Concours d’accès aux Classes Préparatoires de SUPTECH SANTE 03 Juillet 2023 Voir menu concours</h1>-->
                    <!--                </a>-->
                    <!--            </div> -->-->
                                
                    <!--            <div class="animate__animated animate__fadeInUp cnc-container">-->
                    <!--                <a href="{{ route('results', ['slug' => App::getLocale()]) }}"-->
                    <!--                    class="scrollto btee Bourse">-->
                    <!--                    <h1 class="glow-cnc">Résultats du Concours d'Accès aux Classes Préparatoires de l'école Suptech Santé</h1>-->
                    <!--                </a>-->
                    <!--            </div>-->

                    <!--            <div class="animate__animated animate__fadeInUp cnc-container2">-->
                    <!--                <a href="{{ route('cnc', ['slug' => App::getLocale()]) }}"-->
                    <!--                    class="scrollto btee Bourse">-->
                    <!--                    <h1 class="glow-cnc2">3ème Session du Concours d’accès aux Classes Préparatoires de SUPTECH SANTE (avec la bourse) le 26 Juillet 2023</h1>-->
                    <!--                </a>-->
                    <!--            </div> -->
                                
                               <!-- <div class="date-limite glow2">
                    <!--                <p class="animate__animated animate__fadeInUp">-->
                    <!--                    Date limite d'inscription : 22 juillet pour les licences, masters et cycles d'ingénieur-->
                    <!--                </p>-->
                    <!--            </div> -->-->
                    <!--        </div>-->
                    <!--    </div>-->
                    <!--</div>-->


                    <!--<a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">-->
                    <!--    <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>-->
                    <!--</a>-->

                    <!--<a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">-->
                    <!--    <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>-->
                    <!--</a>-->
                </div>

            </div>
        </div>
    </section>

    <!-- End Hero -->



    <main id="main">
    
        <!-- ======= About Us Section ======= -->
        <section id="about" class="about">
            <div class="container" data-aos="fade-up">

                <div class="row ">
                    <div class="col-lg-6 mt-5 mb-5">
                        <img src="{{ asset('assets/img/about.webp') }}" class="img-fluid " alt="">

                    </div>

                    <div class="col-lg-6 d-flex flex-column justify-content-center mb-2 mt-5">

                        <div class="section-title">

                            <h2>{{ __('messages.ape') }} </h2>
                            <h2>&nbsp; </h2>
                            <p><em>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;{{ __('messages.ape1') }} </em>
                            </p> <br>

                            <p><em>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; {{ __('messages.ape2') }}<br>
                                    <a href="#" id="read-more"> {{__('messages.readmore')}}</a>


                        </div>
                    </div>
                </div>
                <div class="row">

                    <div  class="col-lg-12 d-flex flex-column justify-content-center ">
                        <div class="more section-title">
                            <em>
                                <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;{{ __('messages.ape3') }}

                            </em></p>
                            <br>
                            <p><em>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; {{ __('messages.ape4') }}</em>
                            </p>
                        </div>




                    </div>
                </div>
            </div>



        </section>

        <!-- End About Us Section -->
        
        <!-- ======= Inscription Section ======= -->
        <section id="about" class="about">
            <div class="container" data-aos="fade-up">
                <div class="row no-gutters" style="display: flex; justify-content: center; align-items: center; padding-top:30px;">

                    <h2 class="text-center" style="font-size: 32px; font-weight: 600; color: #5c768d;">{{ __('messages.Tutoriel') }}</h2>
                    <h4 class="text-center">{{ __('messages.TutorielText') }}</h4>

                    <div class="col-lg-8 video-box">
                        <img src="{{ asset('assets/Tutoriel/img_video.png') }}" class="img-fluid mt-5" alt="">

                        <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                            <div class="portfolio-wrap">
                                <a href="{{ asset('assets/Tutoriel/inscription_video.mp4') }}" class="portfolio-lightbox play-btn mb-4"></a>
                            </div>
                        </div>
                    </div>
                    
                    <h4 class="text-center mt-5">{{ __('messages.TutorielText1') }}</h4>
                    
                    <div class="col-lg-8 video-box">
                        <img src="{{ asset('assets/Tutoriel/img_video.png') }}" class="img-fluid mt-5" alt="">

                        <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                            <div class="portfolio-wrap">
                                <a href="{{ asset('assets/Tutoriel/inscription_video_2.mp4') }}" class="portfolio-lightbox play-btn mb-4"></a>
                            </div>
                        </div>
                    </div>
                    
                    <h4 class="text-center mt-5">{{ __('messages.TutorielText2') }}</h4>
                    
                    <div class="col-lg-8 video-box">
                        <img src="{{ asset('assets/Tutoriel/img_video.png') }}" class="img-fluid mt-5" alt="">

                        <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                            <div class="portfolio-wrap">
                                <a href="{{ asset('assets/Tutoriel/inscription_video_3.mp4') }}" class="portfolio-lightbox play-btn mb-4"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Inscription Section -->



        <section class="counts section-bg">
            <div class="container">
                <h2> {{ __('messages.fs') }}: </h2>
                <div class="row mb-4"> </div>
                <div class="row">

                    <div class="col-lg-6 col-md-6 text-center  " data-aos="fade-up">
                        <a
                            href="{{ route('cp', ['slug' => App::getLocale()]) }}">
                            <div class="count-box sector">
                                <i class="bi bi-simple-smile"></i>
                                <h3>{{ __('messages.ccpi') }} </h3>
                            </div>
                        </a>
                    </div>

                    <div class="col-lg-6 col-md-6 text-center " data-aos="fade-up">
                        <a
                            href="{{ route('ci', ['slug' => App::getLocale()]) }}">
                            <div class="count-box sector">
                                <i class="bi bi-simple-smile" style="color: #20b38e;"></i>
                                <h3>{{ __('messages.ingenieur') }}</h3>
                            </div>
                        </a>
                    </div>

                    <div class="col-lg-6 col-md-6 text-center " data-aos="fade-up">
                        <a
                            href="{{ route('cl', ['slug' => App::getLocale()]) }}">
                            <div class="count-box sector">
                                <i class="bi bi-simple-smile" style="color: #20b38e;"></i>
                                <h3>{{ __('messages.licence') }}</h3>
                            </div>
                        </a>
                    </div>

                    <div class="col-lg-6 col-md-6 text-center " data-aos="fade-up">
                        <a
                            href="{{ route('cm', ['slug' => App::getLocale()]) }}">
                            <div class="count-box sector">
                                <i class="bi bi-simple-smile" style="color: #20b38e;"></i>
                                <h3> {{ __('messages.cmm') }}</h3>
                            </div>
                        </a>
                    </div>

                    {{-- <div class="col-lg-12 col-md-6 text-center " data-aos="fade-up">
                        <a
                            href="{{ route('fc', ['slug' => App::getLocale()]) }}">
                            <div class="count-box sector">
                                <i class="bi bi-simple-smile" style="color: #20b38e;"></i>
                                <h3>{{ __('messages.fc') }}</h3>
                            </div>
                        </a>
                    </div> --}}

                </div>

            </div>
        </section><!-- End sectors Section -->


        <!--   Select the language -->

        <div
            style="position: fixed; bottom: 20px; left: 30px; z-index: 99; font-size: 18px; border: none; outline: none; color: white; cursor: pointer; border-radius: 4px;">

            <select class="form-control changeLang">
                <option value="fr"
                    {{ session()->get('locale') == 'fr' ? 'selected' : '' }}>
                    {{ __('Fr') }}</option>
                <option value="ar"
                    {{ session()->get('locale') == 'ar' ? 'selected' : '' }}>
                    {{ __('Ar') }}</option>
            </select>

        </div>

        <!--  End  Select the language -->

    </main><!-- End #main -->

    @include('layouts.footer')

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    @include('layouts.MainJs')
    <script>
        var content = document.getElementById("content");
        var more = document.getElementsByClassName("more");
        var readMore = document.getElementById("read-more");

        for (var i = 0; i < more.length; i++) {
            more[i].style.display = "none";
        }

        readMore.addEventListener("click", function (e) {
            e.preventDefault();
            for (var i = 0; i < more.length; i++) {
                more[i].style.display = "block";
            }
            readMore.style.display = "none";
        });

    </script>
    <!--  Script  change the language -->
    <script>
        $(".changeLang").change(function () {
            if ($(this).val() == 'fr') {
                window.location.href = "/fr";
            } else if ($(this).val() == 'ar') {
                window.location.href = "/ar";
            }
        });

        var InscriptionDiv = document.querySelectorAll(".carousel-item");
        for (let i = 0; i < InscriptionDiv.length; i++) {
            InscriptionDiv[i].style.cursor = 'pointer';
            InscriptionDiv[i].onclick = function () {
                window.location.href = "/{{ session()->get('locale') }}/inscription";
            };
        }

    </script>

    <!--  End Script  change the language -->


</body>

</html>
