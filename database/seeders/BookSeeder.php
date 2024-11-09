<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $faker = Faker::create(); // Create a Faker instance

        foreach (range(1, 10) as $index) { // Generate 10 fake entries
            DB::table('books')->insert([
                'book_title' => $faker->sentence,
                'book_author' => $faker->name,
                'book_genre' => $faker->word,
                'book_description' => $faker->paragraph,
                'book_publish_date' => $faker->date,
            ]);     
        }
    }
}
