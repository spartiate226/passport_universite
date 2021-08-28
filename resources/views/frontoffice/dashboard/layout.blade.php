<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta name="author" content="TechyDevs">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>PASSEPORT E-LEARNING</title>

    <!-- Google fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Mukta:wght@200;300;400;500;600;700;800&display=swap" rel="stylesheet">

    <!-- Favicon -->
    <link rel="icon" sizes="16x16" href="images/favicon.png">

    <!-- inject:css -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/line-awesome.css')}}">
    <link rel="stylesheet" href="{{asset('css/animate.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap-select.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('css/fancybox.css')}}">
    <link rel="stylesheet" href="{{asset('css/jquery.filer.css')}}">
    <link rel="stylesheet" href="{{asset('css/tooltipster.bundle.css')}}">
    <link rel="stylesheet" href="{{asset('css/jqvmap.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <!-- end inject -->
    <style>
        .dashboard-sidebar .dashboard-nav-container .side-menu-ul .sidenav__item.page-active, .dashboard-sidebar .dashboard-nav-container .side-menu-ul .sidenav__item.active {
    background-color: blue;
},
.dashboard-sidebar .dashboard-nav-container .side-menu-ul .sidenav__item:hover > a {
    color: blue!important;
}
    </style>
</head>
<body>

<!-- start cssload-loader -->

<!-- end cssload-loader -->

<!--======================================
        START HEADER AREA
    ======================================-->
<header class="header-menu-area dashboard-header">
    <div class="header-menu-content dashboard-menu-content">
        <div class="container-fluid">
            <div class="main-menu-content">
                <div class="row align-items-center" style="background-color: blue">
                    <div class="col-lg-2">
                        {{-- <div class="logo-box">
                            <a href="index.html" class="logo"><img src="images/logo.png" alt="logo"></a>
                            <div class="menu-toggler">
                                <i class="la la-bars"></i>
                                <i class="la la-times"></i>
                            </div>
                        </div> --}}
                    </div><!-- end col-lg-2 -->
                    <div class="col-lg-10">
                        <div class="menu-wrapper">
                            <div class="contact-form-action mr-auto">
                                {{-- <form method="post">
                                    <div class="input-box">
                                        <div class="form-group">
                                            <input class="form-control" type="text" name="search" placeholder="Search for anything">
                                            <span class="la la-search search-icon"></span>
                                        </div>
                                    </div>
                                </form> --}}
                            </div>
                            <nav class="main-menu">
                                <h3 class="text-light">Passeport e-learning</h3>
                            </nav><!-- end main-menu -->
                            </div>
                            </div><!-- end logo-right-button -->

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- end menu-wrapper -->
                    </div><!-- end col-lg-10 -->
                </div><!-- end row -->
            </div>
        </div><!-- end container-fluid -->
    </div><!-- end header-menu-content -->
</header><!-- end header-menu-area -->
<!--======================================
        END HEADER AREA
======================================-->

<!-- ================================
    START DASHBOARD AREA
================================= -->
<section class="dashboard-area">
    <div class="dashboard-sidebar">
        <div class="dashboard-nav-trigger">
            <div class="dashboard-nav-trigger-btn">
                <i class="la la-bars"></i> Dashboard Nav
            </div>
        </div>
        <div class="dashboard-nav-container">
            <div class="humburger-menu">
                <div class="humburger-menu-lines side-menu-close"></div><!-- end humburger-menu-lines -->
            </div><!-- end humburger-menu -->
            <div class="side-menu-wrap">
                <ul class="side-menu-ul">
                    <li class="sidenav__item page-active"><a href="{{url('page/dashboard')}}"><i class="la la-dashboard"></i> Tableau de bord</a></li>
                    <li class="sidenav__item"><a href="{{url('page/profil')}}"><i class="la la-user"></i>Mon Profile</a></li>
                    <li class="sidenav__item"><a href="{{url('page/quizs')}}"><i class="la la-file-video-o"></i>Quizs</a></li>
                    <li class="sidenav__item"><a href="{{url('page/enrolled')}}"><i class="la la-file-video-o"></i>Mes
                        Quiz enrollées</a></li>
                    <li class="sidenav__item"><a href="{{url('page/resultats')}}"><i class="la la-file-video-o"></i>Mes Resultats</a></li>
                    <li class="sidenav__item"><a href="{{url('page/logout')}}"><i class="la la-bolt"></i>Deconnexion</a></li>
                </ul>
            </div><!-- end side-menu-wrap -->
        </div>
    </div><!-- end dashboard-sidebar -->
    <div class="dashboard-content-wrap">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-content dashboard-bread-content d-flex align-items-center justify-content-between">
                        <div class="user-bread-content d-flex align-items-center">
                            <div class="section-heading">
                                <h2 class="section__title font-size-30">{{Auth::guard('Visitor')->user()->nom.' '.Auth::guard('Visitor')->user()->prenom}}</h2>
                            </div>
                        </div>
                    </div>
                </div><!-- end col-lg-12 -->
            </div><!-- end row -->
            <div class="row mt-5">
                <div class="col-lg-12">
                    <div class="section-block"></div>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-lg-12">
                    <h3 class="widget-title">Tableau de bord</h3>
                </div>
            </div>
            @yield('content');


<!-- template js files -->
<script src="{{asset('js/jquery-3.4.1.min.js')}}"></script>
<script src="{{asset('js/popper.min.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/bootstrap-select.min.js')}}"></script>
<script src="{{asset('js/owl.carousel.min.js')}}"></script>
<script src="{{asset('js/magnific-popup.min.js')}}"></script>
<script src="{{asset('js/isotope.js')}}"></script>
<script src="{{asset('js/jquery.counterup.min.js')}}"></script>
<script src="{{asset('js/fancybox.js')}}"></script>
<script src="{{asset('js/wow.js')}}"></script>
<script src="{{asset('js/chart.js')}}"></script>
<script src="{{asset('js/doughnut-chart.js')}}"></script>
<script src="{{asset('js/bar-chart.js')}}"></script>
<script src="{{asset('js/line-chart.js')}}"></script>
<script src="{{asset('js/smooth-scrolling.js')}}"></script>
<script src="{{asset('js/tooltipster.bundle.min.js')}}"></script>
<script src="{{asset('js/jquery.filer.min.js')}}"></script>
<script src="{{asset('js/jquery.vmap.js')}}"></script>
<script src="{{asset('js/jquery.vmap.world.js')}}"></script>
<script src="{{asset('js/jquery.vmap.sampledata.js')}}"></script>
<script src="{{asset('js/jquery.vmap-script.js')}}"></script>
<script src="{{asset('js/progress-bar.js')}}"></script>
<script src="{{asset('js/date-time-picker.js')}}"></script>
<script src="{{asset('js/emojionearea.min.js')}}"></script>
<script src="{{asset('js/animated-skills.js')}}"></script>
<script src="{{asset('js/main.js')}}"></script>
</body>
</html>
