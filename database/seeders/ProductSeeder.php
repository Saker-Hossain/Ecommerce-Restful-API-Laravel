<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Str;
use Faker\Factory as Faker;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        foreach (range(1,10) as $value) {
            DB::table('products')->insert([
                'name' => $faker->name,
                'detail' => $faker->text,
                'price' => $faker->biasedNumberBetween($min = 10, $max = 20000, $function = 'sqrt'),
                'stock' => $faker->biasedNumberBetween($min = 10, $max = 100, $function = 'sqrt'),
                'discount' => $faker->biasedNumberBetween($min = 10, $max = 15, $function = 'sqrt'),
            ]);
        }
    }
}