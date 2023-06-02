<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Member>
 */
class MemberFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'email' => fake()->unique()->safeEmail(),
            'phone' =>fake()->phoneNumber(),
            'address'=> fake()->address(),
            'join_at' => '21/05/2023',
            'expired' => '21/10/2023',
            'user_id' => 1,
            'p_trainer_id'  => 1
        ];
    }
}
