<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\GenreController;

Route::apiResource('movies', MovieController::class);
Route::apiResource('genres', GenreController::class)->only(['index', 'show']);
