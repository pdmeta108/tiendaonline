<?php

namespace Database\Factories;

use App\Models\Producto;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Producto::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'codigo_producto' => $this->faker->unique()->numerify('A######'),
            'nombre' => $this->faker->name,
            'descripcion' => $this->faker->sentence,
            'precio'=> $this->faker->randomFloat(2, 10, 100),
            'user_id'=> User::factory()
        ];
    }
}
