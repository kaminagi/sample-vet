<?php

use Faker\Generator as Faker;

$factory->define(App\Owner::class, function (Faker $faker) {
    return [
        'first_name' => $faker->name(),
        'last_name' => $faker->name(),
        'phone_number' => $faker->phoneNumber(),
    ];
});
