<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class passportUser extends Authenticatable
{

    protected $fillable = [
        'nom','prenom','pseudonyme', 'email', 'password','agreement',
    ];
}
