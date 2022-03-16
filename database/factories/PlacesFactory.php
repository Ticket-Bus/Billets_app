<?php

namespace Database\Factories;
use Illuminate\Support\Str;
use App\Models\Places;
use App\Models\Voyages;
use Illuminate\Database\Eloquent\Factories\Factory;

class PlacesFactory extends Factory
{
     /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Places::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'numeroPlace' => $this->faker->unique()->numberBetween(0,20),
            'etat' => $this->faker->boolean(),
            'voyages_id' => Voyages::all()->random()->id,
            'remember_token' => Str::random(10)
        ];
    }
}
