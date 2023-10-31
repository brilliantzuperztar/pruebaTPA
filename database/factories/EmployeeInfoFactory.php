<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\EmployeeInfo>
 */
class EmployeeInfoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'id_employee' => fake()->numberBetween(1,10),
            'id_position' => fake()->numberBetween(1,10),
            'id_leader' => fake()->numberBetween(1,10),
            'role' => fake()->jobTitle,
        ];
    }
}
