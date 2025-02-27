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
                <h1>JADWAL KULIAH</h1>
                <a href="tambah.php" class="btn btn-primary p-2 text-white float-right"><i
                        class="fas fa-plus mr-2"></i>Tambah Data Jadwal Kuliah</a>
                </h1>
            </div>

            <div class="card-body">

                <table class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th scope="col">NO</th>
                            <th scope="col">KODE</th>
                            <th scope="col">NAMA DOSEN</th>
                            <th scope="col">MATKUL</th>
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