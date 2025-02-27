<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin</title>

    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="fontawesome/css/all.min.css" />
</head>

<body>

<?php include "layout/navbar.php"; ?>




    <div class="container container-fluid mt-2">



        <div class="card">
            <div class="card-header">
                <h1> Data Mahasiswa</h1>
                <a href="tambah_mhs.php" class="btn btn-primary p-2 text-white float-right"><i
                        class="fas fa-plus mr-2"></i> Tambah Data Mahasiswa</a>
                </h1>
            </div>

            <div class="card-body">

                <table class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th scope="col">NO</th>
                            <th scope="col">NIM</th>
                            <th scope="col">NAMA MAHASISWA</th>
                            <th scope="col">ALAMAT</th>
                            <th scope="col">JURUSAN</th>
                            <th colspan="3" scope="col">AKSI</th>
                        </tr>
                    </thead>
                </table>

            </div>
        </div>
    </div>

    <script src="js/bootstrap.min.js"></script>
</body>

</html>