<?php

namespace Database\Factories;

use App\Models\Contrat;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Carbon\Carbon;

class ContratFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Contrat::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'id_employe' => 2,
            'id_client' => 1,
            'date_debut' => Carbon::parse('2000-01-01'),
            'date_fin' => Carbon::parse('2000-01-08'),
            'km_avant' => 42,
            'km_apres' => 42,
        ];
    }
}
