<?php

$factory->define(App\Metodologium::class, function (Faker\Generator $faker) {
    return [
        "titulo" => $faker->name,
        "conteudo" => $faker->name,
    ];
});
