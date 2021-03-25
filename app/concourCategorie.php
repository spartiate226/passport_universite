<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class concourCategorie extends Model
{
    protected $fillable = ['nom'];


    public function sousCat()
    {
        return $this->hasMany(concourSousCategorie::class, 'id', 'categorie_id');
    }
}
