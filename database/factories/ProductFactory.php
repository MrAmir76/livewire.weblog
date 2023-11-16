<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{

    public function definition()
    {
        $thousand = 10 ** 3;
        $productName = [
            'تیشرت ترکیه‌ای سایز 35',
            'تیشرت ترکیه‌ای سایز 50',
            'شلوارکتان سایز 50',
            'شلوارکتان سایز 30',
            'شلوار جین سایز 44',
            'پیراهن زمستانی مردانه سایز 44',
            'پیراهن زمستانی مردانه سایز 45',
            'پیراهن زمستانی زنانه سایز 35',
            'پیراهن زمستانی زنانه سایز 48',
        ];
        $tag = [
            ['تک سایز', 'bi bi-textarea-resize'],
            ['تخفیف ویژه', 'bi bi-percent'],
            ['شگفت انگیز', 'bi bi-magic']
        ];
        return [
            'name' => $productName[rand(0, 8)],
            'description' => $this->faker->text(300),
            'price' => $this->faker->numberBetween(500, 15000) * $thousand,
            'image_address' => $this->faker->imageUrl(),
            'tag' => $tag[rand(0, 2)][0],
            'tag_icon' => $tag[rand(0, 2)][1],
        ];
    }
}
