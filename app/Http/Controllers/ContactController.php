<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    //'contact' function defined in the web.php (routes folder file).
    public function contact() {
        return view('contact');
    }
}
