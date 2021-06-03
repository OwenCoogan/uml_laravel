<?php

namespace Database\Factories;

use App\Models\Client;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Carbon\Carbon;

class ClientFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Client::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nom' => Str::random(10),
            'prenom' => Str::random(10),
            'date_naissance' => Carbon::parse('2000-01-01'),
            'numero_permis' => '1234567899876543',
            'email' => Str::random(10).'@gmail.com',
            'telephone' => '0688975656'
        ];
    }
}
