<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="google-site-verification" content="OiPp-fJ5SM0jVeNfA9aEsLb4F8wRZ-DYzynTGuBU3HA" />
        <meta name="description" content="@yield('description')">
        <meta name="keywords" content="@yield('keywords')">

        <title>Goshens Fountain -@yield('title')</title>
        
        <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
        <link rel="icon" href="/favicon.ico" type="image/x-icon">
        <link rel="apple-touch-icon" sizes="57x57" href="/apple-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="60x60" href="/apple-icon-60x60.png">
        <link rel="apple-touch-icon" sizes="72x72" href="/apple-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="76x76" href="/apple-icon-76x76.png">
        <link rel="apple-touch-icon" sizes="114x114" href="/apple-icon-114x114.png">
        <link rel="apple-touch-icon" sizes="120x120" href="/apple-icon-120x120.png">
        <link rel="apple-touch-icon" sizes="144x144" href="/apple-icon-144x144.png">
        <link rel="apple-touch-icon" sizes="152x152" href="/apple-icon-152x152.png">
        <link rel="apple-touch-icon" sizes="180x180" href="/apple-icon-180x180.png">
        <link rel="icon" type="image/png" sizes="192x192"  href="/android-icon-192x192.png">
        <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="96x96" href="/favicon-96x96.png">
        <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
        <link rel="manifest" href="/manifest.json">
        <meta name="msapplication-TileColor" content="">
        <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
        <meta name="theme-color" content="">
        <!--font awesome-->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <!-- custom css-->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css" >
    </head>
    <body>
        <nav class="fixed-top">
            <div class="container">
                <a href="#" id="brand">
                    <img src="img/logo.png" alt="Goshens Fountain">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                
                    <ul class="navbar-nav navbar-menu">
                    <li><a href="#">HOME</a></li>
                    <li><a href="https://goshensfountain.org/aboutus">ABOUT US</a></li>
                    <li><a href="https://goshensfountain.org/whatwedo">WHAT WE DO</a></li>
                    <li><a href="https://goshensfountain.org/contactus">CONTACT US</a></li>
                    </ul>
                
            </div>
        </nav>

        @yield('content') 




        
        <footer>
            <div class="container pt-3">
                <div class="row ">
                    <div class="col-sm-3 ">
                        <p><strong>get to know us</strong></p>
                        <ul class="nav flex-column">
                            <li class="nav-item">
                                <a class="nav-link" href="#">read our blog</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">read our field stories</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">look at our staff</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-sm-3 ">
                        <p><strong>connect with us</strong></p>
                        <ul class="nav flex-column">
                            <li class="nav-item">
                                <a class="nav-link" href="#">contact us</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-sm-3 ">
                        <p><strong>get involved</strong></p>
                        <ul class="nav flex-column">
                            <li class="nav-item">
                                <a class="nav-link" href="#">volunteer</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">partner with us</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">shop our products</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">donate</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-sm-3 ">
                        <p>&copy; Goshens</p>
                    </div>
                </div>
            </div>
        </footer>
    </body>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script type="text/javascript" src="{{URL::asset('js/jquery.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <Script href="{{ asset('js/app.js') }}"></Script>
    <script type="text/javascript" src="{{URL::asset('js/app.js')}}"></script>
</html>
