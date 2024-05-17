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
        @include('abujad.layouts.sidebar')
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
                                <a href="{{ route('logout_abujad', ['slug' => App::getLocale()]) }}"><i
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
            {{-- <div class="page-title-area">
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
                </div> --}}
            <!-- page title area end -->
            <div class="main-content-inner">
                <div class="row">
                    <h4 style="margin-top: 2%;">les Inscrits de la part Abujad:</h4>

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

                            <div class="row">
                                <h4>Classes préparatoires intégrées total (facebook + instagram + Linkedin):</h4>

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
                            </div>
                            <div class="row">
                                <h4>Cycle ingénieur (facebook + instagram + Linkedin):</h4>

                                <div class="col-lg-12">
                                    <div class="row">
                                        <div class="col-md-6 mt-md-5 mb-3">
                                            <div class="card">
                                                <div class="seo-fact sbg2">
                                                    <div class="p-4 d-flex justify-content-between align-items-center">
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
                                                    <div class="p-4 d-flex justify-content-between align-items-center">
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
                                                    <div class="p-4 d-flex justify-content-between align-items-center">
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
                                <h4>Master (facebook + instagram + Linkedin):</h4>
                                <div class="col-lg-12">
                                    <div class="row">
                                        <div class="col-md-10 mt-md-5 mb-3">
                                            <div class="card">
                                                <div class="seo-fact sbg2">
                                                    <div class="p-4 d-flex justify-content-between align-items-center">
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
                                <h4>Licence (facebook + instagram + Linkedin):</h4>
                                <div class="col-lg-12">
                                    <div class="row">
                                        <div class="col-md-6 mt-md-5 mb-3">
                                            <div class="card">
                                                <div class="seo-fact sbg2">
                                                    <div class="p-4 d-flex justify-content-between align-items-center">
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
                                                    <div class="p-4 d-flex justify-content-between align-items-center">
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
                                                    <div class="p-4 d-flex justify-content-between align-items-center">
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
                                                    <div class="p-4 d-flex justify-content-between align-items-center">
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
                                                    <div class="p-4 d-flex justify-content-between align-items-center">
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
                                                    <div class="p-4 d-flex justify-content-between align-items-center">
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
                            <!-- footer area start-->
                            <footer>
                                <div class="footer-area">
                                    <p>...</p>
                                </div>
                            </footer>
                            <!-- footer area end-->
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
