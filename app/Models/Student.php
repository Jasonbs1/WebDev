<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'email', 'student_id', 'program',
    ];

    // Define any relationships if necessary in the future
    // For now, we'll assume students can borrow collections
    public function reservations()
    {
        return $this->hasMany(Reservation::class);
    }
}
