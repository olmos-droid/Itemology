<?php

namespace Database\Seeders;

use App\Models\Beta;


use Illuminate\Database\Seeder;

class BetaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Beta::factory(100)->create();

    }
}
