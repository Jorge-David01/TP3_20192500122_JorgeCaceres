<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Hospital;

class HospitalFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */

    protected $model = Hospital::class;
    public function definition()
    {
        return [
            'NombreH' => $this->faker->name,
            'Dirección' => $this->faker->address,
            'Telefono' => $this->faker->phoneNumber,
            'Numero_de_salas' => $this->faker->numberBetween(5,30),
        ];
    }
}
