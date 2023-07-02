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
@endsection

@section('content')
<div class="row">
    <div class="col-md-4">
        <div class="card" style="width: 50%;">
            <img src="https://cdn3d.iconscout.com/3d/premium/thumb/product-5806313-4863042.png" class="card-img" alt="">
            <div class="card-body">
                <p class="card-text">PRODUK</p>
            </div>
        </div>
    </div>
  
    <div class="col-md-8">
        <form>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Address</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Quantity</label>
                <input type="number" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
  </div>
@endsection