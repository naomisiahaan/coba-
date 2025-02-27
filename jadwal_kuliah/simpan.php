<?php
include 'koneksi.php';

$kode = $_POST['kode'];
$nama_dosen = $_POST['nama_dosen'];
$matkul= $_POST['matkul'];
$input = mysqli_query($koneksi,"INSERT INTO jadwal_kuliah VALUES('$kode','$nama_dosen','$matkul')") or die(mysql_error()); if($input){
    echo "Data Berhasil Disimpan"; header("location:index.php");
}else{
    echo "Gagal Disimpan";
}
?>
