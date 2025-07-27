<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function index(Request $request)
    {
        $wisata = ['Ancol', 'Dufan', 'Jatim Park', 'Taman Mini', 'Garuda Wisnu Kencana', 'Museum Angkut'];
        $keyword = $request->input('q');
        $hasil = [];

        if ($keyword) {
            foreach ($wisata as $w) {
                if (stripos($w, $keyword) !== false) {
                    $hasil[] = $w;
                }
            }
        }

        return view('search.index', compact('hasil', 'keyword'));
    }
}

