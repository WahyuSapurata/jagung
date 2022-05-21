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
    <link rel="stylesheet" href="<?= base_url() ?>/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
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

    <!-- SweetAlert2 -->
    <link rel="stylesheet" href="<?= base_url() ?>/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
    <!-- Toastr -->
    <link rel="stylesheet" href="<?= base_url() ?>/plugins/toastr/toastr.min.css">


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
                            <a href="<?= base_url('admin/kategori_jagung') ?>" class="nav-link active">
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
                            <a href="<?= base_url('admin/chat') ?>" class="nav-link">
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
                        <h3 class="m-0"><i class="fa-solid fa-ranking-star"></i> Kategori Jagung</h3>
                    </div>
                    <div class="card" style="margin-bottom: 70px;">
                        <div class="card-header">
                            <h5 class="card-title m-0">Tabel Data Kategori Jagung</h5>
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-dark float-right" data-toggle="modal" data-target="#exampleModal">
                                <i class="fas fa-plus"></i>
                            </button>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-hover text-center">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Jenis Jagung</th>
                                        <th>Foto Jagung</th>
                                        <th style="width: 125px;">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1;
                                    foreach ($kategori as $ktg) { ?>
                                        <tr>
                                            <td><?= $no++ ?></td>
                                            <td><?= $ktg['jenis_kategori'] ?></td>
                                            <td><img src="<?= base_url('uploads/kategori/' . $ktg['foto']) ?>" width="100" alt=""></td>
                                            <td>
                                                <form action="<?= base_url() ?>/admin/hapus_kategori/<?= $ktg['id_kategori'] ?>" method="post">
                                                    <button type="button" class="badge badge-warning" style="border: none; margin-right: 10px;" data-toggle="modal" data-target="#edit_modal<?= $ktg['id_kategori'] ?>">
                                                        <i class="fa fa-edit"></i>
                                                    </button>
                                                    <?= csrf_field(); ?>
                                                    <input type="hidden" name="_method" value="DELETE">
                                                    <button type="submit" onclick="return confirm('Apakah Yankin Ingin Hapus??')" class="badge badge-danger" style="border: none;"><i class="fas fa-trash-alt"></i></button>
                                                </form>
                                            </td>
                                        </tr>

                                        <div class="modal fade" id="edit_modal<?= $ktg['id_kategori'] ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h4 class="modal-title" id="myModalLabel">Edit Kategori</h4>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form method="POST" enctype="multipart/form-data" action="<?= base_url('admin/edit_kategori/' . $ktg['id_kategori']) ?>">
                                                            <?= csrf_field(); ?>
                                                            <input type="hidden" name="lama" value="<?= $ktg['foto'] ?>">
                                                            <div class="form-group">
                                                                <label>Nama Kegiatan</label>
                                                                <input type="text" class="form-control" name="jenis_kategori" value="<?= $ktg['jenis_kategori'] ?>" required>
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Foto</label>
                                                                <input type="file" id="file_upload" class="custom" name="file_upload" value="<?= $ktg['foto'] ?>" onchange="gambar(this.value)">
                                                            </div>
                                                            <img src="<?= base_url('uploads/kategori/' . $ktg['foto']) ?>" id="foto" width="100" alt="" class="mb-3 img-preview">
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                                                <button type="submit" class="btn btn-primary">Ubah</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- /.row -->
                </div><!-- /.container-fluid -->
            </section>

            <footer class="main-footer text-center fixed-bottom text-dark">
                <strong>&copy; Copyright <strong>SuperiorCorn</strong> | All Rights Reserved</strong>
            </footer>

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
        <script src="<?= base_url() ?>/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
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


        <!-- Page specific script -->
        <script>
            $(function() {
                $("#example1").DataTable({
                    "responsive": true,
                    "lengthChange": false,
                    "autoWidth": false,
                    "buttons": ["copy", "excel", "pdf", "print"]
                }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
                $('#example2').DataTable({
                    "paging": true,
                    "lengthChange": false,
                    "searching": false,
                    "ordering": true,
                    "info": true,
                    "autoWidth": false,
                    "responsive": true,
                });
            });
        </script>
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

        <script src="<?= base_url() ?>/plugins/sweetalert2/sweetalert2.min.js"></script>
        <script src="<?= base_url() ?>/plugins/toastr/toastr.min.js"></script>

        <script>
            $(function() {

                <?php if (session()->has("success")) { ?>
                    Swal.fire({
                        icon: 'success',
                        title: 'Mantap',
                        text: '<?= session("success") ?>'
                    })
                <?php } ?>
            });
        </script>
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
        <script>
            function gambar(val) {
                $("#foto").attr('src', URL.createObjectURL(event.target.files[0]));
            }
        </script>
</body>

</html>