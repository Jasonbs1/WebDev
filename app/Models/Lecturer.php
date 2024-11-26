<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lecturer extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'email', 'lecturer_id', 'department',
    ];

    // Define relationship with Reservation model
    public function reservations()
    {
        return $this->hasMany(Reservation::class, 'lecturer_id'); // Assuming 'lecturer_id' is the foreign key in the reservations table
    }

    // Define relationship with Collection model (if applicable)
    public function collections()
    {
        return $this->hasMany(Collection::class); // Assuming they can add journals, books, etc.
    }
}
