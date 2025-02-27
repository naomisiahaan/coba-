<?php
include 'koneksi.php';
$kode = $_GET['kode'];
$result = mysqli_query($koneksi, "SELECT * FROM jadwal_kuliah WHERE kode='$kode'"); while($user_data = mysqli_fetch_array($result))
{
    $nama_dosen = $user_data['nama dosen'];
    $matkul = $user_data['matkul'];
}

?>
<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
         <meta charset="utf-8">
         <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
         <!-- Bootstrap CSS -->
          <link rel="stylesheet" href="css/bootstrap.min.css" >
          <link rel="stylesheet" type="text/css" href="admin.css">
          <link rel="stylesheet" type="text/css" href="fontawesome/css/all.min.css">
          <title>ADMINISTRATOR</title>
        </head>
        <body>
            <nav class="navbar navbar-expand-lg navbar-light bg-warning fixed-top">
                <a class="navbar-brand" href="#">SELAMAT DATANG ADMIN</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data- target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria- label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <form class="form-inline my-2 my-lg-0 ml-auto">
                        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                    </form>
                    <div class="icon ml-4">
                        <h5>
                            <i class="fas fa-envelope-square mr-3"></i>
                            <i class="fas fa-bell-slash mr-3"></i>
                            <i class="fas fa-sign-out-alt mr-3"></i>
                        </h5>
                    </div>
                </div>
</nav>
<div class="row no-gutters mt-5">
<div class="col-md-2 bg-dark mt-2 pr-3 pt-4">
    <ul class="nav flex-column ml-3 mb-5">
        <li class="nav-item">
            <a class="nav-link active text-white" href=""><i class="fas fa-tachometer-alt mr- 2"></i>Dashboard</a><hr class="bg-secondary">
        </li>
        <li class="nav-item">
            <a class="nav-link text-white" href=""><i class="fas fa-user-graduate mr-2"></i>Daftar Mahasiswa</a><hr class="bg-secondary">
        </li>
        <li class="nav-item">
            <a class="nav-link text-white" href=""><i class="fas fa-chalkboard-teacher mr-2"></i>Daftar Dosen</a><hr class="bg-secondary">
        </li>
        <li class="nav-item">
        <a class="nav-link text-white" href="" ><i class="fas fa-users mr-2"></i>Daftar Pegawai</a><hr class="bg-secondary">
</li>
<li class="nav-item">
    <a class="nav-link text-white" href="" ><i class="far fa-calendar-alt mr-2"></i>Jadwal Kuliah</a><hr class="bg-secondary">
</li>
</ul>
</div>
<div class="col-md-10 p-5 pt-2">
    <h3><i class="fas fa-user-graduate mr-2"></i> Ubah Data Jadwal Kuliah</h3><hr>
    <form action="update.php" method="post">
        <div class="form-row">
            <div class="form-group col-md-4">
                <label >KODE</label>
                <input type="text" name="kode" class="form-control" id="kode" value=<?php echo $kode;?>>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-8">
                <label >NAMA DOSEN</label>
                <input type="text" name="nama dosen" class="form-control" id="nama dosen" value=<?php echo $nama_dosen;?>>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label >MATKUL</label>
                <input type="text" name="matkul" class="form-control" id="matkul" value=<?php echo $matkul;?>>
            </div>
        </div>
            <button type="submit" class="btn btn-primary">SIMPAN</button>
        </form>
    </div>
</div>
</body>
</html>




