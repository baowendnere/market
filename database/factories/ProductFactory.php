<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'category_id' => function(){return Category::factory()->create()->id;},
            'prod_designation' => $this->faker->unique()->realText(20),
            'prod_description' => $this->faker->realText(100),
            'prod_price' => $this->faker->numberBetween(500, 1000000),
            'prod_sku' => $this->faker->unique()->randomNumber(),
        ];
    }
}
