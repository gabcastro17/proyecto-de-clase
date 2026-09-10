<?php

namespace Database\Factories;

use App\Models\category;
use App\Models\product;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<product>
 */
class productFactory extends Factory
{
    protected $model = product::class;
    
    public function definition(): array
    {
        return [
            'name'=>fake()->name(),
            'description'=>fake()->paragraph(),
            'price'=>fake()->randomFloat(2, 1, 100),
            'category_id'=>category::inRandomOrder()->first()->id
        ];
    }
}
