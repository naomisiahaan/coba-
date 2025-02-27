<?php
// include database connection file 
include 'koneksi.php';

$nim = $_GET['nik'];

$result = mysqli_query($koneksi, "DELETE FROM pegawai WHERE nik = '$nik'");
header("Location:index.php");
