<?php

namespace Database\Seeders;

use App\Models\Review;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        $this->call([
            LocationSeeder::class,
            CategoryTagSeeder::class,
        ]);

        User::factory()
            ->count(20)
            ->create();

        Review::factory()
            ->count(40)
            ->create();


    }

}
