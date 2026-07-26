<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;

class MovieController extends Controller
{
    /**
     * GET /api/movies
     */
    public function index()
    {
        $movies = Movie::all();
        return response()->json($movies);
    }

    /**
     * Post /api/movies
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string',
            'release_year' => 'required|integer',
            'genres_ids' => 'sometimes|array',
            'genres_ids.*' => 'integer|exists:genres,id',
        ]);

        $movie = new Movie();
        $movie->title = $request->title;
        $movie->release_year = $request->release_year;

        $movie->save();

        if ($request->has('genres_ids')) {
            $movie->genres()->sync($request->genres_ids);
        }

        $result = $movie->toArray();

        $result['genres'] = $movie->genres()->pluck('name')->values()->toArray();

        return response()->json($result, 201);
    }

    /**
     * Get /api/movies/{id}
     */
    public function show(int $id)
    {
        $movie = Movie::find($id);

        if (!$movie) {
            return response()->json(['message' => 'Movie not found'], 404);
        }

        $result = $movie->toArray();

        $result['genres'] = $movie->genres()->pluck('name')->values()->toArray();

        return response()->json($result);
    }

    /**
     * Put /api/movies/{id}
     */
    public function update(Request $request, int $id)
    {
        $movie = Movie::find($id);

        if (!$movie) {
            return response()->json(['message' => 'Movie not found'], 404);
        }

        $request->validate([
            'title' => 'required|string',
            'release_year' => 'required|integer',
            'genres_ids' => 'sometimes|array',
            'genres_ids.*' => 'integer|exists:genres,id',
        ]);

        $movie->title = $request->title;
        $movie->release_year = $request->release_year;

        $movie->save();

        if ($request->has('genres_ids')) {
            $movie->genres()->sync($request->genres_ids);
        }

        $result = $movie->toArray();

        $result['genres'] = $movie->genres()->pluck('name')->values()->toArray();

        return response()->json($result);
    }

    /**
     * Delete /api/movies/{id}
     */
    public function destroy(int $id)
    {
        $movie = Movie::find($id);

        if (!$movie) {
            return response()->json(['message' => 'Movie not found'], 404);
        }

        $movie->genres()->detach();
        $movie->delete();

        return response()->noContent();
    }
}
