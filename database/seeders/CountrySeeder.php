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
        $a = rand(1, 4);
        $b = rand(1, 4);
       
        Country::create([
            'name' => 'benin'
        ])->categories()->attach(randomCountry(2));
        Country::create([
            'name' => 'cameroun'
        ])->categories()->attach(randomCountry(4));
        Country::create([
            'name' => 'nigéria'
        ])->categories()->attach(randomCountry(3));
        Country::create([
            'name' => 'congo'
        ])->categories()->attach(randomCountry(4));
        Country::create([
            'name' => 'maroc'
        ])->categories()->attach(randomCountry(1));
        Country::create([
            'name' => 'sénégal'
        ])->categories()->attach(randomCountry(3));
    }
}
