<?php
include 'koneksi.php';
$nidn = $_POST['nidn'];
$nama = $_POST['nama'];
$alamat= $_POST['alamat'];
$jabatan = $_POST['jabatan'];

$input = mysqli_query($koneksi,"INSERT INTO DOSEN VALUES('$nidn','$nama','$alamat','$jabatan')") or die(mysql_error()); if($input){
    echo "Data Berhasil Disimpan"; header("location:index_dsn.php");
}else{
    echo "Gagal Disimpan";
}
?>
