<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class ReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        $product_array = Product::pluck('id')->toArray();
        foreach (range(1, 100) as $value) {
            $key = array_rand($product_array);

            DB::table('reviews')->insert([
                "product_id" => $product_array[$key],
                'customer' => $faker->name,
                'review' => $faker->paragraph,
                'star' => $faker->numberBetween(0, 5)
            ]);
        }
    }
}