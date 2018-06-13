<?php

$factory->define(App\Familium::class, function (Faker\Generator $faker) {
    return [
        "nome" => $faker->name,
        "funcao" => $faker->name,
        "descricao" => $faker->name,
        "facebook" => $faker->name,
        "twitter" => $faker->name,
        "email" => $faker->name,
    ];
});
