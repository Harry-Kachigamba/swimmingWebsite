<?php

namespace App\Http\Controllers;

use App\Models\Place;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search(Request $request) 
    {
        $query = $request->input('search');

        $results = Place::where('name', 'LIKE', "%{$query}%")
                            ->orWhere('description', 'LIKE', "%{$query}%")
                            ->orWhere('location', 'LIKE', "%{$query}%")
                            ->get();

        return view('search.results', compact('results', 'query'));
    }
}
