<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
    <title><?= NAMA_APLIKASI . ' - ' . $title ?></title>

    <link rel="shortcut icon" href="<?= base_url() ?>/img/logo.png" type="image/png">
    <link rel="apple-touch-icon" href="<?= base_url() ?>/img/logo.png" type="image/png">
    <link rel="manifest" href="<?= base_url() ?>/manifest.json">

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

    <!-- <link rel="stylesheet" href="<?= base_url() ?>/template/dist/css/adminlte.min.css"> -->


</head>

<body id="body">

    <!-- Preloader -->
    <div class="preloader flex-column justify-content-center align-items-center">
        <img src="<?= base_url() ?>/depan/img/preloader.gif" alt="Logo" height="100" width="100">
        <span>Loading...</span>
    </div>

    <!-- navbar -->

    <nav class="navbar navbar-expand-lg navbar-light shadow mb-3">
        <div class="container pt-2 pb-2">

            <div class="navbar-collapse d-flex" id="navbarSupportedContent">
                <a class="navbar-brand" href="#">
                    <img src="<?= base_url() ?>/img/logo.png" class="image-bar" alt="logo" width="120" height="56">
                </a>
                <form action="<?= base_url('home/cari') ?>" method="GET" class="d-flex form">
                    <input class="form-control me-1" name="cari" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" title="Telusuri" type="submit"><i class="fa-solid fa-magnifying-glass text-light"></i></button>
                </form>

            </div>
            <ul class="navbar-nav hiden mb-2 mb-lg-0">
                <li class="nav-item me-2" title="Keranjang Belanja">
                    <a class="nav-link" data-toggle="dropdown" href="<?= base_url('home/keranjang') ?>">
                        <i class="fa-solid fa-cart-shopping"></i>
                        <span class="position-absolute translate-middle badge rounded-pill bg-danger" id="countCart"></span>
                    </a>
                </li>
                <li class="nav-item me-2" title="Chat">
                    <a class="nav-link" href="<?= base_url('home/chat_mobile/' . $chat['id_login']) ?>">
                        <i class="fa-solid fa-comment"></i>
                        <span class="position-absolute translate-middle badge rounded-pill bg-danger" id="countChat"></span>
                    </a>
                </li>
                <li class="nav-item" title="Akun Saya">
                    <a class="nav-link" href="<?= base_url('home/user') ?>"><i class="fa-solid fa-user"></i></a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- navbar -->

    <!-- section -->
    <section class="s-jumbotron">

        <section class="section">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <div class="slider">
                            <?php foreach ($gambar1 as $gb1) { ?>
                                <div>
                                    <img src="<?= base_url('uploads/gambar1/' . $gb1['gambar']) ?>" class="slick-home" alt="">
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                    <div class="col-md-4 gambar_2">
                        <?php foreach ($gambar2 as $gb2) { ?>
                            <div>
                                <img src="<?= base_url('uploads/gambar2/' . $gb2['gambar']) ?>" class="img-beranda" alt="">
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </section>
        <section class=" mt-2">
            <div class="container">
                <div class="row row-main justify-content-center">
                    <div class="card card-ikon ">
                        <img class="card-img-top" src="<?= base_url('img/cod.png') ?>" alt="">
                        <div class="card-body">
                            <h6 class="card-title m-0">Bayar di tempat</h6>
                        </div>
                    </div>
                    <div class="card card-ikon ">
                        <img class="card-img-top" src="<?= base_url('img/fast.png') ?>" alt="">
                        <div class="card-body">
                            <h6 class="card-title m-0">Pengiriman cepat</h6>
                        </div>
                    </div>
                    <div class="card card-ikon ">
                        <img class="card-img-top" src="<?= base_url('img/uang.png') ?>" alt="">
                        <div class="card-body">
                            <h6 class="card-title m-0">Lebih murah</h6>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </section>

    <!-- section -->

    <!-- section kategori -->

    <section class="kategori">
        <div class="container">
            <div class="row-kategori">
                <div class="header-kategori">
                    <h4 class="m-0 title">KATEGORI JAGUNG</h4>
                </div>
                <?php if ($kategori == null) { ?>
                    <i class="fa-solid fa-ban" style="display: grid; place-content: center; font-size: 55px; opacity: 0.5; margin-top: 10px;"></i>
                    <h2 style="text-align: center; padding: 0 21px; opacity: 0.5;">Belum ada data kategori jagung</h2>
                <?php } else { ?>
                    <div class="body-kategori">
                        <?php foreach ($kategori as $ktg) { ?>
                            <a href="<?= base_url('home/detail_jagung/' . $ktg['id_kategori']) ?>" title="<?= $ktg['jenis_kategori'] ?>">
                                <div class="card card-ikon-kategori ">
                                    <img class="card-img-top" style="margin-bottom: 5px; object-fit: cover;" src="<?= base_url('uploads/kategori/' . $ktg['foto']) ?>" alt="<?= $ktg['jenis_kategori'] ?>">
                                    <div class="card-body">
                                        <h6 class="card-title m-0"><?= $ktg['jenis_kategori'] ?></h6>
                                    </div>
                                </div>
                            </a>
                        <?php } ?>
                    </div>
                <?php } ?>

                <hr>
            </div>
        </div>
    </section>

    <!-- section kategori -->

    <!-- secstion produk -->

    <section class="produk">
        <div class="container">
            <div class="row-produk">
                <div class="header-produk">
                    <h4 class="m-0 title">
                        PRODUK
                    </h4>
                </div>
            </div>
            <?php if ($jagung == null) { ?>
                <i class="fa-solid fa-ban" style="display: grid; place-content: center; font-size: 55px; opacity: 0.5; margin-top: 10px;"></i>
                <h2 style="text-align: center; padding: 0 21px; opacity: 0.5;">Belum ada data jagung</h2>
            <?php } else { ?>
                <div class="body-kategori">
                    <?php foreach ($jagung as $jgn) { ?>
                        <a href="<?= base_url('home/belanja/' . $jgn['id_jagung']) ?>" title="<?= $jgn['judul'] ?>">
                            <div class="card card-ikon-kategori ">
                                <img class="card-img-top" style="margin-bottom: 5px; object-fit: cover;" src="<?= base_url('uploads/jagung/' . $jgn['foto_jagung']) ?>" alt="<?= $jgn['judul'] ?>">
                                <div class="card-body">
                                    <h6 class="card-title m-0"><?= $jgn['judul'] ?></h6>
                                    <div class="detail-harga">
                                        <div class="harga"><?= buatRupiah($jgn['harga']) ?></div>
                                        <div class="terjual"><?= $jgn['tersedia'] ?> Tersedia</div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    <?php } ?>
                </div>
            <?php } ?>
        </div>
    </section>

    <!-- secstion produk -->

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
                        <i class="fa-solid fa-home active"></i>
                        <div class="text-light">
                            Home
                        </div>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="dropdown" href="<?= base_url('home/keranjang') ?>">
                        <i class="fa-solid fa-cart-shopping"></i>
                        <span class="position-absolute translate-middle badge rounded-pill bg-danger text-light" id="count_Cart"></span>
                        <div class="text-light">
                            Cart
                        </div>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('home/chat_mobile/' . $chat['id_login']) ?>">
                        <i class="fa-solid fa-comment"></i>
                        <span class="position-absolute translate-middle badge rounded-pill bg-danger text-light" id="count_Chat"></span>
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

    <script>
        var BASE_URL = '<?= base_url() ?>';
        document.addEventListener('DOMContentLoaded', init, false);

        function init() {
            if ('serviceWorker' in navigator && navigator.onLine) {
                navigator.serviceWorker.register(BASE_URL + '/service-worker.js')
                    .then((reg) => {
                        console.log('Registrasi service worker Berhasil', reg);
                    }, (err) => {
                        console.error('Registrasi service worker Gagal', err);
                    });
            }
        }
    </script>

    <script src="<?= base_url() ?>/componen/bottom-bar.js"></script>

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

    <script>
        $(document).ready(function() {
            countCart()
            countChat()

            function countCart() {
                $.ajax({
                    type: "GET",
                    url: "<?= base_url('home/proses_count') ?>",
                    dataType: "JSON",
                    // cache: false,
                    success: function(response) {
                        $('#countCart').text("");
                        $('#countCart').text(response);
                    }
                });
            }

            function countChat() {
                $.ajax({
                    type: "GET",
                    url: "<?= base_url('home/count_chat') ?>",
                    dataType: "JSON",
                    success: function(response) {
                        $('#countChat').text("");
                        $('#countChat').text(response);
                    }
                });
                $('#countChat').text();
            }
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