<!DOCTYPE html>
<head>
    <title>Trang quản trị</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Visitors Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!-- bootstrap-css -->
    <link rel="stylesheet" href="{{ asset('cms/css/bootstrap.min.css') }}" >
    <!-- //bootstrap-css -->
    <!-- Custom CSS -->
    <link href="{{ asset('cms/css/style.css') }}" rel='stylesheet' type='text/css' />
    <link href="{{ asset('css/style-responsive.css') }}" rel="stylesheet"/>
    <!-- font CSS -->
    <link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    <!-- font-awesome icons -->
    <link rel="stylesheet" href="{{ asset('cms/css/font.css') }}" type="text/css"/>
    <link href="{{ asset('cms/css/font-awesome.css') }}" rel="stylesheet">
    <!-- //font-awesome icons -->
    <script src="{{ asset('cms/js/jquery2.0.3.min.js') }}"></script>
</head>
<body>
<div class="log-w3">
    <div class="w3layouts-main">
        <h2>Đăng nhập</h2>
        <form action="" method="post">
            @csrf
            <input type="text" class="ggg" name="username" placeholder="USERNAME" required="">
            <input type="password" class="ggg" name="password" placeholder="PASSWORD" required="">
            <span><input type="checkbox" name="remember"/> Remember me</span>
            <h6><a href="#">Quên mật khẩu</a></h6>
            <div class="clearfix"></div>
            <input type="submit" value="Sign In" name="login">
        </form>
{{--        <p>Chưa có tài khoản ?<a href="registration.html">Tạo tài khoản</a></p>--}}
    </div>
</div>
<script src="{{ asset('cms/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('cms/js/jquery.dcjqaccordion.2.7.js') }}"></script>
<script src="{{ asset('cms/js/scripts.js') }}"></script>
<script src="{{ asset('cms/js/jquery.slimscroll.js') }}"></script>
<script src="{{ asset('cms/js/jquery.nicescroll.js') }}"></script>
<!--[if lte IE 8]><script language="javascript" type="text/javascript" src="{{ asset('cms/js/flot-chart/excanvas.min.js') }}"></script><![endif]-->
<script src="{{ asset('cms/js/jquery.scrollTo.js') }}"></script>
</body>
