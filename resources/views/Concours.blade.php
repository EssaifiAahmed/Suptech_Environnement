<!DOCTYPE html>


<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>SUPTECH ENVIRONNEMENT</title>
    <meta content="" name="description">
    <meta content="" name="keywords">



    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,600,600i,700,700i,900"
        rel="stylesheet">

    @include('layouts.MainCss')


    <style>
        select option[value="off"] {
            background: #93b1c7;
        }


        .loader {
            width: 30px;
            height: 30px;
            border: 5px solid white;
            border-radius: 50%;
            display: block;
            box-sizing: border-box;
            position: relative;
            animation: pulse 1s linear infinite;
        }

        .loader:after {
            content: '';
            position: absolute;
            width: 30px;
            height: 30px;
            border: 5px solid white;
            border-radius: 50%;
            display: inline-block;
            box-sizing: border-box;
            left: 50%;
            top: 50%;
            transform: translate(-50%, -50%);
            animation: scaleUp 1s linear infinite;
        }

        <blade keyframes|%20scaleUp%20%7B%0D>0% {
            transform: translate(-50%, -50%) scale(0)
        }

        60%,
        100% {
            transform: translate(-50%, -50%) scale(1)
        }
        }

        <blade keyframes|%20pulse%20%7B%0D>0%,
        60%,
        100% {
            transform: scale(1)
        }

        80% {
            transform: scale(1.2)
        }
        }

    </style>

</head>

<body>



    @include('layouts.header')

    <!-- ======= Contact Us Section ======= -->
    <section id="contact" class="contact">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>{{ __('messages.cncc') }}</h2>
            </div>

            <div class="row">

                <div class="col-lg-12" data-aos="fade-up" data-aos-delay="300" style="overflow:auto;">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ __('messages.mcnc') }}  <br>  <br> &nbsp;&nbsp; {{ __('messages.Bac') }}    </th>
                            <th scope="col">{{ __('messages.math') }}</th>
                            <th scope="col">{{ __('messages.pc') }}</th>
                            <th scope="col">{{ __('messages.fr') }}</th>
                            <th scope="col">{{ __('messages.svt') }}</th>
                            <th scope="col">{{ __('messages.sie') }}</th>
                            <th scope="col">{{ __('messages.sim') }}</th>
                        </tr>
                    </thead>
                    <tbody>
                       
                        <tr >
                            <th scope="row" style="  width: 320px;">
                                • {{ __('messages.sma') }}<br>
                                • {{ __('messages.smb') }}
                            </th>
                            <td>{{ __('messages.8_9') }}</td>
                            <td>{{ __('messages.9_10') }}</td>
                            <td>{{ __('messages.10_11') }}</td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <th scope="row">• {{ __('messages.ssvt') }}</th>
                            <td>{{ __('messages.8_9') }}</td>
                            <td>{{ __('messages.9_10') }}</td>
                            <td>{{ __('messages.10_11') }}</td>
                            <td>{{ __('messages.11_12') }}</td>
                                                        <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <th scope="row">• {{ __('messages.spc') }}</th>
                            <td>{{ __('messages.8_9') }}</td>
                            <td>{{ __('messages.9_10') }}</td>
                            <td>{{ __('messages.10_11') }}</td>
                            <td></td>
                            <td></td>
                           <td></td>
                        </tr>
                        <tr>
                            <th scope="row">• {{ __('messages.ste') }}</th>
                            <td>{{ __('messages.8_9') }}</td>
                            <td>{{ __('messages.9_10') }}</td>
                            <td>{{ __('messages.10_11') }}</td>
                             <td></td>
                            <td>{{ __('messages.11_12') }}</td> 
                            <td></td>
                        </tr>
                        <tr>
                            <th scope="row">• {{ __('messages.stm') }}</th>
                            <td>{{ __('messages.8_9') }}</td>
                            <td>{{ __('messages.9_10') }}</td>
                            <td>{{ __('messages.10_11') }}</td>
                            <td></td>
                            <td></td>
                            <td>{{ __('messages.11_12') }}</td>
                 
                        </tr>
                    </tbody>
                </table>
                </div>
            </div>

        </div>
    </section><!-- End Contact Us Section -->

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

    </main>
    <!-- End #main -->
    @include('layouts.footer')
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    @include('layouts.MainJs')

    <script>
     
    </script>
    <!--  Script  change the language -->
    <script>
        $(".changeLang").change(function () {
            if ($(this).val() == 'fr') {
                window.location.href = "/fr/cnc";
            } else if ($(this).val() == 'ar') {
                window.location.href = "/ar/cnc";
            }
        });
    </script>

    <!--  End Script  change the language -->

</body>

</html>
