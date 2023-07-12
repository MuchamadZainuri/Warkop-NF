@extends('template/toko')

@section('navbar')
    <a href="/" class="nav-item nav-link ">Home</a>
    <a href="/about" class="nav-item nav-link ">About</a>
    <a href="/service" class="nav-item nav-link ">Service</a>
    <a href="/menu" class="nav-item nav-link active">Menu</a>
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
        <a target="" href="/login" class="btn btn-primary btn-effect"> Login </a>
    @endauth
    </li>
@endsection

@section('content') 
    <!-- Page Header Start -->
    <div class="container-fluid page-header mb-5 position-relative overlay-bottom">
        <div class="d-flex flex-column align-items-center justify-content-center pt-0 pt-lg-5" style="min-height: 400px">
            <h1 class="display-4 mb-3 mt-0 mt-lg-5 text-white text-uppercase">Menu</h1>
            <div class="d-inline-flex mb-lg-5">
                <p class="m-0 text-white"><a class="text-white" href="/">Home</a></p>
                <p class="m-0 text-white px-2">/</p>
                <p class="m-0 text-white">Menu</p>
            </div>
            <!-- Search Form -->
            <br>
            <form class="form-inline justify-content-center mb-4" action="/menu/search" method="GET">
                <div class="input-group">
                    <input type="text" class="form-control p-4" placeholder="Cari Menu" style="height: 30px;" id="search">
                    <div class="input-group-append">
                        <button class="searchButton btn btn-primary font-weight-bold px-4" type="submit"><i class="fas fa-search fa-lg"></i></button>
                    </div>
                </div>
            </form>
            <!--Search Form End -->
        </div>
        </div>
    </div>
    <!-- Page Header End -->


  <!-- Menu Start -->
  <div class="container-fluid pt-5">
    <div class="container">
        <div class="section-title">
            <h4 class="text-primary text-uppercase" style="letter-spacing: 5px;">Menu & Harga</h4>
            <h1 class="display-4">Harga Terjangkau</h1>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <h1 class="mb-5">Coffee</h1>
                {{-- MENU COFFE | PERTAMA --}}
                <div class="row align-items-center mb-5 menu-item">
                    <div class="col-4 col-sm-3">
                    <a href="/detail" class="btn">
                        <img class="w-100 rounded-circle mb-3 mb-sm-0" src="assets/dist/img/hot-caffe-american0.jpg" alt="">
                        <h5 class="menu-price">10K</h5>
                    </a>
                    </div>
                    <div class="col-8 col-sm-9">
                        <a href="detail?menu=Caffe Americano"><h4 class="menu-item-name">Caffe Americano</h4></a>
                        <p class="m-0">Bidikan espresso dengan air panas di atasnya menciptakan lapisan crema yang tipis
                            berpuncak pada cangkir yang sangat kaya ini dengan kedalaman dan nuansa</p>
                    </div>
                </div>
                {{-- MENU COFFE | KEDUA --}}
                <div class="row align-items-center mb-5 menu-item">
                    <div class="col-4 col-sm-3">
                        <a href="/detail" class="btn">
                        <img class="w-100 rounded-circle mb-3 mb-sm-0" src="assets/dist/img/hot-esspress0.jpg" alt="">
                        <h5 class="menu-price">10K</h5>
                        </a>
                    </div>
                    <div class="col-8 col-sm-9">
                        <a href="detail?menu=Hot Esspresso"><h4 class="menu-item-name">Hot Esspresso</h4></a>
                        <p class="m-0">Espresso Roast khas kami yang halus dengan rasa yang kaya
                            dan rasa manis karamel adalah inti dari semua yang kami lakukan.</p>
                    </div>
                </div>
                {{-- MENU COFFE | KETIGA --}}
                <div class="row align-items-center mb-5 menu-item">
                    <div class="col-4 col-sm-3">
                        <a href="/detail" class="btn">
                        <img class="w-100 rounded-circle mb-3 mb-sm-0" src="assets/dist/img/hot-flat-wh1te.jpg" alt="">
                        <h5 class="menu-price">10K</h5>
                        </a>
                    </div>
                    <div class="col-8 col-sm-9">
                        <a href="detail?menu=Hot Flat White"><h4 class="menu-item-name">Hot Flat White</h4></a>
                        <p class="m-0">Tembakan ristretto halus dari espresso mendapatkan jumlah kukus yang sempurna
                            susu murni untuk menciptakan rasa yang tidak terlalu kuat, tidak terlalu kental, dan pas.</p>
                    </div>
                </div>
                {{-- MENU COFFE | KEEMPAT --}}
                <div class="row align-items-center mb-5 menu-item">
                    <div class="col-4 col-sm-3">
                        <a href="/detail" class="btn">
                        <img class="w-100 rounded-circle mb-3 mb-sm-0" src="assets/dist/img/iced-flat-white.jpg" alt="">
                        <h5 class="menu-price">10K</h5>
                        </a>
                    </div>
                    <div class="col-8 col-sm-9">
                        <a href="detail?menu=Iced Flat White"><h4 class="menu-item-name">Iced Flat White</h4></a>
                        <p class="m-0">Tembakan espresso ristretto yang halus mendapatkan jumlah susu murni yang sempurna
                            dan es untuk menciptakan rasa yang tidak terlalu kuat, tidak terlalu kental, dan pas.</p>
                    </div>
                </div>
                {{-- MENU COFFE | KELIMA --}}
                <div class="row align-items-center mb-5 menu-item">
                    <div class="col-4 col-sm-3">
                        <a href="/detail" class="btn">
                        <img class="w-100 rounded-circle mb-3 mb-sm-0" src="assets/dist/img/iced-caramel-macchiat0.jpg" alt="">
                        <h5 class="menu-price">12K</h5>
                        </a>
                    </div>
                    <div class="col-8 col-sm-9">
                        <a href="detail?menu=Iced Caramel Macchiato"><h4 class="menu-item-name">Iced Caramel Macchiato</h4></a>
                        <p class="m-0">Kami mengombinasikan espresso kaya rasa dengan sirup rasa vanila,
                            susu dan es, lalu tambahkan dengan gerimis karamel untuk hasil akhir yang sangat manis.</p>
                    </div>
                </div>
                {{-- MENU COFFE | KEENAM --}}
                <div class="row align-items-center mb-5 menu-item">
                    <div class="col-4 col-sm-3">
                        <a href="/detail" class="btn">
                        <img class="w-100 rounded-circle mb-3 mb-sm-0" src="assets/dist/img/iced-coffe-with-m1lk.jpg" alt="">
                        <h5 class="menu-price">13K</h5>
                        </a>
                    </div>
                    <div class="col-8 col-sm-9">
                        <a href="detail?menu=Iced Coffe With Milk"><h4 class="menu-item-name">Iced Coffe With Milk</h4></a>
                        <p class="m-0">Iced Coffee Blend yang baru diseduh dengan susu disajikan
                            dingin dan manis di atas es. Angkat yang benar-benar, serius, dan menyegarkan untuk hari apa pun.</p>
                    </div>
                </div>
            </div>
            <!--Snack-->
            <div class="col-lg-6">
                <h1 class="mb-5">Snack</h1>
                {{-- MENU SNACK | PERTAMA --}}
                <div class="row align-items-center mb-5 menu-item">
                    <div class="col-4 col-sm-3">
                        <a href="/detail" class="btn">
                        <img class="w-100 rounded-circle mb-3 mb-sm-0" src="assets/dist/img/snck-hot-breaad.jpg" alt="">
                        <h5 class="menu-price">8K</h5>
                        </a>
                    </div>
                    <div class="col-8 col-sm-9">
                        <a href="detail?menu=Hot Bread"><h4 class="menu-item-name">Hot Bread</h4></a>
                        <p class="m-0">Roti yang baru saja dipanggang dan masih hangat saat disajikan. 
                            Roti ini lembut dan gurih dengan aroma yang menggoda. 
                            Bisa digunakan untuk sarapan atau cemilan, dan dapat dinikmati dengan beragam topping atau saus.</p>
                    </div>
                </div>
                {{-- MENU SNACK | KEDUA --}}
                <div class="row align-items-center mb-5 menu-item">
                    <div class="col-4 col-sm-3">
                        <a href="/detail" class="btn">
                        <img class="w-100 rounded-circle mb-3 mb-sm-0" src="assets/dist/img/snck-minipizza.jpg" alt="">
                        <h5 class="menu-price">10K</h5>
                        </a>
                    </div>
                    <div class="col-8 col-sm-9">
                        <a href="detail?menu=Mini Pizza"><h4 class="menu-item-name">Mini Pizza</h4></a>
                        <p class="m-0">Varian pizza yang lebih kecil dari ukuran biasa, 
                            biasanya lebih mudah untuk dimakan secara individual. 
                            Mini pizza memiliki crust yang tipis dan dilapisi dengan saus tomat, keju, 
                            dan bahan-bahan lain sesuai selera.</p>
                    </div>
                </div>
                {{-- MENU SNACK | KETIGA --}}
                <div class="row align-items-center mb-5 menu-item">
                    <div class="col-4 col-sm-3">
                        <a href="/detail" class="btn">
                        <img class="w-100 rounded-circle mb-3 mb-sm-0" src="assets/dist/img/snck-cookies.jpg" alt="">
                        <h5 class="menu-price">6K</h5>
                        </a>
                    </div>
                    <div class="col-8 col-sm-9">
                        <a href="detail?menu=Cookies"><h4 class="menu-item-name">Cookies</h4></a>
                        <p class="m-0">Makanan kering yang terbuat dari campuran tepung, gula, mentega atau minyak sayur, 
                            telur, dan bahan-bahan tambahan seperti coklat chips, atau kacang-kacangan. 
                            Cookies dapat ditemukan dalam berbagai rasa dan bentuk, dari yang tradisional hingga yang lebih kreatif. </p>
                    </div>
                </div>
                {{-- MENU SNACK | KEEMPAT --}}
                <div class="row align-items-center mb-5 menu-item">
                    <div class="col-4 col-sm-3">
                        <a href="/detail" class="btn">
                        <img class="w-100 rounded-circle mb-3 mb-sm-0" src="assets/dist/img/snck-oreo.jpg" alt="">
                        <h5 class="menu-price">5K</h5>
                        </a>
                    </div>
                    <div class="col-8 col-sm-9">
                        <a href="detail?menu=Oreo"><h4 class="menu-item-name">Oreo</h4></a>
                        <p class="m-0">Oreo dikenal dengan cetakan "Oreo" di atasnya dan memiliki dua 
                            lapisan tepung gandum hitam dengan lapisan keju krim di tengah. 
                            Oreo dapat dimakan sendiri atau digunakan sebagai bahan dalam berbagai resep.</p>
                    </div>
                </div>
                {{-- MENU SNACK | KELIMA --}}
                <div class="row align-items-center mb-5 menu-item">
                    <div class="col-4 col-sm-3">
                        <a href="/detail" class="btn">
                        <img class="w-100 rounded-circle mb-3 mb-sm-0" src="assets/dist/img/snck-popcorn.jpg" alt="">
                        <h5 class="menu-price">5K</h5>
                        </a>
                    </div>
                    <div class="col-8 col-sm-9">
                        <a href="detail?menu=Popcorn"><h4 class="menu-item-name">PopCorn</h4></a>
                        <p class="m-0">Popcorn dapat disajikan dengan berbagai variasi rasa, seperti gula, 
                            garam, atau rempah-rempah. 
                            Popcorn juga dapat digunakan sebagai bahan dasar dalam berbagai makanan lain seperti trail mix. </p>
                    </div>
                </div>
                {{-- MENU SNACK | KEENAM --}}
                <div class="row align-items-center mb-5 menu-item">
                    <div class="col-4 col-sm-3">
                        <a href="/detail" class="btn">
                        <img class="w-100 rounded-circle mb-3 mb-sm-0" src="assets/dist/img/snck-french-fries.jpg" alt="">
                        <h5 class="menu-price">6K</h5>
                        </a>
                    </div>
                    <div class="col-8 col-sm-9">
                        <a href="detail?menu=French Fries"><h4 class="menu-item-name">French Fries</h4></a>
                        <p class="m-0">French fries adalah makanan yang dibuat dari irisan kentang 
                            yang digoreng dalam minyak panas hingga renyah.
                            French fries dapat disajikan dengan berbagai saus seperti saus tomat, 
                            saus mayones, saus tartar, atau saus lainnya. </p>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</div>
<!-- Menu End -->
@endsection