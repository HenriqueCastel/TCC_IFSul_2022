<?php

use Illuminate\Database\Seeder;

class PatientsEvaluationsTableSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Models\PatientsEvaluation::class)->create();
    }
}
