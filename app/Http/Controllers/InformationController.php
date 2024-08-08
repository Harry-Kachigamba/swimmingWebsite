<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InformationController extends Controller
{
    //'information' function defined in the web.php (routes folder file).
    public function information() {
        return view('information');
    }
}
