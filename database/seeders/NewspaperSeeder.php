<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class NewspaperSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $faker = Faker::create(); // Create a Faker instance

        foreach (range(1, 10) as $index) { // Generate 10 fake entries
            DB::table('news_papers')->insert([
                'np_title' => $faker->sentence,
                'np_author' => $faker->name,
                'np_genre' => $faker->word,
                'np_description' => $faker->paragraph,
                'np_publish_date' => $faker->date,
                'np_price' => $faker->numberBetween(1, 5),
            ]);
        }
    }
}
