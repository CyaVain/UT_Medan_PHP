<?php
require ('config/app.php');
include ('service/tampil.php');
?>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>UT Medan</title>
</head>

</html>

<div class="container">
    <a href="page/tambah_mahasiswa.php">
        <button class="btn-primary my-2"> Tambah Data Mahasiswa</button>
    </a>
    <table class="table table-primary table-striped-columns">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Usia</th>
                <th>Opsi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $tampil = new tampil;
            $hasil = $tampil->TampilData();
            if ($hasil) {
                foreach ($hasil as $row) {
                    ?>
                    <tr>
                        <td>
                            <?= $row['id'] ?>
                        </td>
                        <td>
                            <?= $row['name'] ?>
                        </td>
                        <td>
                            <?= $row['address'] ?>
                        </td>
                        <td>
                            <?= $row['age'] ?>
                        </td>
                        <td>
                            <form action="dto/request/hapus_mahasiswa.php" method="POST">
                                <a href="">
                                    <button type=" submit" class="btn btn-danger" name="hapus_mahasiswa"
                                        value="<?= $row['id'] ?>">
                                        Hapus</button>
                                </a>
                            </form>
                        </td>
                    </tr>

                    <?php
                }
            } else {
                echo "Data Kosong";
            }
            ?>
        </tbody>
    </table>
</div>

</html>