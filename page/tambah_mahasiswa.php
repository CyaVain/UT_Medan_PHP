<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Tambah Mahasiswa</title>
</head>

<body>
    <div class="container">
        <form action="../dto/request/tambah_mahasiswa.php" method="POST">
            <div class="mb-3">
                <label for="kolom_nama" class="form-label">Nama Mahasiswa</label>
                <input type="text" class="form-control" name="nama" required>
                <div class="form-text">Masukkan Nama Mahasiswa</div>

                <label for="kolom_alamat" class="form-label">Alamat </label>
                <input type="text" class="form-control" name="alamat" required>
                <div class="form-text">Masukkan Kota Tempat Tinggal</div>

                <label for="kolom_umur" class="form-label">Usia</label>
                <input type="number" class="form-control" name="umur" required>
                <div class="form-text">Masukkan Usia Mahasiswa</div>
            </div>
            <button type="submit" name="create_mahasiswa" class="btn btn-primary">Submit</button>
        </form>
    </div>

</body>

</html>