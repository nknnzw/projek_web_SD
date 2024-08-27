<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Prestasi</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4">Detail Prestasi</h1>

        <div class="form-group">
            <label for="foto">Foto</label><br>
            <img src="{{ asset('images/' . $prestasi->foto) }}" width="100">
        </div>

        <div class="form-group">
            <label for="nama">Nama</label>
            <p>{{ $prestasi->nama }}</p>
        </div>

        <div class="form-group">
            <label for="keterangan">Keterangan</label>
            <p>{{ $prestasi->keterangan }}</p>
        </div>

        <a href="{{ route('prestasi.index') }}" class="btn btn-secondary mt-3">Kembali</a>
    </div>
</body>
</html>
