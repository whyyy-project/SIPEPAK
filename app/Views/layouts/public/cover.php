<!DOCTYPE html>
<html>

<head>
    <!-- Basic -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Site Metas -->
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>
        <?= $title; ?>
    </title>

    <!-- slider stylesheet -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css" />
    <!-- bootstrap core css -->
    <link rel="stylesheet" type="text/css" href="<?= base_URL(); ?>css/bootstrap.css" />
    <!-- fonts style -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700|Poppins:400,700&display=swap" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="<?= base_URL(); ?>vendor_style/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="<?= base_URL(); ?>css/style.css" rel="stylesheet" />
    <!-- responsive style -->
    <link href="<?= base_URL(); ?>css/responsive.css" rel="stylesheet" />

</head>

<body>
    <div class="hero_area">
        <!-- header section strats -->
        <header class="header_section">
            <div class="container-fluid">
                <nav class="navbar navbar-expand-lg custom_nav-container">
                    <a class="navbar-brand" href="/">
                        <img loading="lazy" src="images/logo.png" alt="" />
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav  ">
                            <li class="nav-item active">
                                <a class="nav-link" href="<?= base_url() ?>">Home <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#about" data-scroll> About</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#contact" data-scroll>Contact us</a>
                            </li>
                        </ul>
                        <div class="user_option">
                            <a href="/login">
                                <img loading="lazy" src="images/user.png" alt="">
                                <span>
                                    Login
                                </span>
                            </a>
                        </div>
                    </div>
                    <div>
                        <div class="custom_menu-btn ">
                            <button>
                                <span class=" s-1">

                                </span>
                                <span class="s-2">

                                </span>
                                <span class="s-3">

                                </span>
                            </button>
                        </div>
                    </div>

                </nav>
            </div>
        </header>
        <!-- end header section -->
        <!-- slider section -->
        <section class="slider_section ">
            <div class="play_btn">
                <a href="<?= base_url() ?>login">
                    <img loading="lazy" src="images/play.png" alt="Login btn" title="Start Login">
                </a>
            </div>
            <div class="number_box">
                <div>
                    <ol class="carousel-indicators indicator-2">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active">01</li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1">02</li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2">03</li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="3">04</li>
                    </ol>
                </div>
            </div>
            <div class="container">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="detail-box">
                                        <h1>
                                            ajukan proposal
                                            <span>
                                                sekali klik
                                            </span>
                                        </h1>
                                        <p>
                                            Selamat datang di SIPEPAK, membantu anda dalam mengajukan proposal se praktis mungkin
                                        </p>
                                        <div class="btn-box">
                                            <a href="https://youtu.be/ur2hp_R-UhA" class="btn-1">
                                                User Guide
                                            </a>
                                            <a href="#about" data-scroll class="btn-2">
                                                About
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 img-container">
                                    <div class="img-box">
                                        <img loading="lazy" src="<?= base_URL(); ?>images/logo-img.png" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item ">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="detail-box">
                                        <h1>
                                            Lebih mudah
                                            <span>
                                                sipepak app
                                            </span>
                                        </h1>
                                        <p>
                                            Memudahkan anda dalam mengajukan proposal hanya dengan sekali klik
                                        </p>
                                        <div class="btn-box">
                                            <a href="https://youtu.be/ur2hp_R-UhA" class="btn-1">
                                                User Guide
                                            </a>
                                            <a href="#about" data-scroll class="btn-2">
                                                About
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 img-container">
                                    <div class="img-box">
                                        <img loading="lazy" src="<?= base_URL(); ?>images/logo-img.png" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item ">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="detail-box">
                                        <h1>
                                            lebih cepat
                                            <span>
                                                sipepak app
                                            </span>
                                        </h1>
                                        <p>
                                            Percepat proses pelaksanaan kegiatan anda dengan SIPEPAK
                                        </p>
                                        <div class="btn-box">
                                            <a href="https://youtu.be/ur2hp_R-UhA" class="btn-1">
                                                User Guide
                                            </a>
                                            <a href="#about" data-scroll class="btn-2">
                                                About
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 img-container">
                                    <div class="img-box">
                                        <img loading="lazy" src="<?= base_URL(); ?>images/logo-img.png" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item ">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="detail-box">
                                        <h1>
                                            lebih praktis
                                            <span>
                                                sipepak app
                                            </span>
                                        </h1>
                                        <p>
                                            Lebih cepat dengan SIPEPAK
                                        </p>
                                        <div class="btn-box">
                                            <a href="https://youtu.be/ur2hp_R-UhA" class="btn-1">
                                                User Guide
                                            </a>
                                            <a href="#about" data-scroll class="btn-2">
                                                About
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 img-container">
                                    <div class="img-box">
                                        <img loading="lazy" src="<?= base_URL(); ?>images/logo-img.png" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end slider section -->
    </div>


    <!-- about section -->

    <section class="about_section layout_padding" id="about">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <div class="detail-box">
                        <div class="heading_container text-justify">
                            <h2>About Us</h2>
                        </div>
                        <div class="text-justify">
                            <strong>SIPEPAK </strong><span id="typing-text"></span>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="img-box">
                        <img loading="lazy" class="d-md-flex d-lg-block d-sm-none" src="images/icon.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>



    <!-- end about section -->

    <!-- trending section -->

    <section class="trending_section layout_padding">
        <div id="accordion">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="detail-box">
                            <div class="heading_container">
                                <h2>
                                    Development Team
                                </h2>
                            </div>
                            <div class="tab_container">
                                <div class="t-link-box" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    <div class="number">
                                        <h5>
                                            01
                                        </h5>
                                    </div>
                                    <hr>
                                    <div class="t-name">
                                        <h5>
                                            Wahyu Nur Cahyo
                                        </h5>
                                    </div>
                                </div>
                                <div class="t-link-box collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    <div class="number">
                                        <h5>
                                            02
                                        </h5>
                                    </div>
                                    <hr>
                                    <div class="t-name">
                                        <h5>
                                            Abdur Rosyid Ridho
                                        </h5>
                                    </div>
                                </div>
                                <div class="t-link-box collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    <div class="number">
                                        <h5>
                                            03
                                        </h5>
                                    </div>
                                    <hr>
                                    <div class="t-name">
                                        <h5>
                                            Ahmad Khozainul Munajat
                                        </h5>
                                    </div>
                                </div>
                                <div class="t-link-box collapsed" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    <div class="number">
                                        <h5>
                                            04
                                        </h5>
                                    </div>
                                    <hr>
                                    <div class="t-name">
                                        <h5>
                                            Bakti Diana Anjarsari
                                        </h5>
                                    </div>
                                </div>
                                <div class="t-link-box collapsed" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                    <div class="number">
                                        <h5>
                                            05
                                        </h5>
                                    </div>
                                    <hr>
                                    <div class="t-name">
                                        <h5>
                                            Ach. Syarif Hidayatullah
                                        </h5>
                                    </div>
                                </div>
                                <div class="t-link-box collapsed" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                    <div class="number">
                                        <h5>
                                            06
                                        </h5>
                                    </div>
                                    <hr>
                                    <div class="t-name">
                                        <h5>
                                            Ali Ahmadi
                                        </h5>
                                    </div>
                                </div>
                                <div class="t-link-box collapsed" data-toggle="collapse" data-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                                    <div class="number">
                                        <h5>
                                            07
                                        </h5>
                                    </div>
                                    <hr>
                                    <div class="t-name">
                                        <h5>
                                            Aflahal Habib
                                        </h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="collapse show" id="collapseOne" aria-labelledby="headingOne" data-parent="#accordion">
                            <div class="img_container ">
                                <div class="box b-1">
                                    <div class="img-box">
                                        <img loading="lazy" src="<?= base_URL(); ?>images/teams/why2.jpg" alt="">
                                    </div>
                                    <div class="img-box">
                                        <img loading="lazy" src="<?= base_URL(); ?>images/teams/why4.jpg" alt="">
                                    </div>
                                </div>
                                <div class="box b-2">
                                    <div class="img-box">
                                        <img loading="lazy" src="<?= base_URL(); ?>images/teams/why5.jpg" alt="">
                                    </div>
                                    <div class="img-box">
                                        <img loading="lazy" src="<?= base_URL(); ?>images/teams/why3.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="collapse" id="collapseTwo" aria-labelledby="headingTwo" data-parent="#accordion">
                            <div class="img_container ">
                                <div class="box b-1">
                                    <div class="img-box">
                                        <img loading="lazy" src="<?= base_URL(); ?>images/teams/RR (1).jpg" alt="">
                                    </div>
                                    <div class="img-box">
                                        <img loading="lazy" src="<?= base_URL(); ?>images/teams/RR (2).jpg" alt="">
                                    </div>
                                </div>
                                <div class="box b-2">

                                    <div class="img-box">
                                        <img loading="lazy" src="<?= base_URL(); ?>images/teams/RR (3).jpg" alt="">
                                    </div>
                                    <div class="img-box">
                                        <img loading="lazy" src="<?= base_URL(); ?>images/teams/ridho1.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="collapse" id="collapseThree" aria-labelledby="headingThree" data-parent="#accordion">
                            <div class="img_container ">
                                <div class="box b-1">
                                    <div class="img-box">
                                        <img loading="lazy" src="<?= base_URL(); ?>images/teams/NAJA (1).jpg" alt="">
                                    </div>
                                    <div class="img-box">
                                        <img loading="lazy" src="<?= base_URL(); ?>images/teams/NAJA (2).jpg" alt="">
                                    </div>
                                </div>
                                <div class="box b-2">
                                    <div class="img-box">
                                        <img loading="lazy" src="<?= base_URL(); ?>images/teams/NAJA (3).jpg" alt="">
                                    </div>
                                    <div class="img-box">
                                        <img loading="lazy" src="<?= base_URL(); ?>images/teams/NAJA (4).jpg" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="collapse" id="collapseFour" aria-labelledby="headingfour" data-parent="#accordion">
                            <div class="img_container ">
                                <div class="box b-1">
                                    <div class="img-box">
                                        <img loading="lazy" src="<?= base_URL(); ?>images/teams/ANJAR (1).jpg" alt="">
                                    </div>

                                    <div class="img-box">
                                        <img loading="lazy" src="<?= base_URL(); ?>images/teams/ANJAR (2).jpg" alt="">
                                    </div>
                                </div>
                                <div class="box b-2">
                                    <div class="img-box">
                                        <img loading="lazy" src="<?= base_URL(); ?>images/teams/ANJAR (3).jpg" alt="">
                                    </div>
                                    <div class="img-box">
                                        <img loading="lazy" src="<?= base_URL(); ?>images/teams/ANJAR (3).jpg" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="collapse" id="collapseFive" aria-labelledby="headingfive" data-parent="#accordion">
                            <div class="img_container ">
                                <div class="box b-1">
                                    <div class="img-box">
                                        <img loading="lazy" src="<?= base_URL(); ?>images/teams/SARIP (1).jpg" alt="">
                                    </div>

                                    <div class="img-box">
                                        <img loading="lazy" src="<?= base_URL(); ?>images/teams/SARIP (2).jpg" alt="">
                                    </div>
                                </div>
                                <div class="box b-2">
                                    <div class="img-box">
                                        <img loading="lazy" src="<?= base_URL(); ?>images/teams/SARIP (3).jpg" alt="">
                                    </div>
                                    <div class="img-box">
                                        <img loading="lazy" src="<?= base_URL(); ?>images/teams/SARIP (4).jpg" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="collapse" id="collapseSix" aria-labelledby="headingsix" data-parent="#accordion">
                            <div class="img_container ">
                                <div class="box b-1">
                                    <div class="img-box">
                                        <img loading="lazy" src="<?= base_URL(); ?>images/teams/didon (1).jpg" alt="">
                                    </div>

                                    <div class="img-box">
                                        <img loading="lazy" src="<?= base_URL(); ?>images/teams/didon (2).jpg" alt="">
                                    </div>
                                </div>
                                <div class="box b-2">
                                    <div class="img-box">
                                        <img loading="lazy" src="<?= base_URL(); ?>images/teams/didon (3).jpg" alt="">
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="collapse" id="collapseSeven" aria-labelledby="headingSeven" data-parent="#accordion">
                            <div class="img_container ">
                                <div class="box b-1">
                                    <div class="img-box">
                                        <img loading="lazy" src="<?= base_URL(); ?>images/teams/hbb (1).png" alt="">
                                    </div>

                                    <div class="img-box">
                                        <img loading="lazy" src="<?= base_URL(); ?>images/teams/hbb (2).png" alt="">
                                    </div>
                                </div>
                                <div class="box b-2">
                                    <div class="img-box">
                                        <img loading="lazy" src="<?= base_URL(); ?>images/teams/hbb (3).png" alt="">
                                    </div>
                                    <div class="img-box">
                                        <img loading="lazy" src="<?= base_URL(); ?>images/teams/hbb (4).png" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </section>

    <!-- end trending section -->

    <!-- discount section -->

    <section class="discount_section  layout_padding">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="detail-box">
                        <h2>
                            SIPEPAK Mempercepat kinerja
                        </h2>
                        <h2 class="main_heading">
                            10x lipat
                        </h2>

                        <div class="">
                            <a href="<?= base_URL(); ?>login">
                                Login Sekarang
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="img-box">
                        <img loading="lazy" src="images/logo-img.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- end discount section -->


    <!-- info section -->
    <section class="info_section layout_padding2" id="contact">
        <div class="container">
            <div class="info_logo">
                <h2>
                </h2>
                SIPEPAK
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="info_contact">
                        <h5>
                            About
                        </h5>
                        <div>
                            <div class="img-box">
                                <img loading="lazy" src="images/location-white.png" width="18px" alt="">
                            </div>
                            <p class="text-justify">
                                Jl. Ahmad Yani No. 10, Jambean, Sukorejo, Kec. Bojonegoro, Kabupaten Bojonegoro, Jawa Timur 62115
                            </p>
                        </div>
                        <div>
                            <div class="img-box">
                                <img loading="lazy" src="images/telephone-white.png" width="12px" alt="">
                            </div>
                            <p>
                                (0353) 887341
                            </p>
                        </div>
                        <div>
                            <div class="img-box">
                                <img loading="lazy" src="images/envelope-white.png" width="18px" alt="">
                            </div>
                            <p>
                                info@unugiri.ac.id
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="info_info">
                        <h5>
                            Informations
                        </h5>
                        <p class="text-justify">
                            SIPEPAK (Sistem Informasi Pengajuan Proposal Anggaran Kegiatan) Universitas Nahdlatul Ulama Sunan Giri Bojonegoro
                        </p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="info_form">
                        <h5>
                            Sites
                        </h5>
                        <div class="d-flex justify-align-content-between">
                            <div class="img-box">
                                <img loading="lazy" src="images/envelope-white.png" width="20px" alt="">
                            </div>
                            <p class="ml-2">
                                <a href="#" class="text-decoration-none text-white">
                                    unugiri.ac.id
                                </a>
                            </p>
                        </div>
                        <div class="d-flex justify-align-content-between">
                            <div class="img-box">
                                <img loading="lazy" src="images/envelope-white.png" width="20px" alt="">
                            </div>
                            <p class="ml-2">
                                <a href="#" class="text-decoration-none text-white">
                                    sim.unugiri.ac.id
                                </a>
                            </p>
                        </div>
                        <div class="d-flex justify-align-content-between">
                            <div class="img-box">
                                <img loading="lazy" src="images/envelope-white.png" width="20px" alt="">
                            </div>
                            <p class="ml-2">
                                <a href="#" class="text-decoration-none text-white">
                                    info.unugiri.ac.id
                                </a>
                            </p>
                        </div>

                        <div class="social_box">
                            <a href="">
                                <img loading="lazy" src="images/fb.png" alt="">
                            </a>
                            <a href="">
                                <img loading="lazy" src="images/twitter.png" alt="">
                            </a>
                            <a href="">
                                <img loading="lazy" src="images/linkedin.png" alt="">
                            </a>
                            <a href="">
                                <img loading="lazy" src="images/youtube.png" alt="">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- end info_section -->


    <!-- footer section -->
    <section class="container-fluid footer_section ">
        <div class="container">
            <p>
                &copy; 2023 All Rights Reserved By
                <a href="https://github.com/whyyy24">Whyyy-Project</a>
            </p>
        </div>
    </section>
    <!-- end  footer section -->
    <!-- button to top -->
    <i id="topButton" onclick="scrollToTop()" class="top-btn fas fa-arrow-alt-circle-up"></i>

    <!-- end button to top -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/smooth-scroll/16.1.3/smooth-scroll.min.js"></script>
    <script type="text/javascript" src="<?= base_URL(); ?>js/jquery-3.4.1.min.js"></script>
    <script type="text/javascript" src="<?= base_URL(); ?>js/bootstrap.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.min.js">
    </script>
    <script src="<?= base_url() ?>js/custom-cover.js"></script>

</body>
</body>

</html>