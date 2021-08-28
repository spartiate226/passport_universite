<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\concourCategorie;
use Faker\Generator as Faker;

$factory->define(concourCategorie::class, function (Faker $faker) {
    return [
        'nom'=>"Concours directs"
    ];
});
