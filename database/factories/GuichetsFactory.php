<?php

namespace Database\Factories;
use Illuminate\Support\Str;
use App\Models\Guichets;
use Illuminate\Database\Eloquent\Factories\Factory;

class GuichetsFactory extends Factory
{
     /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Guichets::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'numGuichet' => $this->faker->unique()->numberBetween(1,5),
            'nomGuichetier' => $this->faker->name(),
            'pwdGuichetier' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
            'typeGuichet' => $this->faker->colorName(),
            'remember_token' => Str::random(10)

        ];
    }
}
