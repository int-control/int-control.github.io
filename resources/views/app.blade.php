<!doctype html>
<html class="no-js" lang="bg">
<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Int control 2000</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/favicons/apple-touch-icon.png') }}">
  <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/favicons/favicon-32x32.png') }}">
  <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/favicons/favicon-16x16.png') }}">
  <link rel="manifest" href="{{ asset('assets/favicons/site.webmanifest') }}">

  <!-- CSS here -->
  <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/slicknav.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/animate.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/fontawesome-all.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/themify-icons.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/slick.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/nice-select.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/app.css') }}">

  <!-- Fontawesome -->
  <script src="https://kit.fontawesome.com/1c40df0035.js" crossorigin="anonymous"></script>
</head>

<body>

<!-- Preloader Start -->
<div id="preloader-active">
  <div class="preloader d-flex align-items-center justify-content-center">
    <div class="preloader-inner position-relative">
      <div class="preloader-circle"></div>
      <div class="preloader-img pere-text">
        <img src="{{ asset('assets/img/logo/loader-logo.png') }}" alt="">
      </div>
    </div>
  </div>
</div>
<!-- Preloader End -->

<header>
  <div class="header-area header-transparent">
    <div class="main-header">
      <div class="header-bottom header-sticky">
        <div class="container-fluid">
          <div class="row align-items-center">
            <!-- Logo -->
            <div class="col-xl-2 col-lg-2 col-md-1">
              <div class="logo">
                <a href="{{ url('/') }}" class="big-logo">
                  <img src="{{ asset('assets/img/logo/logo.png') }}" alt="">
                </a>

                <a href="{{ url('/') }}" class="small-logo">
                  <img src="{{ asset('assets/img/logo/loader-logo.png') }}" alt="">
                </a>
              </div>
            </div>

            <!-- Main-menu -->
            <div class="col-xl-8 col-lg-8 col-md-8">
              <div class="main-menu f-right d-none d-lg-block">
                <nav>
                  <ul id="navigation">
                    <li><a class="font-weight-bold" href="{{ url('') }}">{{ __('app.nav.home') }}</a></li>
                    <li><a class="font-weight-bold" href="{{ url('/about-us') }}">{{ __('app.nav.about_us') }}</a></li>
                    <li><a class="font-weight-bold" href="{{ url('/activities') }}">{{ __('app.nav.activities') }}</a></li>
                    {{-- <li><a class="font-weight-bold" href="{{ url('') }}">{{ __('app.nav.areas') }}</a></li> --}}
                  </ul>
                </nav>
              </div>
            </div>

            <!-- Main-menu Button -->
            <div class="col-xl-2 col-lg-2 col-md-3">
              <div class="header-right-btn f-right d-none d-lg-block">
                <a href="{{ url('/contacts') }}" class="btn">{{ __('app.nav.contacts') }}</a>
              </div>
            </div>

            <!-- Mobile Menu -->
            <div class="col-12">
              <div class="mobile_menu d-block d-lg-none"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</header>

<main>
  @yield('content')
</main>

<!-- Footer Start-->
<footer style="background: #070b11">
  <div class="container py-4 white-color">
    Int-control &copy;<script>document.write(new Date().getFullYear())</script>
  </div>
</footer>
<!-- Footer End-->

<!-- JS here -->

<!-- All JS Custom Plugins Link Here here -->
<script src="{{ asset('assets/js/vendor/modernizr-3.5.0.min.js') }}"></script>
<!-- Jquery, Popper, Bootstrap -->
<script src="{{ asset('assets/js/vendor/jquery-1.12.4.min.js') }}"></script>
<script src="{{ asset('assets/js/popper.min.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
<!-- Jquery Mobile Menu -->
<script src="{{ asset('assets/js/jquery.slicknav.min.js') }}"></script>

<!-- Jquery Slick , Owl-Carousel Plugins -->
<script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('assets/js/slick.min.js') }}"></script>
<!-- Date Picker -->
<script src="{{ asset('assets/js/gijgo.min.js') }}"></script>
<!-- One Page, Animated-HeadLin -->
<script src="{{ asset('assets/js/wow.min.js') }}"></script>
<script src="{{ asset('assets/js/animated.headline.js') }}"></script>
<script src="{{ asset('assets/js/jquery.magnific-popup.js') }}"></script>

<!-- Scrollup, nice-select, sticky -->
<script src="{{ asset('assets/js/jquery.scrollUp.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.nice-select.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.sticky.js') }}"></script>

<!-- counter , waypoint -->
<script src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
<script src="{{ asset('assets/js/jquery.counterup.min.js') }}"></script>

<!-- contact js -->
<script src="{{ asset('assets/js/contact.js') }}"></script>
<script src="{{ asset('assets/js/jquery.form.js') }}"></script>
<script src="{{ asset('assets/js/jquery.validate.min.js') }}"></script>
<script src="{{ asset('assets/js/mail-script.js') }}"></script>
<script src="{{ asset('assets/js/jquery.ajaxchimp.min.js') }}"></script>

<!-- Jquery Plugins, main Jquery -->
<script src="{{ asset('assets/js/plugins.js') }}"></script>
<script src="{{ asset('assets/js/main.js') }}"></script>

</body>
</html>
