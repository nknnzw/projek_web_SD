<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Kegiatan</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4">Data Kegiatan</h1>
        <a href="{{ route('kegiatan.create') }}" class="btn btn-primary mb-3">Tambah Kegiatan</a>

        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                {{ $message }}
            </div>
        @endif

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Media</th>
                    <th>Keterangan</th>
                    <th>Tanggal</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($kegiatans as $kegiatan)
                    <tr>
                        <td>
                            @if (strpos($kegiatan->media, '.mp4') !== false)
                                <video width="100" controls>
                                    <source src="{{ asset('media/' . $kegiatan->media) }}" type="video/mp4">
                                </video>
                            @else
                                <img src="{{ asset('media/' . $kegiatan->media) }}" width="100">
                            @endif
                        </td>
                        <td>{{ $kegiatan->keterangan }}</td>
                        <td>{{ $kegiatan->hari }}, {{ $kegiatan->tanggal }}-{{ $kegiatan->bulan }}-{{ $kegiatan->tahun }}</td>
                        <td>
                            <a href="{{ route('kegiatan.edit', $kegiatan->id) }}" class="btn btn-warning btn-sm">Edit</a>
                            <a href="{{ route('kegiatan.show', $kegiatan->id) }}" class="btn btn-info btn-sm">Show</a>
                            <form action="{{ route('kegiatan.destroy', $kegiatan->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
