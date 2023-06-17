@extends('template/toko')

@section('content')
    <!-- Page Header Start -->
    <div class="container-fluid page-header mb-5 position-relative overlay-bottom">
        <div class="d-flex flex-column align-items-center justify-content-center pt-0 pt-lg-5" style="min-height: 400px">
            <h1 class="display-4 mb-3 mt-0 mt-lg-5 text-white text-uppercase">Testimonial</h1>
            <div class="d-inline-flex mb-lg-5">
                <p class="m-0 text-white"><a class="text-white" href="">Home</a></p>
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
                        <img class="img-fluid" src="img/testimonial-1.jpg" alt="">
                        <div class="ml-3">
                            <h4>Sintya Megahary</h4>
                            <i>Desainer Busana</i>
                        </div>
                    </div>
                    <p class="m-0">Tempat yang aesthetic dengan harga menu yang cukup terjangkau. </p>
                </div>
                <div class="testimonial-item">
                    <div class="d-flex align-items-center mb-3">
                        <img class="img-fluid" src="img/testimonial-2.jpg" alt="">
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
                        <img class="img-fluid" src="img/testimonial-3.jpg" alt="">
                        <div class="ml-3">
                            <h4>Sarah Clarson</h4>
                            <i>Ibu Rumah Tangga</i>
                        </div>
                    </div>
                    <p class="m-0">Sekedar healing sama temen-temen sambil minum kopi yang enaknya poll.</p>
                </div>
                <div class="testimonial-item">
                    <div class="d-flex align-items-center mb-3">
                        <img class="img-fluid" src="img/testimonial-4.jpg" alt="">
                        <div class="ml-3">
                            <h4>Ezkadon Hury</h4>
                            <i>IT Master</i>
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