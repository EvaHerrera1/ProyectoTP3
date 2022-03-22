<?php

namespace Database\Factories;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ClienteFactory extends Factory
{
    protected $models = Cliente::class;
      /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'Nombre' => $this->faker->name,
            'Tipo de Cliente'=> $this->faker-> randomElement($array= array ('Premiun','Clasico','Oro'))
        ];
    }
}
