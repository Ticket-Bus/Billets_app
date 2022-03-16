<?php

namespace Database\Factories;
use App\Models\Billets;
use App\Models\Clients;
use App\Models\Places;
use App\Models\Guichets;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class BilletsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Billets::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'numBillet' => $this->faker->numberBetween(1,20),
            'dateHeureDepart' => $this->faker->dateTime(),
            'etat' => $this->faker->boolean(),
            'clients_id' => Clients::all()->random()->id,
            'places_id' => Places::all()->random()->id,
            'guichets_id' => Guichets::all()->random()->id,
            'remember_token' => Str::random(10)

        ];
    }
}
