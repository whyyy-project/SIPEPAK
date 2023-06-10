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
    <style>
        .top-btn {
            position: fixed;
            right: 20px;
            bottom: 20px;
            display: none;
            width: 50px;
            height: 50px;
            background-color: rgba(50, 205, 50, 0.8);
            opacity: inherit;
            color: #fff;
            border-radius: 50%;
            text-align: center;
            line-height: 50px;
            font-size: 18px;
            cursor: pointer;
            animation: floating 2s ease-in-out infinite;
        }

        @keyframes floating {
            0% {
                transform: translateY(0);
            }

            50% {
                transform: translateY(-10px);
            }

            100% {
                transform: translateY(0);
            }
        }
    </style>
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
                        <p>
                            Selamat datang di SIPEPAK (Sistem Informasi Pengajuan Proposal Anggaran Kegiatan) - platform inovatif yang dirancang khusus untuk memudahkan dan mempercepat proses pengajuan proposal bagi mahasiswa Unugiri. Dengan SIPEPAK, mahasiswa dapat dengan mudah mengajukan proposal kegiatan mereka tanpa hambatan.
                        </p>
                        <div class="d-none" id="text-hidden">
                            <p>
                                SIPEPAK memberikan kemudahan bagi mahasiswa Unugiri untuk mengakses platform yang intuitif dan efisien. Dalam platform ini, mahasiswa dapat mengisi formulir pengajuan proposal dengan langkah-langkah yang jelas dan sistematis. SIPEPAK juga memberikan ruang bagi mahasiswa untuk melampirkan dokumen pendukung, memasukkan detail anggaran, serta menjelaskan tujuan dan manfaat dari kegiatan yang diajukan.
                            </p>
                            <p>
                                Dengan SIPEPAK, mahasiswa tidak perlu lagi khawatir tentang proses pengajuan proposal yang rumit dan memakan waktu. Platform ini memberikan kemudahan dalam mengajukan proposal, mempercepat peninjauan dan persetujuan oleh pihak terkait, serta meningkatkan transparansi dalam manajemen anggaran kegiatan.
                            </p>
                            <p>
                                Selain itu, SIPEPAK juga memberikan perlindungan terhadap keamanan data pengguna. Dengan mengatur atribut-atribut cookie, seperti SameSite=None dan Secure, SIPEPAK memastikan bahwa data pengguna aman dari ancaman kebocoran informasi atau serangan cross-site request forgery.
                            </p>
                            <p>
                                Jadi, mari manfaatkan SIPEPAK sebagai alat yang membantu kita mengajukan proposal dengan mudah dan memastikan bahwa setiap kegiatan mahasiswa di Unugiri mendapatkan perhatian yang layak. Bersama SIPEPAK, kita dapat mewujudkan ide-ide kreatif dan memberikan dampak positif bagi komunitas kita.
                            </p>
                        </div>
                        <a href="#about" data-scroll id="readMoreBtn" onclick="toggleText()" data-scroll>Read More</a>
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

    <script>
        function toggleText() {
            var hiddenText = document.getElementById("text-hidden");
            var readMoreBtn = document.getElementById("readMoreBtn");

            if (hiddenText.classList.contains("d-none")) {
                hiddenText.classList.remove("d-none");
                readMoreBtn.textContent = "Close";
            } else {
                hiddenText.classList.add("d-none");
                readMoreBtn.textContent = "Read More";
            }
        }
    </script>


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
                                <div class="t-link-box collapsed" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFour">
                                    <div class="number">
                                        <h5>
                                            05
                                        </h5>
                                    </div>
                                    <hr>
                                    <div class="t-name">
                                        <h5>
                                            Ach. syarif hidayatullah
                                        </h5>
                                    </div>
                                </div>
                                <div class="t-link-box collapsed" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseFour">
                                    <div class="number">
                                        <h5>
                                            06
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
                                        <img loading="lazy" src="<?= base_URL(); ?>images/teams/ridho1.jpg" alt="">
                                    </div>
                                    <div class="img-box">
                                        <img loading="lazy" src="<?= base_URL(); ?>images/teams/why3.jpg" alt="">
                                    </div>
                                </div>
                                <div class="box b-2">

                                    <div class="img-box">
                                        <img loading="lazy" src="<?= base_URL(); ?>images/teams/why3.jpg" alt="">
                                    </div>
                                    <div class="img-box">
                                        <img loading="lazy" src="<?= base_URL(); ?>images/teams/why3.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="collapse" id="collapseThree" aria-labelledby="headingThree" data-parent="#accordion">
                            <div class="img_container ">
                                <div class="box b-1">
                                    <div class="img-box">
                                        <img loading="lazy" src="<?= base_URL(); ?>images/teams/why3.jpg" alt="">
                                    </div>
                                    <div class="img-box">
                                        <img loading="lazy" src="<?= base_URL(); ?>images/teams/why3.jpg" alt="">
                                    </div>
                                </div>
                                <div class="box b-2">
                                    <div class="img-box">
                                        <img loading="lazy" src="<?= base_URL(); ?>images/teams/why3.jpg" alt="">
                                    </div>
                                    <div class="img-box">
                                        <img loading="lazy" src="<?= base_URL(); ?>images/teams/why3.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="collapse" id="collapseFour" aria-labelledby="headingfour" data-parent="#accordion">
                            <div class="img_container ">
                                <div class="box b-1">
                                    <div class="img-box">
                                        <img loading="lazy" src="<?= base_URL(); ?>images/teams/why3.jpg" alt="">
                                    </div>

                                    <div class="img-box">
                                        <img loading="lazy" src="<?= base_URL(); ?>images/teams/why3.jpg" alt="">
                                    </div>
                                </div>
                                <div class="box b-2">
                                    <div class="img-box">
                                        <img loading="lazy" src="<?= base_URL(); ?>images/teams/why3.jpg" alt="">
                                    </div>
                                    <div class="img-box">
                                        <img loading="lazy" src="<?= base_URL(); ?>images/teams/why3.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="collapse" id="collapseFive" aria-labelledby="headingfive" data-parent="#accordion">
                            <div class="img_container ">
                                <div class="box b-1">
                                    <div class="img-box">
                                        <img loading="lazy" src="<?= base_URL(); ?>images/teams/why3.jpg" alt="">
                                    </div>

                                    <div class="img-box">
                                        <img loading="lazy" src="<?= base_URL(); ?>images/teams/why3.jpg" alt="">
                                    </div>
                                </div>
                                <div class="box b-2">
                                    <div class="img-box">
                                        <img loading="lazy" src="<?= base_URL(); ?>images/teams/why3.jpg" alt="">
                                    </div>
                                    <div class="img-box">
                                        <img loading="lazy" src="<?= base_URL(); ?>images/teams/why3.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="collapse" id="collapseSix" aria-labelledby="headingsix" data-parent="#accordion">
                            <div class="img_container ">
                                <div class="box b-1">
                                    <div class="img-box">
                                        <img loading="lazy" src="<?= base_URL(); ?>images/teams/why3.jpg" alt="">
                                    </div>

                                    <div class="img-box">
                                        <img loading="lazy" src="<?= base_URL(); ?>images/teams/why3.jpg" alt="">
                                    </div>
                                </div>
                                <div class="box b-2">
                                    <div class="img-box">
                                        <img loading="lazy" src="<?= base_URL(); ?>images/teams/why3.jpg" alt="">
                                    </div>
                                    <div class="img-box">
                                        <img loading="lazy" src="<?= base_URL(); ?>images/teams/why3.jpg" alt="">
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
    <script>
        var scroll = new SmoothScroll('a[data-scroll]', {
            speed: 1000, // Kecepatan scroll (dalam milidetik)
            easing: 'easeInOutCubic', // Gaya transisi scroll
            offset: 100 // Jarak offset dari elemen target (dalam piksel)
        });
    </script>
    <script>
        var topButton = document.getElementById("topButton");

        window.addEventListener("scroll", function() {
            if (window.pageYOffset > 0) {
                topButton.style.display = "block";
            } else {
                topButton.style.display = "none";
            }
        });

        function scrollToTop() {
            window.scrollTo({
                top: 0,
                behavior: "smooth"
            });
        }
    </script>
    <script type="text/javascript">
        $(".owl-carousel").owlCarousel({
            loop: true,
            margin: 10,
            nav: true,
            navText: [],
            autoplay: true,
            autoplayHoverPause: true,
            responsive: {
                0: {
                    items: 1
                },
                420: {
                    items: 2
                },
                1000: {
                    items: 5
                }
            }

        });
    </script>
    <script>
        var nav = $("#navbarSupportedContent");
        var btn = $(".custom_menu-btn");
        btn.click
        btn.click(function(e) {

            e.preventDefault();
            nav.toggleClass("lg_nav-toggle");
            document.querySelector(".custom_menu-btn").classList.toggle("menu_btn-style")
        });
    </script>
    <script>
        $('.carousel').on('slid.bs.carousel', function() {
            $(".indicator-2 li").removeClass("active");
            indicators = $(".carousel-indicators li.active").data("slide-to");
            a = $(".indicator-2").find("[data-slide-to='" + indicators + "']").addClass("active");
        })
    </script>

</body>
</body>

</html>