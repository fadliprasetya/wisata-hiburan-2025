<h2>Simulasi Queue Wisata (FIFO)</h2>

<p><strong>Wisata yang dikeluarkan (dequeue):</strong> {{ $dequeued }}</p>

<ul>
    <h4>Sisa dalam Antrian:</h4>
    @foreach($queue as $item)
        <li>{{ $item }}</li>
    @endforeach
</ul>
