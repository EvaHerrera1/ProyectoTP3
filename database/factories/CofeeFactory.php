<?php

namespace Database\Factories;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class CofeeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $models = Cofee::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //

            'Nombre del cofee' => $this->faker->name(),
            'Precio' => $this->faker->numberbetween(50, 150),
            'Tamaño del cofee'=> $this->faker-> randomElement($array= array ('Cappuccino','','Espresso', 'Americano','Mocaccino'))
        ];
    }
}
