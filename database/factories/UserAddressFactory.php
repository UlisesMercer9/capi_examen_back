<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class UserAddressFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'domicilio' => $this->faker->address,
            'numero_exterior' => $this->faker->buildingNumber,
            'colonia' => $this->faker->streetAddress,
            'cp' => $this->faker->randomNumber(5, true),
            'ciudad' => $this->faker->city,
            'fecha_nacimento' => $this->faker->date()
        ];
    }
}
