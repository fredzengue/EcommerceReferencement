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
        ]);
        Category::create([
            'name' => 'fruits'
        ]);
        Category::create([
            'name' => 'surgelés'
        ]);
        Category::create([
            'name' => 'légumes'
        ]);
    }
}
