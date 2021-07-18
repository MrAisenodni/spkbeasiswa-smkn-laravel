<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>LOGIN PAGE</title>

    <!-- Icon -->
    <link rel="icon" href={{ url('dist/img/logo.png') }}>
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href={{ url('https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback') }}>
    <!-- Font Awesome -->
    <link rel="stylesheet" href={{ url('plugins/fontawesome-free/css/all.min.css') }}>
    <!-- Ionicons -->
    <link rel="stylesheet" href={{ url('https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css') }}>
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href={{ url('plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}>
    <!-- iCheck -->
    <link rel="stylesheet" href={{ url('plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}>
    <!-- JQVMap -->
    <link rel="stylesheet" href={{ url('plugins/jqvmap/jqvmap.min.css') }}>
    <!-- Theme style -->
    <link rel="stylesheet" href={{ url('dist/css/adminlte.min.css') }}>
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href={{ url('plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}>
    <!-- Daterange picker -->
    <link rel="stylesheet" href={{ url('plugins/daterangepicker/daterangepicker.css') }}>
    <!-- summernote -->
    <link rel="stylesheet" href={{ url('plugins/summernote/summernote-bs4.min.css') }}>
    <!-- Custom CSS -->
    <link rel="stylesheet" href={{ url('dist/css/custom.css') }}>
</head>
<body>
    <div class="container">
        <div class="row">
        <form method="post">
            <div class="login">
                <div class="avatar">
                    <i class="fa fa-user"></i>
                </div>
                <h2>Login</h2>
                <div class="box-login">
                    <i class="fas fa-id-card"></i>
                    <input type="text" name="user" placeholder="Username" required="">
                </div>

                <div class="box-login">
                    <i class="fas fa-lock"></i>
                    <input type="password" name="pass" placeholder="Password" required="">
                </div>

                <button type="submit" name="login" class="btn-login">
                    Masuk
                </button>
            </div>
        </form>	
        </div>
    </div>
</body>
</html>