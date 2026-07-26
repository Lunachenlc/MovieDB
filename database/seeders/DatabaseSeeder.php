<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
         DB::table('movies')->insert([
            ['title' => 'The Shawshank Redemption', 'release_year' => 1994],
            ['title' => 'The Godfather', 'release_year' => 1972],
            ['title' => 'The Dark Knight', 'release_year' => 2008],
            ['title' => 'Pulp Fiction', 'release_year' => 1994],
            ['title' => 'The Lord of the Rings: The Return of the King', 'release_year' => 2003],
            ['title' => 'Forrest Gump', 'release_year' => 1994],
            ['title' => 'Inception', 'release_year' => 2010],
            ['title' => 'Fight Club', 'release_year' => 1999],
            ['title' => 'The Matrix', 'release_year' => 1999],
            ['title' => 'Goodfellas', 'release_year' => 1990],
            ['title' => 'The Empire Strikes Back', 'release_year' => 1980],
            ['title' => 'Interstellar', 'release_year' => 2014],
            ['title' => 'Parasite', 'release_year' => 2019],
            ['title' => 'The Green Mile', 'release_year' => 1999],
            ['title' => 'Gladiator', 'release_year' => 2000],
            ['title' => 'The Lion King', 'release_year' => 1994],
            ['title' => 'Saving Private Ryan', 'release_year' => 1998],
            ['title' => 'Schindler\'s List', 'release_year' => 1993],
            ['title' => 'The Silence of the Lambs', 'release_year' => 1991],
            ['title' => 'Avengers: Endgame', 'release_year' => 2019]
        ]);

        DB::table('genres')->insert([
            ['name' => 'Drama'], 
            ['name' => 'Crime'], 
            ['name' => 'Action'], 
            ['name' => 'Adventure'], 
            ['name' => 'Fantasy'], 
            ['name' => 'Sci-Fi'], 
            ['name' => 'Thriller'], 
            ['name' => 'Animation']
        ]);

        DB::table('genre_movie')->insert([
            ['movie_id' => 1, 'genre_id' => 1], 
            ['movie_id' => 1, 'genre_id' => 2], 
            ['movie_id' => 2, 'genre_id' => 1], 
            ['movie_id' => 2, 'genre_id' => 2], 
            ['movie_id' => 3, 'genre_id' => 3], 
            ['movie_id' => 3, 'genre_id' => 7], 
            ['movie_id' => 4, 'genre_id' => 1], 
            ['movie_id' => 4, 'genre_id' => 7],
            ['movie_id' => 5, 'genre_id' => 4], 
            ['movie_id' => 5, 'genre_id' => 5], 
            ['movie_id' => 6, 'genre_id' => 1], 
            ['movie_id' => 7, 'genre_id' => 3], 
            ['movie_id' => 7, 'genre_id' => 5], 
            ['movie_id' => 8, 'genre_id' => 1], 
            ['movie_id' => 8, 'genre_id' => 7],
            ['movie_id' => 9, 'genre_id' => 3], 
            ['movie_id' => 9, 'genre_id' => 6], 
            ['movie_id' => 10, 'genre_id' => 1], 
            ['movie_id' => 10, 'genre_id' => 2], 
            ['movie_id' => 11, 'genre_id' => 4], 
            ['movie_id' => 11, 'genre_id' => 5],
            ['movie_id' => 12, 'genre_id' => 3], 
            ['movie_id' => 12, 'genre_id' => 6], 
            ['movie_id' => 13, 'genre_id' => 1], 
            ['movie_id' => 13, 'genre_id' => 7], 
            ['movie_id' => 14, 'genre_id' => 1], 
            ['movie_id' => 14, 'genre_id' => 7],
            ['movie_id' => 15, 'genre_id' => 4], 
            ['movie_id' => 15, 'genre_id' => 5], 
            ['movie_id' => 16, 'genre_id' => 8], 
            ['movie_id' => 17, 'genre_id' => 3], 
            ['movie_id' => 17, 'genre_id' => 7], 
            ['movie_id' => 18, 'genre_id' => 1],
            ['movie_id' => 18, 'genre_id' => 2], 
            ['movie_id' => 19, 'genre_id' => 1], 
            ['movie_id' => 19, 'genre_id' => 7], 
            ['movie_id' => 20, 'genre_id' => 3], 
            ['movie_id' => 20, 'genre_id' => 5]
        ]);
    }
}
