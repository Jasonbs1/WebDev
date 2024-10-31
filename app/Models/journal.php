<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class journal extends Model
{
    //
    protected $fillable = [
        'journal_title',
        'journal_author',
        'journal_genre',
        'journal_genre',
        'journal_description',
        'journal_publish_date'
    ];
}
