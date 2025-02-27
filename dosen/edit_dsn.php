<?php
include "koneksi.php";

$nim = $_GET['nidn'];

$sql = "SELECT * FROM dosen WHERE nidn = '$nidn' LIMIT 1";



$hasil_query = mysqli_query($koneksi, $sql);

if (mysqli_num_rows($hasil_query) != 1) {
    header('Location:index_dsn.php');
}

$dosen = mysqli_fetch_assoc($hasil_query);
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Dosen</title>

    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="fontawesome/css/all.min.css" />
</head>

<body>

    <div class="container container-fluid">
        <div class="card">
            <div class="card-header">Edit Dosen</div>

            <div class="card-body">
                <form action="update_dsn.php" method="POST">
                    <input type="hidden" class="form-control" name="nidn_lama" id="nidn_lama" value="<?= $dosen['nidn'] ?>" />

                    <div class="form-group">
                        <label for="nidn">NIDN <b class="text-danger">*</b></label>
                        <input type="text" class="form-control" name="nidn" id="nidn" required value="<?= $dosen['nidn'] ?>" />

                    </div>


                    <div class="form-group">
                        <label for="nama">Nama Dosen <b class="text-danger">*</b></label>
                        <input type="text" class="form-control" name="nama" id="nama" required value="<?= $dosen['nama'] ?>" />
                    </div>


                    <div class="form-group">
                        <label for="alamat">Alamat <b class="text-danger">*</b></label>
                        <input type="text" class="form-control" name="alamat" id="alamat" required value="<?= $dosen['alamat'] ?>" />
                    </div>


                    <div class="form-group">
                        <label for="jurusan">Jabatan <b class="text-danger">*</b></label>
                        <input type="text" class="form-control" name="jabatan" id="jabatan" required value="<?= $dosen['jabatan'] ?>" />
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