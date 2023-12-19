<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    {{-- <title>@yield('layout')</title> --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
      #footer{
        position: relative;
        margin-top: 100%;
        height: 230px;
        padding-top: 35em;
        margin-top: 10px;
              
      }
      
    </style>



</head>

<body>
    {{-- navbar dari sini --}}
    <div class="header fixed-top">
        <nav class="navbar" style="background-color: #5D6B6B">
            <div class="container-fluid">
              <span class="navbar-brand mb-0 h1 text-white">MaejangGo</span>
              <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header">
                  <h5 class="offcanvas-title" id="offcanvasNavbarLabel">MaejangGo</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                  <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                    <li class="nav-item">
                      <a class="nav-link active" aria-current="page" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="/booking">Booking</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/chat">Chat</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/faq">FAQ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/aboutus">About Us</a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
        </nav>
    </div>
    {{-- navbar sampai sini --}}

    {{-- content nya dari sini --}}
    @yield('content')
    {{-- content nya sampai sini --}}

    @yield('content2')
    {{-- FOOTER --}}
    <span id="footer">
      <footer class="justify-content-between align-items-center py-3 border-to text-white" style="background-color: #5D6B6B">
        <div class="container d-flex justify-content-between">
            <div class="col-md-4 align-items-center text-white">
                <a class="navbar-brand" href="{{ url('/') }}">BINUS</a>
                <span class="mb-3 mb-md-0 text-body-secondary-white">&copy; {{ date("Y") }} MaejangGO</span>
            </div>
        </div>
      </footer>
    </span>
    
    {{-- <footer class="bg-light text-dark pt-5 pb-4">
      <div class="container text-center text-md-left">
        <div class="row text-center text-md-left">

            <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
              <h5 class="text-uppercase mb-4 font-weight-bold text-info">About Us</h5>
              <hr class="mb-4">
              <p>Jadi ini penjelasannya apapun itu please gua gatau mau ngisi apa. pokok intinya about us</p>
            </div>

            <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
              <h5 class="text-uppercase mb-4 font-weight-bold text-info">Let Us Help</h5>
              <hr class="mb-4">
              <p>
                <a href="#" class="text-dark" style="text-decoration: none">Your Account</a>
              </p>
              <p>
                <a href="#" class="text-dark" style="text-decoration: none">Your Orders</a>
              </p>
              <p>
                <a href="#" class="text-dark" style="text-decoration: none">Manage Your Content And Devices</a>
              </p>
              <p>
                <a href="#" class="text-dark" style="text-decoration: none">Help</a>
              </p>
            </div>

            <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
              <h5 class="text-uppercase mb-4 font-weight-bold text-info">Make Money</h5>
              <hr class="mb-4">
              <p>
                <a href="#" class="text-dark" style="text-decoration: none">Sell Productcs on Our Website</a>
              </p>
              <p>
                <a href="#" class="text-dark" style="text-decoration: none">Advertise Your Products</a>
              </p>
              <p>
                <a href="#" class="text-dark" style="text-decoration: none">Become An Affiliate</a>
              </p>
              <p>
                <a href="#" class="text-dark" style="text-decoration: none">Self-Publish</a>
              </p>
            </div>
            
            <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
              <h5 class="text-uppercase mb-4 font-weight-bold text-info">Contact</h5>
              <hr class="mb-4">
              <p>
                <li class="fas fa-home mr-3"></li>New York NY 2333, US
              </p>
              <p>
                <li class="fas fa-envelope mr-3"></li>theproviders98@gmail.com
              </p>
              <p>
                <li class="fas fa-phone mr-3"></li>0899992222
              </p>
              <p>
                <li class="fas fa-print mr-3"></li>0000777776
              </p>
            </div>

            <hr class="mb-4">
            <div class="row d-flex justiy-content-center">
                <div>
                  <p>
                    Copyright 2023 All Rights Reserved By : 
                    <a href="#" style="text-decoration: none">
                      <strong class="text-info">The Providers</strong>
                    </a>
                  </p>
                </div>
            </div>
            <div class="row d-flex justify-content-center">
                <div class="text-center">
                  <ul class="list-unstyled list-inline">
                    <li class="list-inline-item">
                      <a href="#" class="text-dark"><li class="fab fa-facebook"></li></a>
                    </li>
                    <li class="list-inline-item">
                      <a href="#" class="text-dark"><li class="fab fa-twitter"></li></a>
                    </li>
                    <li class="list-inline-item">
                      <a href="#" class="text-dark"><li class="fab fa-google-plus"></li></a>
                    </li>
                    <li class="list-inline-item">
                      <a href="#" class="text-dark"><li class="fab fa-linkedin-in"></li></a>
                    </li>
                    <li class="list-inline-item">
                      <a href="#" class="text-dark"><li class="fab fa-youtube"></li></a>
                    </li>
                  </ul>
                </div>
            </div>
        </div>
      </div>
    </footer> --}}
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>