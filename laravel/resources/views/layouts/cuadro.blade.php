<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Maxikiosco Mayorista</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Amatic+SC:400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="/css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/animate.css">

    <link rel="stylesheet" href="/js/sweetalert.css">


    <link rel="stylesheet" href="/css/owl.carousel.min.css">
    {{-- <link rel="stylesheet" href="/css/owl.theme.default.min.css"> --}}
    {{-- <link rel="stylesheet" href="/css/magnific-popup.css"> --}}

    <link rel="stylesheet" href="/css/aos.css">

    <link rel="stylesheet" href="/css/ionicons.min.css">

    <link rel="stylesheet" href="/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="/css/jquery.timepicker.css">


    <link rel="stylesheet" href="/css/flaticon.css">
    <link rel="stylesheet" href="/css/icomoon.css">
    <link rel="stylesheet" href="/css/style.css">
    @stack('styles')
  </head>
<!--------------------------------------- INICIO DE HEADER ---------------------------------->
<body class="goto-here">
  <div class="py-1 bg-primary">
    <div class="container">
      <div class="row no-gutters d-flex align-items-start align-items-center px-md-0">
        <div class="col-lg-12 d-block">
          <div class="row d-flex">
            <div class="col-md pr-4 d-flex topper align-items-center">
              <div class="icon mr-2 d-flex justify-content-center align-items-center"><span class="icon-phone2"></span></div>
                <a href="https://wa.link/vycw24">
                  <span class="text">
                    (+54)115151-7367
                  </span>
                </a>
            </div>
            <div class="col-md pr-4 d-flex topper align-items-center">
              <div class="icon mr-2 d-flex justify-content-center align-items-center"><span class="icon-paper-plane"></span></div>
              <a href="mailto:softwaremayorista@gmail.com">
                <span class="text">
                  softwaremayorista@gmail.com
                </span>
              </a>
            </div>
            <div class="col-md-5 pr-4 d-flex topper align-items-center text-lg-right">
              <span class="text">Lunes a Viernes 8:00 a 17:00 Sabados 8:00 a 13:00</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
      <a class="navbar-brand" href="/">
        <img src="/images/pp.png" alt="" height="50px">
      </a>

      {{-- <div class="container">
        <div class="row">
            <div class="col-xs-8 col-xs-offset-2">
            <div class="input-group">
                    <div class="input-group-btn search-panel">
                        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                          <span id="search_concept">Filter by</span> <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#contains">Contains</a></li>
                          <li><a href="#its_equal">It's equal</a></li>
                          <li><a href="#greather_than">Greather than ></a></li>
                          <li><a href="#less_than">Less than < </a></li>
                          <li class="divider"></li>
                          <li><a href="#all">Anything</a></li>
                        </ul>
                    </div>
                    <input type="hidden" name="search_param" value="all" id="search_param">
                    <input type="text" class="form-control" name="x" placeholder="Search term...">
                    <span class="input-group-btn">
                        <button class="btn btn-default" type="button"><span class="glyphicon glyphicon-search"></span></button>
                    </span>
                </div>
            </div>
      </div>
     </div> --}}


    <form class="input-group mb-2" action="/busqueda" method="get">
       {{-- <div class="input-group mb-3"> --}}
        {{-- <div class="input-group-prepend dropdown">
          <button type="button" class="btn btn-outline-secondary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <span class="sr-only"></span>
          </button>
          <div class="dropdown-menu">
              <a class="dropdown-item" href="/categorias/Caramelos">Caramelos</a>
              <a class="dropdown-item" href="/categorias/Chicles">Chicles</a>
              <a class="dropdown-item" href="/categorias/Chupetines">Chupetines</a>
              <a class="dropdown-item" href="/categorias/Chocolates">Chocolates</a>
              <a class="dropdown-item" href="/categorias/"></a>
              <a class="dropdown-item" href="/categorias/"></a>
              <a class="dropdown-item" href="/categorias/"></a>
              <a class="dropdown-item" href="/categorias/"></a>
              <a class="dropdown-item" href="/categorias/"></a>
          </div>
        </div> --}}
        <input type="text" name="name" class="form-control" aria-label="Text input with segmented dropdown button" placeholder="Buscar productos">
        <div class="input-group-prepend">
        <button type="submit" class="btn btn-outline-secondary ion-ios-search" ></button>
        </div>
       {{-- </div> --}}
    </form>



      {{-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation"> --}}
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="oi oi-menu"></span>
        {{-- menu --}}
      </button>

      <div class="collapse navbar-collapse" id="ftco-nav">

        @auth
                <ul class="navbar-nav ml-auto">
                  <li class="nav-item dropdown">
                          <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                              {{ Auth::user()->name }} <span class="caret"></span>
                          </a>
                          {{-- nombre del usuario logueado --}}

                          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                              <a class="dropdown-item" href="{{ route('logout') }}"
                                 onclick="event.preventDefault();
                                               document.getElementById('logout-form').submit();">
                                  {{ __('Logout') }}
                              </a>
                              <a class="dropdown-item" href="/carrito"> Carrito  </a>

                              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                  @csrf
                              </form>
                          </div>
                      </li>

                  <li class="nav-item">
                      <a class="nav-link" href="/perfil">Perfil</a>
                  </li>
                    <li class="nav-item submenu dropdown">
                <a href="" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                  aria-expanded="false">Productos</a>
                <ul class="dropdown-menu">
                  <li class="nav-item">
                      <a class="nav-link" href="/productos">Todos</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="">Caramelos</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="">Chocolates</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="">Chupetines</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="">Galletitas</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="">Alfajores</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="">Bebidas</a>
                  </li>
                </ul>

                <li class="nav-item">
                    <a class="nav-link" href="redirect">Contacto</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/faq">Ayuda</a>
                </li>
                <li class="nav-item">
                  {{-- <a class="nav-link" href="#" onclick="event.preventDefault();document.getElementById('logout-form').submit();">Salir</a> --}}
                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="dislpay:none">
                      @csrf
                  </form>
                </li>
                             </ul>

              @else



                <ul class="navbar-nav ml-auto">
                  <li class="nav-item">
                      <a class="nav-link" href="/login">Ingresar</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="/register">Registrarse</a>
                  </li>
                    <li class="nav-item submenu dropdown">
                <a href="/" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                  aria-expanded="false">Productos</a>
                  <ul class="dropdown-menu">
                    <li class="nav-item">
                        <a class="nav-link" href="/productos">Todos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="">Caramelos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="">Chocolates</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="">Chupetines</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="">Galletitas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="">Alfajores</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="">Bebidas</a>
                    </li>
                  </ul>

                <li class="nav-item">
                    <a class="nav-link" href="redirect">Contacto</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/faq">Ayuda</a>
                </li>
                             </ul>


  @endauth

      </div>
    </div>
  </nav>
  <!-- END nav -->


  <!---------------------------------------- INICIO DE MAIN --------------------------------------------->

        @yield('main')


    <!-- Footer INICIO -->
    <footer class="ftco-footer ftco-section">
          <div class="container">
          	<div class="row">
          		<div class="mouse">
    						<a href="#" class="mouse-icon">
    							<div class="mouse-wheel"><span class="ion-ios-arrow-up"></span></div>
    						</a>
    					</div>
          	</div>
            <div class="row mb-5">
              <div class="col-md">
                <div class="ftco-footer-widget mb-4">
                  <h2 class="ftco-heading-2">Maxikioscomayorista</h2>
                  <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</p>
                  <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                    <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                    <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                    <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
                  </ul>
                </div>
              </div>
              <div class="col-md">
                <div class="ftco-footer-widget mb-4 ml-md-5">
                  <h2 class="ftco-heading-2">Menu</h2>
                  <ul class="list-unstyled">
                    <li><a href="#" class="py-2 d-block">Shop</a></li>
                    <li><a href="#" class="py-2 d-block">About</a></li>
                    <li><a href="#" class="py-2 d-block">Journal</a></li>
                    <li><a href="#" class="py-2 d-block">Contact Us</a></li>
                  </ul>
                </div>
              </div>
              <div class="col-md-4">
                 <div class="ftco-footer-widget mb-4">
                  <h2 class="ftco-heading-2">Help</h2>
                  <div class="d-flex">
    	              <ul class="list-unstyled mr-l-5 pr-l-3 mr-4">
    	                <li><a href="#" class="py-2 d-block">Shipping Information</a></li>
    	                <li><a href="#" class="py-2 d-block">Returns &amp; Exchange</a></li>
    	                <li><a href="#" class="py-2 d-block">Terms &amp; Conditions</a></li>
    	                <li><a href="#" class="py-2 d-block">Privacy Policy</a></li>
    	              </ul>
    	              <ul class="list-unstyled">
    	                <li><a href="#" class="py-2 d-block">FAQs</a></li>
    	                <li><a href="#" class="py-2 d-block">Contact</a></li>
    	              </ul>
    	            </div>
                </div>
              </div>
              <div class="col-md">
                <div class="ftco-footer-widget mb-4">
                	<h2 class="ftco-heading-2">Have a Questions?</h2>
                	<div class="block-23 mb-3">
    	              <ul>
    	                <li><span class="icon icon-map-marker"></span><span class="text">203 Fake St. Mountain View, San Francisco, California, USA</span></li>
    	                <li><a href="#"><span class="icon icon-phone"></span><span class="text">+2 392 3929 210</span></a></li>
    	                <li><a href="#"><span class="icon icon-envelope"></span><span class="text">info@yourdomain.com</span></a></li>
    	              </ul>
    	            </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12 text-center">

                <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
    						  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart color-danger" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
    						  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
    						</p>
              </div>
            </div>
          </div>
        </footer>



      <!-- loader -->
      <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>

      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

      <script src="/js/jquery.min.js"></script>
      <script src="/js/jquery-migrate-3.0.1.min.js"></script>
      <script src="/js/popper.min.js"></script>
      <script src="/js/bootstrap.min.js"></script>
      <script src="/js/jquery.easing.1.3.js"></script>
      <script src="/js/jquery.waypoints.min.js"></script>
      <script src="/js/jquery.stellar.min.js"></script>
      <script src="/js/owl.carousel.min.js"></script>
      <script src="/js/jquery.magnific-popup.min.js"></script>
      <script src="/js/aos.js"></script>
      <script src="/js/jquery.animateNumber.min.js"></script>
      <script src="/js/bootstrap-datepicker.js"></script>
      <script src="/js/scrollax.min.js"></script>
      <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
      <script src="/js/google-map.js"></script>
      <script src="/js/main.js"></script>
      <script src="/js/sweetalert.min.js"></script>

      {{-- buscador --}}
      <script src="/js/shop.js"></script>
      {{-- <script src="/js/filtrar.js"></script> --}}
      @stack('scripts')
      @include('sweet::alert')

      </body>
    </html>
