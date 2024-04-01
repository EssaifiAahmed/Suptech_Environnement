<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SUPTECH ENVIRONNEMENT</title>

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,600,600i,700,700i,900"
        rel="stylesheet">

    @include('layouts.MainCss')

    <!-- specific CSS File -->
    <style>
        .sector:hover {
            background-color: #93bde2 !important;
            color: white;
            animation-delay: 0.5s;
            transition: 0.5s;
        }

    </style>


    @if(Session::has('locale'))
        @if(Session::get('locale') == 'ar')
            <style>
              h2 {

                text-align:center;
              }
              .carousel-content h2{
                  text-align:right;
              }
                h1,
             
                h3,
                h4,
                h5 {
                    text-align: right;
                }

                .about .section-title p {
                    text-align: right;
                }

                #text {
                    text-align: right;
                }

                #textFooter {
                    text-align: right;
                }

                #List,
                .btee {
                    float: right;
                    content: ' ';
                    clear: right;
                    display: block;
                }

                h6 {
                    text-align: left;
                }
                
                .Bourse-container{
                    position:absolute; 
                    top:0; 
                    left:0%; 
                    margin-top:50px; 
                    margin-left:50px;
                }
                
                .cnc-container{
                    position:absolute; 
                    top:0; 
                    left:15%; 
                    margin-top:50px; 
                    margin-left:50px;
                }

                .cnc-container2{
                    position:absolute; 
                    top:180px; 
                    left:7%; 
                    margin-top:50px; 
                    margin-left:50px;
                }
                
                .glow-cnc{
                    margin-top:50px;
                    font-size: 17px;
                    color: #ffffff;
                    font-weight: 600;
                    padding:10px;
                    text-align:center;
        
                    -webkit-animation: glow 1s ease-in-out infinite alternate;
                    -moz-animation: glow 1s ease-in-out infinite alternate;
                    animation: glow 1s ease-in-out infinite alternate;
                }

                .glow-cnc2{
                    margin-top:50px;
                    font-size: 17px;
                    color: #ffffff;
                    font-weight: 600;
                    padding:10px;
                    text-align:center;
        
                    -webkit-animation: glow 1s ease-in-out infinite alternate;
                    -moz-animation: glow 1s ease-in-out infinite alternate;
                    animation: glow 1s ease-in-out infinite alternate;
                }
        
                .date-limite{
                    position: absolute;
                    left: 0;
                    right: 10%;
                    width: 100%;
                    bottom: 2%;
                    margin: auto;
                }
        
                .glow2 {
                    font-size: 20px;
                    color: #ffffff;
                    font-weight: 900;
                    padding:10px;
        
                    -webkit-animation: glow 1s ease-in-out infinite alternate;
                    -moz-animation: glow 1s ease-in-out infinite alternate;
                    animation: glow 1s ease-in-out infinite alternate;
                }
        
                .Bourse{
                    height: 200px;
                    width: 200px;
                    background-image: linear-gradient( 109.6deg, rgba(156,252,248,1) 11.2%, rgba(110,123,251,1) 91.1% );
                    border-radius: 50%;
                    box-shadow: rgba(50, 50, 93, 0.25) 0px 50px 100px -20px, rgba(0, 0, 0, 0.3) 0px 30px 60px -30px;
                }
        
                .glow {
                    margin-top:50px;
                    font-size: 30px;
                    color: #ffffff;
                    font-weight: 900;
                    padding:10px;
                    text-align:center;
        
                    -webkit-animation: glow 1s ease-in-out infinite alternate;
                    -moz-animation: glow 1s ease-in-out infinite alternate;
                    animation: glow 1s ease-in-out infinite alternate;
                }
        
                .img-date{
                    width:200px;
                    height:200px;
                }
        
                @media screen and (max-width: 767px) {
                    .Bourse-container{
                        position:absolute; 
                        top:0; 
                        left:0; 
                        margin-top:25px; 
                        margin-left:25px;
                    }
                    
                    .cnc-container{
                        position:absolute; 
                        top:-20px; 
                        left:25%; 
                        margin-right:50px;
                    }

                    .cnc-container2{
                        position:absolute; 
                        top:-20px; 
                        left:7%; 
                        margin-right:50px;
                    }
                    
                    .glow-cnc{
                        margin-top:10px;
                        font-size: 9px;
                        color: #ffffff;
                        font-weight: 600;
                        padding:10px;
                        text-align:center;
        
                        -webkit-animation: glow 1s ease-in-out infinite alternate;
                        -moz-animation: glow 1s ease-in-out infinite alternate;
                        animation: glow 1s ease-in-out infinite alternate;
                    }

                    .glow-cnc2{
                        margin-top:10px;
                        font-size: 9px;
                        color: #ffffff;
                        font-weight: 600;
                        padding:10px;
                        text-align:center;
        
                        -webkit-animation: glow 1s ease-in-out infinite alternate;
                        -moz-animation: glow 1s ease-in-out infinite alternate;
                        animation: glow 1s ease-in-out infinite alternate;
                    }
        
                    .date-limite{
                        position: absolute;
                        left: 0;
                        right: 10%;
                        width: 100%;
                        bottom: 2%;
                        margin: auto;
                    }
        
                    .glow2 {
                        font-size: 15px;
                        color: #ffffff;
                        font-weight: 900;
                        padding:10px;
        
                        -webkit-animation: glow 1s ease-in-out infinite alternate;
                        -moz-animation: glow 1s ease-in-out infinite alternate;
                        animation: glow 1s ease-in-out infinite alternate;
                    }
        
                    .Bourse{
                        height: 100px;
                        width: 100px;
                        background-image: linear-gradient( 109.6deg, rgba(156,252,248,1) 11.2%, rgba(110,123,251,1) 91.1% );
                        border-radius: 50%;
                        box-shadow: rgba(50, 50, 93, 0.25) 0px 50px 100px -20px, rgba(0, 0, 0, 0.3) 0px 30px 60px -30px;
                    }
        
                    .img-date{
                        width:100px;
                        height:100px;
                    }
        
                    .glow {
                        margin-top:25px;
                        font-size: 15px;
                        color: #ffffff;
                        font-weight: 900;
                        padding:10px;
                        text-align:center;
        
                        -webkit-animation: glow 1s ease-in-out infinite alternate;
                        -moz-animation: glow 1s ease-in-out infinite alternate;
                        animation: glow 1s ease-in-out infinite alternate;
                    }
                }
        
                @-webkit-keyframes glow {
                    from {
                    text-shadow: 0 0 2px #eeeeee, 0 0 4px #428bca, 0 0 8px #428bca, 0 0 12px #428bca, 
                                0 0 16px #fff, 0 0 20px #fff, 0 0 24px #fff;
                    }
                    to {
                    text-shadow: 0 0 5px #007bff, 0 0 10px #007bff, 0 0 15px #007bff, 0 0 20px #007bff,
                                0 0 25px #007bff, 0 0 30px #007bff, 0 0 35px #007bff;
                    }
                }

            </style>
        @else
            <style>
                .Bourse-container{
                    position:absolute; 
                    top:0; 
                    right:0; 
                    margin-top:50px; 
                    margin-right:50px;
                }
                
                .cnc-container{
                    position:absolute; 
                    top:0; 
                    right:15%; 
                    margin-top:50px; 
                    margin-right:50px;
                }

                .cnc-container2{
                    position:absolute; 
                    top:180px; 
                    right:8%; 
                    margin-top:50px; 
                    margin-right:50px;
                }
                
                .glow-cnc{
                    margin-top:50px;
                    font-size: 17px;
                    color: #ffffff;
                    font-weight: 600;
                    padding:10px;
                    text-align:center;
        
                    -webkit-animation: glow 1s ease-in-out infinite alternate;
                    -moz-animation: glow 1s ease-in-out infinite alternate;
                    animation: glow 1s ease-in-out infinite alternate;
                }

                .glow-cnc2{
                    margin-top:19px;
                    font-size: 18px;
                    color: #ffffff;
                    font-weight: 600;
                    padding:10px;
                    text-align:center;
        
                    -webkit-animation: glow 1s ease-in-out infinite alternate;
                    -moz-animation: glow 1s ease-in-out infinite alternate;
                    animation: glow 1s ease-in-out infinite alternate;
                }
        
                .date-limite{
                    position: absolute;
                    left: 30%;
                    right: 50%;
                    width: 100%;
                    bottom: 2%;
                    margin: auto;
                }
        
                .glow2 {
                    font-size: 20px;
                    color: #ffffff;
                    font-weight: 900;
                    padding:10px;
        
                    -webkit-animation: glow 1s ease-in-out infinite alternate;
                    -moz-animation: glow 1s ease-in-out infinite alternate;
                    animation: glow 1s ease-in-out infinite alternate;
                }
        
                .Bourse{
                    height: 200px;
                    width: 200px;
                    background-image: linear-gradient( 109.6deg, rgba(156,252,248,1) 11.2%, rgba(110,123,251,1) 91.1% );
                    border-radius: 50%;
                    box-shadow: rgba(50, 50, 93, 0.25) 0px 50px 100px -20px, rgba(0, 0, 0, 0.3) 0px 30px 60px -30px;
                }
        
                .glow {
                    margin-top:50px;
                    font-size: 30px;
                    color: #ffffff;
                    font-weight: 900;
                    padding:10px;
                    text-align:center;
        
                    -webkit-animation: glow 1s ease-in-out infinite alternate;
                    -moz-animation: glow 1s ease-in-out infinite alternate;
                    animation: glow 1s ease-in-out infinite alternate;
                }
        
                .img-date{
                    width:200px;
                    height:200px;
                }
        
                @media screen and (max-width: 767px) {
                    .Bourse-container{
                        position:absolute; 
                        top:0; 
                        right:0; 
                        margin-top:25px; 
                        margin-right:25px;
                    }
        
                    .date-limite{
                        position: absolute;
                        left: 15%;
                        right: 50%;
                        width: 100%;
                        bottom: 2%;
                        margin: auto;
                    }
        
                    .glow2 {
                        font-size: 15px;
                        color: #ffffff;
                        font-weight: 900;
                        padding:10px;
        
                        -webkit-animation: glow 1s ease-in-out infinite alternate;
                        -moz-animation: glow 1s ease-in-out infinite alternate;
                        animation: glow 1s ease-in-out infinite alternate;
                    }
        
                    .Bourse{
                        height: 100px;
                        width: 100px;
                        background-image: linear-gradient( 109.6deg, rgba(156,252,248,1) 11.2%, rgba(110,123,251,1) 91.1% );
                        border-radius: 50%;
                        box-shadow: rgba(50, 50, 93, 0.25) 0px 50px 100px -20px, rgba(0, 0, 0, 0.3) 0px 30px 60px -30px;
                    }
        
                    .img-date{
                        width:100px;
                        height:100px;
                    }
        
                    .glow {
                        margin-top:25px;
                        font-size: 15px;
                        color: #ffffff;
                        font-weight: 900;
                        padding:10px;
                        text-align:center;
        
                        -webkit-animation: glow 1s ease-in-out infinite alternate;
                        -moz-animation: glow 1s ease-in-out infinite alternate;
                        animation: glow 1s ease-in-out infinite alternate;
                    }
                    
                  /*  .cnc-container{
                        position:absolute; 
                        top:-20px; 
                        left:35%; 
                        margin-right:50px;
                    } 

                    .cnc-container2{
                        position:absolute; 
                        top:-20px; 
                        left:7%; 
                        margin-right:50px;
                    } */
                    
                      .cnc-container{
                        position:absolute; 
                        top:-20px; 
                        left:35%; 
                        margin-right:50px;
                    } 

                    .cnc-container2{
                        position:absolute; 
                        top:-20px; 
                        right:55%; 
                        margin-right:50px;
                    } 
                    
                    .glow-cnc{
                        margin-top:10px;
                        font-size: 9px;
                        color: #ffffff;
                        font-weight: 600;
                        padding:10px;
                        text-align:center;
        
                        -webkit-animation: glow 1s ease-in-out infinite alternate;
                        -moz-animation: glow 1s ease-in-out infinite alternate;
                        animation: glow 1s ease-in-out infinite alternate;
                    }

                    .glow-cnc2{
                        margin-top:10px;
                        font-size: 9px;
                        color: #ffffff;
                        font-weight: 600;
                        padding:10px;
                        text-align:center;
        
                        -webkit-animation: glow 1s ease-in-out infinite alternate;
                        -moz-animation: glow 1s ease-in-out infinite alternate;
                        animation: glow 1s ease-in-out infinite alternate;
                    }
                }
        
                @-webkit-keyframes glow {
                    from {
                    text-shadow: 0 0 2px #eeeeee, 0 0 4px #428bca, 0 0 8px #428bca, 0 0 12px #428bca, 
                                0 0 16px #fff, 0 0 20px #fff, 0 0 24px #fff;
                    }
                    to {
                    text-shadow: 0 0 5px #007bff, 0 0 10px #007bff, 0 0 15px #007bff, 0 0 20px #007bff,
                                0 0 25px #007bff, 0 0 30px #007bff, 0 0 35px #007bff;
                    }
                }
            </style>
        @endif
    @endif
    
    
    <style>
        .Bourse-container{
            position:absolute; 
            top:0; 
            right:0; 
            margin-top:50px; 
            margin-right:50px;
        }

        .Bourse{
            height: 200px;
            width: 200px;
            background-image: linear-gradient( 109.6deg, rgba(156,252,248,1) 11.2%, rgba(110,123,251,1) 91.1% );
            border-radius: 50%;
            box-shadow: rgba(50, 50, 93, 0.25) 0px 50px 100px -20px, rgba(0, 0, 0, 0.3) 0px 30px 60px -30px;
        }

        .glow {
            margin-top:50px;
            font-size: 30px;
            color: #ffffff;
            font-weight: 900;
            padding:10px;
            text-align:center;

            -webkit-animation: glow 1s ease-in-out infinite alternate;
            -moz-animation: glow 1s ease-in-out infinite alternate;
            animation: glow 1s ease-in-out infinite alternate;
        }

        .img-date{
            width:200px;
            height:200px;
        }

        @media screen and (max-width: 767px) {
            .Bourse-container{
                position:absolute; 
                top:0; 
                right:0; 
                margin-top:25px; 
                margin-right:25px;
            }

            .Bourse{
                height: 100px;
                width: 100px;
                background-image: linear-gradient( 109.6deg, rgba(156,252,248,1) 11.2%, rgba(110,123,251,1) 91.1% );
                border-radius: 50%;
                box-shadow: rgba(50, 50, 93, 0.25) 0px 50px 100px -20px, rgba(0, 0, 0, 0.3) 0px 30px 60px -30px;
            }

            .img-date{
                width:100px;
                height:100px;
            }

            .glow {
                margin-top:25px;
                font-size: 15px;
                color: #ffffff;
                font-weight: 900;
                padding:10px;
                text-align:center;

                -webkit-animation: glow 1s ease-in-out infinite alternate;
                -moz-animation: glow 1s ease-in-out infinite alternate;
                animation: glow 1s ease-in-out infinite alternate;
            }
        }

        @-webkit-keyframes glow {
            from {
            text-shadow: 0 0 2px #eeeeee, 0 0 4px #428bca, 0 0 8px #428bca, 0 0 12px #428bca, 
                        0 0 16px #fff, 0 0 20px #fff, 0 0 24px #fff;
            }
            to {
            text-shadow: 0 0 5px #007bff, 0 0 10px #007bff, 0 0 15px #007bff, 0 0 20px #007bff,
                        0 0 25px #007bff, 0 0 30px #007bff, 0 0 35px #007bff;
            }
        }
    </style>


</head>
<body>

    @include('layouts.header')

    <div class="container">
        <div style="height: 25rem;"></div>
    </div>

    @include('layouts.footer')

</body>
</html>
