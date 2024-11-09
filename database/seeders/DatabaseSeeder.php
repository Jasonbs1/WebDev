<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\JournalSeeder;
use Database\Seeders\BookSeeder;
use Database\Seeders\CdSeeder;
use Database\Seeders\NewspaperSeeder;
use Database\Seeders\FypSeeder;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run()
    {
        // Calling the specific seeders
        $this->call([
            JournalSeeder::class,
            BookSeeder::class,
            CdSeeder::class,
            NewspaperSeeder::class,
            FypSeeder::class,
        ]);
    }
}
