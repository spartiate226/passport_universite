<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\concourNiveau;
use Faker\Generator as Faker;

$factory->define(concourNiveau::class, function (Faker $faker) {
    return [
        'sousCategorie_id'     => factory('App\concourSousCategorie')->create(),
        'niveau'=>$faker->lastName
    ];
});
