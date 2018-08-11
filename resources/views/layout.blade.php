<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="google-site-verification" content="OiPp-fJ5SM0jVeNfA9aEsLb4F8wRZ-DYzynTGuBU3HA" />

        <title>Goshens Fountain</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <!-- custom css-->
        <link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css" >
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
          <div class="container">
              <a class="navbar-brand" href="https://acuityuganda.org/">goshensfountain.org</a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                  <li class="nav-item">
                    <a class="nav-link disabled" href="#">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link disabled" href="#">Custom</a>
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
          <div class="container mt-1">
            <div class="row">
                <div class="col-3">
                    <h4 class="small"><strong>get to know us</strong></h4>
                </div>
                <div class="col-3">
                    <h4 class="small"><strong>connect</strong></h4>
                    
                </div>
                <div class="col-3">
                    <h4 class="small"><strong>resources</strong></h4>
                </div>
                <div class="col-3">
                    <h4 class="small"><strong>get involved</strong></h4>
                </div>
            </div>
            <div class="row">
                <div class="col-8">
                    <h4 class="small"><strong>About Us</strong></h4>
                    <p class="lead">Sint irure aliquip ex sint commodo labore tempor ad dolore occaecat eiusmod cupidatat eiusmod commodo in do cillum id.</p>
                </div>
                <div class="col-4">
                    <p>Sint irure aliquip ex sint commodo labore tempor ad dolore occaecat eiusmod cupidatat eiusmod commodo in do cillum id.</p>
                </div>
            </div>
            <div class="row"></div>
          </div>
        </footer>
    </body>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</html>
