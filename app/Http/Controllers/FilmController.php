<?php

namespace App\Http\Controllers;

use App\Models\Film;
use Illuminate\Http\Request;

class FilmController extends Controller
{
    public function index()
    {
        return Film::orderBy('release_date')->get();
    }

    public function show($slug)
    {
        $film = Film::where('slug', $slug)->firstOrFail();
        return response()->json($film);
    }
}
