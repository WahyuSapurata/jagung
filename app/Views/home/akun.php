<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
    <title><?= NAMA_APLIKASI . ' - ' . $title ?></title>
    <link rel="icon" href="<?= base_url() ?>/img/logo.png">

    <!-- Bootstr<ap CSS File -->
    <link href="<?= base_url() ?>/depan/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Libraries CSS Files -->
    <link rel="stylesheet" href="<?= base_url() ?>/plugins/fontawesome/css/all.min.css">
    <link href="<?= base_url() ?>/depan/lib/animate/animate.min.css" rel="stylesheet">
    <link href="<?= base_url() ?>/depan/lib/ionicons/css/ionicons.min.css" rel="stylesheet">
    <link href="<?= base_url() ?>/depan/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="<?= base_url() ?>/depan/lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Permanent+Marker&display=swap" rel="stylesheet">

    <!-- slick -->
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />

    <!-- Main Stylesheet File -->
    <link href="<?= base_url() ?>/depan/css/style.css" rel="stylesheet">

    <!-- animation -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <!-- SweetAlert2 -->
    <link rel="stylesheet" href="<?= base_url() ?>/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
    <!-- Toastr -->
    <link rel="stylesheet" href="<?= base_url() ?>/plugins/toastr/toastr.min.css">


</head>

<body>

    <!-- Preloader -->
    <div class="preloader flex-column justify-content-center align-items-center">
        <img src="<?= base_url() ?>/depan/img/preloader.gif" alt="Logo" height="100" width="100">
        <span>Loading...</span>
    </div>

    <!-- header-bar -->

    <header-bar></header-bar>

    <template id="header-bar">
        <link rel="stylesheet" href="<?= base_url() ?>/plugins/fontawesome/css/all.min.css">
        <link href="<?= base_url() ?>/depan/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="<?= base_url() ?>/depan/css/style.css" rel="stylesheet">

        <style>
            :host {
                display: block;
                contain: content;
                background-color: #ffff;
                position: sticky;
                bottom: 0;
            }

            .navbar-header {
                margin: 0;
                padding: 0;
                height: 50px;
            }

            .fa-solid {
                line-height: 50px;
                color: #78b785;
            }

            .text-header {
                color: #78b785;
                font-size: 25px;
                line-height: 50px;
                margin-left: 20px;
            }
        </style>

        <div class="container">
            <div class="navbar-header d-flex">
                <a href="<?= base_url('home/beranda') ?>">
                    <i class="fa-solid fa-angles-left"></i>
                </a>
                <strong class="text-header">Akun Saya</strong>
            </div>
        </div>
    </template>

    <div style="flex-grow: 1;"></div>
    <!-- bottom-bar -->

    <!-- navbar -->

    <nav class="navbar hiden navbar-expand-lg navbar-light shadow mb-3">
        <div class="container pt-2 pb-2">

            <div class="navbar-collapse d-flex" id="navbarSupportedContent">
                <a class="navbar-brand d-flex" href="<?= base_url('home/beranda') ?>">
                    <img src="<?= base_url() ?>/img/logo.png" alt="logo" width="120" height="56">
                    <h1 style="color: #033e23; margin-left: 20px;">|</h1>
                    <h4 class="image-bar" style="line-height: 48px; color: #033e23; margin-left: 30px;">Akun Saya</h4>
                </a>
            </div>
        </div>
    </nav>

    <!-- navbar -->

    <!-- user -->

    <section>
        <div class="container d-flex user">
            <div class="user-sidebar">
                <div class="user-item">
                    <div class="item1">
                        <a href="<?= base_url('home/user') ?>"><i class="fa-solid fa-user text-success me-2"></i> <span class="active user-text1">Akun Saya</span></a>
                    </div>
                    <div class="item2">
                        <a href="<?= base_url('home/pesanan') ?>"><i class="fa-solid fa-clipboard-list text-info me-2"></i> <span class="user-text2">Pesanan Saya</span></a>
                    </div>
                </div>
            </div>
            <div class="user-content">
                <div class="user-body">
                    <h3>
                        <strong>Profil Saya</strong>
                    </h3>
                    <hr>
                    <table cellpadding="10">
                        <tr>
                            <td>Username</td>
                            <td>:</td>
                            <td><?= session('username') ?></td>
                        </tr>
                        <tr>
                            <td>Nama</td>
                            <td>:</td>
                            <td><?= session('nama') ?></td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td>:</td>
                            <td><?= session('email') ?></td>
                        </tr>
                        <tr>
                            <td>
                                <a href="<?= base_url('login/logout') ?>" class="btn btn-beli">Logout</a>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </section>

    <!-- user -->

    <!-- foother -->

    <footer class="footer-distributed">

        <div class="footer-left">
            <img src="<?= base_url() ?>/img/logo.png">
            <h3><span class="textone">Superior</span><span>Corn</span></h3>

            <p class="footer-links">
                <a href="#">Home</a>
                |
                <a href="#">Blog</a>
                |
                <a href="#">About</a>
                |
                <a href="#">Contact</a>
            </p>

            <p class="footer-company-name">© 2022 <strong>SuperiorCorn</strong> | All Rights Reserved</p>
        </div>

        <div class="footer-center">
            <div>
                <i class="fa fa-map-marker"></i>
                <p><span>Perumahan Villa Samata Blok A2 no.9</span>
                    Samata, Gowa, Sulawesi-Selatan Indonesia</p>
            </div>

            <div>
                <i class="fa fa-phone"></i>
                <p>0853 3986 82804</p>
            </div>
            <div>
                <i class="fa fa-envelope"></i>
                <p><a href="https://superiorcorn.id/">superiorcorn6@gmail.com</a></p>
            </div>
        </div>
        <div class="footer-right">
            <p class="footer-company-about">
                <span>About the company</span>
                We offer training and skill building courses across Technology, Design, Management, Science and Humanities.
            </p>
            <div class="footer-icons">
                <a href="https://www.facebook.com/profile.php?id=100073008263145" target="_blank"><i class="fa-brands fa-facebook-f"></i></a>
                <a href="#"><i class="fa-brands fa-twitter"></i></a>
                <a href="https://www.instagram.com/superior.corn/?hl=en" target="_blank"><i class="fa-brands fa-instagram"></i></a>
                <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                <a href="#"><i class="fa-brands fa-youtube"></i></a>
            </div>
        </div>
    </footer>

    <!-- foother -->

    <!-- bottom-bar -->
    <div style="flex-grow: 1;"></div>

    <bottom-bar></bottom-bar>

    <template id="bottom-bar">
        <link rel="stylesheet" href="<?= base_url() ?>/plugins/fontawesome/css/all.min.css">
        <link href="<?= base_url() ?>/depan/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="<?= base_url() ?>/depan/css/style.css" rel="stylesheet">

        <style>
            :host {
                display: block;
                contain: content;
                background-color: #78b785;
                position: sticky;
                bottom: 0;
            }

            ul {
                list-style: none;
                justify-content: center;
                margin: 0;
                padding: 0;
                justify-content: space-between;
            }

            li {
                margin: 0;
                padding: 0;
            }

            .nav-link {
                place-items: center;
                display: grid;
            }

            span {
                margin-bottom: 28px;
                margin-left: 39px;
            }

            i {
                color: white;
            }

            .active {
                color: black !important;
            }
        </style>

        <div class="container">
            <ul class="d-flex mt-2 mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('home/beranda') ?>">
                        <i class="fa-solid fa-home"></i>
                        <div class="text-light">
                            Home
                        </div>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="dropdown" href="<?= base_url('home/keranjang') ?>">
                        <i class="fa-solid fa-cart-shopping active"></i>
                        <span class="position-absolute translate-middle badge rounded-pill bg-danger text-light"></span>
                        <div class="text-light">
                            Cart
                        </div>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('home/chat_mobile/' . $chat['id_login']) ?>">
                        <i class="fa-solid fa-comment"></i>
                        <span class="position-absolute translate-middle badge rounded-pill bg-danger text-light"></span>
                        <div class="text-light">
                            Chat
                        </div>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('home/user') ?>">
                        <i class="fa-solid fa-user"></i>
                        <div class="text-light">
                            User
                        </div>
                    </a>
                </li>
            </ul>
        </div>
    </template>

    <!-- bottom-bar -->




    <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

    <script src="<?= base_url() ?>/componen/bottom-bar.js"></script>
    <script src="<?= base_url() ?>/componen/header-bar.js"></script>

    <!-- JavaScript Libraries -->
    <script src="<?= base_url() ?>/depan/lib/jquery/jquery.min.js"></script>
    <script src="<?= base_url() ?>/depan/lib/jquery/jquery-migrate.min.js"></script>
    <script src="<?= base_url() ?>/depan/lib/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url() ?>/depan/lib/easing/easing.min.js"></script>
    <script src="<?= base_url() ?>/depan/lib/superfish/hoverIntent.js"></script>
    <script src="<?= base_url() ?>/depan/lib/superfish/superfish.min.js"></script>
    <script src="<?= base_url() ?>/depan/lib/wow/wow.min.js"></script>
    <script src="<?= base_url() ?>/depan/lib/waypoints/waypoints.min.js"></script>
    <script src="<?= base_url() ?>/depan/lib/counterup/counterup.min.js"></script>
    <script src="<?= base_url() ?>/depan/lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="<?= base_url() ?>/depan/lib/isotope/isotope.pkgd.min.js"></script>
    <script src="<?= base_url() ?>/depan/lib/lightbox/js/lightbox.min.js"></script>
    <script src="<?= base_url() ?>/depan/lib/touchSwipe/jquery.touchSwipe.min.js"></script>
    <!-- Contact Form JavaScript File -->
    <script src="<?= base_url() ?>/depan/contactform/contactform.js"></script>

    <script>
        $(window).load(function() {
            $(".preloader").delay(250).fadeOut("slow"), $("body").delay(250).css({
                overflow: "visible"
            })
        });
    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>

    <!-- Template Main Javascript File -->
    <script src="<?= base_url() ?>/depan/js/main.js"></script>

    <!-- slick -->
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.slider').slick({
                slidesToShow: 1,
                slidesToScroll: 1,
                autoplay: true,
                autoplaySpeed: 2000,
                pauseOnHover: false,
                prevArrow: "<div class='left'><i class='fas fa-chevron-left'></div>",
                nextArrow: "<div class='right'><i class='fas fa-chevron-right'></div>"
            });
        });
    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.7.1/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.7.1/TextPlugin.min.js"></script>
    <script>
        gsap.registerPlugin(TextPlugin);
        gsap.to('.lead', {
            duration: 3,
            delay: 1,
            text: 'DI WEBSITE DESA LENGKONG'
        });
        gsap.from('.jumbotron img', {
            duration: 1,
            rotateY: 360,
            opacity: 0
        });
        gsap.from('.table', {
            duration: 1.5,
            y: '-100%',
            opacity: 0,
            ease: 'bounce'
        });
        gsap.from('.clock', {
            duration: 2,
            y: '-100%',
            opacity: 0,
            ease: 'bounce'
        });
        gsap.from('.display-4', {
            duration: 1,
            x: -50,
            opacity: 0,
            ease: 'back'
        });
    </script>

    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        const galeryImage = document.querySelectorAll('.galery-img');

        galeryImage.forEach((img, i) => {
            img.dataset.aos = 'fade-down';
            img.dataset.aosDelay = i * 100;
            img.dataset.aosDuration = 1000;
        });

        AOS.init({
            once: true,
        });
    </script>

</body>

</html>