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
        $imgPath = $this->faker->image(storage_path('app/public/uploads/products'), $width = 640, $height = 480, 'cats', false);
        return [
            'name' => $this->faker->name(),
            'cate_id' => Category::all()->random()->id,
            'image' => "uploads/products/" . $imgPath,
            'price' => rand(100000, 200000),
            'quantity' => rand(1,10),
            'status' => rand(1,2)
        ];
    }
}
