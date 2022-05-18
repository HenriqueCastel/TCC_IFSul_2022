<?php

use Faker\Generator as Faker;

$factory->define(App\Models\DoctorsEvaluation::class, function (Faker $faker) {
    return [
        'nota'        => $faker->char(1),
        'comentario'  => $faker->text(200),
        'patient_id'  => function () {
            return factory(App\Models\Patient:class)->create()->id;
        },
        'doctor_id'  => function () {
            return factory(App\Models\Doctor:class)->create()->id;
        }
    ];
});