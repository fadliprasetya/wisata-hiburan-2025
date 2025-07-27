<h2>Simulasi Stack Wisata (LIFO)</h2>

<p><strong>Wisata yang dikeluarkan (pop):</strong> {{ $popped }}</p>

<ul>
    <h4>Sisa dalam Stack:</h4>
    @foreach($stack as $item)
        <li>{{ $item }}</li>
    @endforeach
</ul>
