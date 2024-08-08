<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServicesController extends Controller
{
    //'services' function defined in the web.php (routes folder file).
    public function services() {
        return view('services');
    }
}
