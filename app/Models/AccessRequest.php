<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AccessRequest extends Model
{
    use HasFactory;

    protected $fillable = [
        'collection_id',
        'student_id',
        'librarian_id',
        'is_approved'
    ];

    // AccessRequest belongs to a collection
    public function collection()
    {
        return $this->belongsTo(Collection::class);
    }

    // AccessRequest belongs to a librarian
    public function librarian()
    {
        return $this->belongsTo(Librarian::class);
    }
}
