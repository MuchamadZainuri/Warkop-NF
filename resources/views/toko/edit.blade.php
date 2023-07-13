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
            <a class="nav-link text-center" href="#" id="userDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                <img class="img-profile rounded-circle" src="{{ asset('assets/dist/img/undraw_profile.svg') }}"width="55">
                <br> {{ Auth::user()->name }} <span class="caret"></span>
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
            <h1 class="display-4 mb-3 mt-0 mt-lg-5 text-white text-uppercase">cart </h1>
            <div class="d-inline-flex mb-lg-5">
                <p class="m-0 text-white"><a class="text-white" href="/">Home</a></p>
                <p class="m-0 text-white px-2">/</p>
                <p class="m-0 text-white">Edit</p>
            </div>
        </div>
    </div>
    <!-- Page Header End -->
    <div class="container">
        <h2>Edit</h2>
        <form action="{{ route('keranjang.update', $order->id) }}" method="POST">
            @csrf
            @method('put')
            <div class="form-group">
                <label for="product_id">Product :</label>
                <select class="form-select" id="product_id" name="product_id" style="background-color: #fff;border-color: #848383; color: #000">
                    @foreach ($product as $products)
                        <option value="{{ $products->id }}" @if (old('product_id', $products->id) == $order->product_id) selected="selected" @endif>
                            {{ $products->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="price">Alamat :</label>
                <input type="text" name="price" id="price" class="form-control"
                    value="{{ $order->user->address }}">
            </div>
            <div class="form-group">
                <label for="qty">Quantity :</label>
                <input type="number" name="qty" id="qty" class="form-control" value="{{ $order->qty }}">
            </div>
            <div class="form-group">
                <label for="note">Noted :</label>
                <br>
                <textarea name="note" id="note" rows="4" class="form-control">{{ $order->note }}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>

    </div>
@endsection
