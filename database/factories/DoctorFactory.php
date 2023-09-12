<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use App\Models\Major;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Doctor>
 */
class DoctorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "name"=>fake()->name(),
            "email"=>fake()->safeEmail(),
            "city"=>fake()->city(),
            "password"=> Hash::make('password'),
            "image"=>fake()->imageurl(),
            "major_id"=>Major::inRandomOrder()->first()?->id

        ];
    }
}
