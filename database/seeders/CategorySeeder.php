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
        Category::countries()->attach([
            rand(1,4),
            rand(1,4)
        ]);
        Category::created([
            'name' => 'surgelés'
        ]);
        Category::created([
            'name' => 'fruits'
        ]);
        Category::created([
            'name' => 'légumes'
        ]);
    }
}
