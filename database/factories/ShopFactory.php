<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Owner;

class ShopFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $owner_id = Owner::where('id', '!=', 1)->pluck('id')->all();
        return [
            'owner_id' => $this->faker->unique()->randomElement($owner_id),
            'name' => $this->faker->streetName,
            'information' => $this->faker->text,
            'filename' => $this->faker->randomElement(['sample1.jpg', 'sample2.jpg', 'sample3.jpg', 'sample4.jpg', 'sample5.jpg', 'sample6.jpg']),
            'is_selling' => true,
        ];
    }
}
