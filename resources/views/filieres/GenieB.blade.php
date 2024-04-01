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
                  <h2>{{ __('messages.cigb') }} </h2>
                  
              </div>
          </div>
        
          <h2> {{ __('messages.cda') }}: </h2>
          <div class="row mb-4"> </div>



          <div class="col-lg-12 col-md-6  ">
          <div class="count-box sector">
              <i class="bi bi-simple-smile" style="color: #20b38e;"></i>
              <h3>-{{ __('messages.cnc') }}.</h3> 
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
                                   <p>-{{ __('messages.elecA') }} </p>

                                   <p>-{{ __('messages.bcpi') }} </p>

                                   <p>-{{ __('messages.algpc') }}  </p>

                                   <p>-{{ __('messages.afpi') }} </p>

                                   <p>-{{ __('messages.sro') }} </p>

                                   <p>-{{ __('messages.bp') }} </p>

                                   <p>-{{ __('messages.ib') }} </p>

                                   <p>-{{ __('messages.langcom1') }} </p>

                               </td>
                     
                              
                             
                               <td class="line">  <th class="text-nowrap" >{{ __('messages.s2') }}</th>  </td>
                               <td></td>
                               <td></td>
                               <td></td>

                               <td>
                                   <p>-{{ __('messages.eln') }}  </p>

                                   <p>-{{ __('messages.phyhp') }}  </p>

                                   <p>-{{ __('messages.radiom') }}  </p>

                                   <p>-{{ __('messages.poo') }}  </p>

                                   <p>-{{ __('messages.analyn') }}  </p>

                                   <p>-{{ __('messages.trs') }}  </p>

                                   <p>-{{ __('messages.dgl') }}  </p>

                                   <p>-{{ __('messages.langcom2') }}  </p>

                                   <p>-{{ __('messages.stg') }}  </p>

                               </td>
                    
                           
                           
                               <tr>
                               <td> <th class="text-nowrap" >{{ __('messages.s3') }}</th>  </td>
                               <td></td>
                               <td></td>
                               <td></td>

                               <td>
                                   <p>-{{ __('messages.mci') }}  </p>

                                   <p>-{{ __('messages.atnsb') }}  </p>

                                   <p>-{{ __('messages.bd') }}  </p>

                                   <p>-{{ __('messages.mno') }}  </p>

                                   <p>-{{ __('messages.electrotech') }}  </p>

                                   <p>-{{ __('messages.smrd') }}  </p>

                                   <p>-{{ __('messages.gm') }}  </p>

                                   <p>-{{ __('messages.Lang') }}  </p>

                               </td>
                         
                             
                 
                              
                               <td class="line">   <th class="text-nowrap">{{ __('messages.s4') }}</th>  </td>
                               <td></td>
                               <td></td>
                               <td></td>

                               <td>
                                   <p>-{{ __('messages.stbah') }}  </p>

                                   <p>-{{ __('messages.prdf') }}  </p>

                                   <p>-{{ __('messages.argbss') }}  </p>

                                   <p>-{{ __('messages.tdim') }}  </p>

                                   <p>-{{ __('messages.exfe') }}  </p>

                                   <p>-{{ __('messages.inm') }}  </p>

                                   <p>-{{ __('messages.ecif') }}  </p>

                                   <p>-{{ __('messages.Lang') }}  </p>

                                   <p>-{{ __('messages.stg') }}  </p>

                               </td>
                    
                               </tr>


                               <tr>
                               <td> <th class="text-nowrap" >{{ __('messages.s5') }}</th>  </td>
                               <td></td>
                               <td></td>
                               <td></td>

                               <td>
                                   <p>-{{ __('messages.suppft') }} </p>

                                   <p>-{{ __('messages.arhci') }} </p>

                                   <p>-{{ __('messages.ldm') }}  </p>

                                   <p>-{{ __('messages.bpb') }} </p>

                                   <p>-{{ __('messages.eibvt') }}  </p>

                                   <p>-{{ __('messages.robm') }}  </p>

                                   <p>-{{ __('messages.devpr') }} </p>

                                   <p>-{{ __('messages.langcom') }}  </p>

                               </td>
                         
                              
                               <td class="line">   <th class="text-nowrap">{{ __('messages.s6') }}</th>  </td>
                               <td></td>
                               <td></td>
                               <td></td>

                               <td>
                                   <p>-{{ __('messages.pfe') }}  </p>

                               </td>
                    
                               </tr>



                           </tbody>
                           </table>
            </div>
          </div>

      <div class="row mb-2"> </div>
    </div>
</section>





 
   
  </main><!-- End #main -->




  <!-- ======= Footer ======= -->

  @include('layouts.footer')

<!-- End Footer -->  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

@include('layouts.MainJs')

<script>  
        $(".changeLang").change(function(){
            if($(this).val() == 'fr'){
                window.location.href = "/fr/genieb";
            }else if($(this).val() == 'ar'){
                window.location.href = "/ar/genieb";
            }
        });
    </script>
</body>

</html>