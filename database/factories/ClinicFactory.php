<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Clinic::class, function (Faker $faker) {
    return [
        'email' => $faker->text(100),
        'senha' => $faker->text(30),
        'nome' => $faker->text(100),
        'cnpj' => $faker->char(11),
        'telefone' => $faker->char(11),
        'endereco' => $faker->text(20),
        'cep' => $faker->char(8),
        'descricao' => $faker->text(200),
    ];
});