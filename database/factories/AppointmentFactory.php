<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Appointment::class, function (Faker $faker) {
    return [
        'valor'       => $faker->double(5),
        'data'        => $faker->date(),
        'hora'        => $faker->time(),
        'duracao'     => $faker->time(),
        'patient_id'  => function () {
            return factory(App\Models\Patient:class)->create()->id;
        },
        'doctor_id'  => function () {
            return factory(App\Models\Doctor:class)->create()->id;
        }
    ];
});