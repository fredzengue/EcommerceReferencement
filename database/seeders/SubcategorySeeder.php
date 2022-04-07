<?php

namespace Database\Seeders;

use App\Models\Subcategory;
use Illuminate\Database\Seeder;

class SubcategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        findCategory(2)->subcategories()->createMany([
            ['name' => 'Fruits frais'],
            ['name' => 'Fruits secs'],
        ]);
        findCategory(4)->subcategories()->createMany([
            ['name' => 'légumes simples'],
            ['name' => 'legumes BIO'],
        ]);
        findCategory(3)->subcategories()->createMany([
            ['name' => 'viande rouge'],
            ['name' => 'viande blanche'],
        ]);
    }
}
