<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Doctor;

class DoctorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */

    protected $model = Doctor::class;
    public function definition()
    {
        return [
            'NombreD' => $this->faker->lastName,
            'Apellido' => $this->faker->lastName,
            'Años' => $this->faker->numberBetween(25,60),
            'Telefono' => $this->faker->phoneNumber,
            'Correo' => $this->faker->email,
            'Dirección' => $this->faker->address,
        
        ]; 
    }
}