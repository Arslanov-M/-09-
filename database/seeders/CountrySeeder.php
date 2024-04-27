<?php

namespace Database\Seeders;

use App\Models\Country;
use Illuminate\Database\Seeder;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $objs = [

            ['name' => 'Turkmenistan', 'code' => 'TKM'],
            ['name' => 'USA', 'code' => 'US'],

        ];

        foreach ($objs as $obj) {
            Country::create([
                'name' => $obj['name'],
                'code' => $obj['code'],
            ]);
        }
    }
}
