<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    public $timestamps = false;

    protected $casts = [
        'release_year' => 'integer',
    ];

    public function genres()
    {
        return $this->belongsToMany(Genre::class, 'genre_movie', 'movie_id', 'genre_id');
    }
}
