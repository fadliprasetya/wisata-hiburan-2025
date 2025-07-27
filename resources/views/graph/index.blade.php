<h2>Struktur Graph Wisata</h2>

@foreach($graph as $lokasi => $terhubung)
    <p><strong>{{ $lokasi }}</strong> terhubung ke:
        <ul>
        @foreach($terhubung as $t)
            <li>{{ $t }}</li>
        @endforeach
        </ul>
    </p>
@endforeach
