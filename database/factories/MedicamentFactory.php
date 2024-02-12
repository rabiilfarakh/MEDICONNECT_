<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Medicament;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Medicament>
 */
class MedicamentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Medicament::class;

    public function definition(): array
    {
        return [
            'nom' => $this->faker->word,
            'dosage' => $this->faker->randomNumber(3),
            'quantite' => $this->faker->numberBetween(1, 100),
        ];
    }
}
