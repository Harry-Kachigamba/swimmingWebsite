<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//Import the Models
use App\Models\SwimmingSite;

class SiteController extends Controller
{
    public function create() {
        return view('sites.create');
    }

    public function store(Request $request) {
        $request->validate([
            'SiteName' => 'required|string|max:255',
            'SiteDescription' => 'nullable|string',
            'SiteLocation' => 'nullable|string',
            'SiteContacts' => 'required|string|max:255',
        ]);

        SwimmingSite::create([
            'SiteName' => $request->SiteName,
            'SiteDescription' => $request->SiteDescription,
            'SiteLocation' => $request->SiteLocation,
            'SiteContacts' => $request->SiteContacts,
        ]);

        return redirect()->route('sites.create')->with('success', 'Sites added successfully!');
    }
}
