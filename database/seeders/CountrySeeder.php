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
        Country::created([
            'name' => 'cameroun'
        ]);
        Country::created([
            'name' => 'benin'
        ]);
        Country::created([
            'name' => "côte d'ivoire"
        ]);
        Country::created([
            'name' => 'maroc'
        ]);
        Country::created([
            'name' => 'sénégal'
        ]);
        Country::created([
            'name' => 'nigéria'
        ]);
    }
}
