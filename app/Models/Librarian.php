<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Librarian extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'email', 'phone'];

    // Librarian updates collections
    public function collections()
    {
        return $this->hasMany(Collection::class);
    }

    // Librarian approves access requests
    public function accessRequests()
    {
        return $this->hasMany(AccessRequest::class);
    }

    // Librarian receives reminders
    public function reminders()
    {
        return $this->hasMany(Reminder::class);
    }
}
