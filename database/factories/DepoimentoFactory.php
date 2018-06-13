<?php

$factory->define(App\Depoimento::class, function (Faker\Generator $faker) {
    return [
        "nome" => $faker->name,
        "depoimento" => $faker->name,
    ];
});
