<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>SUPTECH SANTE - Control panel</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png"  href="{{ asset('assets/images/icon/favicon.ico') }}">
    <link rel="stylesheet"   href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/font-awesome.min.css') }}" >
    <link rel="stylesheet"  href="{{ asset('assets/css/themify-icons.css') }}" >
    <link rel="stylesheet"  href="{{ asset('assets/css/metisMenu.css') }}" >
    <link rel="stylesheet"  href="{{ asset('assets/css/owl.carousel.min.css') }}" >
    <link rel="stylesheet"  href="{{ asset('assets/css/slicknav.min.css') }}" >
    <!-- amcharts css -->
    <link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />
    <!-- Start datatable css -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.18/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.jqueryui.min.css">
    <!-- style css -->
    <link rel="stylesheet"  href="{{ asset('assets/css/typography.css') }}">
    <link rel="stylesheet"  href="{{ asset('assets/css/default-css.css') }}">
    <link rel="stylesheet"  href="{{ asset('assets/css/styles.css') }}">
    <link rel="stylesheet"  href="{{ asset('assets/css/responsive.css') }}">
    <!-- modernizr css -->
    <script src="{{ asset('assets/js/vendor/modernizr-2.8.3.min.js') }}" ></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

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
                            
                        <li >
                                <a href="{{ route('logout', ['slug' => App::getLocale()]) }}" ><i   class="ti-power-off"></i></a>
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
                                <li><a href="{{ route('panel', ['slug' => App::getLocale()]) }}">Home</a></li>
                                <li><span>Les messages recus</span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6 clearfix">
                        <div class="user-profile pull-right">
                         
                            <h4 class="user-name dropdown-toggle" > Admin </h4>
                       
                    </div>
                </div>
            </div>
            <!-- page title area end -->
            <div class="main-content-inner">
                <div class="row">
                 
    <!-- Primary table start -->
    <div class="col-12 mt-5">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title">Les messages recus : </h4>
                                <div class="data-tables datatable-primary">
                                    <table id="dataTable2" class="text-center">
                                        <thead class="text-capitalize">
                                            <tr>
                                                <th>Nom | prénom</th>
                                                <th>Email</th>
                                                <th>Telephone</th>
                                                <th>date de pré-inscription</th>
                                                <th>Sujet</th>
                                                <th>Message</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>

     @foreach ($data as $data)
            <tr>
                
                <td>{{ $data->Full_Name }}</td>
                <td>{{ $data->email }}</td>
                <td>{{ $data->Tele }}</td>
                <td>{{ $data->created_at }}</td>
                <td>{{ $data->sujet }}</td>
                <td>{{ $data->message }}</td>
                <td><form method="post" action=" {{ route('contacts.destroy',[ 'id' => $data->id, 'slug' => App::getLocale()])  }} ">
                    @csrf
                    @method('DELETE')

                    <input type="submit" class="btn btn-danger btn-sm" value="Delete">
                </form>
            </tr>
        @endforeach
                                           
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Primary table end -->
                 

                    
                </div>
            </div>
        </div>
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
    <script  src="{{ asset('assets/js/vendor/modernizr-2.8.3.min.js') }}" ></script>
    <!-- bootstrap 4 js -->
    <script  src="{{ asset('assets/js/popper.min.js') }}" ></script>
    <script  src="{{ asset('assets/js/bootstrap.min.js') }}" ></script>
    <script src="{{ asset('assets/js/owl.carousel.min.js') }}"  ></script>
    <script  src="{{ asset('assets/js/metisMenu.min.js') }}" ></script>
    <script  src="{{ asset('assets/js/jquery.slimscroll.min.js') }}" ></script>
    <script  src="{{ asset('assets/js/jquery.slicknav.min.js') }}" ></script>

    <!-- Start datatable js -->
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
    <script src="https://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.18/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.3/js/responsive.bootstrap.min.js"></script>
    <!-- others plugins -->
    <script  src="{{ asset('assets/js/plugins.js') }}" ></script>
    <script  src="{{ asset('assets/js/scripts.js') }}" ></script>
</body>

</html>
