<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>SUPTECH SANTE</title>
  <meta content="" name="description">
  <meta content="" name="keywords">



  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,600,600i,700,700i,900" rel="stylesheet">

  @include('layouts.MainCss')


  <style>
.line {
  border-left: 1px solid grey;
  height: 50px;
}

.table-fixed{
  width: 100%;
  background-color: #f5f9fc;
  tbody{
    height:200px;
    overflow-y:auto;
    width: 100%;
    }
  thead,tbody,tr,td,th{
    display:block;
  }
  tbody{
    td{
      float:left;
    }
  }
  thead {
    tr{
      th{
        float:left;
       background-color: #f39c12;
       border-color:#e67e22;
      }
    }
  }
}


</style>
  
</head>

<body>


  <!-- ======= Header ======= -->
  
  
  @include('layouts.header')
  <!-- End Header -->


  <div class="row mb-2"> </div>


<section class="counts section-bg"  data-aos="fade-up" >
    <div class="container">
   
          <div class="text-center " >
              <div class="count-box sector">
                  <i class="bi bi-simple-smile" style="color: #20b38e;"></i>
                  <h2>{{ __('messages.mmgb') }}</h2>
              </div>
          </div>

          <h2> {{ __('messages.cda') }}: </h2>
          <div class="row mb-4"> </div>

          <div class="col-lg-12 col-md-6  " >
          <div class="count-box sector">
              <i class="bi bi-simple-smile" style="color: #20b38e;"></i>
              <h3>- {{ __('messages.etlse') }}.</h3> 
              <h3>- {{ __('messages.etbs') }}.</h3> 
            </div>
          </div>

          <h2> {{ __('messages.prgrm') }}: </h2>
          <div class="row mb-4"> </div>

          <div class="col-lg-12 col-md-6  " >
          <div class="count-box sector" style="overflow:auto;">
              <i class="bi bi-simple-smile" style="color: #20b38e;"></i>

              <table class="table table-fixed">
                           
                           <tbody>
                             
                               <tr>
                               <td><th  class="text-nowrap" >{{ __('messages.s1') }} </th></td>
                               <td></td>
                               <td></td>
                               <td></td>
                            
                               <td>
                                   <p>- {{ __('messages.sb_m1') }} </p>

                                   <p>- {{ __('messages.srq_m1') }} </p>

                                   <p>- {{ __('messages.ea_m1') }} </p>

                                   <p>- {{ __('messages.rme_m1') }}</p>

                                   <p>- {{ __('messages.i_m1') }} </p>

                                   <p>-{{ __('messages.l_m1') }} </p>

                               </td>
                     
                              
                             
                               <td class="line">  <th class="text-nowrap" >{{ __('messages.s2') }}</th>  </td>
                               <td></td>
                               <td></td>
                               <td></td>

                               <td>
                                   <p>- {{ __('messages.atsb_m1') }} </p>

                                   <p>- {{ __('messages.tb_m1') }}</p>

                                   <p>- {{ __('messages.gm_m1') }} </p>

                                   <p>- {{ __('messages.dqdb_m1') }} </p>

                                   <p>- {{ __('messages.ghmp_m1') }} </p>

                                   <p>- {{ __('messages.info_m1') }} </p>

                               </td>
                    
                           
                           
                               <tr>
                               <td> <th class="text-nowrap" >{{ __('messages.s3') }}</th>  </td>
                               <td></td>
                               <td></td>
                               <td></td>

                               <td>
                                   <p>- {{ __('messages.lam_m1') }} </p>

                                   <p>- {{ __('messages.efe_m1') }} </p>

                                   <p>- {{ __('messages.tim_m1') }} </p>

                                   <p>- {{ __('messages.ergb_m1') }}</p>

                                   <p>- {{ __('messages.rm_m1') }} </p>

                                   <p>- {{ __('messages.ip_m1') }} </p>

                               </td>
                         
                             
                 
                              
                               <td class="line">   <th class="text-nowrap">{{ __('messages.s4') }}</th>  </td>
                               <td></td>
                               <td></td>
                               <td></td>

                               <td>
                                   <p>- {{ __('messages.sp_m1') }} </p>

                               </td>
                    
                               </tr>

                           </tbody>
                           </table>

            </div>
          </div>

      <div class="row mb-2"> </div>
    </div>
</section>




<div class="row mb-4"> </div>


    
  </main><!-- End #main -->




  <!-- ======= Footer ======= -->

  @include('layouts.footer')

<!-- End Footer -->  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

@include('layouts.MainJs')
<script>  
        $(".changeLang").change(function(){
            if($(this).val() == 'fr'){
                window.location.href = "/fr/mastermaint";
            }else if($(this).val() == 'ar'){
                window.location.href = "/ar/mastermaint";
            }
        });
    </script>

</body>

</html>