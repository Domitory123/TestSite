<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'email' => 'admin@gmail.com',//$this->faker->unique()->safeEmail(),
            'email_verified_at' => now(),
            'admin' => 1,
            'password' => '$2y$10$JtD3WPj/QJIC658dBBxYW.IJ1QchM8yx/62oZ5lPRQFHEKiCWXV9G',//'Admin12345' // password
            'remember_token' => Str::random(10),
        ];
    }
 
    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    public function unverified()
    {
        return $this->state(function (array $attributes) {
            return [
                'email_verified_at' => null,
            ];
        });
    }
}
