<?php

namespace Database\Factories;

use App\Models\category;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<category>
 */
class categoryFactory extends Factory
{
    protected $model = category::class;

    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'description'=>fake()->paragraph()
        ];
    }
}
