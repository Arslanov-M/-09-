<?php

namespace Database\Seeders;

use App\Models\Street;
use Illuminate\Database\Seeder;

class StreetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $objs = [

            ['name' => 'Katowki', 'district_id' => '1'],
            ['name' => 'YunusEmre', 'district_id' => '2'],

        ];

        foreach ($objs as $obj) {
            Street::create([
                'name' => $obj['name'],
                'district_id' => $obj['district_id'],
            ]);
        }
    }
}
