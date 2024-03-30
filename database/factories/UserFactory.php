<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * The current password being used by the factory.
     */
    protected static ?string $password;

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
            'email_verified_at' => now(),
            'password' => static::$password ??= Hash::make('password'),
            'phone' => fake()->phoneNumber,
            'address' => fake()->address,
            'student_no' => fake()->randomNumber(),
            'last_name' => fake()->lastName,
            'first_name' => fake()->firstName,
            'gender' => fake()->randomElement(['Male', 'Female']),
            'age' => fake()->numberBetween(17, 60),
            'college' => fake()->word,
            'course' => fake()->word,
            'year_level' => fake()->numberBetween(1, 4),
            'current_gwa' => fake()->randomFloat(2, 1, 5),
            'household_income' => fake()->randomFloat(2, 100000, 1000000),
            'photo' => fake()->imageUrl('60','60'),
           
            'role' => fake()->randomElement(['admin','agent', 'opa', 'user',]),
            'status' => fake()->randomElement(['active','inactive']),
            'remember_token' => Str::random(10),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     */
    public function unverified(): static
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
