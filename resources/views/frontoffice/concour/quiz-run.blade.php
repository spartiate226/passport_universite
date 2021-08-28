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
<section class="breadcrumb-nav bg-white border-top py-3">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <ul class="quiz-nav d-flex align-items-center">
                    <li><a href="{{url('page/dashboard')}}"><i class="la la-arrow-left mr-2"></i>Quitter</a></li>
                    <li>
                        <div class="d-flex align-items-center">
                            <a href="course-details.html">
                                <img src="images/angular.png" alt="">
                            </a>
                            <p>
                                <a href="">{{$quiz->title}}</a><span class="d-block font-size-13"></span>
                            </p>
                        </div>
                    </li>
                </ul>
            </div><!-- end col-lg-12 -->
        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end breadcrumb-nav -->
<!-- ================================
    END BREADCRUMB AREA
================================= -->

<!-- ================================
    START QUIZ AREA
================================= -->
<form action="{{url('page/quiz-run',["params"=>$quiz->id])}}" method="POST" class="quiz-wrap">
    @csrf
    <div class="quiz-content-wrap bg-black padding-top-60px padding-bottom-60px">
        <div class="container">

            <div class="row">
                <div class="col-lg-12">
                    <div class="quiz-content padding-top-40px">
                        <div class="d-flex align-items-center justify-content-between">
                            <h2 class="section__title text-white">Questions</h2>
                        </div>
                        <p class="section__desc quiz-desc text-color-rgba mb-0 pt-3">{{$qq->question}}</p>
                    </div>
                </div><!-- end col-lg-12 -->
            </div><!-- end row -->
        </div><!-- end container -->
      </div><!-- end quiz-content-wrap -->
     <div class="quiz-action-nav bg-white py-3">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="quiz-action-content d-flex align-items-center justify-content-between">
                        <div class="quiz-nav-btns">
                            <input name="option" type="submit" value="skip"  class="theme-btn theme-btn-light mr-2">
                            <input name="option" type="submit" value="next"  class="theme-btn theme-btn-light bg-color-1 text-white">
                        </div>
                    </div>
                </div><!-- end col-lg-12 -->
            </div><!-- end row -->
        </div><!-- end container -->
      </div><!-- end quiz-action-nav -->
     <div class="quiz-ans-wrap padding-top-80px padding-bottom-80px">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="quiz-ans-content">
                        <h3 class="widget-title">Repondez ici:</h3>
                        <ul class="py-3">

                            @foreach (json_decode($qq->propositions,true) as $qui=>$quis)
                            <li>
                                <div class="custom-checkbox">
                                    @if (count(json_decode($qq->reponses,true))==1)
                                    <input name="rad" value="{{$quis}}" type="radio" id="chb{{$qui}}">
                                    <label for="chb{{$qui}}">{{$quis}}</label>
                                    @elseif(count(json_decode($qq->reponses,true))>1)
                                    <input name="chb{{$qui}}" value="{{$quis}}" type="checkbox" id="chb{{$qui}}">
                                    <label for="chb{{$qui}}">{{$quis}}</label>
                                    @endif
                                </div>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div><!-- end col-lg-12 -->
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end quiz-ans-wrap -->
</form><!-- end quiz-wrap -->
<!-- ================================
    END QUIZ AREA
================================= -->
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
