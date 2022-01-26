<?php

namespace Database\Seeders;

use App\Models\Alfa;

use Illuminate\Database\Seeder;

class AlfaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Alfa::factory(100)->create();

    }
}
