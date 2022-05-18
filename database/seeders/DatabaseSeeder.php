<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            PatientsTableSeeder::class,
            DoctorsTableSeeder::class,
            ClinicsTableSeeder::class,
            PatientsEvaluationsTableSeeder::class,
            DoctorsEvaluationsTableSeeder::class,
            ClinicsEvaluationsTableSeeder::class,
            AppointmentsTableSeeder::class,]);
    }
}
