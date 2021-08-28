<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta name="author" content="TechyDevs">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Passeport Elearning</title>

    <!-- Google fonts -->
    {{-- <link href="https://fonts.googleapis.com/css2?family=Mukta:wght@200;300;400;500;600;700;800&display=swap" rel="stylesheet"> --}}

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
   

    <section class="quiz-wrap">
        <div class="breadcrumb-nav bg-white border-top py-3">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <ul class="quiz-nav d-flex align-items-center">
                            <li><a href="course-details.html"><i class="la la-arrow-left mr-2"></i>Quitter</a></li>
                            <li>
                                <div class="d-flex align-items-center">
                                    <a href="course-details.html">
                                        <img src="images/angular.png" alt="">
                                    </a>
                                    <p>
                                        <a href="course-details.html">{{$quiz->title}}</a>
                                    </p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div><!-- end row -->
            </div><!-- end container -->
        </div><!-- end breadcrumb-nav -->
        <div class="quiz-content-wrap bg-black padding-top-60px padding-bottom-60px">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="quiz-content text-center">
                            <p class="lead font-weight-regular font-size-18 text-color-rgba mb-0 pb-2">Soumis le {{date('d-m-Y')}}</p>
                            <h2 class="section__title text-white padding-bottom-30px">Points cumulés: {{$resultat['points']}}</h2>
                            <div class="btn-box">
                                <a href="{{url('page/attempt-restart/'.$quiz->id)}}" class="theme-btn theme-btn-light mr-2">Recommencer</a>
                                <a href="{{url('page/attempt-save/'.$quiz->id)}}" class="theme-btn theme-btn-light">Terminer</a>
                            </div>
                        </div>
                    </div><!-- end col-lg-12 -->
                </div><!-- end row -->
            </div><!-- end container -->
        </div><!-- end quiz-content-wrap -->
        
        <div class="quiz-ans-wrap padding-top-80px padding-bottom-80px">
            <div class="container">
                <div class="row">
                    @foreach ($resultat['rater'] as $rater)
                    <div class="col-lg-12">
                        <div class="quiz-ans-content">
                            <div class="d-flex align-items-center">
                                <h3 class="widget-title font-weight-semi-bold">Question :{{$rater->question}}</h3>
                            </div>
                            {{-- <p class="pt-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam debitis dolorem enim eos esse et fuga, iusto labore saepe ut. A aut consequatur delectus error illum impedit maiores nam, numquam pariatur perferendis possimus provident, quibusdam quidem reiciendis suscipit vero voluptatem!</p> --}}
                            <ul class="quiz-result-list pt-4 pl-3">
                                @foreach (json_decode($rater->reponses,true) as $reponse )
                                <li class="primary-color mb-2">
                                    <span class="icon-element icon--element icon-error mr-2"> &times; </span>
                                    {{$reponse}}
                                </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    @endforeach
                </div><!-- end row -->
            </div><!-- end container -->
        </div><!-- end quiz-ans-wrap -->
    </section><!-- end quiz-wrap -->

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