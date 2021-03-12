<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class concourAnne extends Model
{
    protected $fillable = ['niveau_id','annee']; 

    public function niveau()
    {
        return $this->belongsTo(concourNiveau::class, 'id', 'niveau_id');
    }
}
