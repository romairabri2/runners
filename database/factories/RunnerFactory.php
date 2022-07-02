<?php

namespace Database\Factories;

use App\Models\Runner;
use Illuminate\Database\Eloquent\Factories\Factory;

class RunnerFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Runner::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => $this->faker->randomDigitNotNull,
        'name' => $this->faker->word,
        'apellido' => $this->faker->word,
        'telefono' => $this->faker->word,
        'foto' => $this->faker->word,
        'antecedentes' => $this->faker->word,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
