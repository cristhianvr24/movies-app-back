<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;

class MovieController extends Controller
{
    public function index()
    {
        return Movie::all();
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'genre' => 'required|string|max:255',
            'description' => 'required|string',
            'release_year' => 'required|digits:4|integer|min:1900|max:' . (date('Y')),
            'copies_available' => 'required|integer|min:1',
        ]);

        $movie = Movie::create($validatedData);

        return response()->json($movie, 201);
    }

    public function show($id)
    {
        return Movie::findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $movie = Movie::findOrFail($id);

        $validatedData = $request->validate([
            'title' => 'sometimes|string|max:255',
            'genre' => 'sometimes|string|max:255',
            'description' => 'sometimes|string',
            'release_year' => 'sometimes|digits:4|integer|min:1900|max:' . (date('Y')),
            'copies_available' => 'sometimes|integer|min:1',
        ]);

        $movie->update($validatedData);

        return response()->json($movie);
    }

       public function destroy($id)
    {
        $movie = Movie::findOrFail($id);

        $movie->delete();

        return response()->json(null, 204);
    }
}
