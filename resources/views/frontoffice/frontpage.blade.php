<!DOCTYPE html>
<html lang="en" class="h-100">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">
    <style>
        .cover{
            background-size: cover;
            background-repeat: no-repeat;
        }
        .text-block,.filter{
            position: absolute;
        }
        .filter{
            background-color: rgba(0, 0, 0, 0.4);
        }
        .ctrl-login{
            border-radius: 40px 0px 0px 40px;
            width: 50%;
        }
        .ctrl-register{
            border-radius: 0px 40px 40px 0px;
            width: 50%;
        }
        .ctrl-login,
        .ctrl-register{
            color: blue;
            background-color: rgb(255, 255, 255);
            border: 1px blue solid;
         }
        .ctrl-selected{
            color: rgb(255, 255, 255);
            background-color: blue;
            border: 1px blue solid;
        }
        .invisible{
            display: none;
        }
        .form-control{
            border-radius: 0;
        }
        .submit-btn{
            color: rgb(255, 255, 255);
            background-color: blue;
            border: 1px blue solid;
        }
        .fa-bars{
            font-size: 40px;
            color: rgb(255, 255, 255);
        }
        .barheader{
            background-color: blue;
        }
        .about{
            position: absolute;
            background-color: blue;
        }
        .about-bt{
            cursor: pointer;
        }
        .aboutanim{
            background-color: blue;
            animation: anim 10s;
        }
        @keyframes anim{
            0%{
                
                width: 0%;
            }
            25%{
                width: 25%;  
            }
            75%{
                width: 75%; 
            }
            100%{
                width: 100%; 
            }
        }
    </style>
</head>
<body class="h-100">
    <div class="cover h-100 w-100" style="background-image: url({{url('images/andre-hunter-AQ908FfdAMw-unsplash.jpg')}});">
        <div class="filter h-100 w-100"></div> 
        <div class="text-block h-100 w-100 d-flex flex-column ">
            <header  style="height: 10%" class="d-flex justify-content-end p-3 barheader">
                <span class="about-bt"><i class="fa fa-bars"></i></span>
            </header>
            <div style="height: 90%" class="w-100 row justify-content-center">
                <section class="col-md-4 d-flex flex-column justify-content-center p-0">
                    <div>
                        <section class="control-bt d-flex justify-content-center mb-4">
                            <button class="ctrl-login ctrl-selected">Connexion</button>
                            <button class="ctrl-register">Inscription</button>
                        </section>
                        <section class="login-form card m-2 p-2">
                            <form method="POST" action="{{url('auth/connexion')}}">
                                @csrf
                                <div class="form-group">
                                    <label for="">Pseudonyme</label>
                                    <input name="pseudonyme" class="form-control" type="text">
                                </div>
                                <div class="form-group">
                                    <label for="">Mot de passe</label>
                                    <input name="password" class="form-control" type="text">
                                </div>
                                <div class="form-group">
                                   <button class="submit-btn w-100">Connexion</button>
                                </div>
                            </form>
                        </section>
                        <section class="register-form card m-2 p-2 invisible">
                            <form method="POST" action="{{url('auth/inscription')}}">
                                @csrf
                            <div class="form-group">
                                <input class="form-control" name="nom" placeholder="Nom" type="text">
                            </div>
                            <div class="form-group">
                                <input class="form-control" name="prenom" placeholder="Prenom" type="text">
                            </div>

                            <div class="form-group">
                                <input class="form-control" name="pseudonyme" placeholder="Pseudonyme" type="text">
                            </div>
                            <div class="form-group">
                                <input class="form-control" name="password" placeholder="Mot de passe" type="text">
                            </div>
                            <div class="form-group">
                               <button class="submit-btn w-100">S'inscrir</button>
                            </div>
                        </form>
                        </section>
                    </div>
                </section>
                <div class="about  w-100 invisible" style="height: 90%">
                <h1 class="text-light m-3">PASSEPORT E-LEARNING</h1>
                </div>
            </div>
        </div>
    </div>
    <script src="{{asset('js/jquery-3.4.1.min.js')}}"></script>
    <script>
       var  ctrllogin=$('.ctrl-login');
       var ctrlregister=$('.ctrl-register');
       var loginform=$('.login-form');
       var registerform=$('.register-form');
       ctrllogin.click(function(){
        $(this).addClass('ctrl-selected');
        ctrlregister.removeClass('ctrl-selected');
        loginform.removeClass('invisible');
        registerform.addClass('invisible');
       })
ctrlregister.click(function(){
        $(this).addClass('ctrl-selected');
        ctrllogin.removeClass('ctrl-selected');
        loginform.addClass('invisible');
        registerform.removeClass('invisible');
});

$(".about-bt").click(function(){
    if ($('.about').hasClass('invisible')) {
        $('.about').removeClass('invisible');
    }else{
        $('.about').addClass('invisible');
    }
});
    </script>
</body>
</html>