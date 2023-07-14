<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Warkop NF</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <!-- MY CSS -->
    <link rel="stylesheet" href="{{asset('assets/dist/css/login.css')}}">
    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <link href="{{asset('assets/dist/css/style.min.css')}}" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
</head>
<body style="background-color: #FFFBF2">
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-dark shadow-sm" >
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    Warkop NF
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">
                        <a href="/about" class="nav-item nav-link">About</a>
    <a href="/service" class="nav-item nav-link">Service</a>
    <a href="/reservation" class="nav-item nav-link">Reservation</a>
            <a href="/testimonial" class="nav-item nav-link">Testimonial</a>
            <a href="/contact" class="nav-item nav-link">Contact</a>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
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
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
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
        <!-- Footer Start -->
    <div class="container-fluid footer text-white mt-5 pt-5 px-0 position-relative overlay-top">
        <div class="row mx-0 pt-5 px-sm-3 px-lg-5 mt-4">
            <div class="col-lg-3 col-md-6 mb-5">
                <h4 class="text-white text-uppercase mb-4" style="letter-spacing: 3px;">Hubungi Kami</h4>
                <p><i class="fa fa-map-marker-alt mr-2"></i>No. 20 RT.5/RW.1 Lenteng Agung, Jakarta Selatan, Indonesia.</p>
                <p><i class="fa fa-phone-alt mr-2"></i>+021 9090 28912</p>
                <p class="m-0"><i class="fa fa-envelope mr-2"></i>info@nurulfikri.ac.id</p>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <h4 class="text-white text-uppercase mb-4" style="letter-spacing: 3px;">Sosial Media</h4>
                <p>ikuti sosial media kami</p>
                <div class="d-flex justify-content-start">
                    <a class="btn btn-lg btn-outline-light btn-lg-square mr-2" href="https://twitter.com/STTTerpaduNF1" target="_blank"><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-lg btn-outline-light btn-lg-square mr-2" href="https://github.com/MuchamadZainuri/Warkop-NF" target="_blank"><i class="fab fa-github"></i></a>
                    <a class="btn btn-lg btn-outline-light btn-lg-square mr-2" href="https://web.facebook.com/STTTerpaduNF/" target="_blank"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-lg btn-outline-light btn-lg-square" href="https://www.instagram.com/sttterpadunf/" target="_blank"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <h4 class="text-white text-uppercase mb-4" style="letter-spacing: 3px;">Jam Buka</h4>
                <div>
                    <h6 class="text-white text-uppercase">Senin - Jumat</h6>
                    <p>8.00 AM - 8.00 PM</p>
                    <h6 class="text-white text-uppercase">Sabtu - Minggu</h6>
                    <p>2.00 PM - 8.00 PM</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <h4 class="text-white text-uppercase mb-4" style="letter-spacing: 3px;">Berlangganan</h4>
                <p>Berlangganan untuk mengetahui info terbaru dari kami</p>
                <div class="w-100">
                    <div class="input-group">
                        <input type="text" class="form-control border-light" style="padding: 25px;" placeholder="Email Anda">
                        <div class="input-group-append">
                            <button class="btn btn-primary font-weight-bold px-3">Sign Up</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid text-center text-white border-top mt-4 py-4 px-sm-3 px-md-5" style="border-color: rgba(256, 256, 256, .1) !important;">
            <p class="mb-2 text-white">Copyright &copy; <a class="font-weight-bold" href="https://nurulfikri.ac.id/">Nurul Fikri</a>. All Rights Reserved.</a></p>
            <p class="m-0 text-white">Developed by <a class="font-weight-bold" href="https://htmlcodex.com">Mahasiswa Nurul Fikri </a></p>
        </div>
    </div>
    <!-- Footer End -->

    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="fa fa-angle-double-up"></i></a>
    </div>
</body>
</html>
