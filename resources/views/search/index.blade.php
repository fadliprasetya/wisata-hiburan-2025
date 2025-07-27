<h2>Pencarian Wisata</h2>

<form method="GET" action="/searching">
    <input type="text" name="q" placeholder="Cari wisata..." value="{{ $keyword ?? '' }}">
    <button type="submit">Cari</button>
</form>

@if(isset($hasil))
    <h3>Hasil:</h3>
    <ul>
        @forelse($hasil as $w)
            <li>{{ $w }}</li>
        @empty
            <li>Tidak ditemukan.</li>
        @endforelse
    </ul>
@endif
