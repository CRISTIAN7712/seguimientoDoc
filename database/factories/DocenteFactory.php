<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Docente>
 */
class DocenteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nombre'=>$this->faker->name(),
            'apellido'=>$this->faker->lastname(),
            'cedula'=>$this->faker->phoneNumber(),
            'celular'=>$this->faker->phoneNumber(),
            'correo'=>$this->faker->email(),
            'ciudad'=>$this->faker->randomElement(['Pasto','Cali']),
            'contrasena'=>$this->faker->phoneNumber()

        ];
    }
}
