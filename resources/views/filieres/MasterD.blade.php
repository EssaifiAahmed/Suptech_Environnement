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
                  <h2>{{ __('messages.mdmar') }}</h2>
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

          <h2>  {{ __('messages.prgrm') }}: </h2>
          <div class="row mb-4"> </div>

          <div class="col-lg-12 col-md-6  " >
          <div class="count-box sector" style="overflow:auto;">
              <i class="bi bi-simple-smile" style="color: #20b38e;"></i>

              <table class="table table-fixed">
                           
                           <tbody>
                             
                               <tr>
                               <td><th  class="text-nowrap" > {{ __('messages.s1') }} </th></td>
                               <td></td>
                               <td></td>
                               <td></td>
                            
                               <td>
                                   <p>-  {{ __('messages.sb_m2') }} </p>

                                   <p>-  {{ __('messages.sns_m2') }} </p>

                                   <p>-  {{ __('messages.mrdb_m2') }}</p>

                                   <p>-  {{ __('messages.cqmrp_m2') }}</p>

                                   <p>-  {{ __('messages.info_m2') }} </p>

                                   <p>- {{ __('messages.l_m2') }} </p>

                               </td>
                     
                              
                             
                               <td class="line">  <th class="text-nowrap" > {{ __('messages.s2') }}</th>  </td>
                               <td></td>
                               <td></td>
                               <td></td>

                               <td>
                                   <p>-  {{ __('messages.imr_m2') }} </p>

                                   <p>-  {{ __('messages.tb_m2') }} </p>

                                   <p>- {{ __('messages.ip_m2') }} </p>

                                   <p>-  {{ __('messages.dqdb_m2') }} </p>

                                   <p>-  {{ __('messages.ghmp_m2') }} </p>

                                   <p>-  {{ __('messages.info_m2') }} </p>

                               </td>
                    
                           
                           
                               <tr>
                               <td> <th class="text-nowrap" > {{ __('messages.s3') }}</th>  </td>
                               <td></td>
                               <td></td>
                               <td></td>

                               <td>
                                   <p>- {{ __('messages.cvdm_m2') }} </p>

                                   <p>-  {{ __('messages.mmdmmc_m2') }} </p>

                                   <p>-  {{ __('messages.mt_m2') }} </p>

                                   <p>-  {{ __('messages.caie_m2') }} </p>

                                   <p>-  {{ __('messages.eri_m2') }}</p>

                                   <p>- {{ __('messages.ern_m2') }} </p>

                               </td>
                         
                             
                 
                              
                               <td class="line">   <th class="text-nowrap"> {{ __('messages.s4') }}</th>  </td>
                               <td></td>
                               <td></td>
                               <td></td>

                               <td>
                                   <p>-  {{ __('messages.sp_m2') }} </p>

                               </td>
                    
                               </tr>

                           </tbody>
                           </table>
                           </div>






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
                window.location.href = "/fr/masterd";
            }else if($(this).val() == 'ar'){
                window.location.href = "/ar/masterd";
            }
        });

    </script>
</body>

</html>