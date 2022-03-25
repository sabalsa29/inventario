<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nombre'        => $this->faker->randomElement(['Producto'.Str::random(3)]),
            'sku'           => Str::random(8),
            'categoria_id'  => $this->faker->randomElement(['1', '2','3']),
            'descripcion'   => 'Descripcion del producto',
            'precio'        => $this->faker->numerify('###'),
            'cantidad'      => $this->faker->numberBetween(1,30),
            'estado'        => 1,
            'estatus'        => 1,

        ];
    }
}
