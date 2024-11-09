<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class newsPaper extends Model
{
    //
    protected $fillable = [
        'np_title',
        'np_author',
        'np_genre',
        'np_genre',
        'np_description',
        'np_publish_date'
    ];
}
