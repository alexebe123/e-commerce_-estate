<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- gLightbox gallery-->
    <link rel="stylesheet" href="{{asset("vendor/glightbox/css/glightbox.min.css")}}">
    <!-- Range slider-->
    <link rel="stylesheet" href="{{asset("vendor/nouislider/nouislider.min.css")}}">
    <!-- Choices CSS-->
    <link rel="stylesheet" href="{{asset("vendor/choices.js/public/assets/styles/choices.min.css")}}">
    <!-- Swiper slider-->
    <link rel="stylesheet" href="{{asset("vendor/swiper/swiper-bundle.min.css")}}">
    <!-- Google fonts-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Libre+Franklin:wght@300;400;700&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Martel+Sans:wght@300;400;800&amp;display=swap">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="{{asset("css/style.default.css")}}" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="{{asset("css/custom.css")}}">
    <!-- Favicon-->
    <link rel="shortcut icon" href="img/favicon.png">
</head>
<body>
     <!-- navbar-->
     <header class="header bg-white">
        <div class="container px-lg-3">
          <nav class="navbar navbar-expand-lg navbar-light py-3 px-lg-0"><a class="navbar-brand" href="{{ route("index") }}"><span class="fw-bold text-uppercase text-dark">متجر العقار</span></a>
            <button class="navbar-toggler navbar-toggler-end" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav me-auto">
                <li class="nav-item">
                  <!-- Link--><a class="nav-link active" href="{{ route("index") }}">صفحة الرئيسية</a>
                </li>
              <!-- <ul class="navbar-nav ms-auto">               
                <li class="nav-item"><a class="nav-link" href="#!"> <i class="fas fa-user me-1 text-gray fw-normal"></i>تسجيل دخول</a></li>
              </ul>-->
               <!-- Right Side Of Navbar -->
               <ul class="navbar-nav ms-auto">
                <!-- Authentication Links -->
                @guest
                    @if (Route::has('login'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('تسجيل الدخول') }}</a>
                        </li>
                    @endif

                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('تسجيل تاجر جديد') }}</a>
                        </li>
                    @endif
                @else
                    <li class="nav-item">
                      <a class="nav-link" href="{{ route('controllpanel') }}">{{ __('لوحة التحكم') }}</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                        </a>

                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                {{ __('تسجيل الخروج') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                    <img src="/{{ Auth::user()->image }}" width="50" height="50" >
                @endguest
            </ul>
            </div>
          </nav>
        </div>
      </header>
      <!--  Modal -->
    @yield('content')
    <footer class="bg-dark text-white">
        <div class="container py-4">
          <div class="row py-5">
            <div class="col-md-4 mb-3 mb-md-0">
              <h6 class="text-uppercase mb-3">Customer services</h6>
              <ul class="list-unstyled mb-0">
                <li><a class="footer-link" href="#!">Help &amp; Contact Us</a></li>
                <li><a class="footer-link" href="#!">Returns &amp; Refunds</a></li>
                <li><a class="footer-link" href="#!">Online Stores</a></li>
                <li><a class="footer-link" href="#!">Terms &amp; Conditions</a></li>
              </ul>
            </div>
            <div class="col-md-4 mb-3 mb-md-0">
              <h6 class="text-uppercase mb-3">Company</h6>
              <ul class="list-unstyled mb-0">
                <li><a class="footer-link" href="#!">What We Do</a></li>
                <li><a class="footer-link" href="#!">Available Services</a></li>
                <li><a class="footer-link" href="#!">Latest Posts</a></li>
                <li><a class="footer-link" href="#!">FAQs</a></li>
              </ul>
            </div>
            <div class="col-md-4">
              <h6 class="text-uppercase mb-3">Social media</h6>
              <ul class="list-unstyled mb-0">
                <li><a class="footer-link" href="#!">Twitter</a></li>
                <li><a class="footer-link" href="#!">Instagram</a></li>
                <li><a class="footer-link" href="#!">Tumblr</a></li>
                <li><a class="footer-link" href="#!">Pinterest</a></li>
              </ul>
            </div>
          </div>
          <div class="border-top pt-4" style="border-color: #1d1d1d !important">
            <div class="row">
              <div class="col-md-6 text-center text-md-start">
                <p class="small text-muted mb-0">&copy; 2021 All rights reserved.</p>
              </div>
              <div class="col-md-6 text-center text-md-end">
                <p class="small text-muted mb-0">Template designed by <a class="text-white reset-anchor" href="https://bootstrapious.com/p/boutique-bootstrap-e-commerce-template">Bootstrapious</a></p>
                <!-- If you want to remove the backlink, please purchase the Attribution-Free License. See details in readme.txt or license.txt. Thanks!-->
              </div>
            </div>
          </div>
        </div>
      </footer>
     <!-- JavaScript files-->
     <script src="{{asset("vendor/bootstrap/js/bootstrap.bundle.min.js")}}"></script>
     <script src="{{asset("vendor/glightbox/js/glightbox.min.js")}}"></script>
     <script src="{{asset("vendor/nouislider/nouislider.min.js")}}"></script>
     <script src="{{asset("vendor/swiper/swiper-bundle.min.js")}}"></script>
     <script src="{{asset("vendor/choices.js/public/assets/scripts/choices.min.js")}}"></script>
     <script src="{{asset("js/front.js")}}"></script>
     <script>
       // ------------------------------------------------------- //
       //   Inject SVG Sprite - 
       //   see more here 
       //   https://css-tricks.com/ajaxing-svg-sprite/
       // ------------------------------------------------------ //
       function injectSvgSprite(path) {
       
           var ajax = new XMLHttpRequest();
           ajax.open("GET", path, true);
           ajax.send();
           ajax.onload = function(e) {
           var div = document.createElement("div");
           div.className = 'd-none';
           div.innerHTML = ajax.responseText;
           document.body.insertBefore(div, document.body.childNodes[0]);
           }
       }
       // this is set to BootstrapTemple website as you cannot 
       // inject local SVG sprite (using only 'icons/orion-svg-sprite.svg' path)
       // while using file:// protocol
       // pls don't forget to change to your domain :)
       injectSvgSprite('https://bootstraptemple.com/files/icons/orion-svg-sprite.svg'); 
       
     </script>
     <!-- FontAwesome CSS - loading as last, so it doesn't block rendering-->
     <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  
</body>
</html>