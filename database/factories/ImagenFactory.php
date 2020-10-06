<?php

namespace Database\Factories;

use App\Models\Imagen;
use Illuminate\Database\Eloquent\Factories\Factory;

class ImagenFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Imagen::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'id' => $this->faker->unique()->randomNumber(5, true),
            'nombre' => $this->faker->word,
            'descripcion' => $this->faker->sentence,
            'producto_id' => Producto::factory()
        ];
    }
}
