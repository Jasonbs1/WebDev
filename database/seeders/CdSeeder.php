<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class CdSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $faker = Faker::create(); // Create a Faker instance

        foreach (range(1, 10) as $index) { // Generate 10 fake entries
            DB::table('c_d_s')->insert([
                'cd_title' => $faker->sentence,
                'cd_author' => $faker->name,
                'cd_genre' => $faker->word,
                'cd_description' => $faker->paragraph,
                'cd_publish_date' => $faker->date,
                'cd_price' => $faker->numberBetween(5, 50),
            ]);
        }
    }
}
