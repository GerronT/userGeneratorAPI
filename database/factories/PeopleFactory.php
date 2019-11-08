<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\People::class, function (Faker $faker) {
    return [
      'title' => $faker->text(5),
      'firstName' => $faker->text(10),
      'lastName' => $faker->text(10),
      'userName' => $faker->text(15),
      'photo' => $faker->text(10)
    ];
});
