<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Visita;

class VisitaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */

    protected $model = Visita::class;
    public function definition()
    {
        return [
            //
            'Tipo de visita' => $this->faker->domainWord,
            'fecha' => $this -> faker -> dateTime($max = 'now', $timezone = null),
            'Ultima visita realizada' => $this -> faker -> dateTime($max = 'now', $timezone = null),
            'Esatdo de la visita' => $this->faker->tld,
        ];
    }
}

