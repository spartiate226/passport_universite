<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class concourResultat extends Model
{
    protected $guarded=[];
    function concourQuestion(){
        return $this->belongsTo(concourQuestion::class);
    }
}
