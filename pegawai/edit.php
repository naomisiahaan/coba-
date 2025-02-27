<?php
include "koneksi.php";

$nim = $_GET['nik'];

$sql = "SELECT * FROM pegawai WHERE nik = '$nik' LIMIT 1";



$hasil_query = mysqli_query($koneksi, $sql);

if (mysqli_num_rows($hasil_query) != 1) {
    header('Location:index.php');
}

$mahasiswa = mysqli_fetch_assoc($hasil_query);
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Pegawai</title>

    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="fontawesome/css/all.min.css" />
</head>

<body>

    <div class="container container-fluid">
        <div class="card">
            <div class="card-header">Edit Pegawai</div>

            <div class="card-body">
                <form action="update.php" method="POST">
                    <input type="hidden" class="form-control" name="nik_lama" id="nik_lama" value="<?= $pegawai['nik'] ?>" />

                    <div class="form-group">
                        <label for="nik">NIK <b class="text-danger">*</b></label>
                        <input type="text" class="form-control" name="nik" id="nik" required value="<?= $pegawai['nik'] ?>" />

                    </div>


                    <div class="form-group">
                        <label for="nama">Nama Pegawai <b class="text-danger">*</b></label>
                        <input type="text" class="form-control" name="nama" id="nama" required value="<?= $pegawai['nama'] ?>" />
                    </div>


                    <div class="form-group">
                        <label for="bagian">Bagian <b class="text-danger">*</b></label>
                        <input type="text" class="form-control" name="bagian" id="bagian" required value="<?= $pegawai['bagian'] ?>" />
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