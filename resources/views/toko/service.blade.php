@extends('template/toko')

@section('navbar')
    <a href="/" class="nav-item nav-link ">Home</a>
    <a href="/about" class="nav-item nav-link ">About</a>
    <a href="/service" class="nav-item nav-link active">Service</a>
    <a href="/menu" class="nav-item nav-link">Menu</a>
    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Pages</a>
                        <div class="dropdown-menu text-capitalize">
                            <a href="/reservation" class="dropdown-item">Reservation</a>
                            <a href="/testimonial" class="dropdown-item">Testimonial</a>
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
        <a target="" href="/login" class="btn btn-primary btn-effect" style="border-radius: 8px;"> Login </a>
    @endauth
    </li>
@endsection

@section('content')
<!-- Page Header Start -->
    <div class="container-fluid page-header mb-5 position-relative overlay-bottom">
        <div class="d-flex flex-column align-items-center justify-content-center pt-0 pt-lg-5" style="min-height: 400px">
            <h1 class="display-4 mb-3 mt-0 mt-lg-5 text-white text-uppercase">Services</h1>
            <div class="d-inline-flex mb-lg-5">
                <p class="m-0 text-white"><a class="text-white" href="/">Home</a></p>
                <p class="m-0 text-white px-2">/</p>
                <p class="m-0 text-white">Services</p>
            </div>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Service Start -->
    <div class="container-fluid pt-5">
        <div class="container">
            <div class="section-title">
                <h4 class="text-primary text-uppercase" style="letter-spacing: 5px;">Pelayanan Kami</h4>
                <h1 class="display-4">Biji Kopi Berkualitas dan Organik</h1>
            </div>
            <div class="row">
                <div class="col-lg-6 mb-5">
                    <div class="row align-items-center">
                        <div class="col-sm-5">
                            <img class="img-fluid mb-3 mb-sm-0" src="assets/dist/img/barista.jpg" alt="">
                        </div>
                        <div class="col-sm-7">
                            <h4><i class="fa fa-users service-icon"></i>Barista Profesional</h4>
                            <p class="m-0">Barista Profesional dengan sertifikat internasional dengan segudang pengalaman, sehingga kopi yang disajikan kepada anda terjamin kualitasnya</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mb-5">
                    <div class="row align-items-center">
                        <div class="col-sm-5">
                            <img class="img-fluid mb-3 mb-sm-0" src="assets/dist/img/beans.jpg" alt="">
                        </div>
                        <div class="col-sm-7">
                            <h4><i class="fa fa-coffee service-icon"></i>Biji Kopi Terbaik</h4>
                            <p class="m-0">Biji kopi berkualitas Premium dan Organik yang berasal dari berbagai negara penghasil biji kopi terbaik dunia</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mb-5">
                    <div class="row align-items-center">
                        <div class="col-sm-5">
                            <img class="img-fluid mb-3 mb-sm-0" src="assets/dist/img/cafe.jpg" alt="">
                        </div>
                        <div class="col-sm-7">
                            <h4><i class="fa fa-building service-icon"></i>Tempat yang nyaman</h4>
                            <p class="m-0">Tempat yang menarik dan nyaman cocok untuk bersantai sendiri maupun bersama teman dan keluarga</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mb-5">
                    <div class="row align-items-center">
                        <div class="col-sm-5">
                            <img class="img-fluid mb-3 mb-sm-0" src="assets/dist/img/toast.jpg" alt="">
                        </div>
                        <div class="col-sm-7">
                            <h4><i class="fa fa-utensils service-icon"></i>Berbagai makanan</h4>
                            <p class="m-0">Kami juga menyediakan berbagai makanan yang nikmat untuk menemani kopi anda</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->
@endsection