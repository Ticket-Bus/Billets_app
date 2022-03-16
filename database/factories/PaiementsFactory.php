<?php

namespace Database\Factories;
use Illuminate\Support\Str;
use App\Models\Paiements;
use App\Models\Billets;
use Illuminate\Database\Eloquent\Factories\Factory;

class PaiementsFactory extends Factory
{
     /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Paiements::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'montant' => $this->faker->numberBetween($min=1500,$max=10000),
            'datePaiement' => $this->faker->dateTime(),
            'billets_id' => Billets::all()->random()->id,
            'remember_token' => Str::random(10)
        ];
    }
}
