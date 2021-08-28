<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class concourQuestion extends Model
{
    protected $guarded=[];
    function quizs(){
        return $this->hasMany(concourQuestionElement::class);
    }
    function enrolements(){
        return $this->hasMany(enrollement::class);
    }
    function concour_categorie(){
        return $this->belongsTo(concourCategorie::class);
    }
}
