<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Collection extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'type',
        'author',
        'publisher',
        'year',
        'description',
        'is_available',
        'lecturer_name', // New field
    ];


    // Collection can have multiple reservations
    public function reservations()
    {
        return $this->hasMany(Reservation::class);
    }

    // Collection can be part of access requests
    public function accessRequests()
    {
        return $this->hasMany(AccessRequest::class);
    }
}
