<?php
include "koneksi.php";

$nim = $_GET['nim'];

$sql = "SELECT * FROM mahasiswa WHERE nim = '$nim' LIMIT 1";



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
    <title>Edit Mahasiswa</title>

    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="fontawesome/css/all.min.css" />
</head>

<body>

    <div class="container container-fluid">
        <div class="card">
            <div class="card-header">Edit Mahasiswa</div>

            <div class="card-body">
                <form action="update_mhs.php" method="POST">
                    <input type="hidden" class="form-control" name="nim_lama" id="nim_lama" value="<?= $mahasiswa['nim'] ?>" />

                    <div class="form-group">
                        <label for="nim">NIM <b class="text-danger">*</b></label>
                        <input type="text" class="form-control" name="nim" id="nim" required value="<?= $mahasiswa['nim'] ?>" />

                    </div>


                    <div class="form-group">
                        <label for="nama">Nama Mahasiswa <b class="text-danger">*</b></label>
                        <input type="text" class="form-control" name="nama" id="nama" required value="<?= $mahasiswa['nama'] ?>" />
                    </div>


                    <div class="form-group">
                        <label for="alamat">Alamat <b class="text-danger">*</b></label>
                        <input type="text" class="form-control" name="alamat" id="alamat" required value="<?= $mahasiswa['alamat'] ?>" />
                    </div>


                    <div class="form-group">
                        <label for="jurusan">Jurusan <b class="text-danger">*</b></label>
                        <input type="text" class="form-control" name="jurusan" id="jurusan" required value="<?= $mahasiswa['jurusan'] ?>" />
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