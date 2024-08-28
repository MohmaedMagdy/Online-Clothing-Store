<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <link rel="stylesheet" href="{{ asset('css/home.css') }}">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body class="body">
        <div class="container-fuild">
            <div class="row">
                <div class="col-md-12">
                  <nav class="navbar navbar-expand-lg bg-dark ">
                    <h1 class="title text-white" style="font-family:Georgia, 'Times New Roman', Times, serif;">Magdy Store</h1>
                      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                      </button>
                      <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                          <li class="nav-item" style="margin-right: 2.5pc;"style="color: white">
                            <a class="nav-link"  aria-current="page"  href="{{url('/welcome')}}">Home</a>
                          </li>
                          <li class="nav-item" style="margin-right: 2.5pc">
                            <a class="nav-link" href="{{url('/man')}}">Mans</a>
                          </li>
                          <li class="nav-item" style="margin-right: 2.5pc">
                            <a class="nav-link text-white" href="{{url('/woman')}}">Womens</a>
                          </li>
                          <li class="nav-item" style="margin-right: 2.5pc">
                            <a class="nav-link" href="{{url('/kides')}}">Kids</a>
                          </li>
                          <li class="nav-item" style="margin-right: 2.5pc">
                            <a class="nav-link" href="{{url('/fqa')}}">FQA</a>
                          </li>
                        </ul>
                        <form class="d-flex icon" style="margin-left: 2.5pc; margin-right:5pc">
                          <a href="{{url('/profile')}}"  title="you">
                            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
                              <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6"/>
                            </svg>
                          
                          </a>
                          <a href="{{url('/shopping')}}" title="your car" style="margin-left: 2pc">
                            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-cart-fill" viewBox="0 0 16 16">
                              <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5M5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4m7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4m-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2m7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2"/>
                            </svg>
                            <i class="fa fa-shopping-cart" aria-hidden="true"></i><span class="badge bg-danger">{{ count((array) session('cart')) }}</span>
                          </a>
                        </form>
                      </div>
                    
                  </nav>
                </div>
            </div>
        </div>
        @if (session('success'))
          <div class="alert alert-success">
            {{session('success')}}
          </div>
        @endif
        @yield('body')
        <footer class="footer mt-5 " >
          <div class="container">
              <div class="row" style="margin-left: 5pc">
                  <div class="col-md-4 mb-3">
                      <h5>About Us</h5>
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                  </div>
                  <div class="col-md-4 mb-3">
                      <h5>Quick Links</h5>
                      <ul class="list-unstyled">
                          <li><a href="#">Home</a></li>
                          <li><a href="#">Shop</a></li>
                          <li><a href="#">About Us</a></li>
                          <li><a href="#">Contact</a></li>
                          <li><a href="#">Privacy Policy</a></li>
                          <li><a href="#">Terms of Service</a></li>
                      </ul>
                  </div>
                  <div class="col-md-4 mb-3">
                      <h5>Contact Us</h5>
                      <p>123 Fashion Street, New York, NY 10001</p>
                      <p>Email: <a href="mailto:info@clothingwebsite.com">info@clothingwebsite.com</a></p>
                      <p>Phone: (123) 456-7890</p>
                  </div>
              </div>
              <div class="text-center mt-4">
                  <p>&copy; 2024 magdy. All rights reserved.</p>
              </div>
          </div>
      </footer>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>  
    </body>
</html>
