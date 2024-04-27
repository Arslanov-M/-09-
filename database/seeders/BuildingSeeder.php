<?php

namespace Database\Seeders;


use App\Models\Building;
use Illuminate\Database\Seeder;

class BuildingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $objs = [

            ['number' => '1', 'street_id' => '1'],
            ['number' => '10', 'street_id' => '2'],

        ];

        foreach ($objs as $obj) {
            Building::create([
                'name' => $obj['name'],
                'street_id' => $obj['street_id'],
                'description' => fake()->paragraph(rand(5,15)),
            ]);
        }
    }
}
