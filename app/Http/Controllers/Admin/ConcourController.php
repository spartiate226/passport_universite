<?php

namespace App\Http\Controllers\Admin;

use App\concourQuestion;
use App\concourQuestionElement;
use App\concourQuiz;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use PhpOffice\PhpSpreadsheet\Reader\Xls;
use PhpOffice\PhpSpreadsheet\Reader\Xlsx;


class ConcourController extends Controller
{
    function dashboardView(){
        return view('back.index');
    }
    function ajoutView(){
        return view('back.concour.ajout');
    }

    function ajout(Request $request){
        $data=$request->except(['excel']);
        $quiz_concour=concourQuestion::create($data);
        $file=$request->excel->storeAs("work","sheet.xlsx","worksheet");
       $quiz=[];
       $reader=new Xlsx();
       $spreedsheets=$reader->load(Storage::disk('worksheet')->path("work/sheet.xlsx"));
       foreach ($spreedsheets->getAllSheets() as $sheet){
          foreach ($sheet->getRowIterator() as $row){
              $i=0;
              foreach ($row->getCellIterator() as $cell){
                  $quiz[$i]=$cell->getValue();
                  $i++;
              }
              $quiz[1]=json_encode(explode("//",$quiz[1]));
              $quiz[2]=json_encode(explode("//",$quiz[2]));
              $concour=new concourQuestionElement();
              $concour->question=$quiz[0];
              $concour->concour_question_id=$quiz_concour->id;
              $concour->reponses=$quiz[1];
              $concour->propositions=$quiz[2];
              $concour->point=$quiz[3];
              $concour->save();
          }
       }
       return redirect('admin/dashboard');

    }

}
