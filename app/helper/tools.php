<?php

use App\concourQuestion;
use App\concourQuestionElement;
use Illuminate\Support\Facades\Auth;

function quiz_run(concourQuestion $question){
    $restant=$question->quizs->pluck('id');
    dd($restant);
    $termine=[];
    $resultat=[];
if(session('quiz')){

}else{
    session('quiz',["restant"=>$restant,"termine"=>$termine,"results"=>$resultat]);
    return concourQuestionElement::find(rand(0,count($restant)));
}
}

function verification_question($vrai_reponse,$reponse){
$number=count($reponse);
$i=0;
foreach($reponse as $res){
    if($res!=$vrai_reponse[$i]){
        $number-=1;
    }
    $i++;
}
if($number==count($reponse)){
  return true;
}
return false;
}

function quizresult($quiz){
    if (session()->exists('quizs')) {
        $terminer=session('quizs.quiz'.$quiz.'.termine');
        $skip=session('quizs.quiz'.$quiz.'.skip');
        $reste=session('quizs.quiz'.$quiz.'.reste');
        $quiztrouve=[];
        $quizrater=[];
        $pointsTotal=0;
        foreach ($terminer as $elem) {
            if ($elem['points']>0) {
              $quiztrouve[]=$elem['id'];
              $pointsTotal+=$elem['points'];
            }elseif($elem['points']==0){
                $quizrater[]=concourQuestionElement::find($elem['id']);
            }
        }
        $nbtrouve=count($quiztrouve);
        $nbrater=count($quizrater);
        return [
            'points'=>$pointsTotal,
            'trouve'=>$quiztrouve,
            'rater'=>$quizrater,
            'passe'=>$skip,
            'reste'=>$reste
        ];
    }
}

function totalpoint(){
    $total=0;
    foreach (App\concourResultat::where('user_id',"=",Auth::guard('Visitor')->user()->id)->get() as $rest) {
        $total+=$rest->point;
    }
    return $total;
}
