<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Order;
use Illuminate\Database\Eloquent\Factories\Factory;

class OrderFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Order::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => function(){return User::factory()->create()->id;},
            'order_address' => $this->faker->address(),
            'order_region' => $this->faker->state(),
            'order_city' => $this->faker->city(),
        ];
    }
}
