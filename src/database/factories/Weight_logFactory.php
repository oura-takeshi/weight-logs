<?php

namespace Database\Factories;

use App\Models\Weight_log;
use Illuminate\Database\Eloquent\Factories\Factory;

class Weight_logFactory extends Factory
{
    protected $model = Weight_log::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => 1,
            'date' => $this->faker->date(),
            'weight' => $this->faker->randomFloat(1, 0, 999.9),
            'calories' => $this->faker->randomNumber(),
            'exercise_time' => $this->faker->time('H:i'),
            'exercise_content' => $this->faker->text(120)
        ];
    }
}
