<?php

namespace Database\Factories;

use App\Models\Vehicule;
use Illuminate\Database\Eloquent\Factories\Factory;

class VehiculeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Vehicule::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nom' => 'Ford Mustang',
            'immatriculation' => $this->faker->ean8(),
            'image' => 'https://www.automobile-magazine.fr/asset/cms/840x394/176850/config/125589/mach-1-photo-principale.webp?webp=1',
        ];
    }
}
