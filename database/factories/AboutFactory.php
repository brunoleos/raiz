<?php

$factory->define(App\About::class, function (Faker\Generator $faker) {
    return [
        "titulo" => $faker->name,
        "subtitulo" => $faker->name,
        "conteudo" => $faker->name,
        "numero" => $faker->name,
        "chamada" => $faker->name,
        "beneficios" => $faker->name,
    ];
});
