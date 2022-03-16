<?php

namespace Database\Factories;
use Illuminate\Support\Str;
use App\Models\Voyages;
use App\Models\Admins;
use Illuminate\Database\Eloquent\Factories\Factory;

class VoyagesFactory extends Factory
{
     /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Voyages::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'destination' => $this->faker->city(),
            'pointDepart' => $this->faker->city(),
            'dateArrive' => $this->faker->dateTime(),
            'dateDepart' => $this->faker->dateTime(),
            'nbrePlace' => $this->faker->numberBetween(0,10),
            'prix' => $this->faker->numberBetween(1000,10000),
            'immatriculation' => Str::random(4),
            'admins_id' => Admins::all()->random()->id,
            'remember_token' => Str::random(10)
        ];
    }
}
