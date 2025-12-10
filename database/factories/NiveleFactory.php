<?php

namespace Database\Factories;

use App\Models\Nivel;
use App\Models\Nivele;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Nivele>
 */
class NiveleFactory extends Factory
{
    /**
     * El nombre del modelo correspondiente a esta factory.
     *
     * @var class-string<\Illuminate\Database\Eloquent\Model>
     */
    protected $model = Nivele::class;

    /**
     * Define el estado predeterminado del modelo.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nombre' => fake()->word(),
            // agrega aquí otros campos con valores por defecto
        ];
    }
}
