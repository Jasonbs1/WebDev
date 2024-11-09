<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CD extends Model
{
    //
    protected $fillable = [
        'cd_title',
        'cd_author',
        'cd_genre',
        'cd_genre',
        'cd_description',
        'cd_publish_date'
    ];

}
