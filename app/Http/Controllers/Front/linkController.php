<?php

namespace App\Http\Controllers\Front;

use App\concourQuestion;
use App\concourQuestionElement;
use App\concourResultat;
use App\enrollement;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class linkController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke($page,$param=null,Request $request)
    {
        switch ($page){
            case "accueil" :
                return  view("frontoffice.frontpage");
                break;
            case "inscription" :
                return view("frontoffice.auth.register");
                break;
            case "connexion" :
                return view('frontoffice.auth.login');
                break;
            case "quiz" :
                return  view('frontoffice.concour.quizs');
                break;
            case "quiz-single" :
                $quiz=concourQuestion::find($param);
                return  view('frontoffice.concour.quiz-single',compact('quiz'));
                break;
            case "quiz-run" :
            $quiz=concourQuestion::find($param);
            if(session()->has('quizs.quiz'.$quiz->id) && isset($request->option)){

                
                    if ($request->option=="next") {
                        $reste1=session('quizs.quiz'.$quiz->id.'.reste');
                        $toforget=array_search(session('quizs.quiz'.$quiz->id.'.actuelle'),$reste1);
                        unset($reste1[$toforget]);
                        $reste1=array_values($reste1);
                        //dd($reste1);
                        session(['quizs.quiz'.$quiz->id.'.reste'=>$reste1]);
                        $terminer= session('quizs.quiz'.$quiz->id.'.termine');
                        $points=0;
                        $reponses=$request->except(['option','_token']);
                        $quizelem=concourQuestionElement::find(session('quizs.quiz'.$quiz->id.'.actuelle'));
                        $vrai_reponses=json_decode($quizelem->reponses,true);
                        if(verification_question($vrai_reponses,$reponses)){
                            $points=$quizelem->point;
                        }
                        $terminer[$quizelem->id]=["id"=>$quizelem->id,"points"=>$points];
                        session(['quizs.quiz'.$quiz->id.'.termine'=>$terminer]);
                        if(count($reste1)!=0){
                        $trouve=[];
                        //dd(session('quizs.quiz'.$quiz->id.'.termine'));
                        $random=rand(0,count($reste1)-1);
                        //print_r(session('quizs'));
                        session(['quizs.quiz'.$quiz->id.'.actuelle'=>$reste1[$random]]);
                        $qq=concourQuestionElement::find($reste1[$random]);
                      }
                    }elseif($request->option=="skip"){
                        $reste1=session('quizs.quiz'.$quiz->id.'.reste');
                        $toforget=array_search(session('quizs.quiz'.$quiz->id.'.actuelle'),$reste1);
                        unset($reste1[$toforget]);
                        $reste1=array_values($reste1);
                        session(['quizs.quiz'.$quiz->id.'.reste'=>$reste1]);
                        $skip= session('quizs.quiz'.$quiz->id.'.skip');
                        $skip[$quiz->id]=["id"=>session('quizs.quiz'.$quiz->id.'.actuelle')];
                        session(['quizs.quiz'.$quiz->id.'.skip'=>$skip]);

                        if(count($reste1)!=0){
                        $random=rand(0,count($reste1)-1);
                        session('quizs.quiz'.$quiz->id.'.actuelle',$reste1[$random]);
                        $qq=concourQuestionElement::find($reste1[$random]);
                        }
                    }
            }
            else{
                session(["quizs"=>[]]);
                $elementid=(array)$quiz->quizs->pluck('id');
                $elementid=$elementid["\x00*\x00items"];
                $random=rand(0,count($elementid)-1);
                $idactuel=$elementid[$random];
                session(["quizs.quiz".$quiz->id=>["reste"=>$elementid,"termine"=>[],"skip"=>[],"actuelle"=>$idactuel]]);          
                $qq=concourQuestionElement::find($idactuel);
            }
            if (count(session('quizs.quiz'.$quiz->id.'.reste'))==0) {
                $resultat=quizresult($quiz->id);
                return view('frontoffice.concour.resultats',compact("quiz","resultat"));
            }
                return  view('frontoffice.concour.quiz-run',compact('qq',"quiz"));
                break;

               

            case "dashboard" :
                return  view('frontoffice.dashboard.panel');
                break;
            case "attempt-restart" :
                session()->forget('quizs');
                return redirect('page/quiz-run/'.$param);
                break;
            case "attempt-save" :
                concourResultat::create([
                    'concour_question_id'=>$param,
                    'user_id'=>Auth::guard('Visitor')->user()->id,
                    'point'=>quizresult($param)['points'],
                    'skip'=>count(quizresult($param)['passe']),
                    'quizperdu'=>count(quizresult($param)['rater'])
                ]);
                session()->forget('quizs');
                return redirect('page/resultats');
                break;
            case "profil" :
                return  view('frontoffice.dashboard.profile');
                break;
            case "resultats" :
                return  view('frontoffice.dashboard.resultat');
                break;
            case "enrolled" :
                return  view('frontoffice.dashboard.enrolledquiz');
                break;
            case "quizs" :
                $quizs=concourQuestion::paginate(5);
                return  view('frontoffice.dashboard.quiz',compact('quizs'));
                break;
            case "enrollement" :
                enrollement::create([
                    'user_id'=>Auth::guard('Visitor')->user()->id,
                    'concour_question_id'=>$param,
                ]);
                return  redirect('page/quizs')->with(['reponse'=>'Succès!']);
                break;
                case "logout" :
                    Auth::guard('Visitor')->logout();
                return  redirect('page/accueil');
                    break;
        }
    }
}
