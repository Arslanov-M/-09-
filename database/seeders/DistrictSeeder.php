<?php

namespace Database\Seeders;

use App\Models\District;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DistrictSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $objs = [

            ['name' => 'Parahat1', 'city_id' => '1'],
            ['name' => 'Parahat2', 'city_id' => '2'],

        ];

        foreach ($objs as $obj) {
            District::create([
                'name' => $obj['name'],
                'city_id' => $obj['city_id'],
            ]);
        }
    }
}
