<?php

namespace App\Http\Controllers;

class GraphController extends Controller
{
    public function index()
    {
        // Simulasi graf: relasi antar wisata
        $graph = [
            'Dufan' => ['Taman Mini', 'Ancol', 'SeaWorld'],
            'Jatim Park' => ['Batu Night Spectacular', 'Museum Angkut'],
            'Garuda Wisnu Kencana' => ['Pantai Pandawa', 'Uluwatu'],
        ];

        return view('graph.index', compact('graph'));
    }
}

