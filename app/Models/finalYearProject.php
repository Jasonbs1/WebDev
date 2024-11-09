<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class finalYearProject extends Model
{
    //
    protected $fillable = [
        'fyp_title',
        'fyp_author',
        'fyp_genre',
        'fyp_genre',
        'fyp_description',
        'fyp_publish_date'
    ];
}
