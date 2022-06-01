<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <link rel="icon" href="<?= base_url() ?>/img/logo.png">
    <title>
        <?= $title ?>
    </title>

    <!-- Custom fonts for this template-->
    <link href="<?= base_url() ?>/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>

    <!-- Custom styles for this template-->
    <link href="<?= base_url() ?>/css/sb-admin-2.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url() ?>/login.css">

    <!-- show password -->
    <link href="<?= base_url() ?>/css/show-password-toggle.css" rel="stylesheet">

    <!-- SweetAlert2 -->
    <link rel="stylesheet" href="<?= base_url() ?>/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
    <!-- Toastr -->
    <link rel="stylesheet" href="<?= base_url() ?>/plugins/toastr/toastr.min.css">

</head>

<body class="bg1">

    <!-- Preloader -->
    <div class="preloader flex-column justify-content-center align-items-center">
        <img src="<?= base_url() ?>/depan/img/preloader.gif" alt="Logo" height="100" width="100">
        <span>Loading...</span>
    </div>

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-lg-4">

                <div class="card o-hidden border-0 my-5 bg-dark">
                    <div class="card-body p-0 text-center mt-3">
                        <img src="<?= base_url() ?>/img/logo.png" alt="logo" width="150">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg">
                                <div class="p-4">
                                    <div class="text-center">
                                        <h1 class="h4 text-light mb-4">VALIDASI</h1>
                                        <?= session('email') ?>
                                    </div>

                                    <form method="POST" action="<?= base_url('login/validasi_otp') ?>">
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" style="border-color: #00A859; background :transparent; border-right: none; color: white; width:43px;">
                                                    <i class="fas fa-keyboard"></i>
                                                </span>
                                            </div>
                                            <input type="text" class="form-control" id="otp" name="otp" required placeholder="Masukkan Kode Otp">
                                        </div>
                                        <button type="submit" class="btn btn-light btn-user btn-block mt-4" style="color: #00A859;">
                                            Kirim
                                        </button>
                                    </form>
                                    <hr style="background-color: #00A859;">
                                    <div class="text-right">
                                        <a class="text-light" href="<?= base_url('login/index') ?>">Kembali ke login</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="<?= base_url() ?>/vendor/jquery/jquery.min.js"></script>
    <script src="<?= base_url() ?>/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url() ?>/depan/lib/jquery/jquery-migrate.min.js"></script>
    <script>
        $(window).load(function() {
            $(".preloader").delay(250).fadeOut("slow"), $("body").delay(250).css({
                overflow: "visible"
            })
        });
    </script>

    <!-- Core plugin JavaScript-->
    <script src="<?= base_url() ?>/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?= base_url() ?>/js/sb-admin-2.min.js"></script>
    <script src="<?= base_url() ?>/js/show-password-toggle.min.js"></script>

    <script src="<?= base_url() ?>/plugins/sweetalert2/sweetalert2.min.js"></script>
    <script src="<?= base_url() ?>/plugins/toastr/toastr.min.js"></script>
    <!-- <script src="<?= base_url('file/') ?>myscript.js"></script> -->
    <script src="<?= base_url() ?>/template/dist/js/adminlte.js"></script>
    <script>
        $(function() {

            <?php if (session()->has("error")) { ?>
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...!',
                    text: '<?= session("error") ?>'
                })
            <?php } ?>
        });
    </script>

</body>

</html>