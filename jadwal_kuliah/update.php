<?php

include "koneksi.php";

if (isset($_POST['submit'])) {


    $kode_lama = $_POST['kode_lama'];
    $kode = $_POST['kode'];
    $nama_dosen = $_POST['nama dosen'];
    $matkul = $_POST['matkul'];


    $sql = "UPDATE `JADWAL KULIAH` SET `kode` = '$kode', `nama dosen` = '$nama dosen', `matkul` = '$matkul' WHERE kode = '$kode_lama'";

    $result = mysqli_query($koneksi, $sql) or die(mysqli_error($koneksi));


    if ($query) {
        echo "Data Berhasil diubah";

        header('Location:index.php');
    } else {
        echo "Data Gagal diubah";
    }
}
