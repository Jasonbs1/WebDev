<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Collection;

class CollectionSeeder extends Seeder
{
    public function run()
    {
        Collection::create([
            'title' => 'Introduction to Algorithms',
            'type' => 'book',
            'author' => 'Thomas H. Cormen',
            'publisher' => 'MIT Press',
            'year' => 2009,
            'description' => 'A comprehensive book on algorithms.',
            'is_available' => true,
        ]);

        Collection::create([
            'title' => 'Nature Journal',
            'type' => 'journal',
            'publisher' => 'Springer Nature',
            'year' => 2021,
            'is_available' => true,
        ]);

        Collection::create([
            'title' => 'Kompas Newspaper',
            'type' => 'newspaper',
            'publisher' => 'Kompas',
            'year' => 2024,
            'is_available' => true,
        ]);
    }
}
