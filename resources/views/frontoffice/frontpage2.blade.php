@extends('layout')
@section('style')
    <style>
        .slide-bg1{
            background-image: url({{asset('images/seven-shooter-hPKTYwJ4FUo-unsplash.jpg')}})!important;
        }
        .slide-bg2{
            background-image: url({{asset('images/andre-hunter-AQ908FfdAMw-unsplash.jpg')}})!important;
        }
        .slide-bg3{
            background-image: url({{asset('images/4691414_L.jpg')}})!important;
        }
        .get-start-area:before {
            background-color: #007bff!important;
        }
    </style>
@endsection
@section('contenue')
<!-- start cssload-loader -->
{{-- <div class="preloader">
    <div class="loader">
        <svg class="spinner" viewBox="0 0 50 50">
            <circle class="path" cx="25" cy="25" r="20" fill="none" stroke-width="5"></circle>
        </svg>
    </div>
</div> --}}
<!-- end cssload-loader -->

<!--======================================
        START HEADER AREA
    ======================================-->



<!--================================
         START SLIDER AREA
=================================-->
<section class="slider-area">
    <div class="hero-slide owl-dot-and-nav">
        <div class="single-slide-item slide-bg1">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-heading">
                            <h2 class="section__title text-white">Formez-vous partout et <br>  à tout moment </h2>
                        </div>
                        <div class="btn-box d-flex align-items-center">
                            <a href="{{url('page/inscription')}}" class="theme-btn theme-btn-hover-light">Rejoignez nous</a>
                        </div>
                    </div><!-- col-lg-12 -->
                </div><!-- row -->
            </div><!-- container -->
        </div><!-- end single-slide-item -->
        <div class="single-slide-item slide-bg2">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-heading text-center">
                            <h2 class="section__title text-white">Preparez vos concours <br> en toute liberté.</h2>
                        </div>
                        <div class="btn-box d-flex align-items-center justify-content-center">
                            <a href="{{url('page/inscription')}}" class="theme-btn theme-btn-hover-light">Commencer</a>
                        </div>
                    </div><!-- col-lg-12 -->
                </div><!-- row -->
            </div><!-- container -->
        </div><!-- end single-slide-item -->
        <div class="single-slide-item slide-bg3">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-heading text-right">
                            <h2 class="section__title text-white">Liberté d'apprendre <br>sans limite.</h2>
                        </div>
                        <div class="btn-box hero-btn-right d-flex align-items-center justify-content-end">
                            <a href="{{url('page/inscription')}}" class="theme-btn theme-btn-hover-light">S'inscrir</a>
                        </div>
                    </div><!-- col-lg-12 -->
                </div><!-- row -->
            </div><!-- container -->
        </div><!-- end single-slide-item -->
    </div><!-- end hero-slide -->
</section><!-- end slider-area -->

<section class="feature-area text-center padding-bottom-90px">
    <div class="container">
        <div class="feature-content-wrap">
            <div class="row">
                <div class="col-lg-4 column-td-half">
                    <div class="info-box info-box-color-1">
                        <div class="hover-overlay"></div>
                        <div class="icon-element mx-auto">
                            <i class="la la-question"></i>
                        </div>
                        <h3 class="info__title">Quizs Concours</h3>
                        <a href="{{url('page/quizs')}}" class="text-btn">Voir les quizs</a>
                    </div><!-- end info-box -->
                </div><!-- end col-lg-3 -->
                <div class="col-lg-4 column-td-half">
                    <div class="info-box info-box-color-2">
                        <div class="hover-overlay"></div>
                        <div class="icon-element mx-auto">
                            <i class="la la-graduation-cap"></i>
                        </div>
                        <h3 class="info__title">Formations</h3>
{{--                        <a href="#" class="text-btn">plus d'infos</a>--}}
                    </div><!-- end info-box -->
                </div><!-- end col-lg-3 -->
                <div class="col-lg-4 column-td-half">
                    <div class="info-box info-box-color-3">
                        <div class="hover-overlay"></div>
                        <div class="icon-element mx-auto">
                            <i class="la la-book"></i>
                        </div>
                        <h3 class="info__title">Documentation</h3>

{{--                        <a href="#" class="text-btn">plus d'infos</a>--}}
                    </div><!-- end info-box -->
                </div><!-- end col-lg-3 -->
            </div><!-- end row -->
        </div>
    </div><!-- end container -->
</section><!-- end feature-area -->






<section class="get-start-area text-center padding-top-120px padding-bottom-110px overflow-hidden">
    <div id="perticles-js"></div>
    <div class="box-icons">
        <div class="box-one"></div>
        <div class="box-two"></div>
        <div class="box-three"></div>
        <div class="box-four"></div>
    </div><!-- end box-icons -->
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="get-start-content">
                    <div class="section-heading">
                        <h5 class="section__meta section__metalight">Apprendre en ligne</h5>
                        <h2 class="section__title text-white">Améliorez vos competences avec <br> avec les meilleurs quiz concoures et formations</h2>
                        <span class="section-divider section-divider-light"></span>
                    </div><!-- end section-heading -->
                    <div class="btn-box margin-top-20px">
                        <a href="{{url('page/inscription')}}" class="theme-btn theme-btn-hover-light">Creer un compte</a>
                    </div>
                </div><!-- end get-start-content -->
            </div><!-- end col-lg-12 -->
        </div><!-- end row -->
    </div><!-- end container -->
    <div class="box-icons2">
        <div class="box-one"></div>
        <div class="box-two"></div>
        <div class="box-three"></div>
        <div class="box-four"></div>
        <div class="box-five"></div>
    </div><!-- end box-icons2 -->
</section><!-- end get-start-area -->
<!--======================================
        END GET-START AREA
======================================-->

<!--======================================
        START BENEFIT AREA
======================================-->
<section class="benefit-area padding-bottom-180px overflow-hidden">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="benefit-heading padding-top-120px">
                    <div class="section-heading">
                        <h5 class="section__meta">Qui somes nous?</h5>
                        <h2 class="section__title">A propos de Passeport E-learning</h2>
                        <span class="section-divider"></span>
                        <p class="section__desc">
                            Smply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                            the industry’s when an unknown printerit to make a type specimen book
                            Pellentesque tellus arcu
                        </p>
                    </div>
                    <div class="btn-box">
                        <a href="about.html" class="theme-btn">Lire plus</a>
                    </div>
                </div><!-- end benefit-heading -->
            </div><!-- end col-lg-6 -->
            <div class="col-lg-6">
                <div class="img-box">
                    <img src="images/img13.jpg" alt="">
                    <img src="images/img14.jpg" alt="">
                </div>
            </div>
        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end benefit-area -->
<!--======================================
        END BENEFIT AREA
======================================-->

{{-- <div class="section-block"></div>

<!--======================================
        START REGISTER AREA
======================================-->
<section class="register-area section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <div class="register-form">
                    <div class="contact-form-action">
                        <h3 class="widget-title">Receive Free Courses</h3>
                        <form method="post">
                            <div class="input-box">
                                <label class="label-text">Name<span class="primary-color-2 ml-1">*</span></label>
                                <div class="form-group">
                                    <input class="form-control" type="text" name="name" placeholder="Your Name">
                                    <span class="la la-user input-icon"></span>
                                </div>
                            </div><!-- end input-box -->
                            <div class="input-box">
                                <label class="label-text">Email<span class="primary-color-2 ml-1">*</span></label>
                                <div class="form-group">
                                    <input class="form-control" type="email" name="email" placeholder="Email Address">
                                    <span class="la la-envelope input-icon"></span>
                                </div>
                            </div><!-- end input-box -->
                            <div class="input-box">
                                <label class="label-text">Phone Number<span class="primary-color-2 ml-1">*</span></label>
                                <div class="form-group">
                                    <input class="form-control" type="text" name="phone" placeholder="Phone Number">
                                    <span class="la la-phone input-icon"></span>
                                </div>
                            </div><!-- end input-box -->
                            <div class="input-box">
                                <label class="label-text">Subject<span class="primary-color-2 ml-1">*</span></label>
                                <div class="form-group">
                                    <input class="form-control" type="text" name="subject" placeholder="Subject">
                                    <span class="la la-book input-icon"></span>
                                </div>
                            </div><!-- end input-box -->
                            <div class="btn-box">
                                <button class="theme-btn" type="submit">apply now</button>
                            </div><!-- end btn-box -->
                        </form>
                    </div><!-- end contact-form-action -->
                </div>
            </div><!-- end col-lg-5 -->
            <div class="col-lg-7">
                <div class="register-heading">
                    <div class="section-heading">
                        <h5 class="section__meta">register</h5>
                        <h2 class="section__title">Get ahead with Learning Paths. Stay Sharp.</h2>
                        <span class="section-divider"></span>
                        <p class="section__desc mb-2">Education is the process of acquiring the body of knowledge and skills that people are expected have in your society. A education develops a critical thought process in addition to learning. Bimply dummy text of the printing and typesetting istryrem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam aliquid architecto aspernatur, facilis perspiciatis rerum saepe vel vitae? Alias culpa dicta facere maiores quam quas, quis sapiente voluptatem? Nulla, voluptatem.</p>
                        <p class="section__desc">
                            tryrem Ipsum has been the industry’s standard dummy text ever since the 1500s,
                            when an unknown printer.
                        </p>
                    </div><!-- end section-heading -->
                    <div class="btn-box">
                        <a href="#" class="theme-btn">get started</a>
                    </div>
                </div><!-- end register-heading -->
            </div><!-- end col-lg-7 -->
        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end register-area -->
<!--======================================
        END REGISTER AREA
======================================-->

<div class="section-block"></div>

<!-- ================================
       START CLIENTLOGO AREA
================================= -->
<section class="clientlogo-area overflow-hidden padding-top-120px padding-bottom-100px text-center">
    <div class="stroke-line">
        <span class="stroke__line"></span>
        <span class="stroke__line"></span>
        <span class="stroke__line"></span>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-heading">
                    <h5 class="section__meta">our partners</h5>
                    <h2 class="section__title">Top companies choose <a href="#" class="primary-color-2">Aduca for Business</a> to build
                        <br> in-demand career skills</h2>
                    <span class="section-divider"></span>
                </div><!-- end section-heading -->
            </div><!-- end col-md-12 -->
        </div><!-- end row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="client-logo margin-top-30px">
                    <div class="client-logo-item">
                        <a href="#"><img src="images/sponsor-img.png" alt="brand image"></a>
                    </div><!-- end client-logo-item -->
                    <div class="client-logo-item">
                        <a href="#"><img src="images/sponsor-img2.png" alt="brand image"></a>
                    </div><!-- end client-logo-item -->
                    <div class="client-logo-item">
                        <a href="#"><img src="images/sponsor-img3.png" alt="brand image"></a>
                    </div><!-- end client-logo-item -->
                    <div class="client-logo-item">
                        <a href="#"><img src="images/sponsor-img4.png" alt="brand image"></a>
                    </div><!-- end client-logo-item -->
                    <div class="client-logo-item">
                        <a href="#"><img src="images/sponsor-img5.png" alt="brand image"></a>
                    </div><!-- end client-logo-item -->
                </div><!-- end client-logo -->
            </div><!-- end col-lg-12 -->
        </div><!-- end row -->
    </div><!-- end container -->
    <div class="stroke-line2">
        <span class="stroke__line"></span>
        <span class="stroke__line"></span>
        <span class="stroke__line"></span>
    </div>
</section><!-- end clientlogo-area -->
<!-- ================================
       START CLIENTLOGO AREA
================================= -->

<!-- ================================
       START BLOG AREA
================================= -->
<section class="blog-area padding-top-120px">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-heading text-center">
                    <h5 class="section__meta section__metalight">news feeds</h5>
                    <h2 class="section__title text-white">Latest News & Articles</h2>
                    <span class="section-divider section-divider-light"></span>
                </div><!-- end section-heading -->
            </div><!-- end col-md-12 -->
        </div><!-- end row -->
        <div class="row margin-top-30px">
            <div class="col-lg-12">
                <div class="blog-post-carousel owl-dot-and-nav">
                    <div class="card-item blog-card">
                        <div class="card-image">
                            <a href="blog-single.html" class="card__img"><img src="images/img9.jpg" alt=""></a>
                            <div class="card-badge">
                                <span class="badge-label">24 Jan</span>
                            </div>
                        </div><!-- end card-image -->
                        <div class="card-content">
                            <h3 class="card__title mt-0">
                                <a href="blog-single.html">User Experience Design Essentials</a>
                            </h3>
                            <div class="card-action">
                                <ul class="card-duration d-flex align-items-center">
                                    <li>By<a href="#" class="blog-admin-name">TechyDevs</a></li>
                                    <li><span class="blog__panel-comment">4 Comments</span></li>
                                    <li><span class="blog__panel-likes">130 Likes</span></li>
                                </ul>
                            </div><!-- end card-action -->
                        </div><!-- end card-content -->
                    </div><!-- end card-item -->
                    <div class="card-item blog-card">
                        <div class="card-image">
                            <a href="blog-single.html" class="card__img"><img src="images/img10.jpg" alt=""></a>
                            <div class="card-badge">
                                <span class="badge-label">24 Jan</span>
                            </div>
                        </div><!-- end card-image -->
                        <div class="card-content">
                            <h3 class="card__title mt-0">
                                <a href="blog-single.html">Ultimate Photoshop Training: From Beginner</a>
                            </h3>
                            <div class="card-action">
                                <ul class="card-duration d-flex align-items-center">
                                    <li>By<a href="#" class="blog-admin-name">TechyDevs</a></li>
                                    <li><span class="blog__panel-comment">4 Comments</span></li>
                                    <li><span class="blog__panel-likes">130 Likes</span></li>
                                </ul>
                            </div><!-- end card-action -->
                        </div><!-- end card-content -->
                    </div><!-- end card-item -->
                    <div class="card-item blog-card">
                        <div class="card-image">
                            <a href="blog-single.html" class="card__img"><img src="images/img11.jpg" alt=""></a>
                            <div class="card-badge">
                                <span class="badge-label">24 Jan</span>
                            </div>
                        </div><!-- end card-image -->
                        <div class="card-content">
                            <h3 class="card__title mt-0">
                                <a href="blog-single.html">Sales Training: Practical Techniques</a>
                            </h3>
                            <div class="card-action">
                                <ul class="card-duration d-flex align-items-center">
                                    <li>By<a href="#" class="blog-admin-name">TechyDevs</a></li>
                                    <li><span class="blog__panel-comment">4 Comments</span></li>
                                    <li><span class="blog__panel-likes">130 Likes</span></li>
                                </ul>
                            </div><!-- end card-action -->
                        </div><!-- end card-content -->
                    </div><!-- end card-item -->
                    <div class="card-item blog-card">
                        <div class="card-image">
                            <a href="blog-single.html" class="card__img"><img src="images/img12.jpg" alt=""></a>
                            <div class="card-badge">
                                <span class="badge-label">24 Jan</span>
                            </div>
                        </div><!-- end card-image -->
                        <div class="card-content">
                            <h3 class="card__title mt-0">
                                <a href="blog-single.html">Complete Financial Analyst Course</a>
                            </h3>
                            <div class="card-action">
                                <ul class="card-duration d-flex align-items-center">
                                    <li>By<a href="#" class="blog-admin-name">TechyDevs</a></li>
                                    <li><span class="blog__panel-comment">4 Comments</span></li>
                                    <li><span class="blog__panel-likes">130 Likes</span></li>
                                </ul>
                            </div><!-- end card-action -->
                        </div><!-- end card-content -->
                    </div><!-- end card-item -->
                    <div class="card-item blog-card">
                        <div class="card-image">
                            <a href="blog-single.html" class="card__img"><img src="images/img13.jpg" alt=""></a>
                            <div class="card-badge">
                                <span class="badge-label">24 Jan</span>
                            </div>
                        </div><!-- end card-image -->
                        <div class="card-content">
                            <h3 class="card__title mt-0">
                                <a href="blog-single.html">User Experience Design Essentials</a>
                            </h3>
                            <div class="card-action">
                                <ul class="card-duration d-flex align-items-center">
                                    <li>By<a href="#" class="blog-admin-name">TechyDevs</a></li>
                                    <li><span class="blog__panel-comment">4 Comments</span></li>
                                    <li><span class="blog__panel-likes">130 Likes</span></li>
                                </ul>
                            </div><!-- end card-action -->
                        </div><!-- end card-content -->
                    </div><!-- end card-item -->
                    <div class="card-item blog-card">
                        <div class="card-image">
                            <a href="blog-single.html" class="card__img"><img src="images/img14.jpg" alt=""></a>
                            <div class="card-badge">
                                <span class="badge-label">24 Jan</span>
                            </div>
                        </div><!-- end card-image -->
                        <div class="card-content">
                            <h3 class="card__title mt-0">
                                <a href="blog-single.html">Ultimate Photoshop Training: From Beginner</a>
                            </h3>
                            <div class="card-action">
                                <ul class="card-duration d-flex align-items-center">
                                    <li>By<a href="#" class="blog-admin-name">TechyDevs</a></li>
                                    <li><span class="blog__panel-comment">4 Comments</span></li>
                                    <li><span class="blog__panel-likes">130 Likes</span></li>
                                </ul>
                            </div><!-- end card-action -->
                        </div><!-- end card-content -->
                    </div><!-- end card-item -->
                    <div class="card-item blog-card">
                        <div class="card-image">
                            <a href="blog-single.html" class="card__img"><img src="images/img10.jpg" alt=""></a>
                            <div class="card-badge">
                                <span class="badge-label">24 Jan</span>
                            </div>
                        </div><!-- end card-image -->
                        <div class="card-content">
                            <h3 class="card__title mt-0">
                                <a href="blog-single.html">User Experience Design Essentials</a>
                            </h3>
                            <div class="card-action">
                                <ul class="card-duration d-flex align-items-center">
                                    <li>By<a href="#" class="blog-admin-name">TechyDevs</a></li>
                                    <li><span class="blog__panel-comment">4 Comments</span></li>
                                    <li><span class="blog__panel-likes">130 Likes</span></li>
                                </ul>
                            </div><!-- end card-action -->
                        </div><!-- end card-content -->
                    </div><!-- end card-item -->
                    <div class="card-item blog-card">
                        <div class="card-image">
                            <a href="blog-single.html" class="card__img"><img src="images/img9.jpg" alt=""></a>
                            <div class="card-badge">
                                <span class="badge-label">24 Jan</span>
                            </div>
                        </div><!-- end card-image -->
                        <div class="card-content">
                            <h3 class="card__title mt-0">
                                <a href="blog-single.html">Ultimate Photoshop Training: From Beginner</a>
                            </h3>
                            <div class="card-action">
                                <ul class="card-duration d-flex align-items-center">
                                    <li>By<a href="#" class="blog-admin-name">TechyDevs</a></li>
                                    <li><span class="blog__panel-comment">4 Comments</span></li>
                                    <li><span class="blog__panel-likes">130 Likes</span></li>
                                </ul>
                            </div><!-- end card-action -->
                        </div><!-- end card-content -->
                    </div><!-- end card-item -->
                     <div class="card-item blog-card">
                        <div class="card-image">
                            <a href="blog-single.html" class="card__img"><img src="images/img8.jpg" alt=""></a>
                            <div class="card-badge">
                                <span class="badge-label">24 Jan</span>
                            </div>
                        </div><!-- end card-image -->
                        <div class="card-content">
                            <h3 class="card__title mt-0">
                                <a href="blog-single.html">Ultimate Photoshop Training: From Beginner</a>
                            </h3>
                            <div class="card-action">
                                <ul class="card-duration d-flex align-items-center">
                                    <li>By<a href="#" class="blog-admin-name">TechyDevs</a></li>
                                    <li><span class="blog__panel-comment">4 Comments</span></li>
                                    <li><span class="blog__panel-likes">130 Likes</span></li>
                                </ul>
                            </div><!-- end card-action -->
                        </div><!-- end card-content -->
                    </div><!-- end card-item -->
                </div><!-- end blog-post-carousel -->
            </div><!-- end col-lg-12 -->
        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end blog-area -->
<!-- ================================
       START BLOG AREA
================================= --> --}}

{{-- <!--======================================
        START CTA AREA
======================================-->
<section class="cta-area padding-top-115px padding-bottom-90px text-center">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 column-td-half">
                <div class="post-card">
                    <div class="post-card-content">
                        <img src="images/img33.jpg" alt="" class="img-fluid">
                        <h2 class="widget-title mt-4 mb-2">Become Instructor</h2>
                        <p>Teach what you love. Aduca gives you the tools to create a course.</p>
                    </div><!-- end post-card-content -->
                    <div class="btn-box margin-top-30px">
                        <a href="#" class="theme-btn">Start Teaching</a>
                    </div><!-- end btn-box -->
                </div>
            </div><!-- end col-lg-4 -->
            <div class="col-lg-4 column-td-half">
                <div class="post-card">
                    <div class="post-card-content">
                        <img src="images/img34.jpg" alt="" class="img-fluid">
                        <h2 class="widget-title mt-4 mb-2">Become a Learner</h2>
                        <p>Learn what you love! transform your life through education</p>
                    </div><!-- end post-card-content -->
                    <div class="btn-box margin-top-30px">
                        <a href="#" class="theme-btn">Start Learning</a>
                    </div><!-- end btn-box -->
                </div>
            </div><!-- end col-lg-4 -->
            <div class="col-lg-4 column-td-half">
                <div class="post-card">
                    <div class="post-card-content">
                        <img src="images/img35.jpg" alt="" class="img-fluid">
                        <h2 class="widget-title mt-4 mb-2">Aduca for Business</h2>
                        <p>Get unlimited access to 5,000+ of Aduca's top courses for your team</p>
                    </div><!-- end post-card-content -->
                    <div class="btn-box margin-top-30px">
                        <a href="#" class="theme-btn">Get aduca for business</a>
                    </div><!-- end btn-box -->
                </div>
            </div><!-- end col-lg-4 -->
        </div><!-- end row -->
    </div><!-- end container -->
</section>
<!-- ================================
       START CTA AREA
================================= --> --}}

<!--======================================
        START SUBSCRIBER AREA
======================================-->
{{--<section class="subscriber-area padding-top-80px padding-bottom-75px">--}}
{{--    <div class="container">--}}
{{--        <div class="row">--}}
{{--            <div class="col-lg-5">--}}
{{--                <div class="section-heading">--}}
{{--                    <h5 class="section__meta section__metalight">newsletter</h5>--}}
{{--                    <h2 class="section__title text-white">Inscrivez-vous a notre newsletter </h2>--}}
{{--                    <span class="section-divider section-divider-light"></span>--}}
{{--                    <p class="section__desc mb-0 text-color-rgba">Ne rater plus aucun quiz sur les concours</p>--}}
{{--                </div><!-- end section-heading -->--}}
{{--            </div><!-- end col-lg-5 -->--}}
{{--            <div class="col-lg-6 ml-auto">--}}
{{--                <div class="subscriber-form">--}}
{{--                    <div class="contact-form-action">--}}
{{--                        <form method="post">--}}
{{--                            <div class="input-box">--}}
{{--                                <label class="form-label text-white">Email</label>--}}
{{--                                <div class="form-group d-flex align-items-center">--}}
{{--                                    <input class="form-control" type="email" name="email" placeholder="email" required>--}}
{{--                                    <span class="la la-envelope-o input-icon"></span>--}}
{{--                                    <button class="theme-btn theme-btn-hover-light" type="submit">Souscrire</button>--}}
{{--                                </div>--}}
{{--                                <p class="text-color-rgba font-size-14 mt-1">--}}
{{--                                   <i class="la la-lock mr-1"></i>--}}
{{--                                </p>--}}
{{--                            </div>--}}
{{--                        </form>--}}
{{--                    </div><!-- end contact-form-action -->--}}
{{--                </div><!-- end subscriber-form-->--}}
{{--            </div><!-- end col-lg-6 -->--}}
{{--        </div><!-- end row -->--}}
{{--    </div><!-- end container -->--}}
{{--</section><!-- end subscriber-area -->--}}
<!--======================================
        END SUBSCRIBER AREA
======================================-->

<!-- ================================
         END FOOTER AREA
================================= -->
@endsection
