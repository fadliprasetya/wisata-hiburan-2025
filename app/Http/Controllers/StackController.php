<?php

namespace App\Http\Controllers;

class StackController extends Controller
{
    public function index()
    {
        // Simulasi stack (LIFO)
        $stack = [];

        // Push ke stack
        array_push($stack, 'Dufan');
        array_push($stack, 'Trans Studio');
        array_push($stack, 'Waterboom');

        // Pop elemen terakhir
        $popped = array_pop($stack);

        return view('stack.index', compact('stack', 'popped'));
    }
}

