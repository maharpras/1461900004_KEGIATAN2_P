<head>
    <meta name="viewport" content="width=device-width,
    initial-scale=1">
    <title>Data Buku - Judul</title>
    <style>
    table {
    border-collapse: collapse;
    border-spacing: 0;
    width: 100%;
    border: 1px solid #ddd;
    }
    thead {
    background-color: #f2f2f2;
    }
    th, td {
    text-align: left;
    padding: 8px;
    }
    tr:nth-child(even){background-color: #f2f2f2}
    .tambah{
    padding: 8px 16px ;
    text-decoration: none;
    }
    </style>
</head>
<a href="/view0004" class="text-sm text-gray-700 underline">Select join</a>
    <body>
    <h3>Dwi Mahar Prasetya - 1461900004</h3>
    <h3>Data Buku</h3>
    <p>Cari Buku berdasarkan judul:</p>
    <form action="/buku0004/cari" method="GET">
    <input type="text" name="lihat" placeholder="Cari berdasarkan judul.." value="{{ old('cari') }}">
    <input type="submit" value="CARI">
    </form>
        <div style="overflow-x:auto;">
            <table>
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Kode buku</th>
                        <th>Kode Kategori</th>
                        <th>Kode Penerbit</th>
                        <th>Judul Buku</th>
                        <th>Jumlah Buku</th>
                        <th>Pengarang Buku</th>
                        <th>Tahun Terbit Buku</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no=1; ?>
                    @foreach ($ms_buku as $buku)
                    <tr>
                        <td>{{$no++}}</td>
                        <td>{{$buku->kode_buku}}</td>
                        <td>{{$buku->kode_kategori}}</td>
                        <td>{{$buku->kode_penerbit}}</td>
                        <td>{{$buku->judul_buku}}</td>
                        <td>{{$buku->jumlah_buku}}</td>
                        <td>{{$buku->pengarang_buku}}</td>
                        <td>{{$buku->tahun_terbit_buku}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </body>