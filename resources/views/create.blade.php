<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="{{route('buku.store')}}" method="post">
    @csrf

    <label for= "namaPeminjam">Nama Peminjam</label>
    <input type="text" name="namaPeminjam" id="namaPeminjam" required>
    <br>

    <label for= "namaBuku">Nama Buku</label>
    <input type="text" name="namaBuku" id="namaBuku" required>
    <br>
        
    <label for="jumlahBuku">Jumlah Buku</label>
    <input type="text" name="jumlahBuku" id="jumlahBuku" required>
    <br>

    <label for= "tanggalPinjam">Tanggal Pinjam</label>
    <input type="date" name="tanggalPinjam" id="tanggalPinjam" required>
    <br>

    <button type="submit">Tambah</button>

    </form>
</body>
</html>