<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'productname' => $this->faker->name(),
            // 'productdetail' => $this->faker->paragraph(mt_rand(5, 10)),
            'productdetail' => $this->faker->text(),
            // 'productprice' => $this->faker->randomFloat(2, 0, 1000),
            'productprice' => $this->faker->randomNumber(mt_rand(2, 3)),
            'productphoto' => $this->faker->imageUrl(640, 480),
        ];
    }
}
