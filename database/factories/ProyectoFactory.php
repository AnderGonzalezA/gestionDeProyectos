<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Proyecto;
use Faker\Generator as Faker;

$factory->define(Proyecto::class, function (Faker $faker) {
    return [
      'nombre' => $faker->domainWord,
      'titulo' => $faker->catchPhrase,
      'fechainicio' => $faker->date($format = 'Y-m-d', $max = 'now'),
      'fechafin'  => $faker->date($format = 'Y-m-d', $max = 'now'),
      'horasestimadas' => $faker->randomNumber($nbDigits = NULL, $strict = false)
    ];
});
