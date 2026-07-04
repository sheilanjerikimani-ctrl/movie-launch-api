<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Film extends Model
{
    protected $fillable = [
        'title', 'slug', 'poster_url', 'logline',
        'synopsis', 'cast', 'release_date', 'trailer_url'
    ];
}
