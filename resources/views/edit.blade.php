<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Buku Pinjaman</title>
</head>
<body>
    <form action="{{ route('buku.update', $buku->id) }}" method="post">
        @csrf
        @method('PUT')

        <label for= "namaPeminjam">Nama Peminjam</label>
        <input type="text" name="namaPeminjam" id="namaPeminjam" value="{{ $buku->namaPeminjam }}" required>
        <br>

        <label for= "namaBuku">Nama Buku</label>
        <input type="text" name="namaBuku" id="namaBuku" value="{{ $buku->namaBuku }}" required>
        <br>

        <label for= "jumlahBuku">Jumlah</label>
        <input type="text" name="jumlahBuku" id="jumlahBuku" value="{{ $buku->jumlahBuku }}" required>
        <br>

        <label for= "tanggalPinjam">Tanggal Pinjam</label>
        <input type="date" name="tanggalPinjam" id="tanggalPinjam" value="{{ $buku->tanggalPinjam }}" required>
        <br>

        <label for= "tanggalKembali">Tanggal Kembali</label>
        <input type="date" name="tanggalKembali" id="tanggalKembali" value="{{ $buku->tanggalKembali }}" required>
        <br>

        <label for= "denda">Denda</label>
        <input type="text" name="denda" id="denda" value="{{ $buku->denda }}">
        <br>

        <button type="submit">Ubah</button>
    </form>
</body>
</html>
