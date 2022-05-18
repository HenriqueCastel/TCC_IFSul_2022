<?php

use Illuminate\Database\Seeder;

class DoctorsEvaluationsTableSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Models\DoctorsEvaluation::class)->create();
    }
}
