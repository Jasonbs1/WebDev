<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Reservation;

class ReservationSeeder extends Seeder
{
    public function run()
    {
        Reservation::create([
            'collection_id' => 1, // Assuming Collection ID 1 exists
            'student_id' => 101, // Replace with actual student IDs
            'reserved_at' => now(),
            'due_date' => now()->addDays(14),
            'is_overdue' => false,
        ]);
    }
}
