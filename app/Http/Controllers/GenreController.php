<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Genre;

class GenreController extends Controller
{
    /**
     * GET /api/genres
     */
    public function index()
    {
        $genres = Genre::all();
        return response()->json($genres);
    }

    /**
     * GET /api/genres/{id}
     */
    public function show(int $id)
    {
        $genre = Genre::find($id);

        if (!$genre) {
            return response()->json(['message' => 'Genre not found'], 404);
        }

        $result = $genre->toArray();

        $result['movies'] = $genre->movies()->get()->map(function ($movie) {
            return [
                'id' => $movie->id,
                'title' => $movie->title,
            ];
        })->values()->toArray();
        
        return response()->json($result);
    }

}
