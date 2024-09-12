<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Pengumuman</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2>Create Pengumuman</h2>
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{ url('/pengumuman') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="nama_pengumuman">Nama Pengumuman</label>
                <input type="text" class="form-control" id="nama_pengumuman" name="nama_pengumuman" maxlength="100" required>
            </div>
            <div class="form-group">
                <label for="kuota">Kuota</label>
                <input type="number" class="form-control" id="kuota" name="kuota" max="99" required>
            </div>
            <div class="form-group">
                <label for="tanggal_batas_pendaftaran">Tanggal Batas Pendaftaran</label>
                <input type="date" class="form-control" id="tanggal_batas_pendaftaran" name="tanggal_batas_pendaftaran" required>
            </div>
            <div class="form-group">
                <label for="deskripsi">Deskripsi</label>
                <textarea class="form-control" id="deskripsi" name="deskripsi" rows="3" required></textarea>
            </div>
            <div class="form-group">
                <label for="penyelenggara">Penyelenggara</label>
                <input type="text" class="form-control" id="penyelenggara" name="penyelenggara" maxlength="50" required>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</body>
</html>


