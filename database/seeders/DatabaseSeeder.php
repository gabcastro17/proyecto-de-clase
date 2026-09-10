<?php

namespace Database\Seeders;

use App\Models\category;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        $category1 = new category();
        $category1->name = "Belleza";
        $category1->description = "Productos de belleza y maquillaje";
        $category1->save();

        category::factory(1000)->create();

    }
}
