<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Paciente;

class PacienteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */

    protected $model = Paciente::class; 
    public function definition()
    {
        return [
            'NombreP' => $this->faker->name,
            'Apellido' => $this->faker->lastName,
            'Años' => $this->faker->numberBetween(25,60),
            'Telefono' => $this->faker->phoneNumber,
        ];
    }
}
