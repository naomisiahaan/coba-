<?php

include "koneksi.php";

if (isset($_POST['submit'])) {


    $nik_lama = $_POST['nik_lama'];
    $nik = $_POST['nik'];
    $nama = $_POST['nama'];
    $bagian = $_POST['bagian'];


    $sql = "UPDATE `PEGAWAI` SET `nik` = '$nik', `nama` = '$nama', `bagian` = '$bagian' WHERE nik = '$nik_lama'";

    $result = mysqli_query($koneksi, $sql) or die(mysqli_error($koneksi));


    if ($query) {
        echo "Data Berhasil diubah";

        header('Location:index.php');
    } else {
        echo "Data Gagal diubah";
    }
}
