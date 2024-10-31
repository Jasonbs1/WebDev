<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class books extends Model
{
    //
    protected $fillable = [
        'book_title',
        'book_author',
        'book_genre',
        'book_genre',
        'book_description',
        'book_publish_date'
    ];
}
