<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class concourNiveau extends Model
{
    protected $fillable = ['sousCategorie_id','niveau'];

    public function souCat()
    {
        return $this->belongsTo(concourSousCategorie::class);
    }

    public function annee()
    {
        return $this->hasMany(concourAnne::class);
    }
}
