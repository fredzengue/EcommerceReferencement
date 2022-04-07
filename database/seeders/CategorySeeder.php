<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
            'name' => 'épices'
        ])->countries()->attach([
            rand(1, 6),
            rand(1, 6)
        ]);
        Category::create([
            'name' => 'fruits'
        ])->countries()->attach([
            rand(1, 6),
            rand(1, 6)
        ]);
        Category::create([
            'name' => 'surgelés'
        ])->countries()->attach([
            rand(1, 6),
            rand(1, 6)
        ]);
        Category::create([
            'name' => 'légumes'
        ])->countries()->attach([
            rand(1, 6),
            rand(1, 6)
        ]);
    }
}
