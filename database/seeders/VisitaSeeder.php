<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Visita;

class VisitaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Visita::Factory(500)->create();
    }
}
