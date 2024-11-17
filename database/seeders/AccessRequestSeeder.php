<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\AccessRequest;

class AccessRequestSeeder extends Seeder
{
    public function run()
    {
        AccessRequest::create([
            'collection_id' => 2, // Assuming Collection ID 2 exists
            'student_id' => 102, // Replace with actual student IDs
            'librarian_id' => 1, // Replace with actual librarian IDs
            'is_approved' => true,
        ]);
    }
}

