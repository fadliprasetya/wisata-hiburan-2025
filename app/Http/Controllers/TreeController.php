<?php

namespace App\Http\Controllers;

class TreeController extends Controller
{
    public function index()
    {
        // Struktur pohon wisata
        $tree = [
            'Indonesia' => [
                'Jawa' => [
                    'Jakarta' => ['Dufan', 'Taman Mini'],
                    'Jawa Timur' => ['Jatim Park', 'Batu Night Spectacular']
                ],
                'Bali' => [
                    'Denpasar' => ['Sanur', 'Garuda Wisnu Kencana'],
                    'Ubud' => ['Monkey Forest', 'Tegallalang Rice Terrace']
                ]
            ]
        ];

        return view('tree.index', compact('tree'));
    }
}

