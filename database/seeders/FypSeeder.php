<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class FypSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $faker = Faker::create(); // Create a Faker instance

        foreach (range(1, 10) as $index) { // Generate 10 fake entries
            DB::table('final_year_projects')->insert([
                'fyp_title' => $faker->sentence,
                'fyp_author' => $faker->name,
                'fyp_genre' => $faker->word,
                'fyp_description' => $faker->paragraph,
                'fyp_publish_date' => $faker->date,
                'fyp_price' => $faker->numberBetween(100, 500),
            ]);
        }
    }
}
