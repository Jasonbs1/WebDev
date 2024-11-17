<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Reminder;

class ReminderSeeder extends Seeder
{
    public function run()
    {
        Reminder::create([
            'librarian_id' => 1, // Replace with actual librarian IDs
            'message' => 'Update library collection for Q1 2024',
            'reminder_date' => now()->addWeeks(1),
        ]);
    }
}
