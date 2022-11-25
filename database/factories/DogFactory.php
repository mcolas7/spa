<?php

namespace Database\Factories;

use App\Models\Sex;
use App\Models\Size;
use Illuminate\Database\Eloquent\Factories\Factory;

class DogFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'sex_id' => Sex::inRandomOrder()->first()->sex_id,
            'size_id' => Size::inRandomOrder()->first()->size_id,
            'name' => $this->faker->name(),
            'image' => $this->faker->word(),
            'breed' => $this->faker->word(),
            'color' => $this->faker->word(),
            'adopted' => $this->faker->boolean()
        ];
    }
}
