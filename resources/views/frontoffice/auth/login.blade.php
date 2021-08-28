@extends('layout')
@section('style')
   
@endsection
@section('contenue')

<!-- ================================
    START BREADCRUMB AREA
================================= -->
<section class="breadcrumb-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-content">
                    <div class="section-heading">
                        <h2 class="section__title">Connexion</h2>
                    </div>
                    <ul class="breadcrumb__list">
                        <li class="active__list-item"><a href="#">Accueil</a></li>
                        <li class="active__list-item">pages</li>
                        <li>Connexion</li>
                    </ul>
                </div><!-- end breadcrumb-content -->
            </div><!-- end col-lg-12 -->
        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end breadcrumb-area -->
<!-- ================================
    END BREADCRUMB AREA
================================= -->

<!-- ================================
       START LOGIN AREA
================================= -->
<section class="login-area section--padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 mx-auto">
                <div class="card-box-shared">
                    <div class="card-box-shared-title text-center">
                        <h3 class="widget-title font-size-25">Connexion au compte</h3>
                    </div>
                    <div class="card-box-shared-body">
                        <div class="contact-form-action">
                            <form method="post" action="{{url('auth/connexion')}}">
                                @csrf
                                <div class="row">
                                    {{-- <div class="col-lg-4 column-td-half">
                                        <div class="form-group">
                                            <button class="theme-btn w-100" type="submit">
                                                <i class="fa fa-google mr-2"></i>Google
                                            </button>
                                        </div>
                                    </div><!-- end col-lg-4 -->
                                    <div class="col-lg-4 column-td-half">
                                        <div class="form-group">
                                            <button class="theme-btn w-100" type="submit">
                                                <i class="fa fa-facebook mr-2"></i>Facebook
                                            </button>
                                        </div>
                                    </div><!-- end col-lg-4 -->
                                    <div class="col-lg-4 column-td-half">
                                        <div class="form-group">
                                            <button class="theme-btn w-100" type="submit">
                                                <i class="fa fa-twitter mr-2"></i>Twitter
                                            </button>
                                        </div>
                                    </div><!-- end col-lg-4 -->
                                    <div class="col-lg-12">
                                        <div class="account-assist mt-3 margin-bottom-35px text-center">
                                            <p class="account__desc">or</p>
                                        </div>
                                    </div><!-- end col-md-12 --> --}}
                                    <div class="col-lg-12">
                                        <div class="input-box">
                                            <label class="label-text">Pseudonyme<span class="primary-color-2 ml-1">*</span></label>
                                            <div class="form-group">
                                                <input class="form-control" type="text" name="pseudonyme" placeholder="Nom d'utilisateur">
                                                <span class="la la-user input-icon"></span>
                                            </div>
                                        </div>
                                    </div><!-- end col-md-12 -->
                                    <div class="col-lg-12">
                                        <div class="input-box">
                                            <label class="label-text">Mot de passe<span class="primary-color-2 ml-1">*</span></label>
                                            <div class="form-group">
                                                <input class="form-control" type="text" name="password" placeholder="Mot de passe">
                                                <span class="la la-lock input-icon"></span>
                                            </div>
                                        </div>
                                    </div><!-- end col-md-12 -->
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <div class="custom-checkbox d-flex justify-content-between">
                                                {{-- <input type="checkbox" id="chb1">
                                                <label for="chb1">Remember Me</label> --}}
                                                <a href="#" class="primary-color-2"> Mot de passe oublié?</a>
                                            </div>
                                        </div>
                                    </div><!-- end col-md-12 -->
                                    <div class="col-lg-12 ">
                                        <div class="btn-box">
                                            <button class="theme-btn" type="submit">Connexion</button>
                                        </div>
                                    </div><!-- end col-md-12 -->
                                    <div class="col-lg-12">
                                        <p class="mt-4">Vous n'avez pas de compte? <a href="{{url("page/>inscription")}}" class="primary-color-2">S'inscrire</a></p>
                                    </div><!-- end col-md-12 -->
                                </div><!-- end row -->
                            </form>
                        </div><!-- end contact-form -->
                    </div>
                </div>
            </div><!-- end col-lg-7 -->
        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end login-area -->
<!-- ================================
       START LOGIN AREA
================================= -->
@endsection
