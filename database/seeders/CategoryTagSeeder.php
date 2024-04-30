<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\CategoryTag;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoryTagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $objs = [
            ['name' => 'Park', 'models' => [
                'Central Park', 'Golden Gate', 'Hyde Park', 'Ueno Park', 'Jardin du Luxembourg',
            ]],
            ['name' => 'Hospital', 'models' => [
                'Mayo Clinic', 'Cleveland Clinic', 'Johns Hopkins Hospita', 'Massachusetts General', 'Sheba Medical Center',
            ]],
            ['name' => 'Company', 'models' => [
                'SAMSUNG', 'Apple', 'YAHOO', 'ALIBABA', 'PETRONAS','BUIGO',
            ]],
            ['name' => 'Goverment', 'models' => [
                'The White House', 'Houses of Parliament', 'Reichstag Building', 'National Diet Building',
            ]],
            ['name' => 'Shop', 'models' => [
                'Empire State Building', 'Arkach', 'Kamil', 'GBM-store',
            ]],
        ];

        foreach ($objs as $obj) {
            $category =Category::create([
                'name' => $obj['name'],
            ]);

            foreach ($obj['models'] as $model) {
                CategoryTag::create([
                    'category_id' => $category->id,
                    'name' => $model,
                ]);
            }
        }
    }
}
