<!DOCTYPE html>
<html lang="en">
<head>
</style>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Data Entry</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
    
    <!-- Twitter Bootstrap -->
    <link rel="stylesheet" href="{{ asset('assets/bootstrap/css/bootstrap.css') }}">

    <!-- Fortawesome -->
    <script src="https://kit.fontawesome.com/63b4fcb6d3.js" crossorigin="anonymous"></script>
    
  </head>
  <body>
    <header>

      <div class="navbar navbar-expand-lg flex-nowrap navbar-light  " id="navbar">
        <div class="container">
            <button class="navbar-toggler " type="button" data-toggle="collapse" data-target="#navbarTogglerMenu" aria-controls="#navbarTogglerMenu" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
                  
          
        <div class="collapse navbar-collapse justify-content-end" id="navbarTogglerMenu">

          
            
        </div>

        @if (Route::has('login'))
          @auth
             <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                <a class="btn btn-outline-secondary ml-2" href="{{ url('login') }}">Logout</a>
            </div>
          @else
            <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                <a class="btn btn-outline-secondary ml-2" href="{{ url('login') }}">Log in</a>

                <a class="btn btn-secondary ml-3" href="{{ url('register') }}">Register</a>
            </div>
          @endauth
        @endif
                
                
      </div>
      
        
        
      </div>
    </header>
  
    @yield('content')

        
    <footer>
    <div class="footer fixed-bottom">
        
        <div class="container">
            <hr class="mt-0">
            <div class="row align-items-center justify-content-md-between pb-4">
                <div class=col-md-6>
                    <div class="copyright text-sm text-center text-md-left">
                        &copy;<?= date('Y') ?> <a href="#" target="_blank">Data Entry</a>
                        . All rights reserved
                    </div>
                </div>
                <div class=col-md-6>
                    <ul class="nav justify-content-center justify-content-md-end mt-3 mt-md-0">
                        <li class="nav-item">
                            <a class="nav-link text-dark" href="#">Terms</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark" href="#">Privacy</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark" href="#">Team</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark" href="#">Contact Us</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    </footer>

    <script type="text/javascript" src="http://127.0.0.1:8001/assets/js/bootstrap/bootstrap.bundle.min.js" ></script>
  </body>
</html>
