<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Motor</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1 class="mt-5">Tambah Motor Baru</h1>

        <!-- Menampilkan pesan error validasi jika ada -->
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('motors.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="nama_motor">Nama Motor</label>
                <input type="text" class="form-control" id="nama_motor" name="nama_motor" value="{{ old('nama_motor') }}" required>
            </div>

            <div class="form-group">
                <label for="merk">Merk Motor</label>
                <input type="text" class="form-control" id="merk" name="merk" value="{{ old('merk') }}" required>
            </div>

            <div class="form-group">
                <label for="tahun">Tahun</label>
                <input type="number" class="form-control" id="tahun" name="tahun" value="{{ old('tahun') }}" required>
            </div>

            <div class="form-group">
                <label for="harga">Harga</label>
                <input type="number" class="form-control" id="harga" name="harga" value="{{ old('harga') }}" required>
            </div>

            <div class="form-group">
                <label for="deskripsi">Deskripsi</label>
                <textarea class="form-control" id="deskripsi" name="deskripsi">{{ old('deskripsi') }}</textarea>
            </div>

            <button type="submit" class="btn btn-success">Simpan</button>
            <a href="{{ route('motors.index') }}" class="btn btn-secondary">Kembali</a>
        </form>
    </div>
</body>
</html>
