<head>
    <meta name="viewport" content="width=device-width,
    initial-scale=1">
    <title>Data Pasien</title>
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
<body>
    <div style="overflow-x: auto">

    <a class="tambah" href="{{route( 'kamar.create')}}">
        Tambah Data </a>
        <table border="1">
            <thead>
                <tr>
                <th>No</th>
                <th>id_pasien</th>
                <th>id_dokter</th>
                <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $no=1; ?>
                @foreach ($kamar as $kamar)

                    <tr>
                        <td>{{$no++}}</td>
                        <td>{{$kamar->id_pasien}}</td>
                        <td>{{$kamar->id_dokter}}</td>
                        <td>
                            <a href="#">Edit </a>
                            |
                            <a href="#"> Hapus</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
