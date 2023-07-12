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
                            <th>Nama Produk</th>
                            <th>Harga</th>
                            <th>Quantity</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><?php echo $_GET['name']; ?></td>
                            <td><?php echo $_GET['price']; ?></td>
                            <td><?php echo $_GET['qty']; ?></td>
                        </tr>
                        <!-- Tambahkan baris ini untuk setiap produk dalam keranjang -->
                        <!-- <tr>
                            <td>Nama Produk</td>
                            <td>Harga</td>
                            <td>Quantity</td>
                        </tr> -->
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection