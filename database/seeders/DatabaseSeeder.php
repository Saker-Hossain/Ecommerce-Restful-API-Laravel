<?php

namespace Database\Seeders;

use Faker\Factory;
use Faker\Generator as Faker;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            ProductSeeder::class,
            ReviewSeeder::class
        ]);
        // Factory(ReviewSeeder::class,300)->create();
    }
}