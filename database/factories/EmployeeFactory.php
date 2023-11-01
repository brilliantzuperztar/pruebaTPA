<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Employee>
 */
class EmployeeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            
                'name' => fake()->firstName(),
                'lastname' => fake()->lastName(),
                'identification' => fake()->numberBetween(100000,199999),
                'country' => fake()->country(),
                'city' => fake()->city(),
                'number' => fake()->phoneNumber(),
                'address' => fake()->address(), 
                'administrator' => fake()->numberBetween(0,1),
            
        ];
    }
}
