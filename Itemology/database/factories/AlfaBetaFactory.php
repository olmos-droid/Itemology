<?php

namespace Database\Factories;

use App\Models\Alfa;
use App\Models\AlfaBeta;
use App\Models\Beta;
use Illuminate\Database\Eloquent\Factories\Factory;

class AlfaBetaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            $beta=Beta::all()
            $alfa = $beta->alfa

        ];
    }
}
