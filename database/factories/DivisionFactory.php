<?php

namespace Database\Factories;

use App\Models\Division;
use Faker\Guesser\Name;
use Illuminate\Database\Eloquent\Factories\Factory;

class DivisionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = Division::class;
    public function definition()
    {
        return [
            'nombre'=> $this->faker->unique()->word(),
            'supdivision'=> $this->faker->optional(0.7,null)->word(),
            'subdivision'=> $this->faker->randomNumber(2, false),
            'nivel'=> $this->faker->randomNumber(2, false),
            'cantidad'=> $this->faker->randomNumber(2, false),
            'embajador'=>$this->faker->name()
        ];
    }
}
