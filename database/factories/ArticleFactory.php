<?php

namespace Database\Factories;

use App\Models\articel;
use App\Models\article;
use Illuminate\Database\Eloquent\Factories\Factory;

class ArticleFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = articel::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'body' => $this->faker->paragraph(5),
            'view' => rand(0,50),
            'like' => rand(0,50),
            'user_id' =>1,
            'menu_id' => rand(1,5),
        ];
    }
}
