<?php

use Illuminate\Database\Seeder;

class ClinicsEvaluationsTableSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Models\ClinicsEvaluation::class)->create();
    }
}
