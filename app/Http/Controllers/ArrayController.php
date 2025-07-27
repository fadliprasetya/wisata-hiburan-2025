<?php

namespace App\Http\Controllers;

class ArrayController extends Controller
{
    public function index()
    {
        $wisata = ['Ancol', 'Dufan', 'Jatim Park', 'Taman Mini'];
        return view('array.index', compact('wisata'));
    }
}

