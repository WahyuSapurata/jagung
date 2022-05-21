<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" href="<?= base_url() ?>/img/logo.png">
    <title><?php echo NAMA_APLIKASI . ' - ' . $title;  ?></title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?= base_url() ?>/plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link href="<?= base_url() ?>/depan/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- iCheck -->
    <link rel="stylesheet" href="<?= base_url() ?>/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- JQVMap -->
    <link rel="stylesheet" href="<?= base_url() ?>/plugins/jqvmap/jqvmap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= base_url() ?>/template/dist/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="<?= base_url() ?>/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="<?= base_url() ?>/plugins/daterangepicker/daterangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="<?= base_url() ?>/plugins/summernote/summernote-bs4.min.css">
    <!-- font -->
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
    <link rel="stylesheet" href="<?= base_url() ?>/font.css">
    <!-- data table -->
    <link rel="stylesheet" href="<?= base_url() ?>/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">

    <link rel="stylesheet" href="<?= base_url() ?>/admin.css">


</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <!-- Preloader -->
        <div class="preloader flex-column justify-content-center align-items-center">
            <img src="<?= base_url() ?>/depan/img/preloader.gif" alt="Logo" height="100" width="100">
            <span>Loading...</span>
        </div>

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-light fixed-top" style="background-color: #95CD41;">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="" class="nav-link">Home</a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="" class="nav-link">Contact</a>
                </li>
            </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                        <i class="fas fa-expand-arrows-alt"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <div class="theme-switch-wrapper nav-link">
                        <label class="theme-switch" for="checkbox">
                            <input type="checkbox" id="checkbox" />
                            <span class="slider round"></span>
                        </label>
                    </div>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="index3.html" class="brand-link">
                <img src="<?= base_url() ?>/img/logo.png" alt="SuperiorCorn Logo" style="margin-left: 0;" class="brand-image elevation-3">
                <span class="brand-text font-weight-light"><?= NAMA_APLIKASI ?></span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class with font-awesome or any other icon font library -->
                        <li class="nav-item">
                            <a href="<?= base_url('admin/beranda') ?>" class="nav-link">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    Dashboard
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('admin/kategori_jagung') ?>" class="nav-link">
                                <i class="nav-icon fa-solid fa-ranking-star"></i>
                                <p>
                                    Kategori Jagung
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('admin/jagung') ?>" class="nav-link">
                                <img src="<?= base_url('img/corn.png') ?>" width="23" class="nav-icon" alt="">
                                <p>Jagung</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('admin/pesanan') ?>" class="nav-link">
                                <i class="nav-icon fa-solid fa-cart-arrow-down"></i>
                                <p>
                                    Pesanan
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('admin/chat') ?>" class="nav-link active">
                                <i class="nav-icon fa-solid fa-comments"></i>
                                <p>
                                    Chat
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fa-solid fa-images"></i>
                                <p>
                                    Gambar
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="<?= base_url('admin/gambar1') ?>" class="nav-link">
                                        <i class="nav-icon fa-solid fa-image"></i>
                                        <p>Gambar 1</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?= base_url('admin/gambar2') ?>" class="nav-link">
                                        <i class="nav-icon fa-solid fa-image"></i>
                                        <p>Gambar 2</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <div>
                            <hr style="background-color: rgba(169, 169, 169, 0.4);">
                        </div>
                        <li class="nav-item">
                            <a href="<?= base_url('login/logout') ?>" class="nav-link">
                                <i class="fas fa-sign-out-alt nav-icon"></i>
                                <p>Logout</p>
                            </a>
                        </li>
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper" style="display: flow-root;">
            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <!-- Small boxes (Stat box) -->
                    <div class="alert" style="margin-top: 70px;" role="alert">
                        <h3 class="m-0"><i class="fa-solid fa-comments"></i> Chat</h3>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <div class="chat-header rounded-top p-2">
                                <div class="col-md-3 image">
                                    <img src="https://avatars.githubusercontent.com/u/91162157?v=4" style="border-radius: 50%;">
                                </div>
                                <div class="col-md-8 user-detail pt-2">
                                    <h6 class="pt-1 ms-3"><?= session('nama') ?></h6>
                                </div>
                            </div>
                            <div class="chat-content pt-3 bg-white border border-top-0">
                                <ul class="ps-3 pe-3 pt-1 mb-1" id="letakPesan" style="height: 368px;">
                                    <?php foreach ($chat as $cht) { ?>
                                        <a href="<?= base_url('admin/chatku/' . $cht['id_login']) ?>">
                                            <li class="p-2 mb-1 rounded bg-info text-white" style="height: auto;">
                                                <img src="https://avatars.githubusercontent.com/u/91162157?v=4" style="border-radius: 50%; height: 40px; width: 40px; margin-right: 15px;">
                                                <p class="ms-3" style="display: contents;"><?= $cht['nama'] ?></p>
                                            </li>
                                        </a>
                                    <?php } ?>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-9">
                            <div class="chat-content rounded pt-3 bg-white border">
                                <ul class="ps-3 pe-3 pt-1 mb-1" id="letakPesan" style="text-align: center; height: 425px;">
                                    <i class="fa-solid fa-comment-dots"></i>
                                    <h5 style="opacity: 0.7;">Mulai Chat Dengan Pelanggang</h5>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- /.row -->
                </div><!-- /.container-fluid -->
            </section>

            <!-- <footer class="main-footer text-center fixed-bottom text-dark">
                <strong>&copy; Copyright <strong>SuperiorCorn</strong> | All Rights Reserved</strong>
            </footer> -->

            <!-- Control Sidebar -->
            <aside class="control-sidebar control-sidebar-dark">
                <!-- Control sidebar content goes here -->
            </aside>
            <!-- /.control-sidebar -->
        </div>
        <!-- ./wrapper -->

        <!-- jQuery -->
        <script src="<?= base_url() ?>/plugins/jquery/jquery.min.js"></script>
        <!-- jQuery UI 1.11.4 -->
        <script src="<?= base_url() ?>/plugins/jquery-ui/jquery-ui.min.js"></script>
        <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
        <script>
            $.widget.bridge('uibutton', $.ui.button)
        </script>
        <!-- Bootstrap 4 -->
        <script src="<?= base_url() ?>/depan/lib/bootstrap/js/bootstrap.bundle.min.js"></script>
        <!-- ChartJS -->
        <script src="<?= base_url() ?>/plugins/chart.js/Chart.min.js"></script>
        <!-- Sparkline -->
        <script src="<?= base_url() ?>/plugins/sparklines/sparkline.js"></script>
        <!-- JQVMap -->
        <script src="<?= base_url() ?>/plugins/jqvmap/jquery.vmap.min.js"></script>
        <script src="<?= base_url() ?>/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
        <!-- jQuery Knob Chart -->
        <script src="<?= base_url() ?>/plugins/jquery-knob/jquery.knob.min.js"></script>
        <!-- daterangepicker -->
        <script src="<?= base_url() ?>/plugins/moment/moment.min.js"></script>
        <script src="<?= base_url() ?>/plugins/daterangepicker/daterangepicker.js"></script>
        <!-- Tempusdominus Bootstrap 4 -->
        <script src="<?= base_url() ?>/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
        <!-- Summernote -->
        <script src="<?= base_url() ?>/plugins/summernote/summernote-bs4.min.js"></script>
        <!-- overlayScrollbars -->
        <script src="<?= base_url() ?>/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
        <!-- AdminLTE App -->
        <script src="<?= base_url() ?>/template/dist/js/adminlte.js"></script>
        <!-- AdminLTE for demo purposes -->
        <!-- <script src="<?= base_url('/template/dist') ?>/js/demo.js"></script> -->
        <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
        <script src="<?= base_url() ?>/template/dist/js/pages/dashboard.js"></script>
        <!-- DataTables  & Plugins -->
        <script src="<?= base_url() ?>/plugins/datatables/jquery.dataTables.min.js"></script>
        <script src="<?= base_url() ?>/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
        <script src="<?= base_url() ?>/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
        <script src="<?= base_url() ?>/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
        <script src="<?= base_url() ?>/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
        <script src="<?= base_url() ?>/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
        <script src="<?= base_url() ?>/plugins/jszip/jszip.min.js"></script>
        <script src="<?= base_url() ?>/plugins/pdfmake/pdfmake.min.js"></script>
        <script src="<?= base_url() ?>/plugins/pdfmake/vfs_fonts.js"></script>
        <script src="<?= base_url() ?>/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
        <script src="<?= base_url() ?>/plugins/datatables-buttons/js/buttons.print.min.js"></script>
        <script src="<?= base_url() ?>/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
        <script src="<?= base_url() ?>/rupiah.js"></script>


        <!-- dark mode -->
        <script>
            var toggleSwitch = document.querySelector('.theme-switch input[type="checkbox"]');
            var currentTheme = localStorage.getItem('theme');
            var mainHeader = document.querySelector('.main-header');

            if (currentTheme) {
                if (currentTheme === 'dark') {
                    if (!document.body.classList.contains('dark-mode')) {
                        document.body.classList.add("dark-mode");
                    }
                    if (mainHeader.classList.contains('navbar-light')) {
                        mainHeader.classList.add('navbar-dark');
                        mainHeader.classList.remove('navbar-light');
                    }
                    toggleSwitch.checked = true;
                }
            }

            function switchTheme(e) {
                if (e.target.checked) {
                    if (!document.body.classList.contains('dark-mode')) {
                        document.body.classList.add("dark-mode");
                    }
                    if (mainHeader.classList.contains('navbar-light')) {
                        mainHeader.classList.add('navbar-dark');
                        mainHeader.classList.remove('navbar-light');
                    }
                    localStorage.setItem('theme', 'dark');
                } else {
                    if (document.body.classList.contains('dark-mode')) {
                        document.body.classList.remove("dark-mode");
                    }
                    if (mainHeader.classList.contains('navbar-dark')) {
                        mainHeader.classList.add('navbar-light');
                        mainHeader.classList.remove('navbar-dark');
                    }
                    localStorage.setItem('theme', 'light');
                }
            }

            toggleSwitch.addEventListener('change', switchTheme, false);
        </script>
</body>

</html>