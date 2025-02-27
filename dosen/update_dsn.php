<?php

include "koneksi.php";

if (isset($_POST['submit'])) {


    $nim_lama = $_POST['nidn_lama'];
    $nim = $_POST['nidn'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $jurusan = $_POST['jabatan'];


    $sql = "UPDATE `dosen` SET `nidn` = '$nidn', `nama` = '$nama', `alamat` = '$alamat', `jabatan` = '$jabatan' WHERE nidn = '$nidn_lama'";

    $result = mysqli_query($koneksi, $sql) or die(mysqli_error($koneksi));


    if ($query) {
        echo "Data Berhasil diubah";

        header('Location:index_dsn.php');
    } else {
        echo "Data Gagal diubah";
    }
}
