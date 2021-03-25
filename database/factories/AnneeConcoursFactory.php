<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\concourAnne;
use Faker\Generator as Faker;

$factory->define(concourAnne::class, function (Faker $faker) {
    return [
        'niveau_id'     => factory('App\concourNiveau')->create(),
        'annee'=>$faker->date
    ];
});
