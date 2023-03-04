<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ProductsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->unique()->sentence(),
            'content' => $this->faker->text(),
            'image_path' => $this->faker->imageUrl(640, 480),
            'price' => $this->faker->numberBetween(0, 1000000000),
            'gender' => $this->faker->text(),
            'description' => $this->faker->text(),
            'detail' => $this->faker->text(),
            'condition' => $this->faker->text(),
        ];
    }
}
