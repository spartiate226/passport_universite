<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\concourSousCategorie;
use Faker\Generator as Faker;

$factory->define(concourSousCategorie::class, function (Faker $faker) {
    return [
        'categorie_id'     => factory('App\concourCategorie')->create(),
        'nom'=>$faker->lastName
    ];
});
