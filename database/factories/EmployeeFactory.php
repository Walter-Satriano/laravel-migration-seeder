<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;
use App\Employee;

$factory->define(Employee::class, function (Faker $faker) {
  return [
    "firstname" => $faker -> firstName,
    "lastname" => $faker -> lastName,
    "birthDay" => $faker -> date,
    "jobTitle" => $faker -> jobTitle,
    "salary" => rand(600 , 5500)
  ];
});
