<?php include "sidebar.php";?>

            <div class="col-md-9 col-10 pr-3 pt-4" style="height: 600px;">



                <div class="card">
                    <div class="card-header">
                        <h1> Data Mahasiswa</h1>
                        <a href="tambah_mhs.php" class="btn btn-primary p-2 text-white float-right"><i class="fas fa-plus mr-2"></i>Tambah Data Mahasiswa</a>
                        <br>
</br>
                        

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

                            <tbody>

                                <?php include "koneksi.php";
                                $sql = "SELECT * FROM mahasiswa";

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
                                        <td><?= $value['nim'] ?></td>
                                        <td><?= $value['nama'] ?></td>
                                        <td><?= $value['alamat'] ?></td>
                                        <td><?= $value['jurusan'] ?></td>
                                        <td>
                                            <a href="edit_mhs.php?nim=<?php echo $value['nim']; ?>" class="btn btn-warning btn-sm p-2 text-white rounded"><i class="fas fa-edit mr-2"></i> Edit</a>
                                            <a href="hapus_mhs.php?nim=<?php echo $value['nim']; ?>" class="btn btn-danger btn-sm p-2 text-white rounded"><i class="fas fa-trash-alt mr-2"></i> Hapus</a>
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