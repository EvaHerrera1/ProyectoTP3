<?php

namespace Database\Factories;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ProveedorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $models = Proveedor::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //

            'Nombre del Proveedor' => $this->faker->name,
            'Compañia' => $this->faker->Company,
            'Telefono' => $this->faker->PhoneNumber,
            'Direccion' => $this->faker->address(),
        ];
    }
}
