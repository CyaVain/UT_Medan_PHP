<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Hapus Mahasiswa</title>
</head>

<body>
    <div class="container">

        <?php
        include ("../../config/app.php");
        include_once ("../../service/hapus.php");

        if (isset ($_POST["hapus_mahasiswa"])) {
            $id = $_POST['hapus_mahasiswa'];

            $mahasiswa = new hapus;
            $hasil = $mahasiswa->hapusMahasiswa($id);

            if ($hasil) {
                echo "Mahasiswa Sukses Terhapus";
                ?>
                <br>
                <a href="../../index.php">
                    <button class="btn-primary my-2">Kembali Ke Halaman Utama</button>
                </a>
                <?php
            }
        }
        ?>
    </div>

</body>

</html>