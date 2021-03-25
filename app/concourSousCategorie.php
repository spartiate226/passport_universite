<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class concourSousCategorie extends Model
{
    protected $fillable = ['categorie_id','nom'];


    public function niveau()
    {
        return $this->hasMany(concourNiveau::class, 'id','categorie_id');
    }

    public function categorie()
    {
        return $this->belongsTo(concourCategorie::class);
    }
}
