<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta name="author" content="TechyDevs">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Passeport Elearning</title>

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
    <link rel="stylesheet" href="{{asset('css/fancybox.css')}}">
    <link rel="stylesheet" href="{{asset('css/tooltipster.bundle.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('css.css')}}">
    @yield('style')
    <!-- end inject -->
</head>
<body>
<header class="header-menu-area">
    <div class="header-top">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="header-widget">
                        <ul class="header-action-list">
                            <li><a href="#"><span class="la la-phone mr-2"></span></a> </li>
                            <li><a href="#"><span class="la la-envelope-o mr-2"></span>contact@passeportelearning.com</a></li>
                        </ul>
                    </div><!-- end header-widget -->
                </div><!-- end col-lg-6 -->
                <div class="col-lg-6">
                    <div class="header-widget d-flex align-items-center justify-content-end">
                        <div class="header-right-info">
                            <ul class="header-social-profile">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                        </div><!-- end header-right-info -->
                        <div class="header-right-info">
                            {{-- <div class="shop-cart">
                                <ul>
                                    <li>
                                        <p class="shop-cart-btn d-flex align-items-center">
                                            <i class="la la-shopping-cart"></i>
                                            <span class="product-count ml-1">2</span>
                                        </p>
                                        <ul class="cart-dropdown-menu">
                                            <li>
                                                <a href="shopping-cart.html" class="cart-link">
                                                    <img src="images/small-img.jpg" alt="product">
                                                </a>
                                                <p class="cart-info">
                                                    <a href="shopping-cart.html">
                                                        The Complete Financial Analyst Course 2019
                                                    </a>
                                                    <span class="cart__author">Josh Purdila</span>
                                                    <span class="cart__price">
                                                           $22.99 <span class="before-price">$55.99</span>
                                                    </span>
                                                </p>
                                            </li>
                                            <li>
                                                <a href="shopping-cart.html" class="cart-link">
                                                    <img src="images/small-img.jpg" alt="product">
                                                </a>
                                                <p class="cart-info">
                                                    <a href="shopping-cart.html">
                                                        The Complete Financial Analyst Course 2019
                                                    </a>
                                                    <span class="cart__author">Josh Purdila</span>
                                                    <span class="cart__price">
                                                           $22.99 <span class="before-price">$55.99</span>
                                                    </span>
                                                </p>
                                            </li>
                                            <li>
                                                <p class="cart-total">Total: $44.99<span class="before-price">$110.99</span></p>
                                            </li>
                                            <li>
                                                <a class="theme-btn w-100 text-center" href="shopping-cart.html">go to Cart</a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div><!-- end shop-cart --> --}}
                        </div><!-- end header-right-info -->
                        <div class="header-right-info">
                            @if (Auth::guard('Visitor')->check())
                            <ul class="header-action-list">
                                <li><a href="{{url('page/dashboard')}}">{{Auth::guard('Visitor')->user()->pseudonyme}}</a></li>
                                <li>/</li>
                                <li><a href="{{url('page/logout')}}">Deconnexion</a></li>
                            </ul>
                            @else
                            <ul class="header-action-list">
                                <li><a href="{{url('page/connexion')}}">Se connecter</a></li>
                                <li>ou</li>
                                <li><a href="{{url('page/inscription')}}">S'inscrire</a></li>
                            </ul>
                            @endif
                        </div><!-- end header-right-info -->
                    </div><!-- end header-widget -->
                </div><!-- end col-lg-6 -->
            </div><!-- end row -->
        </div><!-- end container-fluid -->
    </div><!-- end header-top -->
    <div class="header-menu-content">
        <div class="container-fluid">
            <div class="main-menu-content">
                <div class="row align-items-center">
                    <div class="col-lg-2">
                        <div class="logo-box">
                            <a href="{{url('page/accuiel')}}" class="logo"><img src="" alt="logo"></a>
                            <div class="menu-toggler">
                                <i class="la la-bars"></i>
                                <i class="la la-times"></i>
                            </div>
                        </div>
                    </div><!-- end col-lg-2 -->
                    <div class="col-lg-10">
                        <div class="menu-wrapper">
{{--                            <div class="menu-category">--}}
{{--                                <ul>--}}
{{--                                    <li>--}}
{{--                                        <a href="#"><i class="la la-th-large mr-1"></i>Concours</a>--}}
{{--                                        <ul class="cat-dropdown-menu">--}}
{{--                                            <li>--}}
{{--                                                <a href="course-grid.html">Concours directs <i class="la la-angle-right"></i></a>--}}
{{--                                            </li>--}}
{{--                                            <li>--}}
{{--                                                <a href="course-grid.html">Concours professionels <i class="la la-angle-right"></i></a>--}}
{{--                                            </li>--}}
{{--                                            <li>--}}
{{--                                                <a href="course-grid.html"><i class="la la-angle-right"></i></a>--}}
{{--                                            </li>--}}
{{--                                        </ul>--}}
{{--                                    </li>--}}
{{--                                </ul>--}}
{{--                            </div><!-- end menu-category -->--}}
                            <div class="contact-form-action">
                                <form method="post">
                                    <div class="input-box">
                                        <div class="form-group">
                                            <input class="form-control" type="text" name="search" placeholder="Quizs,Cours,Documents">
                                            <span class="la la-search search-icon"></span>
                                        </div>
                                    </div><!-- end input-box -->
                                </form>
                            </div><!-- end contact-form-action -->
                            <nav class="main-menu">
                                <ul>
                                    <li>
                                        <a href="{{url('page/accueil')}}">Accueil</a>
                                    </li>
                                    <li>
                                        <a href="{{url('page/quizs')}}">Quiz Concours</a>
                                        {{-- <ul class="dropdown-menu-item">
                                            <li><a href="course-grid.html">course grid</a></li>
                                            <li><a href="course-details.html">course details</a></li>
                                            <li><a href="lesson-details.html">lesson details</a></li>
                                            <li><a href="my-courses.html">My courses</a></li>
                                        </ul> --}}
                                    </li>
{{--                                    <li>--}}
{{--                                        <a href="#">Formations & Docs</a>--}}
{{--                                        <ul class="dropdown-menu-item">--}}
{{--                                            <li><a href="#">Formations</a></li>--}}
{{--                                            <li><a href="#">Documents</a></li>--}}
{{--                                        </ul>--}}
{{--                                    </li>--}}
                                    {{-- <li>
                                        <a href="#">blog</a>
                                        <ul class="dropdown-menu-item">
                                            <li><a href="blog-full-width.html">blog full width </a></li>
                                            <li><a href="blog-grid.html">blog grid</a></li>
                                            <li><a href="blog-left-sidebar.html">blog left sidebar</a></li>
                                            <li><a href="blog-right-sidebar.html">blog right sidebar</a></li>
                                            <li><a href="blog-single.html">blog detail</a></li>
                                        </ul>
                                    </li> --}}
                                    <li><a href="#">contact</a></li>
                                </ul><!-- end ul -->
                            </nav><!-- end main-menu -->
                            {{-- <div class="logo-right-button">
                                <a href="admission.html" class="theme-btn">admission</a>
                            </div> --}}
                        </div><!-- end menu-wrapper -->
                    </div><!-- end col-lg-10 -->
                </div><!-- end row -->
            </div>
        </div><!-- end container-fluid -->
    </div><!-- end header-menu-content -->
</header><!-- end header-menu-area -->
@yield('contenue')

<section class="footer-area section-bg-2 padding-top-100px padding-bottom-40px">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 column-td-half">
                <div class="footer-widget">
                    <a href="index.html">
                        <img src="images/logo2.png" alt="footer logo" class="footer__logo">
                    </a>
                    <ul class="list-items footer-address">
                        <li><a href="tel:+1631237884">+163 123 7884</a></li>
                        <li><a href="mailto:support@wbsite.com" class="mail">support@passeportelearning.com</a></li>
                        <li></li>
                    </ul>
                    <h3 class="widget-title font-size-17 mt-4">Retrouvez nous sur :</h3>
                    <ul class="social-profile">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                    </ul>
                </div><!-- end footer-widget -->
            </div><!-- end col-lg-3 -->
            <div class="col-lg-4 column-td-half">
                <div class="footer-widget">
                    <h3 class="widget-title">Entreprise</h3>
                    <span class="section-divider"></span>
                    <ul class="list-items">
                        <li><a href="#">A propos</a></li>
                        <li><a href="#">Nous contecter</a></li>
                    </ul>
                </div><!-- end footer-widget -->
            </div><!-- end col-lg-3 -->
            <div class="col-lg-4 column-td-half">
                <div class="footer-widget">
                    <h3 class="widget-title">Concours</h3>
                    <span class="section-divider"></span>
                    <ul class="list-items">
                        <li><a href="#">Concours directs</a></li>
                        <li><a href="#">Concours professionels</a></li>
                    </ul>
                </div><!-- end footer-widget -->
            </div><!-- end col-lg-3 -->
{{--            <div class="col-lg-3 column-td-half">--}}
{{--                <div class="footer-widget">--}}
{{--                    <h3 class="widget-title">Telecharger l'application Mobile</h3>--}}
{{--                    <span class="section-divider"></span>--}}
{{--                    <ul class="btn-box">--}}
{{--                        <li>--}}
{{--                            <a href="#" class="theme-btn">--}}
{{--                                <i class="la la-apple icon-element"></i>--}}
{{--                                <span class="app-titles">--}}
{{--                                    <span class="app__subtitle">Télecharger sur</span>--}}
{{--                                    <span class="app__title">App Store</span>--}}
{{--                                </span>--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                        <li>--}}
{{--                            <a href="#" class="theme-btn">--}}
{{--                                <i class="la la-android icon-element"></i>--}}
{{--                                <span class="app-titles">--}}
{{--                                    <span class="app__subtitle">Télecharger sur</span>--}}
{{--                                    <span class="app__title">Google Play</span>--}}
{{--                                </span>--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                    </ul>--}}
{{--                </div><!-- end footer-widget -->--}}
{{--            </div><!-- end col-lg-3 -->--}}
        </div><!-- end row -->
        <div class="copyright-content">
            <div class="row align-items-center">
                <div class="col-lg-10">
                    <p class="copy__desc">&copy; {{date('Y')}} Passeport elearning. All Rights Reserved. by <a href="https:passeportelearning.com">ev</a></p>
                </div>
{{--                <div class="col-lg-2">--}}
{{--                    <div class="sort-ordering">--}}
{{--                        <select class="sort-ordering-select">--}}
{{--                            <option value="1">English</option>--}}
{{--                            <option value="2">Deutsch</option>--}}
{{--                            <option value="3">Español</option>--}}
{{--                            <option value="4">Français</option>--}}
{{--                            <option value="5">Bahasa Indonesia</option>--}}
{{--                            <option value="6">Bangla</option>--}}
{{--                            <option value="7">日本語</option>--}}
{{--                            <option value="8">한국어</option>--}}
{{--                            <option value="9">Nederlands</option>--}}
{{--                            <option value="10">Polski</option>--}}
{{--                            <option value="11">Português</option>--}}
{{--                            <option value="12">Română</option>--}}
{{--                            <option value="13">Русский</option>--}}
{{--                            <option value="14">ภาษาไทย</option>--}}
{{--                            <option value="15">Türkçe</option>--}}
{{--                            <option value="16">中文(简体)</option>--}}
{{--                            <option value="17">中文(繁體)</option>--}}
{{--                            <option value="17">Hindi</option>--}}
{{--                        </select>--}}
{{--                    </div>--}}
{{--                </div>--}}
            </div><!-- end row -->
        </div><!-- end copyright-content -->
    </div><!-- end container -->
</section><!-- end footer-area -->
<!-- ================================
          END FOOTER AREA
================================= -->

<!-- start scroll top -->
<div id="scroll-top">
    <i class="fa fa-angle-up" title="Go top"></i>
</div>
<!-- end scroll top -->

<div class="tooltip_templates">
    <div id="tooltip_content_1">
        <div class="card-item">
            <div class="card-content">
                <p class="card__author">
                    By <a href="teacher-detail.html">alex smith</a>
                </p>
                <h3 class="card__title">
                    <a href="course-details.html">WordPress for Beginners – Master WordPress</a>
                </h3>
                <p class="card__label">
                    <span class="card__label-text mr-1">BESTSELLER</span>
                    <span class="mr-1">in</span><a href="#" class="mr-1">WordPress</a> <span>| Development</span>
                </p>
                <div class="rating-wrap d-flex mt-2 mb-3">
                    <ul class="review-stars">
                        <li><span class="la la-star"></span></li>
                        <li><span class="la la-star"></span></li>
                        <li><span class="la la-star"></span></li>
                        <li><span class="la la-star"></span></li>
                        <li><span class="la la-star-o"></span></li>
                    </ul>
                    <span class="star-rating-wrap">
                        <span class="star__rating">4.4</span>
                        <span class="star__count">(20)</span>
                    </span>
                </div><!-- end rating-wrap -->
                <div class="card-para mb-3">
                    <p class="font-size-14 line-height-24">
                        Learn WordPress like a Professional! Start from the basics and go all the way to creating your own applications and website!
                    </p>
                </div>
                <ul class="list-items mb-3 font-size-14">
                    <li>There are many variations of passages</li>
                    <li>Lorem Ipsum available</li>
                    <li>Suffered alteration in some form</li>
                </ul>
                <div class="card-action">
                    <ul class="card-duration d-flex justify-content-between align-items-center">
                        <li><span class="meta__date"><i class="la la-play-circle"></i> 45 Classes</span></li>
                        <li><span class="meta__date"><i class="la la-clock-o"></i> 3 hours 20 min</span></li>
                    </ul>
                </div><!-- end card-action -->
                <div class="btn-box w-100 text-center mb-3">
                    <a href="course-details.html" class="theme-btn d-block">Preview this course</a>
                </div>
                <div class="card-price-wrap d-flex justify-content-between align-items-center">
                    <span class="card__price">$58.00</span>
                    <a href="#" class="text-btn">Add to cart</a>
                </div><!-- end card-price-wrap -->
            </div><!-- end card-content -->
        </div><!-- end card-item -->
    </div>
</div><!-- end tooltip_templates -->
<!-- template js files -->
<script src="{{asset('js/jquery-3.4.1.min.js')}}"></script>
<script src="{{asset('js/popper.min.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/bootstrap-select.min.js')}}"></script>
<script src="{{asset('js/owl.carousel.min.js')}}"></script>
<script src="{{asset('js/isotope.js')}}"></script>
<script src="{{asset('js/waypoint.min.js')}}"></script>
<script src="{{asset('js/jquery.counterup.min.js')}}"></script>
<script src="{{asset('js/particles.min.js')}}"></script>
<script src="{{asset('js/particlesRun.js')}}"></script>
<script src="{{asset('js/fancybox.js')}}"></script>
<script src="{{asset('js/wow.js')}}"></script>
<script src="{{asset('js/date-time-picker.js')}}"></script>
<script src="{{asset('js/jquery.filer.min.js')}}"></script>
<script src="{{asset('js/emojionearea.min.js')}}"></script>
<script src="{{asset('js/smooth-scrolling.js')}}"></script>
<script src="{{asset('js/tooltipster.bundle.min.js')}}"></script>
<script src="{{asset('js/main.js')}}"></script>
</body>
</html>
