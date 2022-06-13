
<!DOCTYPE html>
<html lang="en">




<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="ThemeBucket">
    <link rel="shortcut icon" href="/admin/images/favicon.png">
    <title>Admin</title>
    <link href="/admin/bs3/css/bootstrap.min.css" rel="stylesheet">
    <link href="/admin/js/jquery-ui/jquery-ui-1.10.1.custom.min.css" rel="stylesheet">
    <link href="/admin/css/bootstrap-reset.css" rel="stylesheet">
    <link href="/admin/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="/admin/js/jvector-map/jquery-jvectormap-1.2.2.css" rel="stylesheet">
    <link href="/admin/css/clndr.css" rel="stylesheet">
    <!--clock css-->
    <link href="/admin/js/css3clock/css/style.css" rel="stylesheet">
    <!--Morris Chart CSS -->
    <link rel="stylesheet" href="/admin/js/morris-chart/morris.css">
    <!-- Custom styles for this template -->
    <link href="/admin/css/style.css" rel="stylesheet">
    <link href="/admin/css/style-responsive.css" rel="stylesheet"/>

{{--    format giá--}}
    <link href="/admin/js/simple.money.format.js" rel="stylesheet">
</head>
<body>
    <section id="container">
        <!--header start-->
        <header class="header fixed-top clearfix">
            <!--logo start-->
            <div class="brand">



                <a href="index.html" class="logo">
                    <!-- <img src="/admin/images/logo.png" alt=""> -->
                    <h4 style="color:white; font-weight: 500">Phòng TRỌ ĐN</h4>
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
                            <span class="badge bg-success"></span>
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
                            <span class="badge bg-important"></span>
                        </a>
                        <ul class="dropdown-menu extended inbox">
                            <li>
                                <p class="red">You have 4 Mails</p>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="photo"><img alt="avatar" src="/admin/images/avatar-mini.jpg"></span>
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
                                    <span class="photo"><img alt="avatar" src="/admin/images/avatar-mini-2.jpg"></span>
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
                                    <span class="photo"><img alt="avatar" src="/admin/images/avatar-mini-3.jpg"></span>
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
                                    <span class="photo"><img alt="avatar" src="/admin/images/avatar-mini.jpg"></span>
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
                            <span class="badge bg-warning"></span>
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
                        <input style="display: none;" type="text" class="form-control search" placeholder=" Search">
                    </li>
                    <!-- user login dropdown start-->
                    <li class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <img alt="" src="{{ Auth::user()->user_details->avatar }}">
                            <!-- <img id="output" for="file" class="avatar" src="{{ Auth::user()->user_details->avatar }}" alt="Avatar"> -->
                            <span class="username">
                                {{ Auth::user()->name }}
                            </span>
                            <b class="caret"></b>
                        </a>

                            <ul class="dropdown-menu extended logout">
                                <li><a href="#"><i class=" fa fa-suitcase"></i>Thông tin</a></li>
                                <li><a href="#"><i class="fa fa-cog"></i> Thiết lập</a></li>
                                <li>
                                    <form  method="post" action="{{ route('logout') }}">
                                        @csrf
                                            <!-- <input type="submit" href="{{ route('logout') }}"><i class="fa fa-key"></i> Đăng xuất -->
                                            </i><input type="submit" name="submit" value="Logout" />
                                    </form>
                                </li>
                            </ul>

                    </li>
                    <!-- user login dropdown end -->
                </ul>
                <!--search & user info end-->
            </div>
        </header>
        <!--header end-->
        <!--sidebar start=========================================================================================-->
        <aside>
            <div id="sidebar" class="nav-collapse">
                <!-- sidebar menu start-->
                <div class="leftside-navigation">
                    <ul class="sidebar-menu" id="nav-accordion">
                        <!-- @if(session('role') == 1)
                        <li>
                            <a href="{{ route('exams.index') }}" class="active">
                                <i class=" fa fa-dashboard"></i>
                                <span>
                                    Quản lí tài khoản
                                </span>
                            </a>
                        </li>
                        @endif -->

                        @if(session('role') == 1)
                        <li class="sub-menu">
                            <a href="{{ route('posts.index') }}">
                                <i class="fa fa-laptop"></i>
                                <span>Quản lí bài đăng</span>
                            </a>
                        </li>
                        @endif

                        @if(session('role') == 2)
                                <li class="sub-menu">
                                    <a href="{{ route('posts.index') }}">
                                        <i class="fa fa-laptop"></i>
                                        <span>Quản lí bài đăng </span>
                                    </a>
                                </li>
                        @endif
                        @if(session('role') == 2)
                                <li class="sub-menu">
                                    <a href="{{ route('profile.index') }}">
                                        <i class="fa fa-laptop"></i>
                                        <span>Cập nhật thông tin  </span>
                                    </a>
                                </li>
                        @endif
                            @if(session('role') == 2 )
                                <li class="sub-menu">
                                    <a href="{{ route('statistic.index') }}">
                                        <i class="fa fa-laptop"></i>
                                        <span>Thống kê bài đăng </span>
                                    </a>
                                </li>
                            @endif
                               @if(session('role') == 1)
                            <li class="sub-menu">
                                <a href="{{ route('exams.index') }}">
                                    <i class="fa fa-book"></i>
                                    <span>Tài khoản</span>
                                </a>
                            </li>
                        @endif
                            @if(session('role') == 1 )
                                <li class="sub-menu">
                                    <a href="{{ route('statistic.index') }}">
                                        <i class="fa fa-laptop"></i>
                                        <span>Thống kê  </span>
                                    </a>
                                </li>
                            @endif
                        <!-- <li class="sub-menu">
                            <a href="javascript:;">
                                <i class="fa fa-book"></i>
                                <span>Sản phẩm</span>
                            </a>
                            <ul class="sub">
                                <li><a href="">Sản phẩm</a></li>
                                
                            </ul>
                        </li> -->



                     



                        <!-- <li>
                            <a>
                                <i class="fa fa-bullhorn"></i>
                                <span>Cấu hình User </span>
                            </a>
                            <ul class="sub">
                                <li><a href="~/Admin/User/Index">User</a></li>
                                <li><a href="~/Admin/User/Create">Thêm mới</a></li>

                            </ul>
                        </li>
                        <li class="sub-menu">
                            <a href="javascript:;">
                                <i class="fa fa-th"></i>
                                <span>Báo cáo</span>
                            </a>
                            <ul class="sub">
                                <li><a href="basic_table.html">Basic Table</a></li>
                                <li><a href="responsive_table.html">Responsive Table</a></li>
                            </ul>
                        </li>
                        <li class="sub-menu">
                            <a href="javascript:;">
                                <i class="fa fa-tasks"></i>
                                <span>Cấu hình</span>
                            </a>
                            <ul class="sub">
                                <li><a href="form_component.html">Form Elements</a></li>
                                <li><a href="advanced_form.html">Advanced Components</a></li>

                            </ul>
                        </li> -->

                    </ul>
                </div>
                <!-- sidebar menu end-->
            </div>
        </aside>
        <!--sidebar end=========================================================================================-->
        <!--main content start-->
        <section id="main-content">
            <section class="wrapper">

                <div class="row">
                    <div class="col-md-12">
                        <!--earning graph start-->
                        <section class="panel">
                            <header class="panel-heading">
                                <label style="color:red"><b> @yield('title_page') </b></label>
                            </header>
                            <div class="">


                                @yield('main')


                            </div>
                        </section>
                    </div>
                </div>
            </section>
        </section>
        <!--main content end-->
        <!--right sidebar start-->
        <!--right sidebar end-->
    </section>
    <script src="/admin/js/jquery.js"></script>
    <script src="/admin/js/jquery-ui/jquery-ui-1.10.1.custom.min.js"></script>
    <script src="/admin/bs3/js/bootstrap.min.js"></script>
    <script src="/admin/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="/admin/js/jquery.nicescroll.js"></script>
    <script src="/admin/js/scripts.js"></script>
    <script src="/admin/js/plugin/ckfinder/ckfinder.js"></script>

    <script src="/admin/js/simple.money.format.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.26.1/axios.min.js" integrity="sha512-bPh3uwgU5qEMipS/VOmRqynnMXGGSRv+72H/N260MQeXZIK4PG48401Bsby9Nq5P5fz7hy5UGNmC/W1Z51h2GQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <script src="/admin/js/api_map.js"></script>
</body>
</html>
