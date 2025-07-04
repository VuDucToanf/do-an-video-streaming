<!DOCTYPE html>
<head>
    <title>Trang quản trị đồ án Video Streaming</title>
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
    <link href="{{ asset('cms/css/style-responsive.css') }}" rel="stylesheet"/>
    <link href="{{ asset('cms/css/select2.css') }}" rel="stylesheet"/>
    <!-- add icon link -->
    <link rel="icon" href="{{ asset('images/logo2.png') }}" type="image/x-icon">
    <!-- font CSS -->
    <link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    <!-- font-awesome icons -->
    <link rel="stylesheet" href="{{ asset('cms/css/font.css') }}" type="text/css"/>
    <link href="{{ asset('cms/css/font-awesome.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('cms/css/chosen/chosen.css') }}" type="text/css"/>
    <!-- //calendar -->
    <!-- //font-awesome icons -->
    <script src="{{ asset('cms/js/jquery2.0.3.min.js') }}"></script>
    <script src="{{ asset('cms/js/raphael-min.js') }}"></script>
    <script src="{{ asset('cms/js/chosen.jquery.js') }}"></script>
    <script src="{{ asset('cms/js/select2.full.js') }}"></script>
    <script src="{{ asset('cms/js/tinymce.min.js') }}"></script>
    <!-- load ckeditor -->
    <script type="text/javascript" src="{{ asset('assets/ckeditor/ckeditor.js') }}"></script>
</head>
<body>

<section id="container">
    <!--header start-->
    <header class="header fixed-top clearfix">
        <!--logo start-->
        <div class="brand">
            <a href="{{ route('cms.home') }}" class="logo">
                video haui
            </a>
            <div class="sidebar-toggle-box">
                <div class="fa fa-bars"></div>
            </div>
        </div>
        <!--logo end-->
        <div class="nav notify-row" id="top_menu">
            <!--  notification start -->
            <ul class="nav top-menu">
                <!-- settings start -->
                <li class="dropdown">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                        <i class="fa fa-tasks"></i>
                        <span class="badge bg-success">8</span>
                    </a>
                    <ul class="dropdown-menu extended tasks-bar">
                        <li>
                            <p class="">You have 8 pending tasks</p>
                        </li>
                        <li>
                            <a href="#">
                                <div class="task-info clearfix">
                                    <div class="desc pull-left">
                                        <h5>Target Sell</h5>
                                        <p>25% , Deadline  12 June’13</p>
                                    </div>
                                    <span class="notification-pie-chart pull-right" data-percent="45">
                            <span class="percent"></span>
                            </span>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <div class="task-info clearfix">
                                    <div class="desc pull-left">
                                        <h5>Product Delivery</h5>
                                        <p>45% , Deadline  12 June’13</p>
                                    </div>
                                    <span class="notification-pie-chart pull-right" data-percent="78">
                            <span class="percent"></span>
                            </span>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <div class="task-info clearfix">
                                    <div class="desc pull-left">
                                        <h5>Payment collection</h5>
                                        <p>87% , Deadline  12 June’13</p>
                                    </div>
                                    <span class="notification-pie-chart pull-right" data-percent="60">
                            <span class="percent"></span>
                            </span>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <div class="task-info clearfix">
                                    <div class="desc pull-left">
                                        <h5>Target Sell</h5>
                                        <p>33% , Deadline  12 June’13</p>
                                    </div>
                                    <span class="notification-pie-chart pull-right" data-percent="90">
                            <span class="percent"></span>
                            </span>
                                </div>
                            </a>
                        </li>

                        <li class="external">
                            <a href="#">See All Tasks</a>
                        </li>
                    </ul>
                </li>
                <!-- settings end -->
                <!-- inbox dropdown start-->
                <li id="header_inbox_bar" class="dropdown">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                        <i class="fa fa-envelope-o"></i>
                        <span class="badge bg-important">4</span>
                    </a>
                    <ul class="dropdown-menu extended inbox">
                        <li>
                            <p class="red">You have 4 Mails</p>
                        </li>
                        <li>
                            <a href="#">
                                <span class="photo"><img alt="avatar" src="{{ asset('cms/images/3.png') }}"></span>
                                <span class="subject">
                                <span class="from">Jonathan Smith</span>
                                <span class="time">Just now</span>
                                </span>
                                <span class="message">
                                    Hello, this is an example msg.
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="photo"><img alt="avatar" src="{{ asset('cms/images/1.png') }}"></span>
                                <span class="subject">
                                <span class="from">Jane Doe</span>
                                <span class="time">2 min ago</span>
                                </span>
                                <span class="message">
                                    Nice admin template
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="photo"><img alt="avatar" src="{{ asset('cms/images/3.png') }}"></span>
                                <span class="subject">
                                <span class="from">Tasi sam</span>
                                <span class="time">2 days ago</span>
                                </span>
                                <span class="message">
                                    This is an example msg.
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="photo"><img alt="avatar" src="{{ asset('cms/images/2.png') }}"></span>
                                <span class="subject">
                                <span class="from">Mr. Perfect</span>
                                <span class="time">2 hour ago</span>
                                </span>
                                <span class="message">
                                    Hi there, its a test
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="#">See all messages</a>
                        </li>
                    </ul>
                </li>
                <!-- inbox dropdown end -->
                <!-- notification dropdown start-->
                <li id="header_notification_bar" class="dropdown">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">

                        <i class="fa fa-bell-o"></i>
                        <span class="badge bg-warning">3</span>
                    </a>
                    <ul class="dropdown-menu extended notification">
                        <li>
                            <p>Notifications</p>
                        </li>
                        <li>
                            <div class="alert alert-info clearfix">
                                <span class="alert-icon"><i class="fa fa-bolt"></i></span>
                                <div class="noti-info">
                                    <a href="#"> Server #1 overloaded.</a>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="alert alert-danger clearfix">
                                <span class="alert-icon"><i class="fa fa-bolt"></i></span>
                                <div class="noti-info">
                                    <a href="#"> Server #2 overloaded.</a>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="alert alert-success clearfix">
                                <span class="alert-icon"><i class="fa fa-bolt"></i></span>
                                <div class="noti-info">
                                    <a href="#"> Server #3 overloaded.</a>
                                </div>
                            </div>
                        </li>

                    </ul>
                </li>
                <!-- notification dropdown end -->
            </ul>
            <!--  notification end -->
        </div>
        <div class="top-nav clearfix">
            <!--search & user info start-->
            <ul class="nav pull-right top-menu">
                <li>
                    <input type="text" class="form-control search" placeholder=" Search">
                </li>
                <!-- user login dropdown start-->
                <li class="dropdown">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                        <img alt="" src="{{ asset('cms/images/2.png') }}">
                        <span class="username"><?php echo $_SESSION['admin']->username ?></span>
                        <b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu extended logout">
                        <li><a href="#"><i class=" fa fa-suitcase"></i>Profile</a></li>
                        <li><a href="#"><i class="fa fa-cog"></i> Settings</a></li>
                        <li><a href="{{ route('cms.logout') }}"><i class="fa fa-key"></i> Log Out</a></li>
                    </ul>
                </li>
                <!-- user login dropdown end -->

            </ul>
            <!--search & user info end-->
        </div>
    </header>
    <!-- end header -->

    <!--sidebar start-->
    <aside>
        <div id="sidebar" class="nav-collapse">
            <!-- sidebar menu start-->
            <div class="leftside-navigation">
                <ul class="sidebar-menu" id="nav-accordion">
                    <li>
                        <a class="active" href="{{ route('cms.home') }}">
                            <i class="fa fa-dashboard"></i>
                            <span>Dashboard</span>
                        </a>
                    </li>

                    <li class="sub-menu">
                        <a href="javascript:;">
                            <i class="fa fa-book"></i>
                            <span>Nội dung</span>
                        </a>
                        <ul class="sub">
                            <li><a href="{{ route('cms.video') }}">Quản lý Video</a></li>
{{--                            <li><a href="glyphicon.html">glyphicon</a></li>--}}
{{--                            <li><a href="grids.html">Grids</a></li>--}}
                        </ul>
                    </li>
                    <li class="sub-menu">
                        <a href="javascript:;">
                            <i class="fa fa-th"></i>
                            <span>Danh mục</span>
                        </a>
                        <ul class="sub">
                            <li><a href="{{ route('cms.category') }}">Quản lý danh mục</a></li>
                            <li><a href="{{ route('cms.banner') }}">Quản lý banner</a></li>
                        </ul>
                    </li>
                    <li class="sub-menu">
                        <a href="javascript:;">
                            <i class="fa fa-tasks"></i>
                            <span>Tài khoản</span>
                        </a>
                        <ul class="sub">
                            <li><a href="{{ route('user.index') }}">Quản lý người dùng</a></li>
{{--                            <li><a href="form_validation.html">Form Validation</a></li>--}}
{{--                            <li><a href="dropzone.html">Dropzone</a></li>--}}
                        </ul>
                    </li>
{{--                    <li class="sub-menu">--}}
{{--                        <a href="javascript:;">--}}
{{--                            <i class="fa fa-envelope"></i>--}}
{{--                            <span>Mail </span>--}}
{{--                        </a>--}}
{{--                        <ul class="sub">--}}
{{--                            <li><a href="mail.html">Inbox</a></li>--}}
{{--                            <li><a href="mail_compose.html">Compose Mail</a></li>--}}
{{--                        </ul>--}}
{{--                    </li>--}}
                    <li class="sub-menu">
                        <a href="javascript:;">
                            <i class="fa fa-glass"></i>
                            <span>Đối tác</span>
                        </a>
                        <ul class="sub">
                            <li><a href="{{ route('cms.actor') }}">Diễn viên</a></li>
                            <li><a href="{{ route('cms.author') }}">Đạo diễn</a></li>
                        </ul>
                    </li>
                    <li class="sub-menu">
                        <a href="javascript:;">
                            <i class=" fa fa-bar-chart-o"></i>
                            <span>Thống kê</span>
                        </a>
                        <ul class="sub">
                            <li><a href="{{ route('cms.report_access_log') }}">Thống kê lượt xem</a></li>
                            <li><a href="{{ route('cms.report_like') }}">Thống kê lượt like</a></li>
                        </ul>
                    </li>
{{--                    <li class="sub-menu">--}}
{{--                        <a href="javascript:;">--}}
{{--                            <i class="fa fa-glass"></i>--}}
{{--                            <span>Extra</span>--}}
{{--                        </a>--}}
{{--                        <ul class="sub">--}}
{{--                            <li><a href="gallery.html">Gallery</a></li>--}}
{{--                            <li><a href="404.html">404 Error</a></li>--}}
{{--                            <li><a href="registration.html">Registration</a></li>--}}
{{--                        </ul>--}}
{{--                    </li>--}}
{{--                    <li>--}}
{{--                        <a href="login.html">--}}
{{--                            <i class="fa fa-user"></i>--}}
{{--                            <span>Login Page</span>--}}
{{--                        </a>--}}
{{--                    </li>--}}
                </ul>
            </div>
            <!-- sidebar menu end-->
        </div>
    </aside>
    <!--sidebar end-->

    <!--main content start-->
    <section id="main-content">
        <!-- content body -->
        @yield('content-main')
        <!-- end content body -->
        <!-- footer -->
        <div class="footer">
            <div class="wthree-copyright">
                <p>© 2022 Đồ án Video Streaming Haui. By <a class="text-danger" href="https://www.facebook.com/profile.php?id=100011395174564">Vũ Đức Toàn</a></p>
            </div>
        </div>
        <!-- / footer -->
    </section>
    <!--main content end-->
</section>
<script src="{{ asset('cms/js/bootstrap.js') }}"></script>
<script src="{{ asset('cms/js/jquery.dcjqaccordion.2.7.js') }}"></script>
<script src="{{ asset('cms/js/scripts.js') }}"></script>
<script src="{{ asset('cms/js/jquery.slimscroll.js') }}"></script>
<script src="{{ asset('cms/js/jquery.nicescroll.js') }}"></script>
<!--[if lte IE 8]><script language="javascript" type="text/javascript" src="{{ asset('cms/js/flot-chart/excanvas.min.js') }}"></script><![endif]-->
<script src="{{ asset('cms/js/jquery.scrollTo.js') }}"></script>
</body>
<script>

    tinymce.init({
        selector: 'textarea.tinymce-cls',
        height: 300,
    });

    $('.itemName').select2({
        placeholder: 'Chọn phim cha',
        ajax: {
            url: '/video/search-film',
            dataType: 'json',
            delay: 250,
            processResults: function (data) {
                return {
                    results:  $.map(data, function (item) {
                        return {
                            text: item.name,
                            id: item.id
                        }
                    })
                };
            },
            cache: true
        }
    });
</script>
