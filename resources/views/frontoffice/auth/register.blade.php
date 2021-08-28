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
                        <h2 class="section__title">Inscription</h2>
                    </div>
                    <ul class="breadcrumb__list">
                        <li class="active__list-item"><a href="#">Accueil</a></li>
                        <li class="active__list-item">page</li>
                        <li>Inscription</li>
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
       START SIGN UP AREA
================================= -->
<section class="sign-up section--padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 mx-auto">
                <div class="card-box-shared">
                    <div class="card-box-shared-title text-center">
                        <h3 class="widget-title font-size-25">Creez votre compte et <br> Commencez!</h3>
                    </div>
                    <div class="card-box-shared-body">
                        <div class="contact-form-action">
                            <form method="post" action="{{url('auth/inscription')}}">
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
                                    <div class="col-lg-12 ">
                                        <div class="input-box">
                                            <label class="label-text">Nom<span class="primary-color-2 ml-1">*</span></label>
                                            <div class="form-group">
                                                <input class="form-control" type="text" name="nom" placeholder="Nom">
                                                <span class="la la-user input-icon"></span>
                                            </div>
                                        </div>
                                    </div><!-- end col-md-12 -->
                                    <div class="col-lg-12 ">
                                        <div class="input-box">
                                            <label class="label-text">Prenom(s)<span class="primary-color-2 ml-1">*</span></label>
                                            <div class="form-group">
                                                <input class="form-control" type="text" name="prenom" placeholder="Prenom(s)">
                                                <span class="la la-user input-icon"></span>
                                            </div>
                                        </div>
                                    </div><!-- end col-md-12 -->
                                     <div class="col-lg-12 ">
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
                                        <div class="input-box">
                                            <label class="label-text">Confirmer le mot de passe<span class="primary-color-2 ml-1">*</span></label>
                                            <div class="form-group">
                                                <input class="form-control" type="text" name="confirm-password" placeholder="Confirmer le mot de passe">
                                                <span class="la la-lock input-icon"></span>
                                            </div>
                                        </div>
                                    </div><!-- end col-md-12 -->
                                    {{-- <div class="col-lg-12">
                                        <div class="form-group">
                                            <div class="custom-checkbox">
                                                <input type="checkbox" id="chb1">
                                                <label for="chb1"><span class="line-height-24 d-block">Yes! I want to get the most out of Aduca by receiving emails with exclusive deals, personal recommendations and learning tips!</span></label>
                                            </div>
                                              <div class="custom-checkbox">
                                                <input type="checkbox" id="chb2">
                                                <label for="chb2">By signing up, you agree to our <a href="#">Terms of Use</a> and
                                                    <a href="#">Privacy Policy</a>.
                                                </label>
                                            </div>

                                        </div>
                                    </div><!-- end col-md-12 --> --}}
                                    <div class="col-lg-12 ">
                                        <div class="btn-box">
                                            <button class="theme-btn" type="submit">Enregistrer le compte</button>
                                        </div>
                                    </div><!-- end col-md-12 -->
                                    <div class="col-lg-12">
                                        <p class="mt-4">Vous avez deja un compte? <a href="{{url('page/connexion')}}" class="primary-color-2">Connectez-vous</a></p>
                                    </div><!-- end col-md-12 -->
                                </div><!-- end row -->
                            </form>
                        </div><!-- end contact-form -->
                    </div>
                </div>
            </div><!-- end col-md-7 -->
        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end sign-up -->
<!-- ================================
       START SIGN UP AREA
================================= -->
@endsection