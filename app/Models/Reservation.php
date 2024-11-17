<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;

    protected $fillable = [
        'collection_id',
        'student_id',
        'reserved_at',
        'due_date',
        'is_overdue'
    ];

    // Reservation belongs to a collection
    public function collection()
    {
        return $this->belongsTo(Collection::class);
    }
}
