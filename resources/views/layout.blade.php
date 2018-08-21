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
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
        <meta name="theme-color" content="#ffffff">
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
        <nav id="begin" class="navbar navbar-expand-lg navbar-dark fixed-top">
          <div class="container">
              <a class="navbar-brand" href="https://goshensfountain.org/">
                 <img src="img/logo.png">
               </a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                  <li class="nav-item">
                    <a class="nav-link disabled" href="/">HOME</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link disabled" href="https://goshensfountain.org/aboutus">
                      ABOUT US
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link disabled" href="https://goshensfountain.org/whatwedo">
                      WHAT WE DO
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link disabled" href="https://goshensfountain.org/contactus">
                      CONTACT US
                    </a>
                  </li>
                </ul>
              </div>
          </div>
        </nav>


        @yield('content')
    

        <footer class="footer">
          <div class="container mt-3">
            <div class="row">
                <div class="col-6">
                  <ul class="nav nav">
                    <li class="nav-item">
                      <a class="nav-link" href="https://goshensfountain.org/whatwedo">
                        WHAT WE DO
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="https://goshensfountain.org/aboutus">
                        ABOUT US
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="https://goshensfountain.org/contactus">
                        CONTACT US
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link disabled" href="#">
                        BLOG
                      </a>
                    </li>
                  </ul>
                </div>
                <div class="col-6">
                  <ul class="nav nav justify-content-end">
                    <li class="nav-item">
                      <a class="nav-link" href="https://web.facebook.com/Goshens-Fountain-Of-Nutrition-and-Health-291511178073141/"><i class="fab fa-facebook"></i></a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#"><i class="fab fa-twitter"></i></a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#"><i class="fab fa-instagram"></i></a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#"><i class="fas fa-envelope"></i></a>
                    </li>
                  </ul>
                </div>
            </div>
            
            <div class="row mt-2">
                <div class="col-12 text-lg-right">
                    <p class="small">&copy; <a href="/">weblotts.com</a></p>
                </div>
            </div>
          </div>
        </footer>




    </body>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <Script href="{{ asset('css/app.css') }}"></Script>
</html>
