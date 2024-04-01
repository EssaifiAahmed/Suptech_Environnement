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
   
     <link rel="stylesheet"  href="{{ asset('assets/css/typography.css') }}">
     <link rel="stylesheet"  href="{{ asset('assets/css/default-css.css') }}">
    <link rel="stylesheet"  href="{{ asset('assets/css/styles.css') }}">
    <link rel="stylesheet"  href="{{ asset('assets/css/responsive.css') }}">
    <!-- modernizr css -->
    <script src="{{ asset('assets/js/vendor/modernizr-2.8.3.min.js') }}" ></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>


</head>

<body>
   
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
                                <li><span>Demandes de bourses</span></li>
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
            <div class="main-content-inner">
                <div class="row">
                    <div class="col-lg-2">
                        <a href="{{ route('exportBourse', ['slug' => App::getLocale(), 'Type' => 'All']) }}" id="ExcelExport">
                            <button type="button" class="btn btn-success">Exporter vers Excel</button>
                        </a>
                    </div>
                
                
                    <!-- Primary table start -->
                    <div class="col-12 mt-5">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title">Demandes de bourses</h4>
                                <div class="data-tables datatable-primary" style="overflow:auto">
                                    <table id="dataTable4" class="text-center">
                                        <thead class="text-capitalize">
                                            <tr>
                                                <th>Numero</th>
                                                <th>Nom | Prénom</th>
                                                <th>Email</th>
                                                <th>CNE</th>
                                                <th>Date de naissance</th>
                                                <th>téléphone</th>
                                                <th>Nom complet du père</th>
                                                <th>CIN massar </th>
                                                <th>adresse </th>
                                                <th>profession </th>
                                                <th>Filiére  </th>
                                                <th>Type de bourse </th>
                                                <th>Compte bancaire  </th>
                                                <th>Nom complet de la mère  </th>
                                                <th>Profession mère  </th>
                                                <th>Dossier de bourse  </th>
                                                <th>Date d'envoi   </th>
                                                    <th>Action  </th>
                                                    <th>Fichier Inscription  </th>
                                                
                                            </tr>
                                        </thead>
                                        
                                        <tbody>
                                            @foreach ($data as $data)
                                                <tr>
                                                    <td>{{ $val++}}  </td>
                                                    <td>{{ $data->Nom}} </td>
                                                    <td>{{ $data->email}}</td>
                                                    <td>{{ $data->cne}}</td>
                                                    <td>{{ $data->date_naissance}}</td>
                                                    <td>{{ $data->telephone}}</td>
                                                    <td>{{ $data->nom_pere_complet}}</td>
                                                    <td>{{ $data->cin_massar}}</td>
                                                    <td>{{ $data->adresse}}</td>
                                                    <td>{{ $data->profession }}</td>
                                                    <td>{{  $data->Sectors }} </td>
                                                    <td>{{  $data->type_bourse }} </td>
                                                    <td>{{  $data->compte_bancaire }} </td>
                                                    <td>{{  $data->nom_mere_complet }} </td>
                                                    <td>{{  $data->profession_mere }} </td>
                                                    <td>
                                                        @if($data->fichier_complets == 'true')
                                                            <a href="{{ route('downloadBourseFiles', ['slug' => App::getLocale(), 'userCNE' => $data->cne]) }}" target="_blank">Télécharger</a>
                                                        @else
                                                            L'étudiant n'a pas encore téléchargé les fichiers
                                                        @endif
                                                    </td>
                                                    <td>{{  $data->created_at }} </td>
                                                        <td><form method="post" action="{{ route('DeleteRegisterBourse',[ 'id' => $data->id, 'slug' => App::getLocale()])  }} ">
                                                        @csrf
                                                        @method('DELETE')
                                    
                                                        <input type="submit" class="btn btn-danger btn-sm" value="Delete">
                                                    </form></td>
                                                    
                                                    <td>
                                                        <a href="{{ route('PdfStudentBourse',[ 'id' => $data->id, 'slug' => App::getLocale()]) }}">Télécharger</a>
                                                    </td>
                                    
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
    
    <script>
        var table = $('#dataTable4').DataTable({
            ordering: false,
            initComplete: function() {
              this.api().columns().every(function(idx) {
                var column = this;
                var title = $(column.header()).text().trim();
                
                if (idx === 9 || idx === 10 || idx === 11 || idx === 16) {
                    var selectContainer = $('<div>')
                      .addClass('select-container') // add a class to the container for styling
                      .appendTo($(column.header()).empty());
                  
                    var label = $('<label></label>')
                      .text(title + ': ')
                      .css('color', 'white')
                      .appendTo(selectContainer);
                  
                    if (idx === 16) {
                      var input = $('<input type="date" class="form-control">')
                        .appendTo(selectContainer);
                    
                      input.on('change', function() {
                        var val = $(this).val();
                        var date = val.split(' ')[0];
                    
                        column
                          .search(date ? '^' + date + '.*$' : '', true, false)
                          .draw();
                      });
                    } else {
                          var select = $('<select><option value=""></option></select>')
                            .appendTo(selectContainer);
                          column.data().unique().sort().each(function(d, j) {
                            select.append('<option value="' + d + '">' + d + '</option>')
                          });
                        
                         
                         if(idx === 10){
                             select.on('change', function() {
                                var val = $.fn.dataTable.util.escapeRegex(
                                    $(this).val()
                                );
    
                                column
                                    .search(val ? '^' + val + '$' : '', true, false)
                                    .draw();
    
    
    
                                
    
                                if($(this).find('option:selected').text()){
                                    var test = $(this).find('option:selected').text();
                                    var url = "{{ route('exportBourse', ['slug' => App::getLocale(), 'Type' => ':type']) }}";
                                    url = url.replace(':type', test);
                                    document.getElementById("ExcelExport").href = url;
                                }else{
                                    document.getElementById("ExcelExport").href = "{{ route('exportBourse', ['slug' => App::getLocale(), 'Type' => 'All']) }}";
                                }
                                
                            });
                         }else{
                           select.on('change', function() {
                            var val = $.fn.dataTable.util.escapeRegex(
                              $(this).val()
                            );
                        
                            column
                              .search(val ? '^' + val + '$' : '', true, false)
                              .draw();
                          });
                         }
                    }
                  }
                  
              });
            }
        });
          
        table.on('draw.dt', function() {
            table.column(0, {
              search: 'applied'
            }).nodes().each(function(cell, i) {
              cell.innerHTML = i + 1;
            });
          });
    </script>
</body>

</html>
