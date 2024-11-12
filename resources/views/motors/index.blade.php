<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Daftar Motor</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1 class="mt-5">Daftar Motor</h1>
        <a href="{{ route('motors.create') }}" class="btn btn-primary mb-3">Tambah Motor</a>
        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama Motor</th>
                    <th>Merk</th>
                    <th>Tahun</th>
                    <th>Harga</th>
                    <th>Deskripsi</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($motors as $motor)
                <tr>
                    <td>{{ $motor->id }}</td>
                    <td>{{ $motor->nama_motor }}</td>
                    <td>{{ $motor->merk }}</td>
                    <td>{{ $motor->tahun }}</td>
                    <td>{{ $motor->harga }}</td>
                    <td>{{ $motor->deskripsi }}</td>
                    <td>
                        <a href="{{ route('motors.edit', $motor->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('motors.destroy', $motor->id) }}" method="POST" style="display: inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Hapus</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
