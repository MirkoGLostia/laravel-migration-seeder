<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Train>
 */
class TrainFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            
            'codice_treno' => fake() -> bothify('??-#######'),
            'azienda' => fake() -> randomElement([
                'azienda1', 'azienda2', 'azienda3', 'azienda4'
            ]),
            'stazione_di_partenza' => fake() -> city(),
            'stazione_di_arrivo' => fake() -> city(),
            'orario_di_partenza' => fake() -> time(),
            'orario_di_arrivo' => fake() -> time(),
            'numero_carrozze' => fake() -> randomDigitNot(0),
            'in_orario' => fake() -> boolean(),
            'cancellato' => fake() -> boolean()

        ];
    }
}
