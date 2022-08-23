<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title></title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="<?php echo base_url('assets_home/') ?>img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&family=Montserrat:wght@400;500;600;700&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="<?php echo base_url('assets_home/') ?>lib/animate/animate.min.css" rel="stylesheet">
    <link href="<?php echo base_url('assets_home/') ?>lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="<?php echo base_url('assets_home/') ?>lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css"
        rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="<?php echo base_url('assets_home/') ?>css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="<?php echo base_url('assets_home/') ?>css/style.css" rel="stylesheet">
</head>

<body class="bg-gray-600">
    <div class="bg-white p-0">
        <!-- Spinner Start -->
        <div id="spinner"
            class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-success" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Memuat...</span>
            </div>
        </div>
        <!-- Spinner End -->

        <!-- Header Start -->
        <div class="container-fluid bg-dark px-0">
            <div class="row gx-0">

                <div class="col-lg-12">

                    <nav class="navbar navbar-expand-lg bg-grey-light navbar-grey-light p-3 p-lg-0">

                        <button type="button" class="navbar-toggler" data-bs-toggle="collapse"
                            data-bs-target="#navbarCollapse">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse pull-left" id="navbarCollapse">
                            <div class="navbar-nav mr-auto py-0">
                                <a href="index.html" style="color: white;" class="nav-item nav-link active"></a>
                                <a href="index.html" style="color: white;" class="nav-item nav-link active"></a>
                                <a href="<?php echo base_url('home_page') ?>"
                                    style="color: white; background-color: lightgrey;"
                                    class="nav-item nav-link active"><b>
                                        Beranda
                                    </b></a>
                                <a href="index.html" style="color: white;" class="nav-item nav-link active"></a>

                                <a href="<?php echo base_url('home_page/informasi') ?>" style="color: white;"
                                    class="nav-item nav-link"><b> Informasi
                                    </b></a>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
        <!-- Header End -->


        <!-- Carousel Start -->
        <div class="container-fluid p-0 mb-5">
            <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="w-100" src="<?php echo base_url('assets_home/') ?>img/r2.jpg" alt="Image"
                            style="height: 800px;">
                        <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                            <div class="p-3" style="max-width: 700px;">
                                <h6 class="text-green text-uppercase mb-3 animated slideInDown">
                                    <b>__________________________</b>
                                </h6>
                                <h1 class="display-3 text-white mb-4 animated slideInDown">Asrama Rusunawa IAIH Pancor
                                </h1>
                                <a href="<?php echo base_url('data_registrasi/tambah_data') ?>"
                                    class="btn btn-success py-md-3 px-md-5 me-3 animated slideInLeft">Daftar
                                </a>
                                <a href="<?php echo base_url('login') ?>"
                                    class="btn btn-light py-md-3 px-md-5 animated slideInRight">Masuk</a>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="w-100" src="<?php echo base_url('assets_home/') ?>img/r3.jpg" alt="Image"
                            style="height: 800px;">
                        <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                            <div class="p-3" style="max-width: 700px;">
                                <h6 class="text-green text-uppercase mb-3 animated slideInDown">
                                    <b>__________________________</b>
                                </h6>
                                <h1 class="display-3 text-white mb-4 animated slideInDown">Asrama Rusunawa IAIH Pancor
                                </h1>
                                <a href="<?php echo base_url('data_registrasi/tambah_data') ?>"
                                    class="btn btn-success py-md-3 px-md-5 me-3 animated slideInLeft">Daftar
                                </a>
                                <a href="<?php echo base_url('login') ?>"
                                    class="btn btn-light py-md-3 px-md-5 animated slideInRight">Masuk</a>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Sebelumnya</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#header-carousel"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Selanjutnya</span>
                </button>
            </div>
        </div>
        <!-- Carousel End -->


        <!-- Booking Start -->
        <div class="container-fluid booking pb-5 wow fadeIn" data-wow-delay="0.1s">
            <div class="container">
                <div class="bg-white shadow" style="padding: 35px;">
                    <div class="row g-2">
                        <marquee behavior="alternatif" direction="left">
                            <h3 style="color:green">Untuk Bergabung Bersama Kami, Anda Bisa Melakukan Pendaftaran
                                Terlebih Dahulu !</h3>
                        </marquee>

                    </div>
                </div>
            </div>
        </div>
        <!-- Booking End -->

        <!-- About Start -->
        <div class="container-xxl py-5 bg-gray-600">
            <div class="container">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-6">
                        <h6 class="text-start text-success text-uppercase"><b>Sekilas _____</b>
                        </h6>
                        <h1 class="mb-4">Asrama <span class="text-success text-uppercase">RUSUNawa</span></h1>
                        <p class="mb-4 text-justify">Asrama ini didirikan dan dikelola oleh kampus IAIH
                            (Institut Agama
                            Islam Hamzanwadi) NWDI Pancor pada tahun 2017, yang dibina oleh TGH. Hudatullah. asrama ini
                            sendiri,
                            terletak di
                            Pancor Sanggeng, Kec. Sekarteja, Lombok Timur. asrama ini dibuat khusus untuk
                            santriwati,
                            yang
                            terdiri dari 20 kamar, dimana masing-masing kamar terdiri dari 4 santriwati,
                            disertai dengan
                            fasilitar
                            yang memadai.

                        </p>
                        <div class="row g-3 pb-4">
                            <div class="col-sm-4 wow fadeIn" data-wow-delay="0.1s">
                                <div class="border rounded p-1">
                                    <div class="border rounded text-center p-4">
                                        <i class="fa fa-hotel fa-2x text-success mb-2"></i>
                                        <h2 class="mb-1" data-toggle="counter-up">20</h2>
                                        <p class="mb-0">Kamar</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4 wow fadeIn" data-wow-delay="0.3s">
                                <div class="border rounded p-1">
                                    <div class="border rounded text-center p-4">
                                        <i class="fa fa-users-cog fa-2x text-black mb-2"></i>
                                        <h2 class="mb-1" data-toggle="counter-up">2</h2>
                                        <p class="mb-0">Pengurus</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4 wow fadeIn" data-wow-delay="0.5s">
                                <div class="border rounded p-1">
                                    <div class="border rounded text-center p-4">
                                        <i class="fa fa-users fa-2x text-danger mb-2"></i>
                                        <h2 class="mb-1" data-toggle="counter-up">3</h2>
                                        <p class="mb-0">Pegawai</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a class="btn btn-success py-3 px-5 mt-2" href="#contact">Info
                            Selengkapnya >></a>
                    </div>
                    <div class="col-lg-6">
                        <div class="row g-3">
                            <div class="col-6 text-end">
                                <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.1s"
                                    src="<?php echo base_url('assets_home/') ?>img/r1.jpg" style="margin-top: 25%;">
                            </div>
                            <div class="col-6 text-start">
                                <img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.3s"
                                    style="height: 375px; width: 375px;"
                                    src="<?php echo base_url('assets_home/') ?>img/r2.jpg">
                            </div>
                            <div class="col-6 text-end">
                                <img class="img-fluid rounded w-70 wow zoomIn" data-wow-delay="0.5s"
                                    style="width: 375px;" src="<?php echo base_url('assets_home/') ?>img/r3.jpg">
                            </div>
                            <div class="col-6 text-start">
                                <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.7s"
                                    src="<?php echo base_url('assets_home/') ?>img/r4.jpg">
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->


        <!-- Room Start -->
        <div class="container-xxl py-5 bg-gray-600">
            <div class="container">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h6 class="text-center text-success text-uppercase"><b>____Fasilitas____</b></h6>
                    <h3 class="mb-5">Perlengkapan yang Tersedia di <span class="text-success text-uppercase">Asrama
                            Rusunawa</span></h3>
                </div>
                <div class="row g-4">
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="room-item shadow rounded overflow-hidden">
                            <div class="position-relative">
                                <img class="img-fluid" src="<?php echo base_url('foto/') ?>kmr.jpg"
                                    style="height:250px; width: 400px;" alt="">
                            </div>
                            <div class="p-4 mt-2">
                                <div class="d-flex justify-content-between mb-3">
                                    <h5 class="mb-0">Kamar Tidur</h5>
                                </div>
                                <div class="d-flex mb-3">
                                    <small class="border-end me-3 pe-3"><i class="fa fa-bed text-success me-2"></i>2
                                        Ranjang Susun</small>
                                    <small class="border-end me-3 pe-3"><i class="fa fa-archive text-success me-2"></i>4
                                        Lemari</small>
                                    <small><i class="fa fa-wifi text-success me-2"></i>Wifi</small>
                                </div>
                                <p class="text-body mb-3">Tersedia 2 ranjang susun dengan 4 springbed, dan lemari untuk
                                    perorangan, dan dilengkapi dengan wifi.</p>
                                <div class="d-flex justify-content-between">
                                    <a class="btn btn-sm btn-dark rounded py-2 px-4"
                                        href="<?php echo base_url('home_page/kamar/#kamar') ?>">Lihat Selengkapnya
                                        >></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="room-item shadow rounded overflow-hidden">
                            <div class="position-relative">
                                <img class="img-fluid" src="<?php echo base_url('foto/') ?>mandi.jpg"
                                    style="height:250px; width: 400px;" alt="">
                            </div>
                            <div class="p-4 mt-2">
                                <div class="d-flex justify-content-between mb-3">
                                    <h5 class="mb-0">Kamar Mandi</h5>
                                </div>
                                <div class="d-flex mb-3">
                                    <small class="border-end me-3 pe-3"><i class="fa fa-bath text-success me-2"></i>3
                                        Kamar Mandi</small>
                                    <small class="border-end me-3 pe-3"><i class="fa fa-toilet text-success me-2"></i>3
                                        Toilet</small>
                                </div>
                                <p class="text-body mb-3">Dalam 1 ruangan tersedia 3 kamar mandi dengan 3 toilet, dan di
                                    dalam asrama ada 4 ruangan
                                    untuk kamar mandinya serta ada 2 kamar mandi yang di luar.</p>
                                <div class="d-flex justify-content-between">
                                    <a class="btn btn-sm btn-dark rounded py-2 px-4"
                                        href="<?php echo base_url('home_page/kamar/#kamarmandi') ?>">Lihat Selengkapnya
                                        >></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.6s">
                        <div class="room-item shadow rounded overflow-hidden">
                            <div class="position-relative">
                                <img class="img-fluid" src="<?php echo base_url('foto/') ?>dapur.jpg"
                                    style="height:250px; width: 400px;" alt="">
                            </div>
                            <div class="p-4 mt-2">
                                <div class="d-flex justify-content-between mb-3">
                                    <h5 class="mb-0">Dapur</h5>
                                </div>
                                <div class="d-flex mb-3">
                                    <small class="border-end me-3 pe-3"><i
                                            class="fa fa-circle text-success me-2"></i>Meja Memasak</small>
                                    <small class="border-end me-3 pe-3"><i
                                            class="fa fa-circle text-success me-2"></i>Tempat Cuci Piring</small>
                                    <small><i class="fa fa-circle text-success me-2"></i>Meja Makan</small>
                                </div>
                                <p class="text-body mb-3">Tersedia 1 ruangan untuk memasak dan mencuci piring, dan 1
                                    ruangan untuk makan.</p>
                                <div class="d-flex justify-content-between">
                                    <a class="btn btn-sm btn-dark rounded py-2 px-4"
                                        href="<?php echo base_url('home_page/kamar/#dapur') ?>">Lihat Selengkapnya
                                        >></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.6s">
                        <div class="room-item shadow rounded overflow-hidden">
                            <div class="position-relative">
                                <img class="img-fluid" src="<?php echo base_url('foto/') ?>musholla.jpg"
                                    style="height:250px; width: 400px;" alt="">
                            </div>
                            <div class="p-4 mt-2">
                                <div class="d-flex justify-content-between mb-3">
                                    <h5 class="mb-0">Musholla</h5>
                                </div>
                                <div class="d-flex mb-3">
                                    <small class="border-end me-3 pe-3"><i class="fa fa-circle text-success me-2"></i>1
                                        papan tulis</small>
                                    <small class="border-end me-3 pe-3"><i class="fa fa-circle text-success me-2"></i>3
                                        Kipas Angin</small>
                                </div>
                                <p class="text-body mb-3">Tersedia 21 papan dan 3 kipas angin di dalam musholla.</p>
                                <div class="d-flex justify-content-between">
                                    <a class="btn btn-sm btn-dark rounded py-2 px-4"
                                        href="<?php echo base_url('home_page/kamar/#musholla') ?>">Lihat Selengkapnya
                                        >></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.6s">
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.6s">
                        <div class="room-item shadow rounded overflow-hidden">
                            <div class="position-relative">
                                <img class="img-fluid" src="<?php echo base_url('foto/') ?>parkir.jpg"
                                    style="height:250px; width: 400px;" alt="">
                            </div>
                            <div class="p-4 mt-2">
                                <div class="d-flex justify-content-between mb-3">
                                    <h5 class="mb-0">Parkiran</h5>
                                </div>
                                <div class="d-flex mb-3">
                                    <small class="border-end me-3 pe-3"><i class="fa fa-circle text-success me-2"></i>1
                                        Bagasi</small>
                                    <small class="border-end me-3 pe-3"><i class="fa fa-circle text-success me-2"></i>1
                                        Parkiran Dalam</small>
                                </div>
                                <p class="text-body mb-3">Di asrama rusunawa tersedia 2 parkiran, 1 parkiran di dalam
                                    dan 1 bagasi.</p>
                                <div class="d-flex justify-content-between">
                                    <a class="btn btn-sm btn-dark rounded py-2 px-4"
                                        href="<?php echo base_url('home_page/kamar/#parkir') ?>">Lihat Selengkapnya
                                        >></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Room End -->


        <!-- Video Start -->
        <div class="container-xxl py-5 px-0 wow zoomIn" data-wow-delay="0.1s">
            <div class="row g-0">
                <div class="col-md-6 bg-dark d-flex align-items-center">
                    <div class="p-5">
                        <h1 class="text-white mb-4">ASRAMA RUSUNAWA</h1>
                        <p class="text-white mb-4">Untuk melihat lebih detailnya mengenai asrama rusunawa IAIH Pancor
                            Sanggeng, Anda bisa
                            mengklik tombol berikut ini!
                        </p>
                        <a href="<?php echo base_url('home_page/kamar') ?>" class="btn btn-light py-md-3 px-md-5">Lihat
                            Selengkapnya >></a>
                    </div>
                </div>
                <div class="col-md-6">
                    <video src="<?php echo base_url('foto/video/all2.mp4') ?>" type="video/mp4"
                        style="height: 460px; width: 700px" controls autoplay muted>
                    </video>

                </div>
            </div>
        </div>

        <!-- Team Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h6 class="section-title text-center text-success text-uppercase">Pengurus</h6>
                    <h4 class="mb-5">Asrama Rusunawa<span class="text-success text-uppercase"> IAIH Pancor
                            Sanggeng</span></h4>
                </div>
                <div class="row g-3">
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="rounded shadow overflow-hidden">
                            <div class="text-center position-relative">
                                <img class="img-fluid" src="<?php echo base_url('foto/') ?>pembina.jpg" alt=""
                                    style="height: 300px; width: 300px">
                            </div>
                            <div class="text-center p-4 mt-3">
                                <h5 class="fw-bold mb-0">TGH. Hudatullah Muhibbin Abdul Aziz, MA.</h5>
                                <small>Pembina</small><br>
                                <small>081-339-522-982</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="rounded shadow overflow-hidden">
                            <div class="text-center position-relative">
                                <img class="img-fluid" src="<?php echo base_url('foto/') ?>bendahara.jpg" alt=""
                                    style="height: 300px; width: 300px">
                            </div>
                            <div class="text-center p-4 mt-3">
                                <h5 class="fw-bold mb-0">Desny Wulandari, S.Pd</h5>
                                <small>Bendahara</small><br>
                                <small>085-936-572-400</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="rounded shadow overflow-hidden">
                            <div class="text-center position-relative">
                                <img class="img-fluid" src="<?php echo base_url('foto/') ?>penjaga.jpg" alt=""
                                    style="height: 300px; width: 300px">
                            </div>
                            <div class="text-center p-4 mt-3">
                                <h5 class="fw-bold mb-0">Paman Alim</h5>
                                <small>Penjaga</small><br>
                                <small>081-917803115</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Team End -->


        <!-- Newsletter Start -->
        <div class="container newsletter mt-5 wow fadeIn" data-wow-delay="0.1s">
            <div class="row justify-content-center">
                <div class="col-lg-10 border rounded p-1">
                    <div class="border rounded text-center p-1">
                        <div class="bg-white rounded text-center p-5">
                            <div class="container" style="width: 100%;">
                                <iframe
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3944.5110541843574!2d116.52687771416451!3d-8.642847190280152!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dcc4f3df2b91005%3A0xdcf433e0001d7c86!2sRusunawa%20Pancor%20Sanggeng!5e0!3m2!1sid!2sid!4v1658802514925!5m2!1sid!2sid"
                                    width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                                    referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Newsletter Start -->


        <!-- Footer Start -->
        <div class="container-fluid bg-dark text-light footer wow fadeIn" data-wow-delay="0.1s" id="contact">
            <div class="container pb-5">
                <div class="row g-5">
                    <div class="col-md-6 col-lg-4">
                        <div class="bg-dark rounded p-2">
                            <a href="index.html">
                                <h2 class="text-success text-uppercase mb-3">RUSUNawa</h2>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6">
                        <h6 class="text-start text-success text-uppercase mt-3 mb-4">Kontak</h6>
                        <p class="mb-2"><i class="fa fa-phone me-3"></i>+62 859-3657-2400</p>
                        <h6 class="text-start text-success text-uppercase mt-3 mb-4">Lokasi</h6>
                        <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>Kos Rusunawa IAIH Pancor Sanggeng,
                            Jalan Masjid, Pancor, Selong, KAB. LOMBOK TIMUR, SELONG, NTB, ID, 83611</p>
                    </div>
                </div>
            </div>
            <div class="container pb-5">
                <div class="row g-5">
                    <div class="col-md-6 col-lg-4">
                        <div class="bg-dark rounded p-2">
                            <a href="index.html">
                                <h2 class="text-success text-uppercase mb-3">
                                    ____________________________________________________</h2>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6">
                        <h1 class="text-start text-success text-uppercase mt-3 mb-4">
                            _______________________________________</h1>

                    </div>
                </div>
            </div>

        </div>
        <!-- Footer End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-success btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo base_url('assets_home/') ?>lib/wow/wow.min.js"></script>
    <script src="<?php echo base_url('assets_home/') ?>lib/easing/easing.min.js"></script>
    <script src="<?php echo base_url('assets_home/') ?>lib/waypoints/waypoints.min.js"></script>
    <script src="<?php echo base_url('assets_home/') ?>lib/counterup/counterup.min.js"></script>
    <script src="<?php echo base_url('assets_home/') ?>lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="<?php echo base_url('assets_home/') ?>lib/tempusdominus/js/moment.min.js"></script>
    <script src="<?php echo base_url('assets_home/') ?>lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="<?php echo base_url('assets_home/') ?>lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="<?php echo base_url('assets_home/') ?>js/main.js"></script>
</body>

</html>