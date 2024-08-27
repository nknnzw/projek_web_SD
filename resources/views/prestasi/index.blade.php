<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Prestasi</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4">Data Prestasi</h1>
        <a href="{{ route('prestasi.create') }}" class="btn btn-primary mb-3">Tambah Prestasi</a>

        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                {{ $message }}
            </div>
        @endif

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Foto</th>
                    <th>Nama</th>
                    <th>Keterangan</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($prestasis as $prestasi)
                    <tr>
                        <td><img src="{{ asset('images/' . $prestasi->foto) }}" width="100"></td>
                        <td>{{ $prestasi->nama }}</td>
                        <td>{{ $prestasi->keterangan }}</td>
                        <td>
                            <a href="{{ route('prestasi.edit', $prestasi->id) }}" class="btn btn-warning btn-sm">Edit</a>
                            <a href="{{ route('prestasi.show', $prestasi->id) }}" class="btn btn-info btn-sm">Show</a>
                            <form action="{{ route('prestasi.destroy', $prestasi->id) }}" method="POST" style="display:inline;">
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
