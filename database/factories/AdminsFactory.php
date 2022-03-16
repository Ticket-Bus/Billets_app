<?php

namespace Database\Factories;
use App\Models\Admins;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
class AdminsFactory extends Factory
{
    
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nomAdmin' => $this->faker->name(),
            'email' => $this->faker->unique()->safeEmail(),
            'numTel' => $this->faker->phoneNumber(),
            'remember_token' => Str::random(10)
        ];
    }
}
