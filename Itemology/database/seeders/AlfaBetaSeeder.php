<?php

namespace Database\Seeders;

use App\Models\AlfaBeta;
use App\Models\Beta;
use App\Models\Alfa;
use Illuminate\Database\Seeder;

class AlfaBetaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
            
AlfaBeta::factory(50)->create();

        
    }
}
