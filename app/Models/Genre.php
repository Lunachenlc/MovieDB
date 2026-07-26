<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    public $timestamps = false;

    public function movies()
    {
        return $this->belongsToMany(Movie::class, 'genre_movie', 'genre_id', 'movie_id');
    }
}
