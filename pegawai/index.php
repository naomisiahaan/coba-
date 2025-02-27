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


    <nav class="navbar navbar-expand-lg bg-primary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Politeknik XYZ</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Dashboard</a>
                    </li>
                </ul>

                <div class="d-flex">
                    <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>

                    </form>

                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" aria-disabled="true"><i class="fas fa-envelope-square mr-3"></i></a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" aria-disabled="true"><i class="fas fa-envelope-square mr-3"></i></a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" aria-disabled="true"><i class="fas fa-bell-slash mr-3"></i></a>
                        </li>


                        <li class="nav-item">
                            <a class="nav-link" aria-disabled="true"> <i class="fas fa-sign-out-alt mr-3"></i>
                            </a>
                        </li>


                    </ul>

                </div>
            </div>
        </div>
    </nav>



    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3 bg-dark pr-3 pt-4" style="height: 600px;">
                <ul class="nav flex-column ml-3 mb-5">
                    <li class="nav-item">
                        <a class="nav-link active text-white" href=""><i class="fas fa-tachometer-alt mr-2"> </i> Dashboard</a>
                        <hr class="bg-secondary">
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href=""><i class="fas fa-user-graduate mr-2"></i> Daftar Mahasiswa</a>
                        <hr class="bg-secondary"></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href=""><i class="fas fa-users mr-2"></i> Daftar Pegawai</a>
                        <hr class="bg-secondary">
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href=""><i class="far fa-calendar-alt mr-2"></i> Jadwal Kuliah</a>
                        <hr class="bg-secondary">
                    </li>
                </ul>
            </div>

            <div class="col-md-9 col-10 pr-3 pt-4" style="height: 600px;">



                <div class="card">
                    <div class="card-header">
                        <h1> Data Pegawai</h1>
                        <a href="tambah.php" class="btn btn-primary p-2 text-white float-right"><i class="fas fa-plus mr-2"></i>Tambah Data Pegawai</a>
                        <br>
</br>

                        </h1>
                    </div>

                    <div class="card-body">

                        <table class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th scope="col">NO</th>
                                    <th scope="col">NIK</th>
                                    <th scope="col">NAMA PEGAWAI</th>
                                    <th scope="col">BAGIAN</th>
                                    <th colspan="3" scope="col">OPSI</th>
                                </tr>
                            </thead>

                            <tbody>

                                <?php include "koneksi.php";
                                $sql = "SELECT * FROM pegawai";

                                $query = mysqli_query($koneksi, $sql);

                                if (mysqli_num_rows($query) < 1) : ?>
                                    <tr>
                                        <td colspan="100%">Tidak ada data yang ditemukan !</td>
                                    </tr>

                                <?php
                                endif;
                                foreach ($query as $key => $value) :
                                ?>

                                    <tr>
                                        <td><?= $key + 1 ?></td>
                                        <td><?= $value['NIK'] ?></td>
                                        <td><?= $value['NAMA'] ?></td>
                                        <td><?= $value['BAGIAN'] ?></td>
                                       
                                        <td>
                                            <a href="edit.php?nik=<?php echo $value['NIK']; ?>" class="btn btn-warning btn-sm p-2 text-white rounded"><i class="fas fa-edit mr-2"></i> Edit</a>
                                            <a href="hapus.php?nik=<?php echo $value['NIK']; ?>" class="btn btn-danger btn-sm p-2 text-white rounded"><i class="fas fa-trash-alt mr-2"></i> Hapus</a>
                                        </td>
                                    </tr>

                                <?php endforeach; ?>



                            </tbody>
                        </table>

                    </div>
                </div>
            </div>

        </div>
    </div>

    <footer class="sticky-bottom text-center bg-primary">
        <h3>Designed By : Politeknik XYZ</h3>
    </footer>

    <script src="js/bootstrap.min.js"></script>
</body>

</html>