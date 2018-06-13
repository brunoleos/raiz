<?php

$factory->define(App\Escola::class, function (Faker\Generator $faker) {
    return [
        "razao_social" => $faker->name,
        "nome_fantasia" => $faker->name,
        "cnpj" => $faker->name,
        "endereco" => $faker->name,
        "telefone" => $faker->name,
        "responsavel" => $faker->name,
    ];
});
