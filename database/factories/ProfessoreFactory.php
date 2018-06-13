<?php

$factory->define(App\Professore::class, function (Faker\Generator $faker) {
    return [
        "nome" => $faker->name,
        "escola_id" => factory('App\Escola')->create(),
        "materias" => $faker->name,
        "turmas" => $faker->name,
    ];
});
