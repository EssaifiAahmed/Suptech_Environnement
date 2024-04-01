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

     <!-- ======= Top Bar ======= -->
   
  <!-- ======= Header ======= -->
  @include('layouts.header')
  <!-- End Header -->


  <div class="row mb-2"> </div>


<section class="counts section-bg"  data-aos="fade-up" >
    <div class="container">
   
          <div class="text-center " >
              <div class="count-box sector">
                  <i class="bi bi-simple-smile" style="color: #20b38e;"></i>
                  <h2>{{ __('messages.cigdias') }} </h2>
              </div>
          </div>

          <h2> {{ __('messages.cda') }}: </h2>
          <div class="row mb-4"> </div>

          <div class="col-lg-12 col-md-6  ">
          <div class="count-box sector">
              <i class="bi bi-simple-smile" style="color: #20b38e;"></i>
              <h3>- {{ __('messages.cnc') }} .</h3> 
              <h3>- {{ __('messages.etdbs') }}.</h3> 
            </div>
          </div>

          <h2> {{ __('messages.prgrm') }}: </h2>
          <div class="row mb-4"> </div>

          <div class="col-lg-12 col-md-6  ">
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
                                   <p>- {{ __('messages.lg1_gd') }}</p>

                                   <p>- {{ __('messages.ecc_gd') }} </p>

                                   <p>- {{ __('messages.api_gd') }} </p>

                                   <p>- {{ __('messages.scph_gd') }}</p>

                                   <p>-{{ __('messages.ps_gd') }} </p>

                                   <p>- {{ __('messages.gl_gd') }} </p>

                                   <p>- {{ __('messages.ea_gd') }}</p>

                                   <p>- {{ __('messages.ap_gd') }} </p>

                               </td>
                     
                              
                             
                               <td class="line">  <th class="text-nowrap" >{{ __('messages.s2') }}</th>  </td>
                               <td></td>
                               <td></td>
                               <td></td>

                               <td>
                                   <p>- {{ __('messages.encp_gd') }} </p>
                                   <p>- {{ __('messages.poc_gd') }} </p>
                                   <p>- {{ __('messages.bsr_gd') }} </p>
                                   <p>- {{ __('messages.roan_gd') }} </p>
                                   <p>- {{ __('messages.tds_gd') }} </p>
                                   <p>- {{ __('messages.ri_gd') }} </p>
                                   <p>- {{ __('messages.dge_gd') }} </p>
                                   <p>- {{ __('messages.lg2_gd') }} </p>
                                   <p>- {{ __('messages.stg_gd') }} </p>




                               </td>
                    
                           
                           
                               <tr>
                               <td> <th class="text-nowrap" > {{ __('messages.s3') }}</th>  </td>
                               <td></td>
                               <td></td>
                               <td></td>

                               <td>
                                     <p>- {{ __('messages.dtap_gd') }} </p>
                                     <p>- {{ __('messages.dw_gd') }} </p>
                                     <p>- {{ __('messages.isd_gd') }} </p>
                                     <p>- {{ __('messages.ia_gd') }} </p>
                                     <p>- {{ __('messages.cc_gd') }} </p>
                                     <p>- {{ __('messages.nrq_gd') }} </p>
                                     <p>- {{ __('messages.mnc_gd') }} </p>
                                     <p>- {{ __('messages.lg3_gd') }} </p>
                                   



                               </td>
                         
                             
                 
                              
                               <td class="line">   <th class="text-nowrap"> {{ __('messages.s4') }}</th>  </td>
                               <td></td>
                               <td></td>
                               <td></td>

                               <td>
                                    <p>- {{ __('messages.bda_gd') }} </p>
                                    <p>- {{ __('messages.ml_gd') }} </p>
                                    <p>- {{ __('messages.tim_gd') }} </p>
                                    <p>- {{ __('messages.rm_gd') }} </p>
                                    <p>- {{ __('messages.bi_gd') }} </p>
                                    <p>- {{ __('messages.pid_gd') }} </p>
                                    <p>- {{ __('messages.ohes_gd') }} </p>
                                    <p>- {{ __('messages.lang4_gd') }} </p>
                                    <p>- {{ __('messages.stg_gd') }} </p>



                               </td>
                    
                               </tr>


                               <tr>
                               <td> <th class="text-nowrap" > {{ __('messages.s5') }}</th>  </td>
                               <td></td>
                               <td></td>
                               <td></td>

                               <td>
                                    <p>- {{ __('messages.dlps_gd') }} </p>
                                    <p>- {{ __('messages.dwb_gd') }} </p>
                                    <p>- {{ __('messages.bd_gd') }} </p>
                                    <p>- {{ __('messages.cpim_gd') }} </p>
                                    <p>- {{ __('messages.vi_gd') }} </p>
                                    <p>- {{ __('messages.mno_gd') }} </p>
                                    <p>- {{ __('messages.astim_gd') }} </p>
                                    <p>- {{ __('messages.ssdp_gd') }} </p>



                               </td>
                         
                              
                               <td class="line">   <th class="text-nowrap">{{ __('messages.s6') }}</th>  </td>
                               <td></td>
                               <td></td>
                               <td></td>

                               <td>
                               <p>- {{ __('messages.pfe_gd') }} </p>

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
                window.location.href = "/fr/genied";
            }else if($(this).val() == 'ar'){
                window.location.href = "/ar/genied";
            }
        });
    </script>
</body>

</html>