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
            'filename' => '',
            'is_selling' => true,
        ];
    }
}
