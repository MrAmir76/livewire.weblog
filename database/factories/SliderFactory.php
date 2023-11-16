<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class SliderFactory extends Factory
{

    public function definition()
    {
        return [
            'title' => $this->faker->title(),
            'image_address' => $this->faker->imageUrl(),
            'link' => $this->faker->url(),
        ];
    }
}
