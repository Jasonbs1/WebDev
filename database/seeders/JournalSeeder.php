<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class JournalSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create(); // Create a Faker instance

        foreach (range(1, 10) as $index) { // Generate 10 fake entries
            DB::table('journals')->insert([
                'journal_title' => $faker->sentence,
                'journal_author' => $faker->name,
                'journal_genre' => $faker->word,
                'journal_description' => $faker->paragraph,
                'journal_publish_date' => $faker->date,
                'journal_price' => $faker->numberBetween(50, 200),
            ]);
        }
    }
}
