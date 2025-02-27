<?php

include "koneksi.php";

if (isset($_POST['submit'])) {


    $nim_lama = $_POST['nim_lama'];
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $jurusan = $_POST['jurusan'];


    $sql = "UPDATE `mahasiswa` SET `nim` = '$nim', `nama` = '$nama', `alamat` = '$alamat', `jurusan` = '$jurusan' WHERE nim = '$nim_lama'";

    $result = mysqli_query($koneksi, $sql) or die(mysqli_error($koneksi));


    if ($query) {
        echo "Data Berhasil diubah";

        header('Location:index.php');
    } else {
        echo "Data Gagal diubah";
    }
}
