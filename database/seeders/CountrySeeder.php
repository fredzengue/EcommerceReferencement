<?php

namespace Database\Seeders;

use App\Models\Country;
use Illuminate\Database\Seeder;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Country::create([
            'name' => 'benin'
        ])->categories()->attach([
            rand(1, 4),
            rand(1, 4)
        ]);
        Country::create([
            'name' => 'cameroun'
        ])->categories()->attach([
            rand(1, 4),
            rand(1, 4),
            rand(1, 4),
            rand(1, 4)
        ]);
        Country::create([
            'name' => 'nigéria'
        ])->categories()->attach([
            rand(1, 4),
            rand(1, 4),
            rand(1, 4)
        ]);
        Country::create([
            'name' => 'congo'
        ])->categories()->attach([
            rand(1, 4),
            rand(1, 4),
            rand(1, 4),
            rand(1, 4)
        ]);
        Country::create([
            'name' => 'maroc'
        ])->categories()->attach([
            rand(1, 4)
        ]);
        Country::create([
            'name' => 'sénégal'
        ])->categories()->attach([
            rand(1, 4),
            rand(1, 4),
            rand(1, 4)
        ]);
    }
}
