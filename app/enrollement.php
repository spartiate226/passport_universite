<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class enrollement extends Model
{
    protected $guarded=[];
    function concour_question(){
        return $this->belongsTo(concourQuestion::class);
    }
}
