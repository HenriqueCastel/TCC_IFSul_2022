<?php

use Faker\Generator as Faker;

$factory->define(App\Models\ClinicsEvaluation::class, function (Faker $faker) {
    return [
        'nota'        => $faker->char(1),
        'comentario'  => $faker->text(200),
        'patient_id'  => function () {
            return factory(App\Models\Patient:class)->create()->id;
        },
        'clinic_id'  => function () {
            return factory(App\Models\Clinic:class)->create()->id;
        }
    ];
});