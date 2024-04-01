<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>SUPTECH SANTE - Control panel</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

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
       
 
   <link rel="stylesheet"  href="{{ asset('assets/css/typography.css') }}">
    <link rel="stylesheet"  href="{{ asset('assets/css/default-css.css') }}">
    <link rel="stylesheet"  href="{{ asset('assets/css/styles.css') }}">
    <link rel="stylesheet"  href="{{ asset('assets/css/responsive.css') }}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

    <!-- modernizr css -->
    <script src="{{ asset('assets/js/vendor/modernizr-2.8.3.min.js') }}" ></script>

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
                           
                              
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6 clearfix">
                        <div class="user-profile pull-right">
                         
                            <h4 class="user-name dropdown-toggle" > Admin  </h4>
                       
                    </div>
                </div>
            </div>
            <!-- page title area end -->
            <a href="{{ route('galerie', ['slug' => App::getLocale()]) }}">Home</a>
            <h3>Ajout image </h3>
            <div class="main-content-inner">
                <div class="row">
              
             
                    <div class="col-lg-8">
                        
                        <div class="row">

                        <body>
                 

                        <!--
                                <div class="form-group custom-file">
        <label for="image">Choose an image</label>
        <input type="file" name="image" id="image" class="custom-file-input" multiple >
    </div>
                        -->
                        <form method="POST" action="{{ route('image.store') }}" enctype="multipart/form-data">
    @csrf

                                        <div class="custom-file">
                                                    <input type="file"  name="image[]" id="image" class="custom-file-input" multiple >
                                                    <label class="custom-file-label" >Choisir un image</label>
                                                </div>
    
    <button type="submit" class="btn btn-primary">Charger l'image</button>
</form>

<!-- Custom file input start -->


<div class="col-12 mt-5">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title">Mes images : </h4>
                                <div class="data-tables datatable-primary">
                                    <table id="dataTable2" class="text-center">
                                        <thead class="text-capitalize">
                                            <tr>
                                                <th> Image</th>
                                                <th>Date d'upload </th>
                                                <th>Action </th>
                                             
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @foreach ($images as $image)
            <tr>
                <td> 
                    
               
                <div class='portfolio-wrap'> 
   
            <img src= "{{ asset('Galerie/') }}/{{ $image->name}} " width="200" height="200" class='img-fluid' alt=''>
                </a>
            </div>
        </td>


                <td>{{$image->created_at}}</td>

                
                <td><form method="post" action="{{ route('ajoutimage.DeleteImage',[ 'id' => $image->id, 'slug' => App::getLocale()])  }} ">
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
    <script type="text/javascript">
function displayFileName() {
  var input = $("#image");
  var fileName = input.val().split("\\").pop();
  var output = "Selected file: " + fileName;
  $("#fileName").html(output);
}
</script>
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
