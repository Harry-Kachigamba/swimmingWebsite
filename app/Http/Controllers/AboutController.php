<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    //'about' function defined in the web.php (routes folder file).
    public function about() {
        return view('About');
    }
}
