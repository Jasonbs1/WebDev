<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reminder extends Model
{
    use HasFactory;

    protected $fillable = [
        'librarian_id',
        'message',
        'reminder_date'
    ];

    // Reminder belongs to a librarian
    public function librarian()
    {
        return $this->belongsTo(Librarian::class);
    }
}
