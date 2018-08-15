<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="google-site-verification" content="OiPp-fJ5SM0jVeNfA9aEsLb4F8wRZ-DYzynTGuBU3HA" />

        <title>Goshens Fountain</title>

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
              <a class="navbar-brand" href="https://goshensfountain.org/">goshensfountain.org</a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                  <li class="nav-item">
                    <a class="nav-link disabled" href="/">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link disabled" href="https://goshensfountain.org/whoweare">WHO WE ARE</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link disabled" href="#">Custom</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link disabled" href="#">Custom</a>
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
                      <a class="nav-link" href="https://goshensfountain.org/whoweare">Who we are</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#">What we do</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#">About Us</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#">Blog</a>
                    </li>
                  </ul>
                </div>
                <div class="col-6">
                  <ul class="nav nav justify-content-end">
                    <li class="nav-item">
                      <a class="nav-link" href="#"><i class="fab fa-facebook"></i></a>
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
                <div class="col-12 text-lg-center">
                    <p class="small">&copy; goshensfountain 2018</p>
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
