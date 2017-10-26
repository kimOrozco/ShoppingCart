<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="css/themify-icons.css">
        <link rel="stylesheet" href="css/bootstrap.css">
     
        <link rel="stylesheet" href="css/owl.carousel.min.css">
        <link rel="stylesheet" href="css/owl.theme.default.min.css">
     
        <link rel="stylesheet" href="css/magnific-popup.css">
     
        <link rel="stylesheet" href="css/superfish.css">
        
        <link rel="stylesheet" href="css/easy-responsive-tabs.css">

        <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
        
        <link rel="stylesheet" href="css/animate.css">
        
        <link rel="stylesheet" href="css/style.css">
        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #8B0000;
                font-family: 'Raleway', sans-serif;
                font-weight: 200;
                height: 150vh;
            }

            .full-height {
                height: 100vh;
            }


            .top-right {
                float: right;
                font-size: 30px;
                /*position: absolute;*/
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;

            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 18px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
            #fh5co-hero1 {
              background-size: cover;
              background-image: url('img/MuIV2JN.jpg');
              background-repeat: no-repeat;
              text-align: center;
              float: left;
              width: 100%;
              height: 750px;
              display: table;
              position: relative;
              z-index: 20;
              color: #ffffff;
            }
            #fh5co-hero1 .overlay {
              position: absolute;
              top: 0;
              left: 0;
              right: 0;
              bottom: 0;
              z-index: -1;
              opacity: .97;
            }
            #fh5co-hero1 .fh5co-hero-wrap {
              padding-top: 15em;
              display: table;
              height: 650px;
              width: 100%;
            }
            #fh5co-hero1 .fh5co-arrow {
              position: absolute;
              bottom: -25px;
              left: 50%;
              margin-left: -30px;
              display: table;
              color: #ffffff;
              font-size: 24px;
              z-index: 99;
              text-decoration: none;
              width: 50px;
              height: 50px;
              background: #f86942;
              border-bottom: none !important;
              text-align: center;
              -webkit-border-radius: 50%;
              -moz-border-radius: 50%;
              -ms-border-radius: 50%;
              -o-border-radius: 50%;
              border-radius: 50%;
              -webkit-box-shadow: 0 0.125em 0.125em 0 rgba(0, 0, 0, 0.125);
              -moz-box-shadow: 0 0.125em 0.125em 0 rgba(0, 0, 0, 0.125);
              -ms-box-shadow: 0 0.125em 0.125em 0 rgba(0, 0, 0, 0.125);
              -o-box-shadow: 0 0.125em 0.125em 0 rgba(0, 0, 0, 0.125);
              box-shadow: 0 0.125em 0.125em 0 rgba(0, 0, 0, 0.125);
            }
            #fh5co-hero1 .fh5co-arrow i {
              display: table-cell;
              vertical-align: middle;
            }
            #fh5co-hero1 .fh5co-arrow:active, #fh5co-hero1 .fh5co-arrow:focus, #fh5co-hero1 .fh5co-arrow:hover {
              outline: none;
            }
        </style>

    </head>
    <body>
        <!-- <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @if (Auth::check())
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ url('/login') }}">Login</a>
                        <a href="{{ url('/register') }}">Register</a>
                    @endif
                </div>
            @endif -->
        
        <div id="fh5co-hero1">
            <div class="overlay"></div>
            <a href="#fh5co-main1" class="page-scroll fh5co-arrow"><i class="fa fa-chevron-circle-down"></i></a>
             <!-- End fh5co-arrow -->
            <div class="container">
                <div class="col-md-12">
                    <div class="fh5co-hero-wrap">
                        <div class="fh5co-hero-intro">
                            <h1 class="to-animate hero-animate-1" style="color:#8B0000; font-weight:800">Welcome to 1800Flowers</h1>
                            <h2 class="to-animate hero-animate-2" style="color:#000; font-weight:800">Sale of to 60% <a href="http://freehtml5.co" target="_blank"></a></h2>

                            <p class="to-animate hero-animate-3">
                            <a href="{{ url('/login') }}" class="btn btn-outline btn-md" style="color:#000; font-weight:800">Log In</a>
                            <a href="{{ url('/register') }}" class="btn btn-outline btn-md" style="color:#000; font-weight:800">Register</a></p>
                        </div>
                    </div>
                    
                </div>
            </div>      
        </div>
    </div>
    </body>   

        <div id="fh5co-main">
            
            <div class="fh5co-cards">
                <div class="container-fluid">
                    <div class="row animate-box">
                        <div class="col-md-12 heading text-center" style="color:#000 !important; font-weight:800"><h2 style="color: #000; font-weight:800">Special Flowers</h2></div>
                    </div>
                    <div class="row">
                        <div class="col-lg-3 col-md-6 col-sm-6 animate-box">
                            <a class="fh5co-card" href="#">
                                <img src="img/Pastel-Centerpiece-2T.jpg" alt="Free HTML5 Bootstrap template" class="img-responsive">
                                <div class="fh5co-card-body">
                                    <h3 style="color: #000; font-weight:800">Wedding Flower</h3>
                                    <p style="color: #000; font-weight:800">Lorem ipsum dolor sit amet</p>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6 animate-box">
                            <a class="fh5co-card" href="#">
                                <img src="img/EXQUISITE-7.jpg" alt="Free HTML5 Bootstrap template" class="img-responsive">
                                <div class="fh5co-card-body">
                                    <h3 style="color: #000; font-weight:800">Flower Bouquet</h3>
                                    <p style="color: #000; font-weight:800">Lorem ipsum dolor sit amet</p>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6 animate-box">
                            <a class="fh5co-card" href="#">
                                <img src="img/colorful_bouquet_arrangement.jpg" alt="Free HTML5 Bootstrap template" class="img-responsive">
                                <div class="fh5co-card-body">
                                    <h3 style="color: #000; font-weight:800">European Garden</h3>
                                    <p style="color: #000; font-weight:800">Lorem ipsum dolor sit amet </p>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6 animate-box">
                            <a class="fh5co-card" href="#">
                                <img src="img/Simple_Elegance_Bouquet.jpg" alt="Free HTML5 Bootstrap template" class="img-responsive">
                                <div class="fh5co-card-body">
                                    <h3 style="color: #000; font-weight:800">Thanksgiving Bouquet</h3>
                                    <p style="color: #000; font-weight:800">Lorem ipsum dolor sit amet</p>
                                </div>
                            </a>
                        </div>
                        
                    </div>
                </div>
            </div>
           
    </body>
</html>
