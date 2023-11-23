<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\adress>
 */
class AddressFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    private static $order = 1;
    public function definition(): array
    {
        return [
            'address' => fake()->address(),
            'user_id' => self::$order++,
        ];
    }
}
