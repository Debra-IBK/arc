
{{-- 
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body> --}}




<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <!-- Required Meta Tags Always Come First -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Title -->
    <title>Basic Sign In | Front - Admin &amp; Dashboard Template</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="favicon.ico">

    <!-- Font -->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&amp;display=swap" rel="stylesheet">

    <!-- CSS Implementing Plugins -->
    <link rel="stylesheet" href="{{ asset('assets/css/vendor.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/icon-set/style.css') }}">

    <!-- CSS Front Template -->
    <link rel="stylesheet" href="{{ asset('assets/css/theme.minc619.css?v=1.0') }}">
  </head>

    <body>
      <!-- ========== MAIN CONTENT ========== -->
      <main id="content" role="main" class="main">
        <div class="position-fixed top-0 right-0 left-0 bg-img-hero" style="height: 32rem; background-image: url(assets/svg/components/abstract-bg-4.svg);">
          <!-- SVG Bottom Shape -->
          <figure class="position-absolute right-0 bottom-0 left-0">
            <svg preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 1921 273">
              <polygon fill="#fff" points="0,273 1921,273 1921,0 "/>
            </svg>
          </figure>
          <!-- End SVG Bottom Shape -->
        </div>

        <!-- Content -->
        <div class="container py-5 py-sm-7">
          <a class="d-flex justify-content-center mb-5" href="index.html">
            <img class="z-index-2" src="assets/svg/logos/logo.svg" alt="Image Description" style="width: 8rem;">
          </a>

          <div class="row justify-content-center">
            <div class="col-md-7 col-lg-5">
              <!-- Card -->
              <div class="card card-lg mb-5">
                @yield('content')
              </div>
              <!-- End Card -->

              <!-- Footer -->
              <div class="text-center">
                <small class="text-cap mb-4">Trusted by the world's best teams</small>

                <div class="w-85 mx-auto">
                  <div class="row justify-content-between">
                    <div class="col">
                      <img class="img-fluid" src="assets/svg/brands/gitlab-gray.svg" alt="Image Description">
                    </div>
                    <div class="col">
                      <img class="img-fluid" src="assets/svg/brands/fitbit-gray.svg" alt="Image Description">
                    </div>
                    <div class="col">
                      <img class="img-fluid" src="assets/svg/brands/flow-xo-gray.svg" alt="Image Description">
                    </div>
                    <div class="col">
                      <img class="img-fluid" src="assets/svg/brands/layar-gray.svg" alt="Image Description">
                    </div>
                  </div>
                </div>
              </div>
              <!-- End Footer -->
            </div>
          </div>
        </div>
        <!-- End Content -->
      </main>
      <!-- ========== END MAIN CONTENT ========== -->


      <!-- JS Implementing Plugins -->
      <script src="{{ asset('assets/js/vendor.min.js') }}"></script>

      <!-- JS Front -->
      <script src="{{ asset('assets/js/theme.min.js') }}"></script>

      <!-- JS Plugins Init. -->
      <script>
        $(document).on('ready', function () {
          // INITIALIZATION OF SHOW PASSWORD
          // =======================================================
          $('.js-toggle-password').each(function () {
            new HSTogglePassword(this).init()
          });


          // INITIALIZATION OF FORM VALIDATION
          // =======================================================
          $('.js-validate').each(function() {
            $.HSCore.components.HSValidation.init($(this));
          });
        });
      </script>

      <!-- IE Support -->
      <script>
        if (/MSIE \d|Trident.*rv:/.test(navigator.userAgent)) document.write('<script src="assets/vendor/babel-polyfill/polyfill.min.js"><\/script>');
      </script>
    </body>
</html>
