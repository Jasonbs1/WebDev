<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Librarian;

class LibrarianSeeder extends Seeder
{
    public function run()
    {
        Librarian::create([
            'name' => 'John Doe',
            'email' => 'john.doe@university.edu',
            'phone' => '1234567890',
        ]);

        Librarian::create([
            'name' => 'Jane Smith',
            'email' => 'jane.smith@university.edu',
            'phone' => '0987654321',
        ]);
    }
}

