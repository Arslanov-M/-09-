<?php

namespace Database\Seeders;

use App\Models\City;
use Illuminate\Database\Seeder;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $objs = [

            ['name' => 'Ashgabat', 'country_id' => '1'],
            ['name' => 'Mary', 'country_id' => '1'],

        ];

        foreach ($objs as $obj) {
            City::create([
                'name' => $obj['name'],
                'country_id' => $obj['country_id'],
            ]);
        }
    }
}
