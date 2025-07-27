<h2>Struktur Tree Wisata Indonesia</h2>

<ul>
@foreach($tree as $negara => $pulau)
    <li><strong>{{ $negara }}</strong>
        <ul>
        @foreach($pulau as $namaPulau => $kota)
            <li>{{ $namaPulau }}
                <ul>
                @foreach($kota as $namaKota => $wisataList)
                    <li>{{ $namaKota }}
                        <ul>
                        @foreach($wisataList as $wisata)
                            <li>{{ $wisata }}</li>
                        @endforeach
                        </ul>
                    </li>
                @endforeach
                </ul>
            </li>
        @endforeach
        </ul>
    </li>
@endforeach
</ul>
