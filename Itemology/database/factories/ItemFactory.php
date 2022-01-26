<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ItemFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->name(),
            'synopsis' => $this->faker->realText(150, 2),
            'duration' => $this->faker->numberBetween(60, 200),
            'type' => $this->faker->boolean(),
            'year' => $this->faker->year(),
            'price' => $this->faker->numberBetween($min = 15, $max = 60),
            'image' => $this->faker->imageUrl($width = 320, $height = 240, 'Image', true),
            'file' => $this->faker->file($sourceDir = '/', $targetDir = '/tmp'),
        ];
    }
}
