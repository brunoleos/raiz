<?php

$factory->define(App\Slideshow::class, function (Faker\Generator $faker) {
    return [
        "titulo" => $faker->name,
        "chamada" => $faker->name,
    ];
});
