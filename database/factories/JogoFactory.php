<?php

$factory->define(App\Jogo::class, function (Faker\Generator $faker) {
    return [
        "titulo" => $faker->name,
        "conteudo" => $faker->name,
        "posicao" => $faker->name,
    ];
});
