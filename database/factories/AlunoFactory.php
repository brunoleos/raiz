<?php

$factory->define(App\Aluno::class, function (Faker\Generator $faker) {
    return [
        "nome" => $faker->name,
        "escola_id" => factory('App\Escola')->create(),
        "idade" => $faker->name,
        "serie" => $faker->name,
        "turma" => $faker->name,
        "turno" => $faker->name,
        "endereco" => $faker->name,
        "nome_do_responsavel" => $faker->name,
        "cpf_do_responsavel" => $faker->name,
        "telefone_do_responsavel" => $faker->name,
        "email_do_responsavel" => $faker->name,
    ];
});
