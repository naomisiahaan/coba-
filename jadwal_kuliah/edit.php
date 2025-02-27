<?php
include "koneksi.php";

$kode = $_GET['kode'];

$sql = "SELECT * FROM jadwal_kuliah WHERE kode = '$kode' LIMIT 1";



$hasil_query = mysqli_query($koneksi, $sql);

if (mysqli_num_rows($hasil_query) != 1) {
    header('Location:index.php');
}

$jadwal_kuliah = mysqli_fetch_assoc($hasil_query);
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Jadwal Kuliah</title>

    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="fontawesome/css/all.min.css" />
</head>

<body>

    <div class="container container-fluid">
        <div class="card">
            <div class="card-header">Edit Jadwal Kuliah</div>

            <div class="card-body">
                <form action="update.php" method="POST">
                    <input type="hidden" class="form-control" name="kode_lama" id="kode_lama" value="<?= $jadwal_kuliah['kode'] ?>" />

                    <div class="form-group">
                        <label for="kode">KODE <b class="text-danger">*</b></label>
                        <input type="text" class="form-control" name="kode" id="kode" required value="<?= $jadwal_kuliah['kode'] ?>" />

                    </div>


                    <div class="form-group">
                        <label for="nama dosen">Nama Dosen <b class="text-danger">*</b></label>
                        <input type="text" class="form-control" name="nama dosen" id="nama dosen" required value="<?= $jadwal_kuliah['nama dosen'] ?>" />
                    </div>


                    <div class="form-group">
                        <label for="matkul">Matkul <b class="text-danger">*</b></label>
                        <input type="text" class="form-control" name="matkul" id="matkul" required value="<?= $jadwal_kuliah['matkul'] ?>" />
                    </div>


                    <div class="form-group mt-2">
                        <button class="btn btn-primary" type="submit" name="submit">Ubah</button>
                    </div>
                </form>

            </div>
        </div>
    </div>

    <script src="js/bootstrap.min.js"></script>
</body>

</html>