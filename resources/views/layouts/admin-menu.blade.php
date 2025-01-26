<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords"
        content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 5 admin, bootstrap 5, css3 dashboard, bootstrap 5 dashboard, AdminWrap lite admin bootstrap 5 dashboard, frontend, responsive bootstrap 5 admin template, AdminWrap lite design, AdminWrap lite dashboard bootstrap 5 dashboard template">
    <meta name="description"
        content="AdminWrap Lite is powerful and clean admin dashboard template, inpired from Bootstrap Framework">
    <meta name="robots" content="noindex,nofollow">
    <title>Steem Crypto Currency Investment</title>
    <link rel="canonical" href="https://www.wrappixel.com/templates/adminwrap-lite/" />
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/favicon.png">
    <!-- Bootstrap Core CSS -->
    <link href="/dashboard/assets/node_modules/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="/dashboard/assets/node_modules/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet">
    <!-- This page CSS -->
    <!-- chartist CSS -->
    <link href="/dashboard/assets/node_modules/morrisjs/morris.css" rel="stylesheet">
    <!--c3 CSS -->
    <link href="/dashboard/assets/node_modules/c3-master/c3.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="/dashboard/css/style.css" rel="stylesheet">
    <!-- Dashboard 1 Page CSS -->
    <link href="/dashboard/css/pages/dashboard1.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9.15.1/dist/sweetalert2.all.min.js"></script>

    <!-- You can change the theme colors from here -->
    <link href="/dashboard/css/colors/default.css" id="theme" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body class="fix-header fix-sidebar card-no-border">
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="loader">
            <div class="loader__figure"></div>
            <p class="loader__label">Loading....</p>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar">
            <nav class="navbar top-navbar navbar-expand-md navbar-light">
                <!-- ============================================================== -->
                <!-- Logo -->
                <!-- ============================================================== -->
                <div class="navbar-header">
                    <a class="navbar-brand" href="/home">
                        <!-- Logo icon --><b>
                            <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                            <!-- Dark Logo icon -->
                            <img src="/logo22.png" alt="homepage" class="dark-logo" height="50" />
                            <!-- Light Logo icon -->
                            <img src="/dashboard/assets/images/logo-light-icon.png" alt="homepage" class="light-logo" />
                        </b>
                        <!--End Logo icon -->
                        <!-- Logo text --><span>
                            <!-- dark Logo text -->
                            {{-- <img src="/dashboard/assets/images/logo-text.png" alt="homepage" class="dark-logo" /> --}}
                            <!-- Light Logo text -->
                            {{-- <img src="/dashboard/assets/images/logo-light-text.png" class="light-logo" alt="homepage" /></span> --}}
                    </a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse">
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav me-auto">
                        <li class="nav-item"> <a class="nav-link nav-toggler hidden-md-up waves-effect waves-dark"
                                href="javascript:void(0)"><i class="fa fa-bars"></i></a> </li>
                        <!-- ============================================================== -->
                        <!-- Search -->
                        <!-- ============================================================== -->
                        <li class="nav-item hidden-xs-down search-box"> <a
                                class="nav-link hidden-sm-down waves-effect waves-dark" href="javascript:void(0)"><i
                                    class="fa fa-search"></i></a>
                            <form class="app-search">
                                <input type="text" class="form-control" placeholder="Search & enter"> <a
                                    class="srh-btn"><i class="fa fa-times"></i></a></form>
                        </li>
                    </ul>
                    <!-- ============================================================== -->
                    <!-- User profile and search -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav my-lg-0">
                        <!-- ============================================================== -->
                        <!-- Profile -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown u-pro">
                            <a class="nav-link dropdown-toggle waves-effect waves-dark profile-pic" href="#"
                                id="navbarDropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img
                                    src="{{auth()->user()->photo ? auth()->user()->photo :'/assets/img/undraw_profile_pic_ic-5-t.svg'}} " alt="user" class="" /> <span
                                    class="hidden-md-down">{{auth()->user()->name}} &nbsp;</span> </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown"></ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li> <a class="waves-effect waves-dark" href="/home" aria-expanded="false"><i
                                    class="fa fa-tachometer"></i><span class="hide-menu">Dashboard</span></a>
                        </li>
                        <li> <a class="waves-effect waves-dark" href="/profile" aria-expanded="false"><i
                                    class="fa fa-user-circle-o"></i><span class="hide-menu">Profile</span></a>
                        </li>
                        <li> <a class="waves-effect waves-dark" href="/admin/users" aria-expanded="false"><i
                                    class="fa fa-table"></i><span class="hide-menu">All Users</span></a>
                        </li>
                        <li> <a class="waves-effect waves-dark" href="/admin/investments" aria-expanded="false"><i
                                    class="fa fa-smile-o"></i><span class="hide-menu">Deposite Request</span></a>
                        </li>
                        {{-- <li> <a class="waves-effect waves-dark" href="deposit" aria-expanded="false"><i
                                    class="fa fa-globe"></i><span class="hide-menu">Make Deposits</span></a>
                        </li>
                        <li> <a class="waves-effect waves-dark" href="/trade-history" aria-expanded="false"><i
                                    class="fa fa-bookmark-o"></i><span class="hide-menu">Trade History</span></a>
                        </li>
                        <li> <a class="waves-effect waves-dark" href="/investments-plan" aria-expanded="false"><i
                                    class="fa fa-question-circle"></i><span class="hide-menu">Investment Plan</span></a>
                        </li>
                        <li> <a class="waves-effect waves-dark" href="/withdrawal" aria-expanded="false"><i
                            class="fa fa-question-circle"></i><span class="hide-menu">Withdrawal</span></a>
                </li> --}}
                <li> <a class="waves-effect waves-dark" href="/support" aria-expanded="false"><i
                    class="fa fa-question-circle"></i><span class="hide-menu">Our Support</span></a>
        </li>
                    </ul>
                    <div class="text-center mt-4">
                        <a  href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();"
                            class="btn waves-effect waves-light btn-info -md-down text-white"> Logout</a>
                    </div>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>

        @yield('content')


        <footer class="footer"> © {{date('Y')}}   <a href="/">steem.com</a> All Right Reserved</footer>
        <!-- ============================================================== -->
        <!-- End footer -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Page wrapper  -->
    <!-- ============================================================== -->
</div>
<!-- ============================================================== -->
<!-- End Wrapper -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- All Jquery -->
<!-- ============================================================== -->
<script src="/dashboard/assets/node_modules/jquery/jquery.min.js"></script>
<!-- Bootstrap popper Core JavaScript -->
<script src="/dashboard/assets/node_modules/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- slimscrollbar scrollbar JavaScript -->
<script src="/dashboard/js/perfect-scrollbar.jquery.min.js"></script>
<!--Wave Effects -->
<script src="/dashboard/js/waves.js"></script>
<!--Menu sidebar -->
<script src="/dashboard/js/sidebarmenu.js"></script>
<!--Custom JavaScript -->
<script src="/dashboard/js/custom.min.js"></script>
<!-- ============================================================== -->
<!-- This page plugins -->
<!-- ============================================================== -->
<!--morris JavaScript -->
<script src="/dashboard/assets/node_modules/raphael/raphael-min.js"></script>
<script src="/dashboard/assets/node_modules/morrisjs/morris.min.js"></script>
<!--c3 JavaScript -->
<script src="/dashboard/assets/node_modules/d3/d3.min.js"></script>
<script src="/dashboard/assets/node_modules/c3-master/c3.min.js"></script>
<!-- Chart JS -->
<script src="/dashboard/js/dashboard1.js"></script>
</body>

</html>


@if(session()->get('success'))
<script>
Swal.fire({
icon: 'success',
title: 'Success!',
text: '{{ session()->get('success') }}'

})
</script>
@endif
