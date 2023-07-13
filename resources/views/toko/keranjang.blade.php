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
@endsection

@section('content')
    <!-- Page Header Start -->
    <div class="container-fluid page-header mb-5 position-relative overlay-bottom">
        <div class="d-flex flex-column align-items-center justify-content-center pt-0 pt-lg-5" style="min-height: 400px">
            <h1 class="display-4 mb-3 mt-0 mt-lg-5 text-white text-uppercase">Cart</h1>
            <div class="d-inline-flex mb-lg-5">
                <p class="m-0 text-white"><a class="text-white" href="/">Home</a></p>
                <p class="m-0 text-white px-2">/</p>
                <p class="m-0 text-white">Cart</p>
            </div>
        </div>
    </div>
    <!-- Page Header End -->

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Cart</h2>
                <table class="table">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Code</th>
                            <th>Date</th>
                            <th>Product</th>
                            <th>Address</th>
                            <th>Quantity</th>
                            <th>Price</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        @php 
                            $no = 1; 
                        @endphp 
                        @foreach ($orders as $order) 
                        <tr> 
                        <td>{{ $no++ }}</td> 
                        <td>{{ $order->code }}</td> 
                        <td>{{ $order->date }}</td> 
                        <td>{{ $order->product->name }}</td> 
                        <td>{{ $order->user->address}}</td>
                        <td>{{ $order->qty }}</td> 
                        <td>{{ $order->product->price * $order->qty}}</td>
                        <td>
                                                <a href="{{ route('keranjang.edit',$order->id) }}" class="btn btn-primary btn-sm">Edit</a>
                                                <form action="{{ route('keranjang.delete',$order->id) }}" method="POST" class="d-inline">
                                                    @csrf
                                                    @method('delete')
                                                    <button class="btn btn-primary btn-sm" onclick="return confirm('Anda yakin ingin menghapus data ini?')">Delete</button>
                                                </form>
                        </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection