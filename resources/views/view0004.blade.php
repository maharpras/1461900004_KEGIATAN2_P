<head>
    <meta name="viewport" content="width=device-width,
    initial-scale=1">
    <title>Data Buku - Kategori</title>
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
<a href="/buku0004" class="text-sm text-gray-700 underline">Data Buku</a>
    <body>
    <h3>Dwi Mahar Prasetya - 1461900004</h3>
    <h3>Data Buku </h3>
    <p>Cari Buku berdasarkan kategori:</p>
    <form action="/view0004/cari" method="GET">
    <input type="text" name="lihat" placeholder="Cari berdasarkan kategori.." value="{{ old('cari') }}">
    <input type="submit" value="CARI">
    </form>
        <div style="overflow-x:auto;">
            <table>
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Kode buku</th>
                        <th>Judul Buku</th>
                        <th>Jumlah Buku</th>
                        <th>Nama Kategori</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no=1; ?>
                    @foreach ($ms_buku as $buku)
                    <tr>
                        <td>{{$no++}}</td>
                        <td>{{$buku->kode_buku}}</td>
                        <td>{{$buku->judul_buku}}</td>
                        <td>{{$buku->jumlah_buku}}</td>
                        <td>{{$buku->nama_kategori}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </body>