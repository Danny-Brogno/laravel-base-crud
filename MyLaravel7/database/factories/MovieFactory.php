<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Movie;
use Faker\Generator as Faker;

$factory->define(Movie::class, function (Faker $faker) {

    return [
      "title" => $faker -> word,
      "original_title" => $faker -> word,
      "nationality" => $faker -> word,
      "date" => $faker -> date,
      "vote" => $faker -> numberBetween(1, 10)
    ];

});
