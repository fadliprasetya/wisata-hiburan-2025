<?php

namespace App\Http\Controllers;

class QueueController extends Controller
{
    public function index()
    {
        // Simulasi queue (FIFO)
        $queue = [];

        // Tambah ke antrian
        array_push($queue, 'Kebun Binatang');
        array_push($queue, 'Ocean Dream');
        array_push($queue, 'JungleLand');

        // Keluarkan elemen pertama (dequeue)
        $dequeued = array_shift($queue);

        return view('queue.index', compact('queue', 'dequeued'));
    }
}

