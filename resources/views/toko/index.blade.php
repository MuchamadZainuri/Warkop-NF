@extends('template/toko')

@section('navbar')
    <a href="/" class="nav-item nav-link active">Home</a>
    <a href="/about" class="nav-item nav-link">About</a>
    <a href="/service" class="nav-item nav-link">Service</a>
    <a href="/menu" class="nav-item nav-link">Menu</a>
    <div class="nav-item dropdown">
                        <a href="" class="nav-link dropdown-toggle" data-toggle="dropdown">Pages</a>
                        <div class="dropdown-menu text-capitalize">
                            <a href="/reservation" class="dropdown-item">Reservation</a>
                            <a href="/testimonial" class="dropdown-item">Testimonial</a>
                            <a href="/loker" class="dropdown-item">Karir</a>
                        </div>
                    </div>
                    <a href="/contact" class="nav-item nav-link">Contact</a>
@endsection

@section('content')
    <!-- Carousel Start -->
    <div class="container-fluid p-0 mb-5">
        <div id="blog-carousel" class="carousel slide overlay-bottom" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="assets/dist/img/index (1).jpg" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <h2 class="text-primary font-weight-medium m-0">Kami Telah Melayani</h2>
                        <h1 class="display-1 text-white m-0">COFFEE</h1>
                        <h2 class="text-white m-0">* Sejak tahun 2000 *</h2>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="assets/dist/img/index (2).jpg" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <h2 class="text-primary font-weight-medium m-0">Kami Telah Melayani</h2>
                        <h1 class="display-1 text-white m-0">COFFEE</h1>
                        <h2 class="text-white m-0">* Sejak tahun 2000 *</h2>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#blog-carousel" data-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#blog-carousel" data-slide="next">
                <span class="carousel-control-next-icon"></span>
            </a>
        </div>
    </div>
    <!-- Carousel End -->


    <!-- About Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="section-title">
                <h4 class="text-primary text-uppercase" style="letter-spacing: 5px;">About Us</h4>
                <h1 class="display-4">Melayani Sejak tahun 2000</h1>
            </div>
            <div class="row">
                <div class="col-lg-4 py-0 py-lg-5">
                    <h1 class="mb-3">Cerita Kami</h1>
                    <h5 class="mb-3">Memulai usaha dengan modal yang kecil dan hanya menyediakan sedikit menu seperti Hot Esspresso, Hot Bread, Hot Caffe Americano, dan Oreo.</h5>
                    <p>Namun, dengan kerja keras dan kreativitas, Warkop NF berkembang dan menambah menu makanan lain seperti Hot Flat White, Iced Flat White, Mini Pizza, Cookies, dll. 
                        Warkop ini menjadi tempat nongkrong yang digemari oleh anak muda karena suasananya yang santai dan harga yang terjangkau. </p>
                </div>
                <div class="col-lg-4 py-5 py-lg-0" style="min-height: 500px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100" src="assets/dist/img/about.png" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-4 py-0 py-lg-5">
                    <h1 class="mb-3">Visi Kami</h1>
                    <p>Warkop NF memiliki beberapa visi yang di sepakati sejak awal pembangunan Warkop NF</p>
                    <h5 class="mb-3"><i class="fa fa-check text-primary mr-3"></i>Menjadi tempat nongkrong yang paling digemari oleh masyarakat setempat.</h5>
                    <h5 class="mb-3"><i class="fa fa-check text-primary mr-3"></i>Menyediakan menu makanan yang berkualitas dengan harga yang terjangkau.</h5>
                    <h5 class="mb-3"><i class="fa fa-check text-primary mr-3"></i>Menjadi usaha kuliner yang dapat diandalkan dan dipercaya oleh pelanggan.</h5>
                    <h5 class="mb-3"><i class="fa fa-check text-primary mr-3"></i>Mengembangkan usaha dengan menambahkan menu-menu baru dan inovasi dalam bidang kuliner.</h5>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


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


    <!-- Offer Start -->
    <div class="offer container-fluid my-5 py-5 text-center position-relative overlay-top overlay-bottom">
        <div class="container py-5">
            <h1 class="display-3 text-primary mt-3">Diskon 50%</h1>
            <h1 class="text-white mb-3">Penawaran Khusus Hari Minggu</h1>
            <h4 class="text-white font-weight-normal mb-4 pb-3">Hanya untuk hari Minggu dari 1 Januari hingga 30 Januari 2025</h4>
            <form class="form-inline justify-content-center mb-4">
                <div class="input-group">
                    <input type="text" class="form-control p-4" placeholder="Email Anda" style="height: 60px;">
                    <div class="input-group-append">
                        <button class="btn btn-primary font-weight-bold px-4" type="submit">Sign Up</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- Offer End -->


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
                    <div class="row align-items-center mb-5">
                        <div class="col-4 col-sm-3">
                            <img class="w-100 rounded-circle mb-3 mb-sm-0" src="assets/dist/img/hot-caffe-american0.jpg" alt="">
                            <h5 class="menu-price">10K</h5>
                        </div>
                        <div class="col-8 col-sm-9">
                            <h4>Hot Caffe Americano</h4>
                            <p class="m-0">Bidikan espresso dengan air panas di atasnya menciptakan lapisan crema yang tipis
                                berpuncak pada cangkir yang sangat kaya ini dengan kedalaman dan nuansa.</p>
                        </div>
                    </div>
                    <div class="row align-items-center mb-5">
                        <div class="col-4 col-sm-3">
                            <img class="w-100 rounded-circle mb-3 mb-sm-0" src="assets/dist/img/hot-esspress0.jpg" alt="">
                            <h5 class="menu-price">10K</h5>
                        </div>
                        <div class="col-8 col-sm-9">
                            <h4>Hot Esspresso</h4>
                            <p class="m-0">Espresso Roast khas kami yang halus dengan rasa yang kaya
                                dan rasa manis karamel adalah inti dari semua yang kami lakukan.</p>
                        </div>
                    </div>
                    <div class="row align-items-center mb-5">
                        <div class="col-4 col-sm-3">
                            <img class="w-100 rounded-circle mb-3 mb-sm-0" src="assets/dist/img/iced-caramel-macchiat0.jpg" alt="">
                            <h5 class="menu-price">12K</h5>
                        </div>
                        <div class="col-8 col-sm-9">
                            <h4>Iced Caramel Macchiato</h4>
                            <p class="m-0">Kami mengombinasikan espresso kaya rasa dengan sirup rasa vanila,
                                susu dan es, lalu tambahkan dengan gerimis karamel untuk hasil akhir yang sangat manis.</p>
                        </div>
                    </div>
                    <div class="row align-items-center mb-5">
                        <div class="col-4 col-sm-3">
                            <img class="w-100 rounded-circle mb-3 mb-sm-0" src="assets/dist/img/iced-coffe-with-m1lk.jpg" alt="">
                            <h5 class="menu-price">13K</h5>
                        </div>
                        <div class="col-8 col-sm-9">
                            <h4>Iced Coffe With Milk</h4>
                            <p class="m-0">Iced Coffee Blend yang baru diseduh dengan susu disajikan
                                dingin dan manis di atas es. Angkat yang benar-benar, serius, dan menyegarkan untuk hari apa pun.</p>
                        </div>
                    </div>
                </div>
                <!--Snack-->
                <div class="col-lg-6">
                    <h1 class="mb-5">Snack</h1>
                    <div class="row align-items-center mb-5">
                        <div class="col-4 col-sm-3">
                            <img class="w-100 rounded-circle mb-3 mb-sm-0" src="assets/dist/img/snck-hot-breaad.jpg" alt="">
                            <h5 class="menu-price">8K</h5>
                        </div>
                        <div class="col-8 col-sm-9">
                            <h4>Hot Bread</h4>
                            <p class="m-0">Roti yang baru saja dipanggang dan masih hangat saat disajikan. 
                                Roti ini lembut dan gurih dengan aroma yang menggoda. 
                                Bisa digunakan untuk sarapan atau cemilan, dan dapat dinikmati dengan beragam topping atau saus.</p>
                        </div>
                    </div>
                    <div class="row align-items-center mb-5">
                        <div class="col-4 col-sm-3">
                            <img class="w-100 rounded-circle mb-3 mb-sm-0" src="assets/dist/img/snck-minipizza.jpg" alt="">
                            <h5 class="menu-price">10K</h5>
                        </div>
                        <div class="col-8 col-sm-9">
                            <h4>Mini Pizza</h4>
                            <p class="m-0">Varian pizza yang lebih kecil dari ukuran biasa, 
                                biasanya lebih mudah untuk dimakan secara individual. 
                                Mini pizza memiliki crust yang tipis dan dilapisi dengan saus tomat, keju, 
                                dan bahan-bahan lain sesuai selera.</p>
                        </div>
                    </div>
                    <div class="row align-items-center mb-5">
                        <div class="col-4 col-sm-3">
                            <img class="w-100 rounded-circle mb-3 mb-sm-0" src="assets/dist/img/snck-cookies.jpg" alt="">
                            <h5 class="menu-price">6K</h5>
                        </div>
                        <div class="col-8 col-sm-9">
                            <h4>Cookies</h4>
                            <p class="m-0">Makanan kering yang terbuat dari campuran tepung, gula, mentega atau minyak sayur, 
                                telur, dan bahan-bahan tambahan seperti coklat chips, atau kacang-kacangan. 
                                Cookies dapat ditemukan dalam berbagai rasa dan bentuk, dari yang tradisional hingga yang lebih kreatif.</p>
                        </div>
                    </div>
                    <div class="row align-items-center mb-5">
                        <div class="col-4 col-sm-3">
                            <img class="w-100 rounded-circle mb-3 mb-sm-0" src="assets/dist/img/snck-oreo.jpg" alt="">
                            <h5 class="menu-price">5K</h5>
                        </div>
                        <div class="col-8 col-sm-9">
                            <h4>Oreo</h4>
                            <p class="m-0">Oreo dikenal dengan cetakan "Oreo" di atasnya dan memiliki dua 
                                lapisan tepung gandum hitam dengan lapisan keju krim di tengah. 
                                Oreo dapat dimakan sendiri atau digunakan sebagai bahan dalam berbagai resep.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Menu End -->


    <!-- Reservation Start -->
    <div class="container-fluid my-5">
        <div class="container">
            <div class="reservation position-relative overlay-top overlay-bottom">
                <div class="row align-items-center">
                    <div class="col-lg-6 my-5 my-lg-0">
                        <div class="p-5">
                            <div class="mb-4">
                                <h1 class="display-3 text-primary">Diskon 30%</h1>
                                <h1 class="text-white">Untuk Reservasi Online</h1>
                            </div>
                            <p class="text-white">Anda akan mendapatkan diskon 30% dari reservasi online dengan syarat & ketentuan berlaku:</p>
                            <ul class="list-inline text-white m-0">
                                <li class="py-2"><i class="fa fa-check text-primary mr-3"></i>Promo hanya berlaku untuk reservasi yang dibuat melalui website kami.</li>
                                <li class="py-2"><i class="fa fa-check text-primary mr-3"></i>Diskon hanya berlaku untuk pembayaran yang dilakukan secara online.</li>
                                <li class="py-2"><i class="fa fa-check text-primary mr-3"></i>Perusahaan berhak untuk mengubah syarat dan ketentuan promo tanpa pemberitahuan sebelumnya.</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="text-center p-5" style="background: rgba(51, 33, 29, .8);">
                            <h1 class="text-white mb-4 mt-5">Pesan Mejamu!</h1>
                            <form class="mb-5">
                                <div class="form-group">
                                    <input type="text" class="form-control bg-transparent border-primary p-4" placeholder="Nama"
                                        required="required" />
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control bg-transparent border-primary p-4" placeholder="Email"
                                        required="required" />
                                </div>
                                <div class="form-group">
                                    <div class="date" id="date" data-target-input="nearest">
                                        <input type="text" class="form-control bg-transparent border-primary p-4 datetimepicker-input" placeholder="Tanggal" data-target="#date" data-toggle="datetimepicker"/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="time" id="time" data-target-input="nearest">
                                        <input type="text" class="form-control bg-transparent border-primary p-4 datetimepicker-input" placeholder="Waktu" data-target="#time" data-toggle="datetimepicker"/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <select class="custom-select bg-transparent border-primary px-4" style="height: 49px;">
                                        <option selected>Orang</option>
                                        <option value="1">1 Orang</option>
                                        <option value="2">2 Orang</option>
                                        <option value="3">3 Orang</option>
                                        <option value="3">4 Orang</option>
                                    </select>
                                </div>
                                <div>
                                    <button class="btn btn-primary btn-block font-weight-bold py-3" type="submit">Pesan Sekarang</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Reservation End -->


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
                        <img class="img-fluid" src="assets/dist/img/testimonial-4.jpg" alt="">
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