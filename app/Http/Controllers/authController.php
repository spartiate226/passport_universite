<?php

namespace App\Http\Controllers;


use App\passportUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class authController extends Controller
{
    //fonction d'inscription visiteur
    function visiteRegister(Request $request){
        $data=$request->all();
        $data['password']=Hash::make($data['password']);
        passportUser::create($data);
        return redirect('/')->with(["reponse"=>"Votre compte a éte creer avec succès!connectez-vous."]);
    }
    //fonction de connection visiteur
    function visiteConnexion(Request $request){
        if ($this->connection('visitor',$request->except('_token'))){
            return redirect('page/dashboard')->with(["reponse"=>"success"]);
        }else{
            return redirect('/')->with(["reponse"=>"Informations incorrects,reassayez..."]);
        }
    }
    function Adminconnexionform(){
        return view('back.Auth.login');
    }

    //fonction de connection Admin
    function AdminConnexion(Request $request){
         if ($this->connection('admin',$request->except('_token'))){
           return redirect('admin/dashboard');
         }else{
             return redirect('admin/login');
         }
    }

    //fonction permettant l'authentification en fonction du guard Admin ou Visitor
    function connection($guard,$data){
        $verifresult=null;
        switch ($guard){
            case "visitor" :
                $verifresult=Auth::guard("Visitor")->attempt($data);
                break;
            case "admin" :
                $verifresult=Auth::guard("Admin")->attempt($data);
                break;
        }
        return $verifresult;
    }

}
