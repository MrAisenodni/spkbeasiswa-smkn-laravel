<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>@yield('title') | SPK Beasiswa SMKN 12 Jakarta Utara</title>

<!-- Icon -->
<link rel="icon" href="{{ url('dist/img/logo.png') }}">
<!-- Google Font: Source Sans Pro -->
<link rel="stylesheet" href="{{ url('https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback') }}">
<!-- Font Awesome -->
<link rel="stylesheet" href="{{ url('plugins/fontawesome-free/css/all.min.css') }}">
<!-- Ionicons -->
<link rel="stylesheet" href="{{ url('https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css') }}">
<!-- Tempusdominus Bootstrap 4 -->
<link rel="stylesheet" href="{{ url('plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">
<!-- iCheck -->
<link rel="stylesheet" href="{{ url('plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
<!-- JQVMap -->
<link rel="stylesheet" href="{{ url('plugins/jqvmap/jqvmap.min.css') }}">
<!-- Theme style -->
<link rel="stylesheet" href="{{ url('dist/css/adminlte.min.css') }}">
<!-- overlayScrollbars -->
<link rel="stylesheet" href="{{ url('plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
<!-- summernote -->
<link rel="stylesheet" href="{{ url('plugins/summernote/summernote-bs4.min.css') }}">
<!-- Data Tables -->
<link type="text/css" rel="stylesheet" href="{{ url('dist/css/dataTables.min.css') }}">
<!-- Custom CSS -->
<link rel="stylesheet" href="{{ url('dist/css/custom.css') }}">
</head>

<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

<!-- Preloader -->
<div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="{{ url('/dist/img/logo.png') }}" alt="SMKN12" height="60" width="60">
</div>

<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-light bg-gray">
    <!-- Brand Logo -->
    <a href="index.php" class="brand-link">
        <img src="{{ url('/dist/img/logo.png') }}" alt="Logo SMKN 12" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">SMKN 12</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
            <img src="{{ url('/dist/img/avatar.png') }}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
            <a href="#" class="d-block">Muhammad Fiqri Alfayed</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
                with font-awesome or any other icon font library -->
            <li class="nav-item">
                <a href="/admin" class="nav-link">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                    Dashboard
                </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="/admin/kriteria" class="nav-link">
                <i class="nav-icon fas fa-sort-alpha-up"></i>
                <p>
                    Kriteria
                </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="/admin/subkriteria" class="nav-link">
                <i class="nav-icon fas fa-sort-alpha-down"></i>
                <p>
                    Subkriteria
                </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="/admin/siswa" class="nav-link">
                <i class="nav-icon fas fa-user"></i>
                <p>
                    Siswa
                </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="/admin/pendaftaran" class="nav-link">
                <i class="nav-icon fas fa-file-alt"></i>
                <p>
                    Pendaftaran
                </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="/admin/rank" class="nav-link">
                <i class="nav-icon fas fa-chart-bar"></i>
                <p>
                    Ranking
                </p>
                </a>
                <span></span>
            </li>
            <li class="nav-item bg-danger">
                <a href="/login" class="nav-link">
                <i class="nav-icon fas fa-sign-out-alt"></i>
                <p>
                    Logout
                </p>
                </a>
            </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
        <div class="col-sm-6">
            <h1 class="m-0">@yield('title')</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb"><a href="#">Home</a><p>/@yield('title')</p></li>
            </ol>
        </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

@yield('container')

<!-- /.content-wrapper -->
<footer class="main-footer">
    <strong>Copyright &copy; 2021 SMKN 12 Jakarta Utara.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
        <b>Version</b> 1.0.0
    </div>
</footer>

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
<!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="{{ url('plugins/jquery/jquery.min.js') }}"></script>
<!-- JS Data Tables -->
<script type="text/javascript" src="{{ url('dist/js/dataTables.min.js') }}"></script>
<!-- Bootstrap 4 -->
<script src="{{ url('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- Sparkline -->
<script src="{{ url('plugins/sparklines/sparkline.js') }}"></script>
<!-- JQVMap -->
<script src="{{ url('plugins/jqvmap/jquery.vmap.min.js') }}"></script>
<script src="{{ url('plugins/jqvmap/maps/jquery.vmap.usa.js') }}"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{ url('plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}"></script>
<!-- Summernote -->
<script src="{{ url('plugins/summernote/summernote-bs4.min.js') }}"></script>
<!-- overlayScrollbars -->
<script src="{{ url('plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ url('dist/js/adminlte.js') }}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ url('dist/js/demo.js') }}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{ url('dist/js/pages/dashboard.js') }}"></script>
</body>
</html>