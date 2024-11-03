<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('assets/css/styles.css') }}">
    <title>Document</title>
</head>
<body>
    
<h1>Peminjaman Buku</h1>
    <a href="{{route('buku.create')}}">Pinjam Buku</a>
    <ul>
        <table border="2">
            <thead>
                <tr>
                    <th>Nama Peminjam</th>
                    <th>Nama Buku</th>
                    <th>Jumlah</th>
                    <th>Tanggal Pinjam</th>
                    <th>Tanggal Kembali</th>
                    <th>Denda</th>
                    <th>Aksi</th>
                </tr>     
            </thead>
            <tbody>
                @foreach ($bukus as $buku)
                <tr>
                    <td>{{$buku->namaPeminjam}}</td>
                    <td>{{$buku->namaBuku}}</td>
                    <td>{{$buku->jumlahBuku}}</td>
                    <td>{{$buku->tanggalPinjam}}</td>
                    <td>{{$buku->tanggalKembali}}</td>
                    <td>Rp. {{$buku->denda}}</td>
                    
                    <td>
                        <a href = "{{route('buku.edit', $buku->id)}}">EDIT</a>
                        <form action="{{route('buku.destroy', $buku->id)}}"
                            method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Delete</button>
                        </form>
                    </td>
                </tr>     
                @endforeach
            </tbody>
        </table>
    </ul>
</body>
</html>