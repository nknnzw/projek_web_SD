<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Kegiatan</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4">Detail Kegiatan</h1>

        <div class="form-group">
            <label for="media">Media</label><br>
            @if (strpos($kegiatan->media, '.mp4') !== false)
                <video width="100" controls>
                    <source src="{{ asset('media/' . $kegiatan->media) }}" type="video/mp4">
                </video>
            @else
                <img src="{{ asset('media/' . $kegiatan->media) }}" width="100">
            @endif
        </div>

        <div class="form-group">
            <label for="keterangan">Keterangan</label>
            <p>{{ $kegiatan->keterangan }}</p>
        </div>

        <div class="form-group">
            <label for="hari">Hari</label>
            <p>{{ $kegiatan->hari }}</p>
        </div>

        <div class="form-group">
            <label for="tanggal">Tanggal</label>
            <p>{{ $kegiatan->tanggal }}</p>
        </div>

        <div class="form-group">
            <label for="bulan">Bulan</label>
            <p>{{ $kegiatan->bulan }}</p>
        </div>

        <div class="form-group">
            <label for="tahun">Tahun</label>
            <p>{{ $kegiatan->tahun }}</p>
        </div>

        <a href="{{ route('kegiatan.index') }}" class="btn btn-secondary mt-3">Kembali</a>
    </div>
</body>
</html>
