<?php
// include database connection file 
include 'koneksi.php';

$kode = $_GET['kode'];

$result = mysqli_query($koneksi, "DELETE FROM jadwal_kuliah WHERE kode = '$kode'");
header("Location:index.php");
