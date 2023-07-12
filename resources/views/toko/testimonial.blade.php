@extends('template/toko')

@section('navbar')
    <a href="/" class="nav-item nav-link ">Home</a>
    <a href="/about" class="nav-item nav-link">About</a>
    <a href="/service" class="nav-item nav-link">Service</a>
    <a href="/menu" class="nav-item nav-link">Menu</a>
    <div class="nav-item dropdown">
                        <a href="#" class="nav-link active dropdown-toggle" data-toggle="dropdown">Pages</a>
                        <div class="dropdown-menu text-capitalize">
                            <a href="/reservation" class="dropdown-item">Reservation</a>
                            <a href="/testimonial" class="dropdown-item active">Testimonial</a>
                            <a href="/loker" class="dropdown-item">Karir</a>
                        </div>
                    </div>
                    <a href="/contact" class="nav-item nav-link">Contact</a>
                    <li class="nav-item dropdown no-arrow">
    @auth
            <a class="nav-link text-center" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img class="img-profile rounded-circle" src="{{asset('assets/dist/img/undraw_profile.svg')}}"width="55" > <br> {{ Auth::user()->name }} <span class="caret"></span>
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Settings
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Activity Log
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" data-toggle="modal" data-target="#logoutModal" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    {{ __('Logout') }}
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                            </div>
        @else
        <a target="" href="/login" class="btn btn-primary btn-effect"> Login </a>
    @endauth
    </li>
@endsection

@section('content')
    <!-- Page Header Start -->
    <div class="container-fluid page-header mb-5 position-relative overlay-bottom">
        <div class="d-flex flex-column align-items-center justify-content-center pt-0 pt-lg-5" style="min-height: 400px">
            <h1 class="display-4 mb-3 mt-0 mt-lg-5 text-white text-uppercase">Testimonial</h1>
            <div class="d-inline-flex mb-lg-5">
                <p class="m-0 text-white"><a class="text-white" href="/">Home</a></p>
                <p class="m-0 text-white px-2">/</p>
                <p class="m-0 text-white">Testimonial</p>
            </div>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Testimonial Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="section-title">
                <h4 class="text-primary text-uppercase" style="letter-spacing: 5px;">Testimoni</h4>
                <h1 class="display-4">Komentar</h1>
            </div>
            <div class="owl-carousel testimonial-carousel">
                <div class="testimonial-item">
                    <div class="d-flex align-items-center mb-3">
                        <img class="img-fluid" src="assets/dist/img/testimonial-1.jpg" alt="">
                        <div class="ml-3">
                            <h4>Sintya Megahary</h4>
                            <i>Desainer Busana</i>
                        </div>
                    </div>
                    <p class="m-0">Tempat yang aesthetic dengan harga menu yang cukup terjangkau. </p>
                </div>
                <div class="testimonial-item">
                    <div class="d-flex align-items-center mb-3">
                        <img class="img-fluid" src="assets/dist/img/testimonial-2.jpg" alt="">
                        <div class="ml-3">
                            <h4>Boby Kopling</h4>
                            <i>Pembalap</i>
                        </div>
                    </div>
                    <p class="m-0">Penasaran sama tempatnya yang katanya bagus & harga menu yang murah, 
                        ternyata emang tempatnya bagus dan minumannya enak-enak.
                    </p>
                </div>
                <div class="testimonial-item">
                    <div class="d-flex align-items-center mb-3">
                        <img class="img-fluid" src="assets/dist/img/testimonial-3.jpg" alt="">
                        <div class="ml-3">
                            <h4>Sarah Clarson</h4>
                            <i>Ibu Rumah Tangga</i>
                        </div>
                    </div>
                    <p class="m-0">Sekedar healing sama temen-temen sambil minum kopi yang enaknya poll.</p>
                </div>
                <div class="testimonial-item">
                    <div class="d-flex align-items-center mb-3">
                        <img class="img-fluid" src="/assets/dist/img/testimonial-4.jpg" alt="">
                        <div class="ml-3">
                            <h4>Ezkadon Hury</h4>
                            <i>Programmer</i>
                        </div>
                    </div>
                    <p class="m-0">Biar ga pusing sama kerjaan yang ngoding terus, 
                        mending di barengin sambil ngopi Hot Esspresso.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->
@endsection