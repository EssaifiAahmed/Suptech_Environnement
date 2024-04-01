<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>SUPTECH SANTE - Control panel</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/metisMenu.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/slicknav.min.css') }}">

    <!-- amcharts css -->
    <link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css"
        media="all" />
    <!-- Start datatable css -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.18/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css"
        href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.bootstrap.min.css">
    <link rel="stylesheet" type="text/css"
        href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.jqueryui.min.css">


    <link rel="stylesheet" href="{{ asset('assets/css/typography.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/default-css.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/styles.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

    <!-- modernizr css -->
    <script src="{{ asset('assets/js/vendor/modernizr-2.8.3.min.js') }}"></script>

</head>

<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <!-- preloader area start -->
    <div id="preloader">
        <div class="loader"></div>
    </div>
    <!-- preloader area end -->
    <!-- page container area start -->
    <div class="page-container">
        <!-- sidebar menu area start -->
        @include('layouts.sidebar')
        <!-- sidebar menu area end -->
        <!-- main content area start -->
        <div class="main-content">
            <!-- header area start -->
            <div class="header-area">
                <div class="row align-items-center">
                    <!-- nav and search button -->
                    <div class="col-md-6 col-sm-8 clearfix">
                        <div class="nav-btn pull-left">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>

                    </div>
                    <!-- profile info & task notification -->
                    <div class="col-md-6 col-sm-4 clearfix">
                        <ul class="notification-area pull-right">

                            <li>
                                <a href="{{ route('logout', ['slug' => App::getLocale()]) }}"><i
                                        class="ti-power-off"></i></a>
                            </li>
                            <li class="settings-btn">
                                <i class="ti-settings"></i>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- header area end -->
            <!-- page title area start -->
            <div class="page-title-area">
                <div class="row align-items-center">
                    <div class="col-sm-6">
                        <div class="breadcrumbs-area clearfix">
                            <h4 class="page-title pull-left">Dashboard</h4>
                            <ul class="breadcrumbs pull-left">


                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6 clearfix">
                        <div class="user-profile pull-right">

                            <h4 class="user-name dropdown-toggle"> Admin </h4>

                        </div>
                    </div>
                </div>
                <!-- page title area end -->
                <div class="main-content-inner">
                    <div class="row">
                        <h3>Bonjour Administrateur</h3>
                        <div class="col-lg-12">

                            <div class="row">

                                <div class="col-md-4 mt-md-5 mb-5">
                                    <div class="card">
                                        <div class="seo-fact sbg2">
                                            <div class="p-4 d-flex justify-content-between align-items-center">
                                                <div class="seofct-icon"><i class="ti-user"></i>Nombre de
                                                    Pré-inscriptions :</div>
                                                <h2>{{ $usersCount }} </h2>
                                            </div>
                                            <canvas id="seolinechart2" height="50"></canvas>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4 mt-md-5 mb-5">
                                    <div class="card">
                                        <div class="seo-fact sbg2">
                                            <div class="p-4 d-flex justify-content-between align-items-center">
                                                <div class="seofct-icon"><i class="ti-user"></i>Nombre de bourses
                                                    demandées :</div>
                                                <h2>{{ $BourseCount }} </h2>
                                            </div>
                                            <canvas id="seolinechart2" height="50"></canvas>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4 mt-5 mb-5">
                                    <div class="card">
                                        <div class="seo-fact sbg1">
                                            <div class="p-4 d-flex justify-content-between align-items-center">
                                                <div class="seofct-icon"><i class="ti-email"></i>Nombre de Messages :
                                                </div>
                                                <h2>{{ $mssgCount }}</h2>
                                            </div>
                                            <canvas id="seolinechart1" height="50"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>


                        <div class="row">
                            <h4>Réseaux sociaux:</h4>

                            <div class="col-lg-12">

                                <div class="row">
                                    <div class="col-md-3 mt-md-5 mb-3">
                                        <div class="card">
                                            <div class="seo-fact sbg2">
                                                <div class="p-4 d-flex justify-content-between align-items-center">
                                                    <div class="seofct-icon"><i class="ti-user"></i>Abdellah Abujad :
                                                    </div>
                                                    <h2>{{ $AbjudaResultat->count() }} </h2>
                                                </div>
                                                <canvas id="seolinechart2" height="50"></canvas>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-3 mt-5 mb-3">
                                        <div class="card">
                                            <div class="seo-fact sbg2">
                                                <div class="p-4 d-flex justify-content-between align-items-center">
                                                    <div class="seofct-icon"><i class="ti-user"></i>Instagram :</div>
                                                    <h2>{{ $instaResultat->count() }}</h2>
                                                </div>
                                                <canvas id="seolinechart1" height="50"></canvas>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-3 mt-5 mb-3">
                                        <div class="card">
                                            <div class="seo-fact sbg2">
                                                <div class="p-4 d-flex justify-content-between align-items-center">
                                                    <div class="seofct-icon"><i class="ti-user"></i>Facebook :</div>
                                                    <h2>{{ $FaceResultat->count() }}</h2>
                                                </div>
                                                <canvas id="seolinechart1" height="50"></canvas>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-3 mt-5 mb-3">
                                        <div class="card">
                                            <div class="seo-fact sbg2">
                                                <div class="p-4 d-flex justify-content-between align-items-center">
                                                    <div class="seofct-icon"><i class="ti-user"></i>Linkedin :</div>
                                                    <h2>{{ $LinkdinResultat->count() }}</h2>
                                                </div>
                                                <canvas id="seolinechart1" height="50"></canvas>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <h3 style="margin-bottom:50px;">Inscriptions par Filières</h3>

                            <div class="row">
                                <h4>Classes préparatoires intégrées:</h4>

                                <div class="col-lg-12">

                                    <div class="row">
                                        <div class="col-md-6 mt-md-5 mb-3">
                                            <div class="card">
                                                <div class="seo-fact sbg2">
                                                    <div class="p-4 d-flex justify-content-between align-items-center">
                                                        <div class="seofct-icon"><i class="ti-user"></i>Classes
                                                            préparatoires intégrées: 1ère année :</div>
                                                        <h2>{{ $Prepa1->count() }} </h2>
                                                    </div>
                                                    <canvas id="seolinechart2" height="50"></canvas>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-6 mt-5 mb-3">
                                            <div class="card">
                                                <div class="seo-fact sbg2">
                                                    <div class="p-4 d-flex justify-content-between align-items-center">
                                                        <div class="seofct-icon"><i class="ti-user"></i>Classes
                                                            préparatoires intégrées: 2ème année :</div>
                                                        <h2>{{ $Prepa2->count() }}</h2>
                                                    </div>
                                                    <canvas id="seolinechart1" height="50"></canvas>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <h4>Cycle ingénieur:</h4>

                                    <div class="col-lg-12">
                                        <div class="row">
                                            <div class="col-md-6 mt-md-5 mb-3">
                                                <div class="card">
                                                    <div class="seo-fact sbg2">
                                                        <div
                                                            class="p-4 d-flex justify-content-between align-items-center">
                                                            <div class="seofct-icon"><i class="ti-user"></i>Génie de
                                                                l'Eau et de l'Environnement :</div>
                                                            <h2>{{ $CycleIng1->count() }} </h2>
                                                        </div>
                                                        <canvas id="seolinechart2" height="50"></canvas>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-6 mt-5 mb-3">
                                                <div class="card">
                                                    <div class="seo-fact sbg2">
                                                        <div
                                                            class="p-4 d-flex justify-content-between align-items-center">
                                                            <div class="seofct-icon"><i class="ti-user"></i>Génie
                                                                Digitale Energétique et Energies Renouvelables :</div>
                                                            <h2>{{ $CycleIng2->count() }}</h2>
                                                        </div>
                                                        <canvas id="seolinechart1" height="50"></canvas>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 mt-5 mb-3">
                                                <div class="card">
                                                    <div class="seo-fact sbg2">
                                                        <div
                                                            class="p-4 d-flex justify-content-between align-items-center">
                                                            <div class="seofct-icon"><i class="ti-user"></i>Génie
                                                                Digitale des Systèmes Energétique :</div>
                                                            <h2>{{ $CycleIng3->count() }}</h2>
                                                        </div>
                                                        <canvas id="seolinechart1" height="50"></canvas>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <h4>Master:</h4>
                                    <div class="col-lg-12">
                                        <div class="row">
                                            <div class="col-md-10 mt-md-5 mb-3">
                                                <div class="card">
                                                    <div class="seo-fact sbg2">
                                                        <div
                                                            class="p-4 d-flex justify-content-between align-items-center">
                                                            <div class="seofct-icon"><i class="ti-user"></i>Master en
                                                                Génie de l'Eau, de l'Assainissement et des Aménagements
                                                                Hydroagricoles :</div>
                                                            <h2>{{ $Master1->count() }} </h2>
                                                        </div>
                                                        <canvas id="seolinechart2" height="50"></canvas>
                                                    </div>
                                                </div>
                                            </div>

                                            {{-- <div class="col-md-4 mt-5 mb-3">
                                                <div class="card">
                                                    <div class="seo-fact sbg2">
                                                        <div
                                                            class="p-4 d-flex justify-content-between align-items-center">
                                                            <div class="seofct-icon"><i class="ti-user"></i>Master en
                                                                dispositifs médicaux et affaires réglementaires :</div>
                                                            <h2>{{ $Master2->count() }}</h2>
                                                        </div>
                                                        <canvas id="seolinechart1" height="50"></canvas>
                                                    </div>
                                                </div>
                                            </div> --}}

                                            {{-- <div class="col-md-4 mt-5 mb-3">
                                                <div class="card">
                                                    <div class="seo-fact sbg2">
                                                        <div
                                                            class="p-4 d-flex justify-content-between align-items-center">
                                                            <div class="seofct-icon"><i class="ti-user"></i>Master en
                                                                entreprenariat et Management Technologique :</div>
                                                            <h2>{{ $Master3->count() }}</h2>
                                                        </div>
                                                        <canvas id="seolinechart1" height="50"></canvas>
                                                    </div>
                                                </div>
                                            </div> --}}
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <h4>Licence:</h4>


                                    <div class="col-lg-12">
                                        <div class="row">
                                            <div class="col-md-6 mt-md-5 mb-3">
                                                <div class="card">
                                                    <div class="seo-fact sbg2">
                                                        <div
                                                            class="p-4 d-flex justify-content-between align-items-center">
                                                            <div class="seofct-icon"><i class="ti-user"></i>Licence en
                                                                Génie de l'Assainissement et des Systèmes de Traitement
                                                                des Eaux :</div>
                                                            <h2>{{ $LGASTE->count() }} </h2>
                                                        </div>
                                                        <canvas id="seolinechart2" height="50"></canvas>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-6 mt-5 mb-3">
                                                <div class="card">
                                                    <div class="seo-fact sbg2">
                                                        <div
                                                            class="p-4 d-flex justify-content-between align-items-center">
                                                            <div class="seofct-icon"><i class="ti-user"></i>Licence en
                                                                Qualité, Hygiène, Sécurité et Environnement :</div>
                                                            <h2>{{ $LQHSE->count() }}</h2>
                                                        </div>
                                                        <canvas id="seolinechart1" height="50"></canvas>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-6 mt-5 mb-3">
                                                <div class="card">
                                                    <div class="seo-fact sbg2">
                                                        <div
                                                            class="p-4 d-flex justify-content-between align-items-center">
                                                            <div class="seofct-icon"><i class="ti-user"></i>Licence en
                                                                smart Energies Renouvelables :</div>
                                                            <h2>{{ $LSER->count() }}</h2>
                                                        </div>
                                                        <canvas id="seolinechart1" height="50"></canvas>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-6 mt-5 mb-3">
                                                <div class="card">
                                                    <div class="seo-fact sbg2">
                                                        <div
                                                            class="p-4 d-flex justify-content-between align-items-center">
                                                            <div class="seofct-icon"><i class="ti-user"></i>Licence en
                                                                Gestion digitale Intégrée Du Littoral Et Valorisation
                                                                Halieutique :
                                                            </div>
                                                            <h2>{{ $LGDILVH->count() }}</h2>
                                                        </div>
                                                        <canvas id="seolinechart1" height="50"></canvas>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-6 mt-5 mb-3">
                                                <div class="card">
                                                    <div class="seo-fact sbg2">
                                                        <div
                                                            class="p-4 d-flex justify-content-between align-items-center">
                                                            <div class="seofct-icon"><i class="ti-user"></i>Licence en
                                                                Métiers Subaquatiques et Plongée Sous-Marine -> Option 1
                                                                : Plongeur inspecteur</div>
                                                            <h2>{{ $MSPSM_O1PI->count() }}</h2>
                                                        </div>
                                                        <canvas id="seolinechart1" height="50"></canvas>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-6 mt-5 mb-3">
                                                <div class="card">
                                                    <div class="seo-fact sbg2">
                                                        <div
                                                            class="p-4 d-flex justify-content-between align-items-center">
                                                            <div class="seofct-icon"><i class="ti-user"></i>Licence en
                                                                Métiers Subaquatiques et Plongée Sous-Marine -> Option 2
                                                                : Travaux public, ouvrages</div>
                                                            <h2>{{ $MSPSM_O2TPO->count() }}</h2>
                                                        </div>
                                                        <canvas id="seolinechart1" height="50"></canvas>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                {{-- <div class="row">
                                    <h4>Formation continue:</h4>

                                    <div class="col-lg-12">

                                        <div class="row">
                                            <div class="col-md-4 mt-md-5 mb-3">
                                                <div class="card">
                                                    <div class="seo-fact sbg2">
                                                        <div
                                                            class="p-4 d-flex justify-content-between align-items-center">
                                                            <div class="seofct-icon"><i class="ti-user"></i>Formation
                                                                continue: Maintenance et génie biomédical :</div>
                                                            <h2>{{ $FormationCont1->count() }} </h2>
                                                        </div>
                                                        <canvas id="seolinechart2" height="50"></canvas>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-4 mt-5 mb-3">
                                                <div class="card">
                                                    <div class="seo-fact sbg2">
                                                        <div
                                                            class="p-4 d-flex justify-content-between align-items-center">
                                                            <div class="seofct-icon"><i class="ti-user"></i>Formation
                                                                continue: Génie industriel et logistique :</div>
                                                            <h2>{{ $FormationCont2->count() }}</h2>
                                                        </div>
                                                        <canvas id="seolinechart1" height="50"></canvas>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-4 mt-5 mb-3">
                                                <div class="card">
                                                    <div class="seo-fact sbg2">
                                                        <div
                                                            class="p-4 d-flex justify-content-between align-items-center">
                                                            <div class="seofct-icon"><i class="ti-user"></i>Formation
                                                                continue: Entrepreneuriat :</div>
                                                            <h2>{{ $FormationCont3->count() }}</h2>
                                                        </div>
                                                        <canvas id="seolinechart1" height="50"></canvas>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <h4>Formation continue (Bac+3) :</h4>

                                    <div class="col-lg-12">

                                        <div class="row">
                                            <div class="col-md-6 mt-md-5 mb-3">
                                                <div class="card">
                                                    <div class="seo-fact sbg2">
                                                        <div
                                                            class="p-4 d-flex justify-content-between align-items-center">
                                                            <div class="seofct-icon"><i class="ti-user"></i>Formation
                                                                continue Bac+3: Informatique Décisionnelle et e-Santé
                                                                (LIDe-S) :</div>
                                                            <h2>{{ $FC_LIDe->count() }} </h2>
                                                        </div>
                                                        <canvas id="seolinechart2" height="50"></canvas>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-6 mt-5 mb-3">
                                                <div class="card">
                                                    <div class="seo-fact sbg2">
                                                        <div
                                                            class="p-4 d-flex justify-content-between align-items-center">
                                                            <div class="seofct-icon"><i class="ti-user"></i>Formation
                                                                continue Bac+3: Maintenance Médicale (L2M) :</div>
                                                            <h2>{{ $FC_L2M->count() }}</h2>
                                                        </div>
                                                        <canvas id="seolinechart1" height="50"></canvas>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-6 mt-5 mb-3">
                                                <div class="card">
                                                    <div class="seo-fact sbg2">
                                                        <div
                                                            class="p-4 d-flex justify-content-between align-items-center">
                                                            <div class="seofct-icon"><i class="ti-user"></i>Formation
                                                                continue Bac+3: Sciences de Gestion (LSG) :</div>
                                                            <h2>{{ $FC_LSG->count() }}</h2>
                                                        </div>
                                                        <canvas id="seolinechart1" height="50"></canvas>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-6 mt-5 mb-3">
                                                <div class="card">
                                                    <div class="seo-fact sbg2">
                                                        <div
                                                            class="p-4 d-flex justify-content-between align-items-center">
                                                            <div class="seofct-icon"><i class="ti-user"></i>Formation
                                                                continue Bac+3: Génie Industriel et Logistique
                                                                Hospitalière (LGILH) :</div>
                                                            <h2>{{ $FC_LGILH->count() }}</h2>
                                                        </div>
                                                        <canvas id="seolinechart1" height="50"></canvas>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-6 mt-5 mb-3">
                                                <div class="card">
                                                    <div class="seo-fact sbg2">
                                                        <div
                                                            class="p-4 d-flex justify-content-between align-items-center">
                                                            <div class="seofct-icon"><i class="ti-user"></i>Formation
                                                                continue Bac+3: Infirmier Polyvalent (LIP) :</div>
                                                            <h2>{{ $FC_LIP->count() }}</h2>
                                                        </div>
                                                        <canvas id="seolinechart1" height="50"></canvas>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-6 mt-5 mb-3">
                                                <div class="card">
                                                    <div class="seo-fact sbg2">
                                                        <div
                                                            class="p-4 d-flex justify-content-between align-items-center">
                                                            <div class="seofct-icon"><i class="ti-user"></i>Formation
                                                                continue Bac+3: Techniques de Laboratoires de Biologie
                                                                Médicale (LTech-Labo) :</div>
                                                            <h2>{{ $FC_LTech->count() }}</h2>
                                                        </div>
                                                        <canvas id="seolinechart1" height="50"></canvas>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-6 mt-5 mb-3">
                                                <div class="card">
                                                    <div class="seo-fact sbg2">
                                                        <div
                                                            class="p-4 d-flex justify-content-between align-items-center">
                                                            <div class="seofct-icon"><i class="ti-user"></i>Formation
                                                                continue Bac+3: Infirmier en Anesthésie et Réanimation
                                                                (LIAR) :</div>
                                                            <h2>{{ $FC_LIAR->count() }}</h2>
                                                        </div>
                                                        <canvas id="seolinechart1" height="50"></canvas>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-6 mt-5 mb-3">
                                                <div class="card">
                                                    <div class="seo-fact sbg2">
                                                        <div
                                                            class="p-4 d-flex justify-content-between align-items-center">
                                                            <div class="seofct-icon"><i class="ti-user"></i>Formation
                                                                continue Bac+3: Infirmier en Instrumentalisation de Bloc
                                                                Opératoire (L2IBO) :</div>
                                                            <h2>{{ $FC_L2IBO->count() }}</h2>
                                                        </div>
                                                        <canvas id="seolinechart1" height="50"></canvas>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <h4>Formation continue (Bac+5) :</h4>

                                        <div class="row">
                                            <div class="col-md-4 mt-md-5 mb-3">
                                                <div class="card">
                                                    <div class="seo-fact sbg2">
                                                        <div
                                                            class="p-4 d-flex justify-content-between align-items-center">
                                                            <div class="seofct-icon"><i class="ti-user"></i>Formation
                                                                continue Bac+5: Maintenance et Génie biomédical :</div>
                                                            <h2>{{ $FC_Master1->count() }} </h2>
                                                        </div>
                                                        <canvas id="seolinechart2" height="50"></canvas>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-4 mt-5 mb-3">
                                                <div class="card">
                                                    <div class="seo-fact sbg2">
                                                        <div
                                                            class="p-4 d-flex justify-content-between align-items-center">
                                                            <div class="seofct-icon"><i class="ti-user"></i>Formation
                                                                continue Bac+5: Dispositifs médicaux et affaires
                                                                réglementaires :</div>
                                                            <h2>{{ $FC_Master2->count() }}</h2>
                                                        </div>
                                                        <canvas id="seolinechart1" height="50"></canvas>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-4 mt-5 mb-3">
                                                <div class="card">
                                                    <div class="seo-fact sbg2">
                                                        <div
                                                            class="p-4 d-flex justify-content-between align-items-center">
                                                            <div class="seofct-icon"><i class="ti-user"></i>Formation
                                                                continue Bac+5: Entreprenariat et Management
                                                                Technologique :</div>
                                                            <h2>{{ $FC_Master3->count() }}</h2>
                                                        </div>
                                                        <canvas id="seolinechart1" height="50"></canvas>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div> --}}

                                <!-- main content area end -->
                                <!-- footer area start-->
                                <footer>
                                    <div class="footer-area">
                                        <p>...</p>
                                    </div>
                                </footer>
                                <!-- footer area end-->
                            </div>
                            <!-- page container area end -->
                            <!-- offset area start -->
                            <div class="offset-area">
                                <div class="offset-close"><i class="ti-close"></i></div>
                                <ul class="nav offset-menu-tab">
                                    <li><a data-toggle="tab" href="#settings">Settings</a></li>
                                </ul>
                                <div class="offset-content tab-content">

                                    <div id="settings" class="tab-pane fade">
                                        <div class="offset-settings">
                                            <h4>General Settings</h4>
                                            <div class="settings-list">
                                                <div class="s-settings">
                                                    <div class="s-sw-title">
                                                        <h5>Test</h5>
                                                        <div class="s-swtich">
                                                            <input type="checkbox" id="switch1" />
                                                            <label for="switch1">Toggle</label>
                                                        </div>
                                                    </div>
                                                    <p>Test</p>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- offset area end -->
                            <!-- jquery latest version -->
                            <script src="{{ asset('assets/js/vendor/modernizr-2.8.3.min.js') }}"></script>
                            <!-- bootstrap 4 js -->
                            <script src="{{ asset('assets/js/popper.min.js') }}"></script>
                            <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
                            <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
                            <script src="{{ asset('assets/js/metisMenu.min.js') }}"></script>
                            <script src="{{ asset('assets/js/jquery.slimscroll.min.js') }}"></script>
                            <script src="{{ asset('assets/js/jquery.slicknav.min.js') }}"></script>

                            <!-- Start datatable js -->
                            <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
                            <script src="https://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js"></script>
                            <script src="https://cdn.datatables.net/1.10.18/js/dataTables.bootstrap4.min.js"></script>
                            <script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
                            <script src="https://cdn.datatables.net/responsive/2.2.3/js/responsive.bootstrap.min.js"></script>
                            <!-- others plugins -->
                            <script src="{{ asset('assets/js/plugins.js') }}"></script>
                            <script src="{{ asset('assets/js/scripts.js') }}"></script>




</body>

</html>
