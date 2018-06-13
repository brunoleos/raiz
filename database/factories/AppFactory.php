<?php

$factory->define(App\App::class, function (Faker\Generator $faker) {
    return [
        "aluno_id" => factory('App\Aluno')->create(),
        "escola_id" => factory('App\Escola')->create(),
        "personagem" => $faker->name,
        "pontuacaomax" => $faker->name,
        "itemcabeca" => $faker->name,
        "itemtorso" => $faker->name,
        "itemperna" => $faker->name,
        "runas" => $faker->name,
    ];
});
