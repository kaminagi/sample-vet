<?php

use Faker\Generator as Faker;

$factory->define(App\Patient::class, function (Faker $faker) {
    $owner = factory('App\Owner')->create();

    return [
        'owner_id' => $owner->id,
        'name' => $faker->name(),
        'species' => $faker->name(),
        'color' => $faker->colorName(),
        'date_of_birth' => $faker->date(),
    ];
});
