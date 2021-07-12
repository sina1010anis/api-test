<?php

namespace Database\Factories;

use App\Models\Card;
use Illuminate\Database\Eloquent\Factories\Factory;

class CardFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Card::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'number' => rand(1111,9999).'-'.rand(1111,9999).'-'.rand(1111,9999).'-'.rand(1111,9999),
            'bank_id' => rand(1,10)
        ];
    }
}
