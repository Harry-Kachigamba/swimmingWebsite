<?php

namespace App\Http\Controllers;

abstract class Controller
{
    //
    public function index()
    {
        return view('home');
    }

    public function category() {
        return view('categories');
    }
}
