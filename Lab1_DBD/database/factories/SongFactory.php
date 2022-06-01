<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Genre;
use App\Models\Album;
use App\Models\Location;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Song>
 */
class SongFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'Titulo' => $this->faker->words(2, true),
            'fecha_subida' => $this->faker->date(),
            'duracion' => $this->faker->numberBetween(0, 200),
            'restriccion_edad' => $this->faker->boolean(),
            'reproducciones' => $this->faker->randomNumber(1, 10000),
            'fecha_creacion' => $this->faker->date(),
            // 'id_genero' => Genre::all()->random()->id,
            // 'id_album' => Album::all()->random()->id,
            // 'id_pais' => Location::all()->random()->id,
        ];
    }
}
