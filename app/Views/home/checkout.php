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
    <link rel="stylesheet" href="<?= base_url() ?>/plugins/sweetalert2/sweetalert2.min.css">
    <!-- Toastr -->
    <link rel="stylesheet" href="<?= base_url() ?>/plugins/toastr/toastr.min.css">

    <link href='https://api.mapbox.com/mapbox-gl-js/v2.8.2/mapbox-gl.css' rel='stylesheet' />

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
                <strong class="text-header">Checkout</strong>
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
                    <h1 style="color: #033e23;">|</h1>
                    <h4 class="image-bar" style="line-height: 48px; color: #033e23;">Checkout Belanja</h4>
                </a>

            </div>
        </div>
    </nav>

    <!-- navbar -->

    <!-- checkout -->

    <section>
        <div class="container">
            <div class="section-belanja">
                <div class="belanja">
                    <div class="image-belanja">
                        <img src="<?= base_url('uploads/jagung/' . $belanja['foto_jagung']) ?>" class="img-fluid" alt="">
                    </div>
                    <div class="text-belanja">
                        <h3>
                            <strong><?= $belanja['judul'] ?></strong>
                        </h3>
                        <div class="header-belanja">
                            <div class="text-belanja1">
                                <?= $belanja['tersedia'] ?> Tersedia
                            </div>
                            <div class="text-belanja2">
                                <?= $jumlah_terjual ?> Terjual
                            </div>
                        </div>
                        <div class="harga1">
                            <div class="text-harga">
                                Harga
                            </div>
                            <form action="<?= base_url('home/tambah_belanja') ?>" method="POST">
                                <input type="hidden" name="id_jagung" value="<?= $belanja['id_jagung'] ?>">
                                <input type="hidden" name="status" value="proses">
                                <div class="total-harga">
                                    <input type="text" name="total" readonly class="money">
                                </div>
                        </div>
                        <div class="quantity d-flex">
                            <div class="input-group-prepend decrement-btn changeQuantity" style="cursor: pointer">
                                <span class="input-group-text btn border">-</span>
                            </div>
                            <input type="text" name="qty" class="qty-input form-control" readonly maxlength="2" max="10" value="1">
                            <div class="input-group-append increment-btn changeQuantity" style="cursor: pointer">
                                <span class="input-group-text btn border">+</span>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="checkout">
                    <div class="row g-3 align-items-center mb-3">
                        <div class="col-3">
                            <label for="nama" class="col-form-label">Nama</label>
                        </div>
                        <div class="col">
                            <input type="text" name="nama" id="nama" class="form-control">
                        </div>
                    </div>
                    <div class="row g-3 align-items-center mb-3">
                        <div class="col-3">
                            <label for="nomor" class="col-form-label">Nomor Handphone</label>
                        </div>
                        <div class="col">
                            <input type="text" name="nomor" id="nomor" class="form-control" placeholder="Masukkan Nomor">
                            <div id="emailHelp" class="form-text text-info ms-1"><i class="fa-solid fa-circle-info"></i>Masukkan nomor Handphone yang aktiv</div>
                        </div>
                    </div>
                    <div class="row g-3 align-items-center mb-3">
                        <div class="col-3">
                            <label for="jenis_kelamin" class="col-form-label">Jenis Kelamin</label>
                        </div>
                        <div class="col">
                            <input type="radio" name="jenis_kelamin" value="Laki-laki"> Laki-laki<br>
                            <input type="radio" name="jenis_kelamin" value="Perempuan"> Perempuan<br>
                        </div>
                    </div>
                    <div class="row g-3 align-items-center mb-3">
                        <div class="col-3">
                            <label for="koordinat" class="col-form-label">Alamat Koordinat</label>
                        </div>
                        <div class="col">
                            <input type="text" id="koordinat" name="koordinat" readonly class="form-control">
                        </div>
                    </div>
                    <div class="map-biodata" id='map'></div>

                    <div class="row g-3 align-items-center mb-3">
                        <div class="col-3">
                            <label for="alamat" class="col-form-label">Alamat</label>
                        </div>
                        <div class="col">
                            <input type="text" name="alamat" id="alamat" readonly class="alamat form-control">
                        </div>
                    </div>
                    <div class="row g-3 align-items-center mb-3">
                        <div class="col-3">
                            <label for="alamat_lengkap" class="col-form-label">Alamat Lengkap</label>
                        </div>
                        <div class="col">
                            <input type="text" id="alamat_lengkap" name="alamat_lengkap" class="form-control">
                            <div id="emailHelp" class="form-text text-info ms-1"><i class="fa-solid fa-circle-info"></i>Masukkan alamat lengkap seperti nomor rumah atau gedung</div>
                        </div>
                    </div>
                    <div class="button-chek">
                        <button type="submit" class="btn btn-beli" style="width: 200px;">Checkout</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- checkout -->

    <!-- <div class="input-group quantity">
                                <div class="input-group-prepend decrement-btn changeQuantity" style="cursor: pointer">
                                    <span class="input-group-text">-</span>
                                </div>
                                <input type="text" class="qty-input form-control" readonly maxlength="2" max="10" value="1">
                                <div class="input-group-append increment-btn changeQuantity" style="cursor: pointer">
                                    <span class="input-group-text">+</span>
                                </div>
                            </div> -->

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

    <script src='https://api.mapbox.com/mapbox-gl-js/v2.6.1/mapbox-gl.js'></script>
    <script>
        mapboxgl.accessToken = 'pk.eyJ1Ijoic2FwdXJhdGF3YWh5dSIsImEiOiJja3lhNGNqNHAwMXlwMndxdWdlYmw3ZWczIn0.45U2jnf9x0D8bGbOJUKdVQ';
        const map = new mapboxgl.Map({
            container: 'map', // container ID
            style: 'mapbox://styles/mapbox/streets-v11', // style URL
            center: [119.44, -1.42], // starting position [lng, lat]
            zoom: 6, // starting zoom
            // attributionControl: true
        });
        map.on('load', () => {
            const input = document.getElementById('koordinat')
            const alamat = document.getElementById('alamat')
            map.addLayer({
                id: 'terrain-data',
                type: 'line',
                source: {
                    type: 'vector',
                    url: 'mapbox://mapbox.mapbox-terrain-v2'
                },
                'source-layer': 'contour'
            });
            map.addControl(new mapboxgl.FullscreenControl({
                container: document.querySelector('#map')
            }));
            // Initialize the GeolocateControl.
            const geolocate = new mapboxgl.GeolocateControl({
                positionOptions: {
                    enableHighAccuracy: true
                },
                trackUserLocation: true,
                showUserHeading: true
            });

            // Add the control to the map.
            function coordinatesGeocoder(query) {
                // Match anything which looks like
                // decimal degrees coordinate pair.
                const matches = query.match(
                    /^[ ]*(?:Lat: )?(-?\d+\.?\d*)[, ]+(?:Lng: )?(-?\d+\.?\d*)[ ]*$/i
                );
                if (!matches) {
                    return null;
                }

                function coordinateFeature(lng, lat) {
                    return {
                        center: [lng, lat],
                        geometry: {
                            type: 'Point',
                            coordinates: [lng, lat]
                        },
                        place_name: 'Lat: ' + lat + ' Lng: ' + lng,
                        place_type: ['coordinate'],
                        properties: {},
                        type: 'Feature'
                    };
                }

                const coord1 = Number(matches[1]);
                const coord2 = Number(matches[2]);
                const geocodes = [];

                if (coord1 < -90 || coord1 > 90) {
                    // must be lng, lat
                    geocodes.push(coordinateFeature(coord1, coord2));
                }

                if (coord2 < -90 || coord2 > 90) {
                    // must be lat, lng
                    geocodes.push(coordinateFeature(coord2, coord1));
                }

                if (geocodes.length === 0) {
                    // else could be either lng, lat or lat, lng
                    geocodes.push(coordinateFeature(coord1, coord2));
                    geocodes.push(coordinateFeature(coord2, coord1));
                }

                return geocodes;
            };
            let endpoint
            let latitude
            let longitude
            map.addControl(geolocate);
            // Set an event listener that fires
            // when a geolocate event occurs.
            geolocate.on('geolocate', async (e) => {
                input.value = `${e.coords.latitude}, ${e.coords.longitude}`;
                latitude = e.coords.latitude;
                longitude = e.coords.longitude;
                endpoint = 'mapbox.places';
                const request = await fetch(`https://api.mapbox.com/geocoding/v5/${endpoint}/${longitude},${latitude}.json?access_token=${mapboxgl.accessToken}`);
                const data = await request.json();
                alamat.value = `${data.features[0].text}, ${data.features[1].text}, ${data.features[3].text}, ${data.features[4].text}, ${data.features[5].text}`;
            });
        });
    </script>

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

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>

    <!-- Template Main Javascript File -->
    <script src="<?= base_url() ?>/depan/js/main.js"></script>

    <script src="<?= base_url() ?>/plugins/sweetalert2/sweetalert2.min.js"></script>

    <script>
        $(window).load(function() {
            $(".preloader").delay(250).fadeOut("slow"), $("body").delay(250).css({
                overflow: "visible"
            })
        });
    </script>

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

    <script>
        $(document).ready(function() {
            const harga = <?= $belanja['harga'] ?>;
            let biaya = harga;
            $('.money').text('Rp ' + toMoney(biaya));
            $('.money').val('Rp ' + toMoney(biaya));

            $('.increment-btn').click(function(e) {
                var incre_value = $(this).parents('.quantity').find('.qty-input').val();
                var value = parseInt(incre_value, 10);
                value = isNaN(value) ? 0 : value;
                if (value < 10) {
                    biaya += harga;
                    $('.money').text('Rp ' + toMoney(biaya));
                    $('.money').val('Rp ' + toMoney(biaya));
                    value++;
                    $(this).parents('.quantity').find('.qty-input').val(value);
                }
            });

            $('.decrement-btn').click(function(e) {
                var decre_value = $(this).parents('.quantity').find('.qty-input').val();
                var value = parseInt(decre_value, 10);
                value = isNaN(value) ? 0 : value;
                if (value > 1) {
                    biaya -= harga;
                    $('.money').text('Rp ' + toMoney(biaya));
                    $('.money').val('Rp ' + toMoney(biaya));
                    value--;
                    $(this).parents('.quantity').find('.qty-input').val(value);
                }
            });

        });

        function toMoney(value) {
            const price = value.toString();
            const result = [];
            let count = 0;
            for (let index = price.length - 1; index >= 0; index--) {
                const char = price[index];
                if (char == '.') continue;
                if (count == 3) {
                    count = 1;
                    result.unshift('.');
                } else {
                    count++;
                }
                result.unshift(char);
            }
            return result.join('');
        }
    </script>

    <script>
        $(function() {

            <?php if (session()->has("success")) { ?>
                Swal.fire({
                    position: 'center',
                    icon: 'success',
                    title: 'Mantap',
                    text: '<?= session("success") ?>',
                    showConfirmButton: false,
                    timer: 1500
                })
            <?php } ?>
        });
    </script>

</body>

</html>