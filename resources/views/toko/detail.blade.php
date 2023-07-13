@extends('template/toko')

@section('navbar')
    <a href="/" class="nav-item nav-link ">Home</a>
    <a href="/about" class="nav-item nav-link">About</a>
    <a href="/service" class="nav-item nav-link">Service</a>
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
            <h1 class="display-4 mb-3 mt-0 mt-lg-5 text-white text-uppercase">Detail </h1>
            <div class="d-inline-flex mb-lg-5">
                <p class="m-0 text-white"><a class="text-white" href="/">Home</a></p>
                <p class="m-0 text-white px-2">/</p>
                <p class="m-0 text-white">Detail</p>
            </div>
        </div>
    </div>
    <!-- Page Header End -->

    <div class="container">
    <div class="row">
      <div class="col-md-4">
          <div class="card" style="width: 50%;">
              <img src="https://cdn3d.iconscout.com/3d/premium/thumb/product-5806313-4863042.png" class="card-img" > 
              <div class="card-body">
                  <p class="card-text">PRODUK</p>
                </div>
            </div>
        </div>
    
        <div class="col-md-8">
            <form action="{{ route('keranjang') }}" method="GET">
                <input type="hidden" name="id" value="{{ $product->id }}">
                    <div class="mb-3">
                        {{-- NAMA PRODUK SESUAIKAN SAMA DENGAN MENU YANG DIPILIH HARUS SESUAI DI DATABASE--}}
                        <label for="name" class="form-label">
                        <input type="text" class="form-control" id="name" name="name"  value="{{ $product->name }}"  readonly>
                        </label>
                    </div>
                    <div class="mb-3">
                        <label for="price" class="form-label" >
                        <input type="text" class="form-control" id="price" name="price" value="{{ $product->price }}" readonly>
                    </label>
                    </div>
                    {{-- UNTUK QUANTITY BISA SESUAI KE KERANJANG SUBMITNYA --}}
                    <div class="mb-3">
                        <label for="qty" class="form-label">Quantity
                        <input type="number" class="form-control" id="qty" name="qty">
                    </label>
                    </div>
                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Check me out</label>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
    </div>

@endsection