<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Flower Cloud') }}</title>

    <!-- Styles -->
    <link rel="stylesheet" type="text/css" href="{{ URL::asset( 'css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset( 'css/bootstrap-theme.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset( 'css/bootstrap-theme.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset( 'font-awesome/css/font-awesome.min.css') }}">
    <link href="{{ URL::to('css/style1.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="css/themify-icons.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css"> 
    <link rel="stylesheet" href="css/magnific-popup.css">    
    <link rel="stylesheet" href="css/superfish.css">
    <link rel="stylesheet" href="css/easy-responsive-tabs.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-static-top" style="background-color: #FFC0CB; " >
            <div class="container">
                <div class="navbar-header"  >

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse" >
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/home') }}" style="color:#191970 ;">
                       <div class="name"><i class="fa fa-cloud"></i> Flower Cloud </div> 
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @else
                             <li>
                                <a href="#" onclick="event.preventDefault(); document.getElementById('cart_items').submit();"><i class="fa fa-shopping-cart"> </i> Shopping Cart</a>
                            
                                <form id="cart_items" action="/home/show" method="get" style="diplay: none;">
                                    {{ csrf_field() }}
                                    <input type="hidden" name="customer_id" value="{{ Auth::user() -> id }}">
                                </form>
                            
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    <i class="fa fa-user"> </i> {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>

        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
