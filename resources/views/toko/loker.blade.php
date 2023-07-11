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
                            <a href="/testimonial" class="dropdown-item">Testimonial</a>
                            <a href="/loker" class="dropdown-item active">Karir</a>
                        </div>
                    </div>
                    <a href="/contact" class="nav-item nav-link">Contact</a>
@endsection

@section('content')

    <!-- Page Header Start -->
    <div class="container-fluid page-header mb-5 position-relative overlay-bottom">
        <div class="d-flex flex-column align-items-center justify-content-center pt-0 pt-lg-5" style="min-height: 400px">
            <h1 class="display-4 mb-3 mt-0 mt-lg-5 text-white text-uppercase">Karir</h1>
            <div class="d-inline-flex mb-lg-5">
                <p class="m-0 text-white"><a class="text-white" href="/">Home</a></p>
                <p class="m-0 text-white px-2">/</p>
                <p class="m-0 text-white">Karir</p>
            </div>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- About Start -->
    <div class="container">
    <table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Posisi</th>
      <th scope="col">Status</th>
      <th scope="col">Daftar</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Barista</td>
      <td>Full Time</td>
      <td><a target="_blank" href="https://mail.google.com/mail/u/0/#inbox?compose=new" class="btn btn-dark btn-effect"> Apply Now </a></td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Barista</td>
      <td>Full Time</td>
      <td><a target="_blank" href="mailto:ardikaardika17436@gmail.com" class="btn btn-dark btn-effect"> Apply Now </a></td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Barista</td>
      <td>Full Time</td>
      <td><a target="_blank" href="" class="btn btn-dark btn-effect"> Apply Now </a></td>
    </tr>
    <tr>
      <th scope="row">4</th>
      <td>Kasir</td>
      <td>Full Time</td>
      <td><a target="_blank" href="" class="btn btn-dark btn-effect"> Apply Now </a></td>
    </tr>
    <tr>
      <th scope="row">5</th>
      <td>Assistant store manager</td>
      <td>Full Time</td>
      <td><a target="_blank" href="" class="btn btn-dark btn-effect"> Apply Now </a></td>
    </tr>
    <tr>
      <th scope="row">6</th>
      <td>Production assistant</td>
      <td>Full Time</td>
      <td><a target="_blank" href="" class="btn btn-dark btn-effect"> Apply Now </a></td>
    </tr>
    <tr>
      <th scope="row">7</th>
      <td>Social media manager</td>
      <td>Full Time</td>
      <td><a target="_blank" href="" class="btn btn-dark btn-effect"> Apply Now </a></td>
    </tr>
    <tr>
      <th scope="row">8</th>
      <td>Coffe store manager</td>
      <td>Full Time</td>
      <td><a target="_blank" href="" class="btn btn-dark btn-effect"> Apply Now </a></td>
    </tr>
  </tbody>
</table>
    </div>
    <!-- About End -->

@endsection