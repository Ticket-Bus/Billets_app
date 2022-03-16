<?php

namespace Database\Factories;
use App\Models\Clients;
use Illuminate\Support\Str;

use Illuminate\Database\Eloquent\Factories\Factory;

class ClientsFactory extends Factory
{
     /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Clients::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'nomUtilisateur' => $this->faker->name(),
            'emailUtilisateur' => $this->faker->unique()->safeEmail(),
            'numTelUtilisateur' => $this->faker->phoneNumber(),
            'remember_token' => Str::random(10)
        ];
    }
}
